CREATE DATABASE IF NOT EXISTS LearnHTML;
USE LearnHTML;

CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY auto_increment,
    LoginID VARCHAR(50) UNIQUE,
    Password VARCHAR(255),
    image_data LONGBLOB
);