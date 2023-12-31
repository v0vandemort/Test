CREATE DATABASE IF NOT EXISTS mydb1;


USE mydb1;
CREATE TABLE IF NOT EXISTS People
(
    Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    LastName VARCHAR(20),
    FirstName VARCHAR(20) NOT NULL,
    BirthDay DATE
);


create table IF NOT EXISTS Users
(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Email VARCHAR(20) UNIQUE ,
    Phone VARCHAR(13) UNIQUE,
    Password VARCHAR(20) NOT NULL,
    UserId INT ,
    FOREIGN KEY  (UserId)  REFERENCES People (Id)
);
