# Project Description: Online Quiz Website
Overview
The Online Quiz Website is a simple web-based application designed to facilitate student login and quiz-taking activities. This project demonstrates the integration of HTML, CSS, and PHP to create a functional and user-friendly interface for online quizzes. It allows students to log in with predefined credentials, participate in a quiz, and receive instant feedback on their performance.
# Features
1.Student Login System:

Secure login using SHA1 hashing for password storage.
Session management to ensure only authenticated users can access the quiz.
Error handling for incorrect login attempts.
# Quiz Interface:
Dynamic question loading from a MySQL database.
Multiple-choice questions with four possible answers.
User-friendly interface for selecting and submitting answers.
# Quiz Results:
Immediate feedback on quiz performance.
Display of the total score and correct answers.
Option to retake the quiz.
# Technical Implementation
# Database:
A MySQL database named quiz_db is used to store user credentials and quiz questions.
Two tables: users and questions.
users table stores usernames and hashed passwords.
questions table stores quiz questions, options, and correct answers.
# PHP Backend:
Handles user authentication, session management, and database interactions.
Retrieves questions from the database and processes user responses.
Computes and displays the quiz score based on correct answers.
# Frontend:
HTML and CSS for the structure and styling of the login page and quiz interface.
A clean and responsive design to ensure a good user experience across different devices.
# Files and Structure
 1.database.sql:
SQL script to set up the quiz_db database with users and questions tables.
Pre-inserts a user (student with password password) and some sample quiz questions.
# login.php:
Handles the login functionality.
Validates user credentials and starts a session for authenticated users.
# quiz.php:
Displays the quiz to the logged-in users.
Fetches questions from the database and presents them in a form.
# result.php:
Processes the quiz submission.
Calculates and displays the user's score.
# index.php:
Redirects to the login page.
# style.css:
Contains the CSS styles for the login and quiz pages.
# How to Run the Project
1) Set Up Environment:
Install XAMPP or a similar local server environment.
Start Apache and MySQL services from the XAMPP control panel.
2)Database Setup:
Open phpMyAdmin and create a new database named quiz_db.
Import the database.sql file to create the necessary tables and insert sample data.
3)Place Files in the Server Directory:
Copy all project files (login.php, quiz.php, result.php, index.php, style.css, database.sql) into the htdocs folder of your XAMPP installation (e.g., C:\xampp\htdocs\quiz_website_demo).
4) Access the Application:
Open a web browser and navigate to http://localhost/quiz_website_demo/login.php.
Log in using the credentials student / password.
Take the quiz and view the results.
# Conclusion
The Online Quiz Website project provides a straightforward example of building a web application with user authentication, dynamic content loading, and instant feedback mechanisms. It serves as a great starting point for anyone looking to learn web development with PHP and MySQL.







