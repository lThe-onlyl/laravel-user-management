# Laravel User Management

A Laravel application for managing users with MySQL database integration, form validation, REST-style endpoints, and PDF generation.

## Features

- Create users through a Blade form
- Validate user input
- Store user data in MySQL
- Retrieve all users
- Retrieve a user by ID
- Generate a PDF with user information
- Cyrillic text support in generated PDFs

## Tech Stack

- PHP
- Laravel
- MySQL
- Blade
- Eloquent ORM
- DomPDF

## User Data

Each user contains:

- Name
- Surname
- Email

## Routes

| Method | Endpoint       | Description                    |
| ------ | -------------- | ------------------------------ |
| GET    | `/form`        | Display the user creation form |
| POST   | `/store`       | Create a new user              |
| GET    | `/users`       | Get all users                  |
| GET    | `/users/{id}`  | Get a user by ID               |
| GET    | `/resume/{id}` | Generate a PDF for a user      |

## Installation

Clone the repository:

```bash
git clone <repository-url>
cd laravel-user-management
```

Install PHP dependencies:

```bash
composer install
```

Create the environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Configure your MySQL connection in `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=root
DB_PASSWORD=
```

Run the migrations:

```bash
php artisan migrate
```

Start the development server:

```bash
php artisan serve
```

The application will be available at:

```text
http://127.0.0.1:8000
```

## PDF Generation

PDF documents are generated using the `barryvdh/laravel-dompdf` package.

Open:

```text
/resume/{id}
```

to generate a PDF containing information about the selected user.
