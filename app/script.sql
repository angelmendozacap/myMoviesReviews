drop database if exists movies_reviews;

create database if not exists movies_reviews CHARACTER SET UTF8MB4;
use movies_reviews;

create table reviews(
    id int auto_increment,
    title varchar(200) not null,
    review text not null,
    image text not NULL,
    score TINYINT(1) UNSIGNED default 0,
    PRIMARY KEY (id),
    CHECK (score > 0),
	CHECK (score < 6)
)ENGINE=INNODB DEFAULT CHARSET=UTF8MB4;