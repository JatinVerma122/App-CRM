# Mini-CRM

Mini-CRM is a Laravel-based web application designed to manage companies and their employees, functioning as a basic CRM (Customer Relationship Management) system. This project includes CRUD operations, authentication, email notifications, and data validation.

## Table of Contents
- [Requirements](#requirements)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Email Notifications](#email-notifications)
- [Testing](#testing)
- [Additional Notes](#additional-notes)

---

## Requirements

- **PHP** >= 7.3
- **Laravel** >= 8.x
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

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/your_username/mini-crm.git
