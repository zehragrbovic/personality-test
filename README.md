# Tech Persona – Discover Your Ideal IT Role

Tech Persona is a web application developed as a group project for the **Introduction to Web Programming** course.

The application features an interactive personality test designed to help users discover IT roles that may align with their interests and characteristics. After completing the test, users receive a suggested IT role along with information about its responsibilities and requirements.

The project combines a PHP backend with a JavaScript, HTML, and CSS frontend.

## Contributors

- Zehra Grbović
- Ilma Gusinac
- Ismar Kovačić

## Technologies

- **Backend:** PHP
- **Frontend:** HTML, CSS, JavaScript, jQuery
- **Database:** MySQL
- **Dependencies:** Composer
- **Libraries:** Flight, Firebase JWT, Swagger PHP

## Project Setup

### Prerequisites

- PHP 8.1 or newer
- MySQL 8.0 or compatible
- Composer
- Apache or another PHP-compatible web server

### 1. Clone the repository

```bash
git clone <repository-url>
cd TechPersona
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Create the database

Create a MySQL database named `personalitytest`, then import the provided SQL file:

```bash
mysql -u root -p personalitytest < database/techpersona.sql
```

The SQL file creates all six required tables and populates the questions, answers, and IT role types. User accounts and test history are created locally as users interact with the application.

### 4. Configure the application

Copy the example configuration:

```bash
copy rest\Config.example.class.php rest\Config.class.php
```

Open `rest/Config.class.php` and update the database settings to match your local MySQL configuration.

Replace the placeholder JWT secret with a randomly generated secret.

**Important:** Do not commit `rest/Config.class.php` or share your database credentials.

### 5. Run the application

Place the project in your web server's document root and start Apache and MySQL.

For a standard XAMPP installation, open:

```text
http://localhost/TechPersona/
```

## Live Demo

[Tech Persona](https://orca-app-nrvnt.ondigitalocean.app/)

