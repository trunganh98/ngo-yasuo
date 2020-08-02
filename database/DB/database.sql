Create DataBase -> ngo
DROP DATABASE IF EXISTS ngo;
CREATE DATABASE IF NOT EXISTS ngo;

create table members(
    member_id int(9) not null primary key increment_auto,
    username varchar(12) not null unique ,
    password varchar (100) not null,
    fullname varchar (32) not null,
    email varchar (100) not null,
    address varchar(64),
    phone varchar (12) not null
)


create table admin(
    admin_id int(9) not null primary key AUTO_INCREMENT,
    username varchar(12) not null unique ,
    password varchar (100) not null,
    fullname varchar (32) not null,
    email varchar (100) not null,
    address varchar(64) not null,
    phone varchar (12) not null
)

create table posts(
    post_id int(9) not null primary key AUTO_INCREMENT,
    title varchar(125) not null unique ,
    content Text not null,
    fullname varchar (32) not null,
    address varchar(64) not null,
    phone varchar (12) not null
)
