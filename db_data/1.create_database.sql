CREATE TABLE public.admin_channels (
    id uuid NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    created_by character varying(255) DEFAULT 'SYSTEM'::character varying,
    server character varying(255) NOT NULL,
    channel_id character varying(255) NOT NULL
);



CREATE TABLE public.birthday_channels (
    id uuid NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    created_by character varying(255) DEFAULT 'SYSTEM'::character varying,
    server character varying(255) NOT NULL,
    channel_id character varying(255) NOT NULL
);

CREATE TABLE public.channels_forbidden (
    id uuid NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    created_by character varying(255) DEFAULT 'SYSTEM'::character varying,
    server character varying(255) NOT NULL,
    channel_id character varying(255) NOT NULL
);

CREATE TABLE public.hangman (
    id uuid NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    created_by character varying(255) DEFAULT 'SYSTEM'::character varying NOT NULL,
    server character varying(36),
    user_id character varying(36),
    last_msg_id character varying(36),
    status character varying(255),
    word_json text,
    word character varying(255),
    win integer,
    letters text,
    guessed text,
    hints character varying(255)
);



CREATE TABLE public.jankenpon (
    id uuid NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    created_by character varying(255) DEFAULT 'SYSTEM'::character varying NOT NULL,
    server character varying(255) NOT NULL,
    user_id character varying(255) NOT NULL,
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
    draw_paper integer DEFAULT 0
);


CREATE TABLE public.jokes (
    id uuid NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    created_by character varying(255) DEFAULT 'SYSTEM'::character varying,
    locale character varying(10) NOT NULL,
    server character varying(255),
    content text
);



CREATE TABLE public.memes (
    id uuid NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    created_by character varying(255) DEFAULT 'SYSTEM'::character varying NOT NULL,
    server character varying(255),
    order_id integer,
    description character varying(255),
    content character varying(255)
);



CREATE TABLE public.pickup_lines (
    id uuid NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    created_by character varying(255) DEFAULT 'SYSTEM'::character varying,
    locale character varying(10) NOT NULL,
    server character varying(255),
    content text
);



CREATE TABLE public.server_members (
    id uuid NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    created_by character varying(255) DEFAULT 'SYSTEM'::character varying NOT NULL,
    server character varying(255),
    user_id character varying(255),
    username character varying(255),
    birthdate date
);



CREATE TABLE public.servers (
    id character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    created_by character varying(255) DEFAULT 'SYSTEM'::character varying NOT NULL,
    active boolean DEFAULT true,
    name character varying(255),
    reddit_odd_memes integer DEFAULT 5 NOT NULL,
    subreddits_memes text,
    autoban_del_period numeric(5,0) DEFAULT '60'::numeric NOT NULL,
    autoban_punishment character varying(10) DEFAULT 'ban'::character varying NOT NULL,
    autoban_mute_days integer DEFAULT 7 NOT NULL,
    send_voice_update boolean DEFAULT false NOT NULL,
    welcome_message_active boolean DEFAULT false NOT NULL,
    welcome_channel_id character varying(255),
    welcome_message text
);

CREATE TABLE public.tic_tac_toe (
    id uuid NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    created_by character varying(255) DEFAULT 'SYSTEM'::character varying NOT NULL,
    server character varying(255),
    user_id character varying(255),
    against character varying(36) NOT NULL,
    status character varying(255),
    win character varying(36),
    level character varying(255),
    played_spots text
);

ALTER TABLE ONLY public.admin_channels
    ADD CONSTRAINT admin_channels_pkey PRIMARY KEY (id);



ALTER TABLE ONLY public.admin_channels
    ADD CONSTRAINT admin_channels_unique UNIQUE (server, channel_id);



ALTER TABLE ONLY public.birthday_channels
    ADD CONSTRAINT birthday_channels_pkey PRIMARY KEY (id);



ALTER TABLE ONLY public.birthday_channels
    ADD CONSTRAINT birthday_channels_unique UNIQUE (server, channel_id);


