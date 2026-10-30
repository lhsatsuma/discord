/**
SQL to create all tables to database
PostgreSQL
 */
CREATE TABLE
   servers (
      id varchar(36) NOT NULL PRIMARY KEY,
      date_entered timestamp DEFAULT now (),
      date_modified timestamp DEFAULT now (),
      created_by varchar(255) NOT NULL DEFAULT 'SYSTEM',
      server varchar(255) NOT NULL,
      active boolean DEFAULT true,
      name varchar(255),
      server_config text NULL,
      CONSTRAINT server_id UNIQUE (server)
   );

CREATE TABLE
   server_members (
      id varchar(36) NOT NULL PRIMARY KEY,
      date_entered timestamp DEFAULT now (),
      date_modified timestamp DEFAULT now (),
      created_by varchar(255) NOT NULL DEFAULT 'SYSTEM',
      server varchar(255),
      user_id varchar(255),
      username varchar(255) NULL,
      birthdate date,
      CONSTRAINT unq_server_members UNIQUE (server, user_id),
      CONSTRAINT fk_server_members_server FOREIGN KEY (server) REFERENCES servers (server)
   );

CREATE TABLE
   hangman (
      id varchar(36) NOT NULL PRIMARY KEY,
      date_entered timestamp DEFAULT now (),
      date_modified timestamp DEFAULT now (),
      created_by varchar(255) NOT NULL DEFAULT 'SYSTEM',
      server varchar(36),
      user_id varchar(36),
      last_msg_id varchar(36),
      status varchar(255),
      word_json text,
      word varchar(255),
      win integer,
      letters text,
      guessed text,
      hints varchar(255),
      CONSTRAINT fk_hangman_server_members FOREIGN KEY (server, user_id) REFERENCES server_members (server, user_id)
   );

CREATE TABLE
   tic_tac_toe (
      id varchar(36) NOT NULL PRIMARY KEY,
      date_entered timestamp DEFAULT now (),
      date_modified timestamp DEFAULT now (),
      created_by varchar(255) NOT NULL DEFAULT 'SYSTEM',
      server varchar(255),
      user_id varchar(255),
      against varchar(36) NOT NULL,
      status varchar(255),
      win varchar(36),
      level varchar(255),
      played_spots text,
      CONSTRAINT fk_tic_tac_toe_server_members FOREIGN KEY (server, user_id) REFERENCES server_members (server, user_id)
   );

CREATE TABLE
   jankenpon (
      id varchar(36) NOT NULL PRIMARY KEY,
      date_entered timestamp DEFAULT now (),
      date_modified timestamp DEFAULT now (),
      created_by varchar(255) NOT NULL DEFAULT 'SYSTEM',
      server varchar(255),
      user_id varchar(255) NOT NULL,
      played_rock integer DEFAULT 0,
      played_scissors integer DEFAULT 0,
      played_paper integer DEFAULT 0,
      win_rock integer DEFAULT 0,
      win_scissors integer DEFAULT 0,
      win_paper integer DEFAULT 0,
      lose_rock integer DEFAULT 0,
      lose_scissors integer DEFAULT 0,
      lose_paper integer DEFAULT 0,
      draw_rock integer DEFAULT 0,
      draw_scissors integer DEFAULT 0,
      draw_paper integer DEFAULT 0,
      CONSTRAINT fk_jankenpon_server FOREIGN KEY (server) REFERENCES servers (server)
   );

CREATE TABLE
   memes (
      id varchar(36) NOT NULL PRIMARY KEY,
      date_entered timestamp DEFAULT now (),
      date_modified timestamp DEFAULT now (),
      created_by varchar(255) NOT NULL DEFAULT 'SYSTEM',
      server varchar(255),
      order_id integer,
      name varchar(255),
      url varchar(255),
      counter integer DEFAULT 1500,
      CONSTRAINT fk_jdv_server FOREIGN KEY (server) REFERENCES servers (server)
   );

CREATE TABLE
   pickup_lines (
      id varchar(36) NOT NULL PRIMARY KEY,
      date_entered timestamp DEFAULT now (),
      date_modified timestamp DEFAULT now (),
      created_by varchar(255) default 'SYSTEM',
      locale varchar(10) not null,
      server varchar(255),
      content text,
      CONSTRAINT fk_jdv_server FOREIGN KEY (server) REFERENCES servers (server)
   );

INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-75d8-9d00-da315030fe73','pt-BR','Minha terra tem palmeiras, onde canta o sabiá e eu quero saber, que horas a gente vai se beijar.'),
	 ('01a18def-1bf8-7b18-821a-95d4c799f1c7','pt-BR','Se estivéssemos em um naufrágio, eu deixaria você subir na porta comigo.'),
	 ('01a18def-1bf8-70ec-881c-5853409bdc18','pt-BR','Quando vou vê-la novamente? Já faz uma hora desde que nos conhecemos.'),
	 ('01a18def-1bf8-75a7-b39c-02bd7558b8ab','pt-BR','Que perfume é esse que você passa e fica com cheiro de amor da minha vida?'),
	 ('01a18def-1bf8-7aa6-aef0-7ddd3d238352','pt-BR','Você deve estar cansado, né? Porque passou a noite toda na minha cabeça.'),
	 ('01a18def-1bf8-74f3-b837-47aa0c56142a','pt-BR','Me chama de urna eletrônica e me dá seu voto de confiança.'),
	 ('01a18def-1bf8-7bfe-a0d1-a596fc908b09','pt-BR','Desculpa ter ligado para você pelo WhatsApp. Eu só gostaria de abrir sua foto de perfil para ver se era dólar ou euro, porque real não pode ser.'),
	 ('01a18def-1bf8-7e63-aa41-f5c3b8f23604','pt-BR','Mudei de operadora, meu plano agora é construir um futuro com você.'),
	 ('01a18def-1bf8-7874-9880-36b747546f03','pt-BR','Você é um empréstimo bancário? Porque você tem meu interesse.'),
	 ('01a18def-1bf8-76d1-8a20-432cb4a6dcc2','pt-BR','Estou te vendo online e olha que já passou da hora de bebê dormir, hein!');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-74ea-ab34-d78c247b4c6a','pt-BR','Faz que nem álbum: cola em mim e me completa!'),
	 ('01a18def-1bf8-7378-b603-6de3249b8184','pt-BR','Vontade de fazer aquilo que começa com S: ser o amor da sua vida!'),
	 ('01a18def-1bf8-7cc6-bacd-dde99191572d','pt-BR','É verdade que você tem duas línguas na boca? Não?! Então, que tal ter?'),
	 ('01a18def-1bf8-7042-889c-e6aed661e763','pt-BR','Meu nome é muito grande, melhor você me chamar só de “amor”.'),
	 ('01a18def-1bf8-743c-bae7-e51ebb752da3','pt-BR','Tem certeza de que você não é um extraterrestre? Porque você abduziu o meu coração.'),
	 ('01a18def-1bf8-70aa-bfec-7d467520664c','pt-BR','Existe um vazio no meu coração que tem as suas medidas. Quer fazer igual ao MST e ocupar?'),
	 ('01a18def-1bf8-7fca-a2d4-0beb787a4bea','pt-BR','Se você quiser eu quero, se não quiser, era só brincadeira.'),
	 ('01a18def-1bf8-780d-b659-5b73631afe2a','pt-BR','\"Agente\" junto é erro de português, mas a gente separado é erro do destino.'),
	 ('01a18def-1bf8-7404-9941-56d0caaa5709','pt-BR','O açougueiro vende carne, o sorveteiro vende sorvete. O padeiro vende pão e você, vem de zap?'),
	 ('01a18def-1bf8-74d2-871f-cdc523e5e39e','pt-BR','Nossa, estou sentindo uma dor no peito, espero que seja amor. Porque, se for infarto, eu nunca mais vou ver você.');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-7d4e-b84e-b77efcabd2bc','pt-BR','Fiquei surpreso quando você me disse \"oi\"... Achava que gata só falava \"miau\".'),
	 ('01a18def-1bf8-7f88-ab8b-e8f929287424','pt-BR','Você aceita namorar comigo ou vou ter que mentir no meu diário?'),
	 ('01a18def-1bf8-778b-842b-4b5b2f4b12e9','pt-BR','Pronto, estou aqui! Quais são os seus outros dois desejos?'),
	 ('01a18def-1bf8-7754-900c-e21e53b3e600','pt-BR','Apoio demais esse casal: um tal de eu e você!'),
	 ('01a18def-1bf8-737f-bd8e-95cb313a2cca','pt-BR','Eu perdi o número do meu telefone… Me empresta o seu?'),
	 ('01a18def-1bf8-7b59-9d72-0a7660c25232','pt-BR','Meu amor por você é igual obra do governo: nunca acaba!'),
	 ('01a18def-1bf8-72a8-bc60-3360e7df0081','pt-BR','Vamos nos beijar até o brasileiro criar consciência de classe.'),
	 ('01a18def-1bf8-720a-8b6d-5caa4cc944f4','pt-BR','Você deve comer Photoshop no café da manhã para ser tão linda assim!'),
	 ('01a18def-1bf8-7fd8-a6b5-66c5bbe87b0b','pt-BR','Você é sempre gostosa assim ou hoje está fantasiada de lasanha?'),
	 ('01a18def-1bf8-7299-a163-ccde9b4f2e63','pt-BR','Você não é Napoleão, mas ocupou bonaparte do meu coração.');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-7377-beee-ca29bd407ba0','pt-BR','Você não é terremoto, mas abalou minhas estruturas.'),
	 ('01a18def-1bf8-7a7f-9c26-f455094c6895','pt-BR','O que um perfeito cavalheiro como eu está fazendo sem o seu número de telefone?'),
	 ('01a18def-1bf8-774d-9276-4f43eced4783','pt-BR','A economia grega anda tão ruim assim? Afinal, até um deus grego como você veio morar aqui!'),
	 ('01a18def-1bf8-7e4a-8ff1-ac2ea9373c27','pt-BR','Não preciso ser vidente para saber que o meu futuro é você.'),
	 ('01a18def-1bf8-7dc8-83a1-88a55af89d2b','pt-BR','Mamãe fez um doce delícia pra você provar, o nome dele é EU.'),
	 ('01a18def-1bf8-706c-964d-9c4b745e4986','pt-BR','Estou fazendo uma campanha de doação de órgãos! Não quer doar seu coração para mim?'),
	 ('01a18def-1bf8-753b-88d9-81e2aa8510ee','pt-BR','É muito ruim conversar pelo WhatsApp. E se a gente morar junto para facilitar?'),
	 ('01a18def-1bf8-770c-8fc4-37299dc6231c','pt-BR','O crime só compensa se for para roubar uns beijos seus.'),
	 ('01a18def-1bf8-7ab8-95a9-649825b11cd4','pt-BR','Sou péssimo com idiomas, mas quero conhecer uma língua nova: a sua!'),
	 ('01a18def-1bf8-7854-b963-87a7178f31a2','pt-BR','Me chama de Natal que eu te mostro o que é noite feliz.');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-79ef-b6a2-966563ddabd5','pt-BR','Quando a sua mãe dizia que queria o melhor para você, ela estava falando de mim, só para avisar.'),
	 ('01a18def-1bf8-7a78-97ba-edafcb64f5ac','pt-BR','Tem alguma coisa errada com o meu celular. Não consigo encontrar o seu número nele...'),
	 ('01a18def-1bf8-7b1a-ad2c-b1aff15bb44a','pt-BR','Um mês atrás eu era apaixonado por você. E parece que estamos no mês passado ainda!'),
	 ('01a18def-1bf8-7d88-a992-9ad411e1ead4','pt-BR','Se meu coração fosse o Titanic, você certamente seria o Iceberg.'),
	 ('01a18def-1bf8-7148-ab4b-f35839533dcd','pt-BR','Você é como um dicionário: acrescenta significado à minha vida!'),
	 ('01a18def-1bf8-7a52-94ed-c4f0b74c8ad9','pt-BR','Com licença, você teria um amigo em comum que pudesse nos apresentar?'),
	 ('01a18def-1bf8-79b3-a0a4-bad8460368eb','pt-BR','Está calor, né? Mas não é de hoje que eu me derreto por você.'),
	 ('01a18def-1bf8-71dc-8f3b-ffbc47dddae0','pt-BR','Eu vou te dar um beijo. Se não gostar, me devolve, tá?'),
	 ('01a18def-1bf8-705b-bfc5-eb684056edde','pt-BR','Você não é o dinheiro perdido no bolso do casaco, mas fiquei muito feliz de te encontrar!'),
	 ('01a18def-1bf8-7e56-99ae-da830ead6c1d','pt-BR','Estou sentindo solidão, mas poderia estar sentindo a sua boca na minha, né...');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-76d1-b5cf-01fd31b4bb53','pt-BR','Se você fosse uma atualização no meu status eu te dava um curtir, mas não compartilhava com ninguém.'),
	 ('01a18def-1bf8-792c-aae1-9cb8f7046037','pt-BR','Ontem eu queria te beijar, hoje eu estou igual ontem.'),
	 ('01a18def-1bf8-7dc3-a342-d1c82cd0f9c1','pt-BR','Aqui, me esquentando com os lençóis, mas gostaria mesmo é de estar me esquentando com você!'),
	 ('01a18def-1bf8-7ec8-9035-7a6ce27eea65','pt-BR','Não sou sua internet, mas estou caidinha por você.'),
	 ('01a18def-1bf8-70e7-b87d-93dfed40d457','pt-BR','Será que você tem um coração extra? Porque o meu já foi roubado.'),
	 ('01a18def-1bf8-741e-b14c-5ac819ac22cd','pt-BR','Igual a você, nem o Google encontra.'),
	 ('01a18def-1bf8-7bc9-9e71-305ea4be2743','pt-BR','Queria muito te dar um presente, mas não sei como embrulhar um beijo. Alguma dica?'),
	 ('01a18def-1bf8-7f56-86ab-1e47a48eb957','pt-BR','Sabe onde eu estou? Na sua!'),
	 ('01a18def-1bf8-7598-b1e3-419d1793610c','pt-BR','Oi, a minha cama está querendo saber se você está a fim de dormir com a gente...'),
	 ('01a18def-1bf8-7728-a908-d5b6be496c8e','pt-BR','Não precisa acender a luz pra ficar claro que eu quero você.');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-76b8-b4e4-33ecb797303f','pt-BR','Eu sei que as coisas não estão fáceis para você, mas eu estou!'),
	 ('01a18def-1bf8-7058-9b04-9746a635a029','pt-BR','Eu até ficaria comigo mesmo, mas vou deixar essa oportunidade para você...'),
	 ('01a18def-1bf8-732d-8b76-080d51394bef','pt-BR','Pulei na água até o umbigo, então, quer ficar comigo?'),
	 ('01a18def-1bf8-752f-be31-d50c90a85a25','pt-BR','Não sei fazer doces, mas dizem que o meu beijinho é o melhor. Quer provar?'),
	 ('01a18def-1bf8-7c45-b5d9-66f76b01a19a','pt-BR','Eu só posso estar com problema de visão, porque eu não vejo a hora de te dar uns pegas.'),
	 ('01a18def-1bf8-7333-9abd-bd049c4608de','pt-BR','Vai beijar quantas bocas erradas até perceber que a certa é a minha?'),
	 ('01a18def-1bf8-7dd4-bad1-2ec0c51967f2','pt-BR','Ouvi dizer que você gosta de gatos. Que tal me dar uma chance?'),
	 ('01a18def-1bf8-76f2-9b1e-ff1f8575f417','pt-BR','Hoje é segunda, mas você ainda é a minha primeira opção.'),
	 ('01a18def-1bf8-7e68-987e-a237f4c53f5e','pt-BR','Eu não posso me beijar, mas você pode. Reflita!'),
	 ('01a18def-1bf8-7737-88c0-7fdf1741e329','pt-BR','Para de curtir as minhas fotos e vem curtir a minha boca.');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-7f46-aa75-5b92fda734e5','pt-BR','A fila andou, mas se você quiser furar, você pode.'),
	 ('01a18def-1bf8-7450-b8ae-59ef120a299d','pt-BR','Você já cometeu tantos erros na sua vida, o que custa eu ser mais um?'),
	 ('01a18def-1bf8-7039-a146-6646e50b8fdd','pt-BR','O que eu sinto por você só pode ser motorista, porque passageiro não é.'),
	 ('01a18def-1bf8-7047-9841-14bf7a734bc0','pt-BR','Estado civil: esperando você me dar uma chance.'),
	 ('01a18def-1bf8-757e-aa37-2d0084dbfe64','pt-BR','Nem PT, nem PSDB. Eu quero é VCBB.'),
	 ('01a18def-1bf8-7795-ad41-3929b2006768','pt-BR','Me chama de telefone que, com você, eu perco a linha.'),
	 ('01a18def-1bf8-755a-ab98-b4374289e3e2','pt-BR','Seu nome é wi-fi? Porque eu estou sentindo a conexão.'),
	 ('01a18def-1bf8-77ef-9796-1b44bababc22','pt-BR','Eu não sou plano de saúde, mas se você quiser, eu acabo com a sua carência.'),
	 ('01a18def-1bf8-7a6b-b140-44522a0c9fde','pt-BR','Desculpe, eu não já fiquei com você antes? Não?! Então, vamos dar um jeito nisso!'),
	 ('01a18def-1bf8-75a5-9995-a965752cf53c','pt-BR','Tem uma pessoa aí querendo muito dar uns beijos na sua boca, mas não vou falar quem sou.');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-7bc3-a063-e1583d990989','pt-BR','Você não é asteroide, mas que corpo celeste você tem!'),
	 ('01a18def-1bf8-7597-92e9-65f555ae75db','pt-BR','Minha mãe disse que encontrou a pessoa ideal para mim. É você?'),
	 ('01a18def-1bf8-7153-9282-8ee170402688','pt-BR','Então, além de me deixar sem ar, o que mais você faz?'),
	 ('01a18def-1bf8-7517-8ade-6e204662884e','pt-BR','Onde é que eu deixo meu currículo para concorrer à vaga de amor da sua vida?'),
	 ('01a18def-1bf8-7497-b339-bfbc4ff7f199','pt-BR','Se você está aqui, quem está gerenciando o céu?'),
	 ('01a18def-1bf8-79eb-ba72-29d332b70b69','pt-BR','Se você fosse um lanche, seu nome seria X-Princesa!'),
	 ('01a18def-1bf8-7197-a60b-e759d7249f31','pt-BR','Hoje é o seu aniversário, mas quero é dar parabéns aos seus pais por terem feito essa obra de arte!'),
	 ('01a18def-1bf8-7944-b862-984b2113229c','pt-BR','Não me formei em cardiologia, mas quero cuidar do seu coração.'),
	 ('01a18def-1bf8-776e-ae91-a4bd6e35a53a','pt-BR','Me chama de demaquilante e deixa eu tirar o seu batom!'),
	 ('01a18def-1bf8-7081-a59c-4cab22926956','pt-BR','Você sabe estacionar? Porque tem uma vaga para você no meu coração.');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-7251-a409-645f2deb313b','pt-BR','Você não é semáforo, mas é de parar o trânsito!'),
	 ('01a18def-1bf8-79f8-bda9-44b063ab4c8d','pt-BR','Você não é o ovo que faltava na minha marmita. Você é o filé mignon!'),
	 ('01a18def-1bf8-7e7e-b683-e1f88bf82e4f','pt-BR','Você tem GPS? Porque eu queria saber o caminho para a sua boca.'),
	 ('01a18def-1bf8-76b3-a555-3c6fa76dd87f','pt-BR','Eu não sou manteiga de cacau, mas adoraria amaciar seus lábios.'),
	 ('01a18def-1bf8-7b3b-a404-1ce04dcd947d','pt-BR','Não sou cimento, mas com você eu quero algo concreto.'),
	 ('01a18def-1bf8-7cb7-b103-dcd6db580270','pt-BR','Se você fosse um refrigerante, seria Soda, porque no meu coração \"Soda você.\"'),
	 ('01a18def-1bf8-7fa6-8735-1621a6e578a9','pt-BR','Você não é a Garota de Ipanema, mas é a coisa mais linda e cheia de graça que já vi.'),
	 ('01a18def-1bf8-7952-934f-40d4b318e1c2','pt-BR','Me passa o seu Instagram? Meu pai disse que eu devo seguir o meu sonho.'),
	 ('01a18def-1bf8-731a-91df-ab9b74ba3ad5','pt-BR','Não sou veterinário ou biólogo, mas sei reconhecer uma gatinha quando vejo.'),
	 ('01a18def-1bf8-7b23-9e41-f6f5140184c6','pt-BR','Não sou biscoito, mas eu adoraria ser seu passatempo, sua linda!');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-7153-b6f5-c115eb319af9','pt-BR','https://i.pinimg.com/236x/af/b2/61/afb261603180408262dc7324d8f17ddb.jpg'),
	 ('01a18def-1bf8-7028-9f68-8006f06bd0af','pt-BR','https://i.pinimg.com/236x/77/b4/05/77b405f2d93691a372ec76874761d689.jpg'),
	 ('01a18def-1bf8-7b31-af34-7e2b74809594','pt-BR','https://i.pinimg.com/236x/dd/e1/61/dde1614c669d024fdb79b73162575e70.jpg'),
	 ('01a18def-1bf8-7215-955f-4fde8bbf15b8','pt-BR','https://i.pinimg.com/236x/c8/62/9d/c8629d07b4185e9e512d3e5264158b1b.jpg'),
	 ('01a18def-1bf8-79f6-9602-d9591e870171','pt-BR','https://i.pinimg.com/236x/5b/14/26/5b14265d266608def354db63fe20ee15.jpg'),
	 ('01a18def-1bf8-7e72-9598-6fc860193f1c','pt-BR','https://i.pinimg.com/236x/30/7b/c1/307bc145ccfcd362edc07f0a3821c814.jpg'),
	 ('01a18def-1bf8-752d-acba-d7d512a6c228','pt-BR','https://i.pinimg.com/236x/4c/6a/e5/4c6ae52b18a5efd961fae16b9ce3e904.jpg'),
	 ('01a18def-1bf8-70eb-ab10-5346c8b15c38','pt-BR','https://i.pinimg.com/236x/48/7e/fa/487efa0f7929a8cba02af3a32442f4ac.jpg'),
	 ('01a18def-1bf8-76b0-b288-ad83894b281b','pt-BR','https://i.pinimg.com/236x/60/bd/bb/60bdbb17cff25a5b43cbcb49a96a5559.jpg'),
	 ('01a18def-1bf8-7807-8f8d-67f2c4ab1a66','pt-BR','https://i.pinimg.com/236x/e6/c3/93/e6c3937465ccb772366cb03bda07f87d.jpg');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-79c2-aaa6-a2e108e8b88a','pt-BR','https://i.pinimg.com/236x/45/a6/de/45a6de6453b658353b7eda2a9aeebb6a.jpg'),
	 ('01a18def-1bf8-7f34-adc4-aff5279f55c6','pt-BR','https://i.pinimg.com/236x/e3/33/c6/e333c65ae3477fd688e86128e34bb324.jpg'),
	 ('01a18def-1bf8-758d-a677-57577f54ad6c','pt-BR','https://i.pinimg.com/236x/9c/31/5d/9c315d96cb03e3c79982d32cd7aac4f0.jpg'),
	 ('01a18def-1bf8-749e-a1ed-61c36e886765','pt-BR','https://i.pinimg.com/236x/db/06/be/db06bec1dfd6034254fb3ddacced1e73.jpg'),
	 ('01a18def-1bf8-7c05-80f6-2456f33dbf18','pt-BR','https://i.pinimg.com/236x/bb/aa/93/bbaa93421323c8c80c7a4382dbe7a84a.jpg'),
	 ('01a18def-1bf8-7553-b079-004df4472d68','pt-BR','https://i.pinimg.com/236x/9a/73/c4/9a73c464439b0a1c59ccb7d6e4bede93.jpg'),
	 ('01a18def-1bf8-7b90-a95a-8cb1735efe15','pt-BR','https://i.pinimg.com/236x/ff/a2/de/ffa2de19179d718879a1317ceb3f8465.jpg'),
	 ('01a18def-1bf8-7903-83c6-c5330141bb46','pt-BR','https://i.pinimg.com/236x/49/87/d7/4987d78b21fb285af0b0d7a3924ecb6d.jpg'),
	 ('01a18def-1bf8-7606-a68d-9ff23337657c','pt-BR','https://i.pinimg.com/236x/1e/86/bc/1e86bc2804dc47568acf6dfb1531ab2c.jpg'),
	 ('01a18def-1bf8-7fe4-b92f-a836a7fbb543','pt-BR','https://i.pinimg.com/236x/d5/e5/2a/d5e52abbaa3d34129169b7776a82eba9.jpg');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-73f3-b199-9587bffebf31','pt-BR','Gata, eu não sou o Yoshi, mas daria minha vida por você'),
	 ('01a18def-1bf8-74c0-8351-755c6e2a1aba','pt-BR','Gata desliga esse firewall e me deixa entrar em você'),
	 ('01a18def-1bf8-7701-a0fe-a196e24bbcee','pt-BR','Você não é o Charmander, mas é sempre a minha primeira escolha'),
	 ('01a18def-1bf8-7a89-bee6-fff86f12d7b6','pt-BR','Você conhece o Mario? Então vem ser minha Peach!'),
	 ('01a18def-1bf8-76a0-910d-1cfa81bfde32','pt-BR','Meu amor é igual level no Tibia, infinito.'),
	 ('01a18def-1bf8-7cf6-8e10-81f25d6f1d4e','pt-BR','Você não é o Death Note, mas também causa ataque cardíaco.'),
	 ('01a18def-1bf8-7db1-833c-e7de4062f841','pt-BR','Você vai receber a carta de Hogwarts, porque o que você faz com o meu coração só pode ser bruxaria.'),
	 ('01a18def-1bf8-7774-9acb-451b3be49080','pt-BR','Quando eu te vi até joguei fora o meu Memory Card, você é inesquecível.'),
	 ('01a18def-1bf8-75da-b158-8cb5f70d23c4','pt-BR','Não sou o Stephen King, mas meu coração fica iluminado quando você olha pra mim.'),
	 ('01a18def-1bf8-7a23-8c8b-94e2471c1dd8','pt-BR','Meu sonho era ser o Batman para que você me chamasse sempre que precisasse de alguém. Como não tenho bat-sinal vem de zap!');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-79cf-9e7c-e93f6cae7574','pt-BR','Não sei sua composição corporal, mas chutaria lítio, neodímio, oxigênio e carbono. Sabe por quê? Porque você é Li-Nd-O-NA.'),
	 ('01a18def-1bf8-7d44-96ad-e96cc9d14bbc','pt-BR','Você não é Tesseract, entretanto é a única pessoa capaz de abrir as portas do meu coração.'),
	 ('01a18def-1bf8-7101-80c2-214c9ffe3104','pt-BR','Quando eu te vi deu tela azul'),
	 ('01a18def-1bf8-7f9d-9754-8c9d17f6d9da','pt-BR','Eu sei que não sou herói da DC, mas você com certeza é porque olha… Que Maravilha;'),
	 ('01a18def-1bf8-7fb4-b633-cb9bb8459edc','pt-BR','Nosso amor é de outro mundo, porque mesmo fora da gravidade da Terra, eu ainda ficaria caidinho por você.'),
	 ('01a18def-1bf8-7873-93fe-d477e3048ae5','pt-BR','Você tem MSN? Não? Ah então serve seu WhatsApp mesmo.'),
	 ('01a18def-1bf8-7159-b3cb-7f8e1e7ce557','pt-BR','Me chama de Ash Ketchum que eu te mostro meu Pikachu.'),
	 ('01a18def-1bf8-7557-bf42-f38e89330998','pt-BR','Entre Star Wars e Star Trek, eu prefiro mesmo é você.'),
	 ('01a18def-1bf8-7eb4-bafb-30dce7b954ef','pt-BR','https://i.pinimg.com/236x/10/7f/60/107f60effd0bfededda2634aef0ec54d.jpg'),
	 ('01a18def-1bf8-7a05-a69e-5461e48821cf','pt-BR','https://i.pinimg.com/236x/4b/76/c3/4b76c353638bda52c156bd4fdc8d19f3.jpg');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-7298-9a06-f37a53343e20','pt-BR','Se meu coração fosse o Titanic, você certamente seria o Iceberg'),
	 ('01a18def-1bf8-7168-9aa2-72eebed12e95','pt-BR','https://i.pinimg.com/236x/e9/f9/7e/e9f97e28ffec46361c2cf1b7fbdc6f2e.jpg'),
	 ('01a18def-1bf8-7f6a-a11f-adef9f8845da','pt-BR','https://i.pinimg.com/236x/4b/f5/c9/4bf5c9f5c463984b053fcf5f9bf488e4.jpg'),
	 ('01a18def-1bf8-75f7-9da1-00a470cbbf5d','pt-BR','https://i.pinimg.com/236x/2b/65/10/2b6510388fb0cd9b1b092f4b38a4421e.jpg'),
	 ('01a18def-1bf8-7446-8fe5-ba44ff3e1edb','pt-BR','https://i.pinimg.com/236x/57/05/64/57056417e0520f1ea772accd77d6c37d.jpg'),
	 ('01a18def-1bf8-75ab-8be0-34c9386ca292','pt-BR','https://i.pinimg.com/236x/c7/ed/e4/c7ede47966397ed793f8c7e01cf7bf6b.jpg'),
	 ('01a18def-1bf8-764e-bf87-e677f11ba9c0','pt-BR','https://i.pinimg.com/236x/5a/3c/f7/5a3cf70b5f2cafa64913fab1ec8c47cf.jpg'),
	 ('01a18def-1bf8-7e77-b7cb-7ad77b782727','pt-BR','https://i.pinimg.com/236x/94/af/dc/94afdc2584ae049969a17d4950304427.jpg'),
	 ('01a18def-1bf8-7c8b-a413-d4457333f424','pt-BR','https://i.pinimg.com/236x/b7/62/9a/b7629a045d38611bb4181643a18daf30.jpg'),
	 ('01a18def-1bf8-77f0-89b2-fcf24adf96a5','pt-BR','https://i.pinimg.com/236x/9f/2c/f8/9f2cf885b31a69f890a482ad7861015e.jpg');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-7bb2-a09e-817a6dd21392','pt-BR','https://i.pinimg.com/236x/7b/3e/df/7b3edf6ea4132ae47921eb54c6497757.jpg'),
	 ('01a18def-1bf8-7c79-bcf7-51821cad6d1f','pt-BR','https://i.pinimg.com/236x/cb/bf/74/cbbf7441867bfdc0e9c8f127944e26a8.jpg'),
	 ('01a18def-1bf8-79f8-8ebe-1a0aa6df8341','pt-BR','https://i.pinimg.com/236x/dd/40/8d/dd408d3f186f92ec96feb6f541f0df06.jpg'),
	 ('01a18def-1bf8-778e-8e02-38a8ff8d966c','pt-BR','https://i.pinimg.com/236x/b4/3b/ae/b43bae070680e5a07ac7f5519c39ae82.jpg'),
	 ('01a18def-1bf8-7826-8d43-87f047ddd336','pt-BR','https://i.pinimg.com/564x/67/d2/2a/67d22a5ca85b49f9047b1b437eb059fd.jpg'),
	 ('01a18def-1bf8-7dee-971c-6412cdc1d3dd','pt-BR','https://i.pinimg.com/564x/dc/78/53/dc7853bbe92b0275bd2b9305c87f9238.jpg'),
	 ('01a18def-1bf8-7bc3-b01e-6aa84ac5ff18','pt-BR','https://i.pinimg.com/564x/ec/62/9a/ec629ab5f7291bbc966931b72e5ce471.jpg'),
	 ('01a18def-1bf8-75cd-8dcd-e8927b7deb34','pt-BR','https://i.pinimg.com/564x/1d/57/6d/1d576da1a32f2d7908dda93cb625e236.jpg'),
	 ('01a18def-1bf8-7844-a06c-bbf0c4d15a39','pt-BR','https://i.pinimg.com/564x/ee/39/0e/ee390ebb554f313065de9204363df4bc.jpg'),
	 ('01a18def-1bf8-75d3-b648-7705796be2fa','pt-BR','https://i.pinimg.com/564x/0d/a5/1f/0da51fe8be711b408b1f8dd60d551206.jpg');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-79aa-b7b2-98fb7d3f8b80','pt-BR','https://i.pinimg.com/564x/08/43/84/08438483f012efab3e48f9a139d6bc95.jpg'),
	 ('01a18def-1bf8-7812-9da5-2a518cdf5d51','pt-BR','https://i.pinimg.com/564x/50/04/c7/5004c7778f6b7b515239baeb3081493c.jpg?b=t'),
	 ('01a18def-1bf8-7342-8966-b887e19ed73a','pt-BR','https://i.pinimg.com/564x/0b/fb/b3/0bfbb33873105f57c15d9c42d9c804d7.jpg?b=t'),
	 ('01a18def-1bf8-7888-89bd-79f357760f4e','pt-BR','https://i.pinimg.com/564x/61/63/73/616373f8912b243ee323954fef68aae6.jpg?b=t'),
	 ('01a18def-1bf8-76cf-b2cb-8dbdfcddecbf','pt-BR','https://64.media.tumblr.com/86f73e49dfefa4096697c57cd477fc15/tumblr_pfef8wMloB1t2wwfu_500.jpg'),
	 ('01a18def-1bf8-7353-9b08-5401875fc69a','pt-BR','https://i.pinimg.com/236x/5e/6a/78/5e6a7891e0e8968664f3a1e79711a005.jpg'),
	 ('01a18def-1bf8-740d-ae0e-9dc9f367afe3','pt-BR','https://i.pinimg.com/236x/96/c2/43/96c243e833e7d62e58c32dfd6bb10e0c.jpg'),
	 ('01a18def-1bf8-7877-9877-e2e84018113d','pt-BR','https://i.pinimg.com/236x/44/ec/da/44ecda27841efa284c6bd5aee5000d83.jpg'),
	 ('01a18def-1bf8-7d12-8a8c-61215ebb9a02','pt-BR','https://cdn.dicionariopopular.com/imagens/cantada-90.jpg'),
	 ('01a18def-1bf8-7e3d-9bf2-54b8b93b4126','pt-BR','https://cdn.dicionariopopular.com/imagens/cantada-10.jpg');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-7174-803c-d4c17db26fe2','pt-BR','https://cdn.dicionariopopular.com/imagens/cantada-20.jpg'),
	 ('01a18def-1bf8-7bf2-abcb-fb962e1aaf25','pt-BR','https://cdn.dicionariopopular.com/imagens/cantada-30.jpg'),
	 ('01a18def-1bf8-79de-a6ed-de11b20d3d2f','pt-BR','https://cdn.dicionariopopular.com/imagens/cantada-40.jpg'),
	 ('01a18def-1bf8-76b5-a298-6423b1f00cc0','pt-BR','https://cdn.dicionariopopular.com/imagens/cantada-50.jpg'),
	 ('01a18def-1bf8-703d-9344-bb5013c04f5f','pt-BR','https://cdn.dicionariopopular.com/imagens/cantada-60.jpg'),
	 ('01a18def-1bf8-7fe3-9835-3f19d57563de','pt-BR','Não sou de esquerda nem direita, sou seu'),
	 ('01a18def-1bf8-7aef-8632-65259c86c919','pt-BR','Me passa o seu Instagram? Meu pai disse que eu devo seguir o meu sonho'),
	 ('01a18def-1bf8-77eb-935d-9723ffac8512','pt-BR','Gata, me chama de impeachment e vem sentar no meu Collor'),
	 ('01a18def-1bf8-70af-96ab-29bc4ae8e00c','pt-BR','Vamos fazer uma operação lava-jato lá no meu chuveiro?'),
	 ('01a18def-1bf8-7c92-aeb2-8edcfc390b50','pt-BR','Desculpa ter te ligado pelo whatsapp. Eu só queria abrir sua foto de perfil pra ver se era dólar porque real não pode ser');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-76a8-aa5c-9357a0576bf3','pt-BR','Gata, já que você concorda com o liberalismo: libera pra mim?'),
	 ('01a18def-1bf8-71f7-a065-ea0fb9cff1df','pt-BR','Gata, você não é manifestação mas parou o meu coração'),
	 ('01a18def-1bf8-7f7b-85b4-8efa596f5cb6','pt-BR','Estou fazendo uma campanha de doação de órgãos! Não quer doar seu coração pra mim?'),
	 ('01a18def-1bf8-7c73-b20d-127060249765','pt-BR','Aposto um beijo que você me dá um fora'),
	 ('01a18def-1bf8-7fce-9500-ec4299ecf156','pt-BR','Você não é pescoço mas mexeu com a minha cabeça!'),
	 ('01a18def-1bf8-7fef-b425-eb150ae7ae62','pt-BR','Gata, você é tão linda que quando você nasceu a sua mãe não te deu apenas a luz, ela te deu a companhia de energia toda'),
	 ('01a18def-1bf8-7270-a5d4-625298a73a8a','pt-BR','O que você acha de uma transa tão intensa que vai mudar suas opiniões políticas?'),
	 ('01a18def-1bf8-7faf-93f9-71edda6d1eed','pt-BR','Me leve para a cama ou me perca para sempre'),
	 ('01a18def-1bf8-7a8e-8f42-04fb23409ee3','pt-BR','O que foi? Eu não mordo, sabe? Só se me pedirem'),
	 ('01a18def-1bf8-7fac-a401-aa142f28eb50','pt-BR','Eu morreria em um filme do Tarantino por você');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-7756-9305-6e960d41da11','pt-BR','Posso te levar para uma odisseia no espaço?'),
	 ('01a18def-1bf8-7061-a7e9-fb10e25ae371','pt-BR','Eu não tenho mãos de tesoura mas meus dedos também fazem mágica'),
	 ('01a18def-1bf8-7355-b2fc-2a63e134190a','pt-BR','Posso te fazer uma massagem nos pés?'),
	 ('01a18def-1bf8-72f1-873b-8eb932d1530c','pt-BR','Gata, eu vim do futuro para te dizer que você perdeu a chance de me beijar uma vez, não perca de novo'),
	 ('01a18def-1bf8-7cbd-949d-faa9d1007237','pt-BR','Me falaram que um homem que não se dedica a família jamais será um homem de verdade. Posso virar um homem com você?'),
	 ('01a18def-1bf8-7878-b6b0-11f31c070b9d','pt-BR','Você não é marte, mas eu estou perdido em você”“Eu não sou o pikachu, mas prometo que quando eu te beijar vai ser chocante'),
	 ('01a18def-1bf8-7632-bf10-613732125926','pt-BR','Nem a mais potente placa de vídeo seria capaz de reproduzir os gráficos de sua beleza'),
	 ('01a18def-1bf8-70be-b31d-7f181f048c9a','pt-BR','Existe Star Wars e Star Trek, mas eu só penso em Star com você'),
	 ('01a18def-1bf8-754c-bc1d-e8b1d1aa37a3','pt-BR','Eu não sou a força mas eu quero estar sempre com você, sua linda'),
	 ('01a18def-1bf8-71a4-a595-9e1e38211ece','pt-BR','Loki pode ter um exército, os Vingadores podem ter o Hulk mas para mim o que importa é ter você');
