# ERP Travel Umroh

A web-based **ERP (Enterprise Resource Planning) application** built with **Laravel 10** to support operational management for **Umroh travel agencies**.

This system helps streamline **jamaah registration**, **package management**, **document handling**, and **branch operations**.  
It also includes a **Finance module** to manage and track jamaah payments, which is currently under active development.

This project was developed as part of my **Field Work Practice (PKL)** during Vocational High School and serves as both a real-world business solution and portfolio project.

---

## Features

### Master Module
The core operational module of the system.

- Jamaah registration management
- Package management
- Branch management
- Jamaah document upload & handling
- Searchable and dynamic data tables
- Role-based access control

### Finance Module
Payment management module.

- Jamaah payment tracking
- Installment/payment status monitoring
- Financial report generation
- Export reports to Excel
- **Currently in ongoing development**

---

## Tech Stack

- **Backend:** Laravel 10
- **Authentication:** Laravel UI
- **Role Management:** Laratrust
- **Frontend:** Bootstrap
- **Data Tables:** Laravel DataTables
- **Excel Export:** Laravel Excel
- **Notifications:** SweetAlert2
- **Build Tool:** Vite
- **Database:** MySQL

---

## Installation

Follow these steps to run the project locally.

```bash
git clone https://github.com/Eclipse-02/ERP-Travel-Umroh.git
cd ERP-Travel-Umroh

composer install
npm install

cp .env.example .env
php artisan key:generate

php artisan migrate --seed
php artisan storage:link

npm run dev
php artisan serve
```

The app will run on:

```bash
http://127.0.0.1:8000
```

---

## Project Structure

```bash
ERP-Travel-Umroh/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
└── vite.config.js
```

---

## Use Case

This ERP system is designed to help **Umroh travel agencies** manage operational workflows such as:

- Registering new jamaah
- Organizing available Umroh packages
- Managing supporting documents
- Monitoring payment progress
- Managing multi-branch operations
- Generating reports for administration

---

## Project Background

This project was developed during my **PKL (Field Work Practice)** at Vocational High School.

The goal was to solve real operational problems in Umroh travel business workflows by digitizing manual administrative processes into an integrated ERP platform.

---

## Development Status

Current status:

- ✅ Master module completed
- 🚧 Finance module in progress
- 🔄 Continuous improvements and maintenance

---

## License

This project is created for educational, internship, and portfolio purposes.
