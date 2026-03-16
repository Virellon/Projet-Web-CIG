-- create database cubic_infrastructure group;
-- user_cubic__infrastructure group;

create table user(
id serial primary key ,
username varchar(100)not null unique ,
email varchar(100) not null unique ,
password varchar(250),
role varchar(20) default 'player',
created_at timestamp default current_timestamp 
);












)
