const BeanBase = require('../utils/Bean.js');
class BeanForca extends BeanBase
{
	constructor()
	{
		super();

		this.dbh.table = 'forca';
        this.fields = {
            id: {
                type: 'id',
            },
            date_entered: {
                type: 'datetime',
            },
            date_modified: {
                type: 'datetime',
            },
            user_id: {
                type: 'varchar',
            },
            last_msg_id: {
                type: 'varchar',
            },
            status: {
                type: 'varchar',
            },
            palavra: {
                type: 'varchar'
            },
            word_json: {
                type: 'json',
            },
            win: {
                type: 'int',
            },
            letras: {
                type: 'json',
            },
            guessed: {
                type: 'json',
            },
            dicas: {
                type: 'json',
            },
        };
        this.options = {
            'thumb': 'http://www.cjdinfo.com.br/images/diversao/forca/vazia.png',
        };
        this.letras = [];
        this.dicas = [];
        this.guessed = [];
        this.chances_left = 6;
        this.palavra = '';
	}

    mountFieldsObj(vals)
    {
        super.mountFieldsObj(vals);
    }

    setNewWord()
    {
        const words = getUtils().requireAgain(process.cwd() + '/uploads/forca.json');
        const word = getUtils().array_rand(words);
        this.word_json = word;
        this.palavra = word.palavra;
        this.dicas = [];
        this.letras = [];
        this.chances_left = word.chances;
        return this.palavra;
    }

    mountSpots(force = false)
    {
        let str = "";
        for (let i = 0; i < this.palavra.length; i++) {
            let char = this.palavra.charAt(i);
            if(char == ' '){
                str += ':blue_square: ';
            }else if(char == '-'){
                str += ' **-** ';
            }else if(force || this.letras.indexOf(char) !== -1){
                str += ':regional_indicator_'+char.toLowerCase()+': ';
            }else{
                str += ':white_square_button: ';
            }
        }
        return str;
    }

    mountHints()
    {
        let str = "";
        for(let i=0;i<this.word_json.dicas.length;i++){
            let tip = i + 1;
            str += ((i > 0) ? "\n\n" : "") + "Hint number "+tip +": ";
            if(typeof this.dicas[i] !== 'undefined'){
                str += this.word_json.dicas[i];
            }else{
                str += ":grey_question: :grey_question: :grey_question:";
            }
        }
        return str;
    }

    tryLetter(letter)
    {
        if(this.letras.indexOf(letter) == -1) {
            this.letras.push(letter);
        }

        this.recountChances();
        return this.recountChances();
    }

    tryGuess(word)
    {
        this.guessed.push(word);
        return this.recountChances();
    }

    checkWinLose()
    {
        let status_return = '';
        if(this.chances_left <= 0){
            this.win = 0;
            this.status = 'done';
            status_return = 'lose';
        }else {

            //Check if winned by guessing all the letters
            let win_letter = true;
            for(let j=0;j<this.palavra.length;j++){
                if(this.letras.indexOf(this.palavra[j]) == -1 && this.palavra[j] != ' ' && this.palavra[j] != '-'){
                    win_letter = false;
                }
            }
            if(win_letter){
                this.win = 1;
                this.status = 'done';
                status_return = 'win';
            }else {
                //Check if winned by word guessing
                this.guessed.forEach((word_guessed) => {
                    if (word_guessed == this.palavra) {
                        this.win = 1;
                        this.status = 'done';
                        status_return = 'win';
                    }
                });
            }
        }

        return status_return;
    }

    recountChances()
    {
        this.chances_left = this.word_json.chances;

        if(this.letras.length){
            this.letras.forEach((letter) => {
                if(this.palavra.indexOf(letter) == -1){
                    this.chances_left--;
                }
            });
        }

        if(this.chances_left && !!this.guessed){
            this.guessed.forEach((word_guessed) => {
                if(word_guessed !== this.palavra){
                    this.chances_left--;
                }
            });
        }

        return this.checkWinLose();
    }
    giveHint()
    {
        let gived = false;
        this.word_json.dicas.forEach((hint, idx) => {
            if(this.dicas.indexOf(idx) == -1 && !gived){
                this.dicas.push(idx);
                gived = true;
                return;
            }
        });
        return gived;
    }
}

module.exports = BeanForca;