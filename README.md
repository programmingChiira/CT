# Laravel FilamentPHP Project Setup & Deployment Guide

Setup Instructions
1. Download and Unzip the Project
Download the project files and unzip them into your desired directory.

2. Create an Empty Database
Create a new empty database (e.g., ct) in your MySQL or PostgreSQL server.

3. Update Database Credentials
In the .env file, update the following database credentials with your environment-specific information:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ct
DB_USERNAME=root
DB_PASSWORD=
Modify DB_USERNAME and DB_PASSWORD to match your local MySQL/PostgreSQL database credentials.

4. Install Dependencies
Run the following command to install PHP dependencies using Composer:
composer install

5. Run Migrations & Seed Database
Run the following command to migrate the database and seed it with any default data:
php artisan migrate:fresh --seed
This will create the necessary tables and populate them with default values.

6. Link Storage
Laravel stores user-uploaded files in the storage directory. Run the following command to create a symbolic link to the storage directory:
php artisan storage:link

7. Start the Development Server
Start the Laravel development server with the following command:
php artisan serve
The application should now be running locally at http://127.0.0.1:8000.

8. Access the Filament Admin Panel
To access the Filament Admin Panel, navigate to:
http://127.0.0.1:8000/admin
Use the following credentials to log in:

Email: admin@gmail.com

Password: password

These credentials are typically set during the initial seeding process, or you may modify the .env file or seeders to adjust them.

9. Interact with the Laravel App
You can now interact with the Laravel app.