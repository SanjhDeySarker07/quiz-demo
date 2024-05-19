CREATE DATABASE quiz_db;
USE quiz_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES ('student', SHA1('password'));

CREATE TABLE questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question VARCHAR(255) NOT NULL,
    option1 VARCHAR(255) NOT NULL,
    option2 VARCHAR(255) NOT NULL,
    option3 VARCHAR(255) NOT NULL,
    option4 VARCHAR(255) NOT NULL,
    answer INT NOT NULL
);

INSERT INTO questions (question, option1, option2, option3, option4, answer) VALUES 
('What is the capital of France?', 'Paris', 'London', 'Rome', 'Berlin', 1),
('Which planet is known as the Red Planet?', 'Earth', 'Mars', 'Jupiter', 'Venus', 2),
('Who wrote "Hamlet"?', 'Charles Dickens', 'William Shakespeare', 'Mark Twain', 'Jane Austen', 2);
