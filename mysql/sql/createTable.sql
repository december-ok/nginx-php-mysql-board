CREATE TABLE posts(
    ID int AUTO_INCREMENT primary key,
    title varchar(100) not null,
    content text,
    create_time datetime default NOW() not null,
    auther varchar(100) not null,
    password varchar(100) not null
);