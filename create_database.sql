/**
  SQL to create all tables to database
  MariaDB
 */

CREATE TABLE `servers` (
   `id` varchar(36) NOT NULL PRIMARY KEY ,
   `date_entered` datetime DEFAULT NULL,
   `date_modified` datetime DEFAULT NULL,
   `server` varchar(255) NOT NULL,
   `active` boolean DEFAULT true,
   `name` varchar(255),
   `channels_birthday` TEXT NULL,
   CONSTRAINT server_id UNIQUE (server)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `server_members` (
    `id` varchar(36) NOT NULL PRIMARY KEY ,
    `date_entered` datetime DEFAULT NULL,
    `date_modified` datetime DEFAULT NULL,
    `server` varchar(255),
    `user_id` varchar(255),
    `username` varchar(255) NULL,
    `birthdate` date,
    CONSTRAINT unq_server_members UNIQUE (server, user_id),
    CONSTRAINT fk_server_members_server FOREIGN KEY (server) REFERENCES servers (server)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `hangman` (
     `id` varchar(36) NOT NULL PRIMARY KEY ,
     `date_entered` datetime DEFAULT NULL,
     `date_modified` datetime DEFAULT NULL,
     `server` varchar(36) DEFAULT NULL,
     `user_id` varchar(36) DEFAULT NULL,
     `last_msg_id` varchar(36) DEFAULT NULL,
     `status` varchar(255) DEFAULT NULL,
     `word_json` text DEFAULT NULL,
     `word` varchar(255) DEFAULT NULL,
     `win` int(11) DEFAULT NULL,
     `letters` text DEFAULT NULL,
     `guessed` text DEFAULT NULL,
     `hints` varchar(255) DEFAULT NULL,
     CONSTRAINT fk_hangman_server_members FOREIGN KEY (server, user_id) REFERENCES server_members (server, user_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `tic_tac_toe` (
   `id` varchar(36) NOT NULL PRIMARY KEY ,
   `date_entered` datetime DEFAULT NULL,
   `date_modified` datetime DEFAULT NULL,
   `server` varchar(255) DEFAULT NULL,
   `user_id` varchar(255) DEFAULT NULL,
   `against` varchar(36) NOT NULL,
   `status` varchar(255) DEFAULT NULL,
   `win` varchar(36) DEFAULT NULL,
   `level` varchar(255) DEFAULT NULL,
   `played_spots` text DEFAULT NULL,
   CONSTRAINT fk_tic_tac_toe_server_members FOREIGN KEY (server, user_id) REFERENCES server_members (server, user_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `jankenpon` (
   `id` varchar(36) NOT NULL PRIMARY KEY ,
   `date_entered` datetime DEFAULT NULL,
   `date_modified` datetime DEFAULT NULL,
   `server` varchar(255) DEFAULT NULL,
   `user_id` varchar(255) DEFAULT NULL,
   `played_rock` int(11) DEFAULT NULL,
   `played_scissors` int(11) DEFAULT NULL,
   `played_paper` int(11) DEFAULT NULL,
   `win_rock` int(11) DEFAULT NULL,
   `win_scissors` int(11) DEFAULT NULL,
   `win_paper` int(11) DEFAULT NULL,
   `lose_rock` int(11) DEFAULT NULL,
   `lose_scissors` int(11) DEFAULT NULL,
   `lose_paper` int(11) DEFAULT NULL,
   `draw_rock` int(11) DEFAULT NULL,
   `draw_scissors` int(11) DEFAULT NULL,
   `draw_paper` int(11) DEFAULT NULL,
   CONSTRAINT fk_jankenpon_server FOREIGN KEY (server) REFERENCES servers (server)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `memes` (
   `id` varchar(36) NOT NULL PRIMARY KEY ,
   `date_entered` datetime DEFAULT NULL,
   `date_modified` datetime DEFAULT NULL,
   `server` varchar(255),
   `order_id` INT(11),
   `name` varchar(255),
   `url` varchar(255),
   `counter` INT(11) DEFAULT 1500,
   CONSTRAINT fk_jdv_server FOREIGN KEY (server) REFERENCES servers (server)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;