INSERT INTO pickup_lines (id,locale,"content") VALUES
	 ('01a18def-1bf8-7160-8238-2b5b68295d04','pt-BR','Gata você não é esfera do dragão, mas eu me mataria pra te pegar'),
	 ('01a18def-1bf8-74ff-9e42-47233e5838db','pt-BR','Você é tão linda que se fosse um arquivo de extensão, seria .HOT'),
	 ('01a18def-1bf8-7513-9a21-e46d8d56ecf6','pt-BR','Você conhece o feitiço Petrificus Totalus? Porque você me deixou duro'),
	 ('01a18def-1bf8-73a3-ab3e-af88c330c92f','pt-BR','Definitivamente, eu não sou o Gollum, mas você certamente é a minha preciosa'),
	 ('01a18def-1bf8-7d73-b322-4773aab2cae8','pt-BR','A varinha escolhe o bruxo e a minha escolheu você'),
	 ('01a18def-1bf8-72f0-9032-b6836d4b124b','pt-BR','Gata, posso invadir sua jungle?'),
	 ('01a18def-1bf8-79a9-8db9-96ae35340037','pt-BR','Eu não sou a Shireen, mas você tá me fazendo pegar fogo'),
	 ('01a18def-1bf8-7faf-94e0-0fa15787446d','pt-BR','Você é eletricista? Porque você iluminou o meu dia.'),
	 ('01a18def-1bf8-7575-b1a1-fc17e1d71787','pt-BR','Se beleza fosse flor, você seria o Jardim Botânico!"');
