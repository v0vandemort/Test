CREATE DATABASE IF NOT EXISTS mydb1;


USE mydb1;
CREATE TABLE IF NOT EXISTS People
(
    Id INT PRIMARY KEY,
    LastName VARCHAR(20),
    FirstName VARCHAR(20) Not Null,
    BithDay DATE,
    Phone INT UNIQUE

);


create table IF NOT EXISTS Users
(
    ID INT PRIMARY KEY,
    Email VARCHAR(20) not null,
    Phone int not null,
    Password VARCHAR(20) not null,
    UserId INT not null,
    FOREIGN KEY  (UserId)  REFERENCES People (Id),
    FOREIGN KEY  (Phone)  REFERENCES People (Phone)
);
