/**
SQL to create all tables to database
PostgreSQL
 */

CREATE TABLE admin_channels (
	id varchar(36) NOT NULL,
	date_entered timestamp DEFAULT now() NULL,
	date_modified timestamp DEFAULT now() NULL,
	created_by varchar(255) DEFAULT 'SYSTEM'::character varying NULL,
	"server" varchar(255) NOT NULL,
	channel_id varchar(255) NOT NULL,
	CONSTRAINT admin_channels_channel_id_not_null NOT NULL channel_id,
	CONSTRAINT admin_channels_id_not_null NOT NULL id,
	CONSTRAINT admin_channels_pkey PRIMARY KEY (id),
	CONSTRAINT admin_channels_server_not_null NOT NULL server,
	CONSTRAINT admin_channels_unique UNIQUE (server, channel_id),
	CONSTRAINT fk_admin_channels_server FOREIGN KEY ("server") REFERENCES servers("server")
);

CREATE TABLE public.birthday_channels (
	id varchar(36) NOT NULL,
	date_entered timestamp DEFAULT now() NULL,
	date_modified timestamp DEFAULT now() NULL,
	created_by varchar(255) DEFAULT 'SYSTEM'::character varying NULL,
	"server" varchar(255) NOT NULL,
	channel_id varchar(255) NOT NULL,
	CONSTRAINT birthday_channels_channel_id_not_null NOT NULL channel_id,
	CONSTRAINT birthday_channels_id_not_null NOT NULL id,
	CONSTRAINT birthday_channels_pkey PRIMARY KEY (id),
	CONSTRAINT birthday_channels_server_not_null NOT NULL server,
	CONSTRAINT birthday_channels_unique UNIQUE (server, channel_id),
	CONSTRAINT fk_birthday_channels_server FOREIGN KEY ("server") REFERENCES public.servers("server")
);

CREATE TABLE public.hangman (
	id varchar(36) NOT NULL,
	date_entered timestamp DEFAULT now() NULL,
	date_modified timestamp DEFAULT now() NULL,
	created_by varchar(255) DEFAULT 'SYSTEM'::character varying NOT NULL,
	"server" varchar(36) NULL,
	user_id varchar(36) NULL,
	last_msg_id varchar(36) NULL,
	status varchar(255) NULL,
	word_json text NULL,
	word varchar(255) NULL,
	win int4 NULL,
	letters text NULL,
	guessed text NULL,
	hints varchar(255) NULL,
	CONSTRAINT hangman_created_by_not_null NOT NULL created_by,
	CONSTRAINT hangman_id_not_null NOT NULL id,
	CONSTRAINT hangman_pkey PRIMARY KEY (id),
	CONSTRAINT hangman_unique UNIQUE (server, user_id),
	CONSTRAINT fk_hangman_server_members FOREIGN KEY ("server",user_id) REFERENCES public.server_members("server",user_id)
);

CREATE TABLE public.jankenpon (
	id varchar(36) NOT NULL,
	date_entered timestamp DEFAULT now() NULL,
	date_modified timestamp DEFAULT now() NULL,
	created_by varchar(255) DEFAULT 'SYSTEM'::character varying NOT NULL,
	"server" varchar(255) NULL,
	user_id varchar(255) NOT NULL,
	played_rock int4 DEFAULT 0 NULL,
	played_scissors int4 DEFAULT 0 NULL,
	played_paper int4 DEFAULT 0 NULL,
	win_rock int4 DEFAULT 0 NULL,
	win_scissors int4 DEFAULT 0 NULL,
	win_paper int4 DEFAULT 0 NULL,
	lose_rock int4 DEFAULT 0 NULL,
	lose_scissors int4 DEFAULT 0 NULL,
	lose_paper int4 DEFAULT 0 NULL,
	draw_rock int4 DEFAULT 0 NULL,
	draw_scissors int4 DEFAULT 0 NULL,
	draw_paper int4 DEFAULT 0 NULL,
	CONSTRAINT jankenpon_created_by_not_null NOT NULL created_by,
	CONSTRAINT jankenpon_id_not_null NOT NULL id,
	CONSTRAINT jankenpon_pkey PRIMARY KEY (id),
	CONSTRAINT jankenpon_unique UNIQUE (server, user_id),
	CONSTRAINT jankenpon_user_id_not_null NOT NULL user_id,
	CONSTRAINT fk_jankenpon_server FOREIGN KEY ("server") REFERENCES public.servers("server")
);

CREATE TABLE public.jokes (
	id varchar(36) NOT NULL,
	date_entered timestamp DEFAULT now() NULL,
	date_modified timestamp DEFAULT now() NULL,
	created_by varchar(255) DEFAULT 'SYSTEM'::character varying NULL,
	locale varchar(10) NOT NULL,
	"server" varchar(255) NULL,
	"content" text NULL,
	CONSTRAINT jokes_id_not_null NOT NULL id,
	CONSTRAINT jokes_locale_not_null NOT NULL locale,
	CONSTRAINT jokes_pkey PRIMARY KEY (id),
	CONSTRAINT fk_jokes_server FOREIGN KEY ("server") REFERENCES public.servers("server")
);
CREATE INDEX jokes_locale_idx ON public.jokes USING btree (locale, server);

