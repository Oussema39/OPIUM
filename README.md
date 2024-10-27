# OPIUM - Restaurant Reservation System

OPIUM is a smart online reservation system designed for restaurants, removing the need for customers to call and reserve tables over the phone. The system provides a smooth, convenient reservation experience, addressing frustrations some users have with traditional phone reservations and streamlining the entire process for restaurant managers.

## Features

- **Online Reservation:** Customers can reserve tables at restaurants through an intuitive online interface.
- **Automated Management:** Eliminates the need for phone communication, reducing potential communication issues and mismanagement.
- **Enhanced User Experience:** Provides a seamless, smart reservation experience, increasing customer satisfaction and ease of use.

## Requirements

To run OPIUM locally, ensure the following are installed on your machine:

- **PHP** >= 7.4
- **Composer** (PHP dependency manager)
- **MySQL** database
- **Laravel** (latest version compatible with PHP 7.4 or higher)
- **Node.js and NPM** (for managing frontend assets)

## Getting Started

Follow these steps to set up OPIUM on your local machine:

### Step 1: Clone the Repository

    git clone https://github.com/your-username/opium.git
    cd opium

### Step 2: Install Dependencies


    composer install
    npm install
    
### Step 3: Configure the Environment

    cp .env.example .env
Update the .env file with your database credentials and other configurations:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=opium_db
    DB_USERNAME=root
    DB_PASSWORD=your_password

### Step 1: Clone the Repository

    git clone https://github.com/your-username/opium.git
    cd opium
### Step 4: Generate Application Key

    php artisan key:generate

### Step 5: Migrate the Database

    php artisan migrate

### Step 6: Seed the Database (Optional)

    php artisan db:seed

### Step 7: Compile Assets

    npm run dev

### Step 8: Serve the Application

    php artisan serve

Your app will be accessible at http://127.0.0.1:8000
