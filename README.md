# Mini-DBMS
hospital login page with its registration form
This project is a basic login and registration system for a hospital management application. It allows users to register with their details, securely store their passwords, and then log in using their credentials. The system verifies the password upon login to ensure secure access.
Features
•	User Registration with detailed information
•	Secure password storage using PHP's password_hash function
•	Login verification with password hashing (using password_verify)
Files and Code Overview
1.	database.php: This file establishes a connection to the MySQL database using PHP's MySQLi extension.
2.	Login and Registration Code:
o	Registration Section: This part allows new users to register their details. It includes fields such as full name, age, gender, email, contact number, address, medical history, username, and password. The password is hashed before storing it in the database to enhance security.
o	Login Section: The login form retrieves the stored password hash from the database and verifies the password entered by the user. A message is displayed if the login is successful or if any errors occur (e.g., invalid credentials or non-existent user).
3.	CSS Styling: Basic styling is applied to center the form, create a visually appealing layout, and enhance user experience.
Database Requirements
The code expects a MySQL database named hospital_db with a user table that includes the following columns:
•	full_name (VARCHAR)
•	age (INT)
•	gender (VARCHAR)
•	email (VARCHAR)
•	contact_number (VARCHAR)
•	address (TEXT)
•	medical_history (TEXT)
•	username (VARCHAR, UNIQUE)
•	password (VARCHAR)
Setup Instructions
1.	Database Configuration:
o	Create a database named hospital_db.
o	Create a user table with the specified columns.
2.	Configuration of PHP Files:
o	Ensure the $servername, $username, $password, and $dbname variables in database.php are correctly set according to your local database configuration.
3.	Password Hashing and Verification:
o	The password is hashed using password_hash during registration for security.
o	Password verification is performed during login with password_verify to match the user’s input with the stored hash.
Usage
•	Run the register.php form to register new users.
•	After successful registration, users can log in using login.php.
•	Messages indicate whether the login was successful or if there were errors.
Error Handling
Error messages are displayed if:
•	The user does not exist in the database.
•	The entered password is incorrect.
•	The database connection fails.
Styling
Basic CSS styling is used to make the form user-friendly:
•	Centered layout with a shadow effect for a modern look.
•	Responsive design for compatibility with multiple screen sizes.
Security Considerations
•	Passwords are stored securely using hashing.
•	SQL statements use prepared statements to prevent SQL injection attacks.