CREATE TABLE public.memes (
	id varchar(36) NOT NULL,
	date_entered timestamp DEFAULT now() NULL,
	date_modified timestamp DEFAULT now() NULL,
	created_by varchar(255) DEFAULT 'SYSTEM'::character varying NOT NULL,
	"server" varchar(255) NULL,
	order_id int4 NULL,
	description varchar(255) NULL,
	"content" varchar(255) NULL,
	CONSTRAINT memes_created_by_not_null NOT NULL created_by,
	CONSTRAINT memes_id_not_null NOT NULL id,
	CONSTRAINT memes_pkey PRIMARY KEY (id),
	CONSTRAINT memes_unique UNIQUE (server, order_id),
	CONSTRAINT fk_memes_server FOREIGN KEY ("server") REFERENCES public.servers("server")
);

CREATE TABLE public.pickup_lines (
	id varchar(36) NOT NULL,
	date_entered timestamp DEFAULT now() NULL,
	date_modified timestamp DEFAULT now() NULL,
	created_by varchar(255) DEFAULT 'SYSTEM'::character varying NULL,
	locale varchar(10) NOT NULL,
	"server" varchar(255) NULL,
	"content" text NULL,
	CONSTRAINT pickup_lines_id_not_null NOT NULL id,
	CONSTRAINT pickup_lines_locale_not_null NOT NULL locale,
	CONSTRAINT pickup_lines_pkey PRIMARY KEY (id),
	CONSTRAINT fk_pickup_lines_server FOREIGN KEY ("server") REFERENCES public.servers("server")
);
CREATE INDEX pickup_lines_locale_idx ON public.pickup_lines USING btree (locale, server);

CREATE TABLE public.server_members (
	id varchar(36) NOT NULL,
	date_entered timestamp DEFAULT now() NULL,
	date_modified timestamp DEFAULT now() NULL,
	created_by varchar(255) DEFAULT 'SYSTEM'::character varying NOT NULL,
	"server" varchar(255) NULL,
	user_id varchar(255) NULL,
	username varchar(255) NULL,
	birthdate date NULL,
	CONSTRAINT server_members_created_by_not_null NOT NULL created_by,
	CONSTRAINT server_members_id_not_null NOT NULL id,
	CONSTRAINT server_members_pkey PRIMARY KEY (id),
	CONSTRAINT server_members_unique UNIQUE (server, user_id),
	CONSTRAINT unq_server_members UNIQUE (server, user_id),
	CONSTRAINT fk_server_members_server FOREIGN KEY ("server") REFERENCES public.servers("server")
);

CREATE TABLE public.servers (
	id varchar(36) NOT NULL,
	date_entered timestamp DEFAULT now() NULL,
	date_modified timestamp DEFAULT now() NULL,
	created_by varchar(255) DEFAULT 'SYSTEM'::character varying NOT NULL,
	"server" varchar(255) NOT NULL,
	active bool DEFAULT true NULL,
	"name" varchar(255) NULL,
	CONSTRAINT server_id UNIQUE (server),
	CONSTRAINT servers_created_by_not_null NOT NULL created_by,
	CONSTRAINT servers_id_not_null NOT NULL id,
	CONSTRAINT servers_pkey PRIMARY KEY (id),
	CONSTRAINT servers_server_not_null NOT NULL server
);

CREATE TABLE public.tic_tac_toe (
	id varchar(36) NOT NULL,
	date_entered timestamp DEFAULT now() NULL,
	date_modified timestamp DEFAULT now() NULL,
	created_by varchar(255) DEFAULT 'SYSTEM'::character varying NOT NULL,
	"server" varchar(255) NULL,
	user_id varchar(255) NULL,
	against varchar(36) NOT NULL,
	status varchar(255) NULL,
	win varchar(36) NULL,
	"level" varchar(255) NULL,
	played_spots text NULL,
	CONSTRAINT tic_tac_toe_against_not_null NOT NULL against,
	CONSTRAINT tic_tac_toe_created_by_not_null NOT NULL created_by,
	CONSTRAINT tic_tac_toe_id_not_null NOT NULL id,
	CONSTRAINT tic_tac_toe_pkey PRIMARY KEY (id),
	CONSTRAINT fk_tic_tac_toe_server_members FOREIGN KEY ("server",user_id) REFERENCES public.server_members("server",user_id)
);



CREATE TABLE autoban_config (
	id varchar(36) NOT NULL,
	date_entered timestamp DEFAULT now() NULL,
	date_modified timestamp DEFAULT now() NULL,
	created_by varchar(255) DEFAULT 'SYSTEM'::character varying NULL,
	"server" varchar(255) NOT NULL,
	delete_period numeric(5) NOT NULL DEFAULT 60,
	CONSTRAINT autoban_config_id_not_null NOT NULL id,
	CONSTRAINT autoban_config_pkey PRIMARY KEY (id),
	CONSTRAINT autoban_config_server_not_null NOT NULL server,
	CONSTRAINT fk_autoban_config_server FOREIGN KEY ("server") REFERENCES servers("server")
);



CREATE TABLE channels_forbidden (
	id varchar(36) NOT NULL,
	date_entered timestamp DEFAULT now() NULL,
	date_modified timestamp DEFAULT now() NULL,
	created_by varchar(255) DEFAULT 'SYSTEM'::character varying NULL,
	"server" varchar(255) NOT NULL,
	channel_id varchar(255) NOT NULL,
	CONSTRAINT channels_forbidden_channel_id_not_null NOT NULL channel_id,
	CONSTRAINT channels_forbidden_id_not_null NOT NULL id,
	CONSTRAINT channels_forbidden_pkey PRIMARY KEY (id),
	CONSTRAINT channels_forbidden_server_not_null NOT NULL server,
	CONSTRAINT channels_forbidden_unique UNIQUE (server, channel_id),
	CONSTRAINT fk_channels_forbidden_server FOREIGN KEY ("server") REFERENCES servers("server")
);