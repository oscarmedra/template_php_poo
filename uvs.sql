drop database if exists `gmbase`;
create database if not EXISTS `gmbase`;
use `gmbase`;

create table poles(
    `id` int primary key auto_increment,
    `name` varchar(20) not null unique,
    `slug` varchar(10) not null unique
);
