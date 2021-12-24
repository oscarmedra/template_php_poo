drop database if exists `teste`;
create database if not EXISTS `teste`;
use `teste`;

create table users(
    `id` int primary key auto_increment,
    `name` varchar(60) not null,
    `email` varchar(60) not null,
    `password` varchar(60) not null
)engine=innodb;