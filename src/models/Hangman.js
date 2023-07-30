const BeanBase = require('../utils/Bean.js');
class BeanHangman extends BeanBase
{
	constructor()
	{
		super();

		this.dbh.table = 'hangman';
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
            server: {
                type: 'varchar',
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
            word: {
                type: 'varchar'
            },
            word_json: {
                type: 'json',
            },
            win: {
                type: 'int',
            },
            letters: {
                type: 'json',
            },
            guessed: {
                type: 'json',
            },
            hints: {
                type: 'json',
            },
        };
        this.options = {
            'thumb': 'http://www.cjdinfo.com.br/images/diversao/forca/vazia.png',
        };
        this.letters = [];
        this.hints = [];
        this.guessed = [];
        this.chances_left = 6;
        this.word = '';
	}

    mountFieldsObj(vals)
    {
        super.mountFieldsObj(vals);
    }

    setNewWord()
    {
        const words = getUtils().requireAgain(process.cwd() + '/uploads/hangman.json');
        const word = getUtils().array_rand(words);
        this.word_json = word;
        this.word = word.word;
        this.hints = [];
        this.letters = [];
        this.chances_left = word.chances;
        return this.word;
    }

    mountSpots(force = false)
    {
        let str = "";
        for (let i = 0; i < this.word.length; i++) {
            let char = this.word.charAt(i);
            if(char == ' '){
                str += ':blue_square: ';
            }else if(char == '-'){
                str += ' **-** ';
            }else if(force || this.letters.indexOf(char) !== -1){
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
        for(let i=0;i<this.word_json.hints.length;i++){
            let tip = i + 1;
            str += ((i > 0) ? "\n\n" : "") + "Hint number "+tip +": ";
            if(typeof this.hints[i] !== 'undefined'){
                str += this.word_json.hints[i];
            }else{
                str += ":grey_question: :grey_question: :grey_question:";
            }
        }
        return str;
    }

    tryLetter(letter)
    {
        if(this.letters.indexOf(letter) == -1) {
            this.letters.push(letter);
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
            for(let j=0;j<this.word.length;j++){
                if(this.letters.indexOf(this.word[j]) == -1 && this.word[j] != ' ' && this.word[j] != '-'){
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
                    if (word_guessed == this.word) {
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

        if(this.letters.length){
            this.letters.forEach((letter) => {
                if(this.word.indexOf(letter) == -1){
                    this.chances_left--;
                }
            });
        }

        if(this.chances_left && !!this.guessed){
            this.guessed.forEach((word_guessed) => {
                if(word_guessed !== this.word){
                    this.chances_left--;
                }
            });
        }

        return this.checkWinLose();
    }
    giveHint()
    {
        let gived = false;
        this.word_json.hints.forEach((hint, idx) => {
            if(this.hints.indexOf(idx) == -1 && !gived){
                this.hints.push(idx);
                gived = true;
                return;
            }
        });
        return gived;
    }
}

module.exports = BeanHangman;