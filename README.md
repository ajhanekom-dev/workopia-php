# Workopia PHP

A job listing web application built with PHP and MySQL, featuring user authentication, job posting, and search functionality.

## Features

- **Job Management**: Create, edit, delete, and view job listings
- **User Authentication**: Secure registration and login system
- **Search Functionality**: Search jobs by keywords, location, company
- **Authorization**: Users can only manage their own listings
- **Flash Messages**: Success and error notifications
- **Responsive Design**: Mobile-friendly interface

## Architecture

- **Custom MVC Framework**: Built with a lightweight PHP framework
- **Database**: MySQL with PDO
- **Frontend**: PHP templates with reusable partials
- **Session Management**: Secure user sessions
- **Input Validation**: Data sanitization and validation

## Database Schema

- **users**: id, name, email, password, city, state, created_at
- **listings**: id, user_id, title, description, salary, company, address, city, state, phone, email, requirements, benefits, tags, created_at

## Quick Start with Docker (Recommended)

The easiest way to run this project is using Docker. No local PHP or MySQL installation required!

### Prerequisites
- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

### Run the Application

```bash
# Clone the repository
git clone <repository-url>
cd workopia-php

# Build and start all services
docker-compose up --build

# Access the application
# - Workopia App: http://localhost:8080
# - phpMyAdmin: http://localhost:8081
```

### Stop the Application

```bash
docker-compose down
```

### What's Included

- **PHP 8.2 with Apache** - Web server
- **MySQL 8.0** - Database with automatic data import
- **phpMyAdmin** - Web-based database management

### Database Access

- **Host**: localhost
- **Port**: 3307 (external), 3306 (internal)
- **Database**: workopia
- **Username**: workopia_user
- **Password**: workopia_password

## Manual Installation (Alternative)

If you prefer to run without Docker:

### Prerequisites

- PHP 8.0+
- MySQL 5.7+/MariaDB
- Composer

### Installation Steps

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd workopia-php
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Database setup**
   ```bash
   # Create database
   mysql -u root -p
   CREATE DATABASE workopia;

   # Import database dump
   mysql -u root -p workopia < "workopia SQL Database Dump.sql"
   ```

4. **Configure database**
   ```php
   // Create config/db.php
   <?php
   return [
       'host' => 'localhost',
       'port' => 3306,
       'dbname' => 'workopia',
       'username' => 'your_username',
       'password' => 'your_password'
   ];
   ```

5. **Start the server**
   ```bash
   cd public
   php -S localhost:8000
   ```

6. **Access the application**
   - Open http://localhost:8000

## Project Structure

```
workopia-php/
├── App/
│   ├── controllers/     # Application controllers
│   └── views/          # View templates
├── Framework/          # Custom framework components
│   ├── Database.php    # Database wrapper
│   ├── Router.php      # URL routing
│   ├── Session.php     # Session management
│   └── Validation.php  # Input validation
├── public/             # Web root
│   └── index.php       # Entry point
├── config/             # Configuration files
├── routes.php          # Route definitions
├── helpers.php         # Helper functions
└── docker-compose.yml  # Docker configuration
```

## Development

### File Structure
- **Controllers**: Handle HTTP requests and business logic
- **Views**: PHP templates for rendering HTML
- **Framework**: Core components (Router, Database, Session, etc.)
- **Helpers**: Utility functions used throughout the app

### Key Routes
- `GET /` - Homepage with recent listings
- `GET /listings` - All job listings
- `GET /listings/create` - Create new listing (auth required)
- `GET /listings/{id}` - View specific listing
- `POST /listings` - Store new listing
- `GET /auth/register` - Registration form
- `POST /auth/login` - User authentication

## License

This project is part of a PHP learning curriculum.

## Author

**Arno Hanekom**
- Email: ajhanekom@gmail.com

---

**Note**: The Docker setup handles all configuration automatically. For manual installation, ensure you create the `config/db.php` file with your database credentials. 
