# Mini-CRM

Mini-CRM is a Laravel-based web application designed to manage companies and their employees, functioning as a basic CRM (Customer Relationship Management) system. This project includes CRUD operations, authentication, email notifications, and data validation.

## Table of Contents
- [Requirements](#requirements)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Email Notifications](#email-notifications)


---

## Requirements

- **PHP** 
- **Laravel** 
- **Database**: MySQL or any Laravel-supported database
- **Mailgun Account**: For email notifications

---

## Features

### 1. User Authentication
   - Basic Laravel authentication system for administrators only.
   - Seeded database to create an initial admin user with predefined credentials.
   - Only authenticated users can access and manage companies and employees.

### 2. Company and Employee Management
   - **CRUD functionality** for both companies and employees.
   - **Company fields**:
     - `Name` (required)
     - `Email`
     - `Logo` (minimum dimensions: 100x100 pixels)
     - `Website`
   - **Employee fields**:
     - `First Name` (required)
     - `Last Name` (required)
     - `Email`
     - `Phone`
     - `Company` (foreign key referencing a company)
   - Company logos are stored in `storage/app/public` and are accessible to the public.

### 3. Data Pagination
   - Pagination for the index pages of both companies and employees, displaying 10 entries per page for easier navigation.

### 4. Form Validation
   - Input data is validated using Laravel’s validation functions to ensure correct data and prevent errors.

### 5. Email Notifications
   - Sends email notifications to the admin email whenever a new company is added.
   - Requires setup with Mailgun for outgoing emails.

---

## Installation

- Clone the repository: `git clone https://github.com/your_username/mini-crm.git`
- Install the required dependencies: `composer update`
- Copy the example .env file and set up the database configuration: `cp .env.example .env`
- Generate the application key: `php artisan key:generate`
- Migrate the database: `php artisan migrate`
- Seed the database: `php artisan db:seed --class=UserSeeder`
- Link the storage directory: `php artisan storage:link`
- Start the development server: `php artisan serve`




## Usage
Access the Application:

Go to http://localhost:8000 in your browser.
Log in:

Use the seeded administrator credentials:
Email: admin@admin.com
Password: password
Manage Companies and Employees:

Once logged in, you can create, view, edit, and delete companies and employees.
To add a new company or employee, click the "Create" button on the respective index page.
For each company or employee entry, you’ll find options to edit or delete directly from the table view.


## Email Notifications
Email Setup
This application includes an email notification feature that sends an email to the admin email address whenever a new company is created.

Mailgun Setup:

Register for a Mailgun account and obtain your SMTP credentials.
Update your .env file with these credentials as shown in the Installation section.
Admin Notification:

Emails are sent to the address specified in MAIL_FROM_ADDRESS in the .env file.
Sending Emails
The CompanyController will send an email notification to the admin upon each new company creation, using the Mailgun service.
