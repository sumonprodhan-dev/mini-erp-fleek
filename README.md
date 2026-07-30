# Fleek ERP (Procurement Management System)

A comprehensive, modern, and responsive Enterprise Resource Planning (ERP) web application built using Laravel and Bootstrap 5, tailored specifically for streamlined procurement and master data management.

---

## Key Features & Modules Implemented

- Dashboard: Centralized control center displaying system metrics and quick-access navigation.
- Procurement Management:
  - Requisitions: Full lifecycle management for material and purchase requisitions.
  - Purchase Orders (POs): Automated generation and tracking of procurement orders.
- Master Data Management:
  - Products: Inventory cataloging and tracking.
  - Suppliers: Dedicated supplier directory with contact details, quick-call integrations, and management controls.
  - Employees: Workforce and staff profile organization.
  - Departments: Hierarchical department and organizational structure mapping.
- Authentication & Security: Secure login, registration, user verification, and role-based session handling using Laravel authentication.
- Advanced UI/UX Enhancements:
  - Pure Bootstrap 5 UI: Clean, lightweight layout avoiding heavy theme conflicts.
  - SweetAlert2 Toast Notifications: Integrated with Animate.css to render professional slide-in/slide-out notifications on the top-right corner for all Laravel session flash messages (success, error, warning, info).
  - AJAX Modals: Asynchronous modal loading for seamless, page-reload-free form interactions (e.g., creating/editing resources).

---

## Technology Stack

- Backend: PHP (>= 8.3), Laravel Framework
- Frontend: HTML5, CSS3, Bootstrap 5, Bootstrap Icons, JavaScript (jQuery)
- UI Alerts & Animations: SweetAlert2, Animate.css
- Database Management: MySQL
- Version Control: Git & GitHub

---

## Installation & Setup Guide (Step-by-Step)

To run this project locally on your machine for your viva or development, follow these exact steps:

### Prerequisites
Ensure your local environment has the following installed:
- PHP (>= 8.3)
- Composer
- Node.js & NPM
- Git
- MySQL

---

### Step 1: Clone the Repository
Open your terminal (Git Bash, Command Prompt, or VS Code Terminal) and run:
git clone https://github.com/sumonprodhan-dev/mini-erp-fleek
cd mini-erp-fleek

### Step 2: Install PHP Dependencies
Run Composer to install all required Laravel backend packages:
composer install

### Step 3: Install Frontend Dependencies
Install Node modules and compile assets:
npm install
npm run dev

### Step 4: Configure Environment File
Copy the example environment configuration file and update your database settings:
cp .env.example .env

(Open the newly created .env file in your code editor and configure your database details like DB_DATABASE, DB_USERNAME, and DB_PASSWORD)

### Step 5: Generate Application Key
Generate the unique application encryption key:
php artisan key:generate

### Step 6: Run Migrations and Database Seeders
Execute database migrations to create all necessary tables:
php artisan migrate --seed

### Step 7: Start the Development Server
Launch the local development server:
php artisan serve

### Step 8: Access the Application
Open your web browser and navigate to:
http://127.0.0.1:8000

---

## Technical Implementation Note (Notifications)
Laravel session flash messages are dynamically caught and rendered via global SweetAlert2 Toast animations on the top-right corner:
return redirect()->route('suppliers.index')->with('success', 'Supplier created successfully!');