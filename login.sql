drop database if exists login;
create database login default character set utf8 collate utf8_general_ci;
drop user if exists 'megumi'@'localhost';
create user'megumi'@'localhost' identified by 'password';
grant all on login.* to 'staff'@'localhost';
use login;

create table guest(
    name varchar(200) not null,
    login varchar(200) not null,
    password varchar(200) not null
);