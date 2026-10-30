/**
  SQL to create all tables to database
  PostgreSQL
 */
CREATE TABLE servers (
   id varchar(36) NOT NULL PRIMARY KEY,
   date_entered timestamp DEFAULT now(),
   date_modified timestamp DEFAULT now(),
   server varchar(255) NOT NULL,
   active boolean DEFAULT true,
   name varchar(255),
   server_config text NULL,
   CONSTRAINT server_id UNIQUE (server)
);

CREATE TABLE server_members (
    id varchar(36) NOT NULL PRIMARY KEY,
    date_entered timestamp DEFAULT now(),
    date_modified timestamp DEFAULT now(),
    server varchar(255),
    user_id varchar(255),
    username varchar(255) NULL,
    birthdate date,
    CONSTRAINT unq_server_members UNIQUE (server, user_id),
    CONSTRAINT fk_server_members_server FOREIGN KEY (server) REFERENCES servers (server)
);

CREATE TABLE hangman (
     id varchar(36) NOT NULL PRIMARY KEY,
     date_entered timestamp DEFAULT now(),
     date_modified timestamp DEFAULT now(),
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

CREATE TABLE tic_tac_toe (
   id varchar(36) NOT NULL PRIMARY KEY,
   date_entered timestamp DEFAULT now(),
   date_modified timestamp DEFAULT now(),
   server varchar(255),
   user_id varchar(255),
   against varchar(36) NOT NULL,
   status varchar(255),
   win varchar(36),
   level varchar(255),
   played_spots text,
   CONSTRAINT fk_tic_tac_toe_server_members FOREIGN KEY (server, user_id) REFERENCES server_members (server, user_id)
);

CREATE TABLE jankenpon (
   id varchar(36) NOT NULL PRIMARY KEY,
   date_entered timestamp DEFAULT now(),
   date_modified timestamp DEFAULT now(),
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


CREATE TABLE memes (
   id varchar(36) NOT NULL PRIMARY KEY,
   date_entered timestamp DEFAULT now(),
   date_modified timestamp DEFAULT now(),
   server varchar(255),
   order_id integer,
   name varchar(255),
   url varchar(255),
   counter integer DEFAULT 1500,
   CONSTRAINT fk_jdv_server FOREIGN KEY (server) REFERENCES servers (server)
);