-- CREACION DE BASE DE DATOS
CREATE DATABASE crud_php
    WITH
    OWNER = postgres
    ENCODING = 'UTF8'
    CONNECTION LIMIT = -1
    IS_TEMPLATE = False;


-- CREACION DE TABLA
CREATE TABLE public.persona
(
    id bigserial NOT NULL,
    nombres character varying(250) NOT NULL,
    email character varying(250) NOT NULL,
    edad bigint NOT NULL,
    PRIMARY KEY (id)
);

ALTER TABLE IF EXISTS public.persona
    OWNER to postgres;

COMMENT ON TABLE public.persona
    IS 'tabla para personas';