ALTER TABLE ONLY public.channels_forbidden
    ADD CONSTRAINT channels_forbidden_pkey PRIMARY KEY (id);



ALTER TABLE ONLY public.channels_forbidden
    ADD CONSTRAINT channels_forbidden_unique UNIQUE (server, channel_id);


ALTER TABLE ONLY public.hangman
    ADD CONSTRAINT hangman_pkey PRIMARY KEY (id);



ALTER TABLE ONLY public.hangman
    ADD CONSTRAINT hangman_unique UNIQUE (server, user_id);



ALTER TABLE ONLY public.jankenpon
    ADD CONSTRAINT jankenpon_pkey PRIMARY KEY (id);



ALTER TABLE ONLY public.jankenpon
    ADD CONSTRAINT jankenpon_unique UNIQUE (server, user_id);



ALTER TABLE ONLY public.jokes
    ADD CONSTRAINT jokes_pkey PRIMARY KEY (id);



ALTER TABLE ONLY public.memes
    ADD CONSTRAINT memes_pkey PRIMARY KEY (id);



ALTER TABLE ONLY public.memes
    ADD CONSTRAINT memes_unique UNIQUE (server, order_id);



ALTER TABLE ONLY public.pickup_lines
    ADD CONSTRAINT pickup_lines_pkey PRIMARY KEY (id);



ALTER TABLE ONLY public.server_members
    ADD CONSTRAINT server_members_pkey PRIMARY KEY (id);



ALTER TABLE ONLY public.server_members
    ADD CONSTRAINT server_members_unique UNIQUE (server, user_id);



ALTER TABLE ONLY public.servers
    ADD CONSTRAINT servers_pkey PRIMARY KEY (id);



ALTER TABLE ONLY public.tic_tac_toe
    ADD CONSTRAINT tic_tac_toe_pkey PRIMARY KEY (id);



ALTER TABLE ONLY public.server_members
    ADD CONSTRAINT unq_server_members UNIQUE (server, user_id);


CREATE INDEX jokes_locale_idx ON public.jokes USING btree (locale, server);


CREATE INDEX pickup_lines_locale_idx ON public.pickup_lines USING btree (locale, server);



ALTER TABLE ONLY public.admin_channels
    ADD CONSTRAINT fk_admin_channels_server FOREIGN KEY (server) REFERENCES public.servers(id);



ALTER TABLE ONLY public.birthday_channels
    ADD CONSTRAINT fk_birthday_channels_server FOREIGN KEY (server) REFERENCES public.servers(id);



ALTER TABLE ONLY public.channels_forbidden
    ADD CONSTRAINT fk_channels_forbidden_server FOREIGN KEY (server) REFERENCES public.servers(id);



ALTER TABLE ONLY public.hangman
    ADD CONSTRAINT fk_hangman_server_members FOREIGN KEY (server, user_id) REFERENCES public.server_members(server, user_id);



ALTER TABLE ONLY public.jankenpon
    ADD CONSTRAINT fk_jankenpon_server FOREIGN KEY (server) REFERENCES public.servers(id);



ALTER TABLE ONLY public.jokes
    ADD CONSTRAINT fk_jokes_server FOREIGN KEY (server) REFERENCES public.servers(id);



ALTER TABLE ONLY public.memes
    ADD CONSTRAINT fk_memes_server FOREIGN KEY (server) REFERENCES public.servers(id);



ALTER TABLE ONLY public.pickup_lines
    ADD CONSTRAINT fk_pickup_lines_server FOREIGN KEY (server) REFERENCES public.servers(id);



ALTER TABLE ONLY public.server_members
    ADD CONSTRAINT fk_server_members_server FOREIGN KEY (server) REFERENCES public.servers(id);



ALTER TABLE ONLY public.tic_tac_toe
    ADD CONSTRAINT fk_tic_tac_toe_server_members FOREIGN KEY (server, user_id) REFERENCES public.server_members(server, user_id);