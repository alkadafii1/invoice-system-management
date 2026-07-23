# Invoice System Management

Invoice management system built with Laravel, developed as an internship project at NASHIR ID.

## Live Demo
https://invoice-system-management-pi.vercel.app

## Tech Stack
- Backend: Laravel (PHP)
- Frontend: Blade Templates, Tailwind CSS
- Build Tool: Vite
- Database: MySQL/PostgreSQL
- Deployment: Vercel

## Prerequisites
- PHP >= 8.1
- Composer
- Node.js >= 16.x
- MySQL/PostgreSQL

## Installation

1. Clone repository
git clone https://github.com/alkadafii1/invoice-system-management.git
cd invoice-system-management

2. Install PHP dependencies
composer install

3. Install NPM dependencies
npm install

4. Create environment file
cp .env.example .env

5. Generate application key
php artisan key:generate

6. Configure database in .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

7. Run migrations
php artisan migrate

8. Build assets
npm run build

9. Run development server
php artisan serve

Access the application at http://localhost:8000

## Development Commands
- Run Vite hot-reload: npm run dev
- Build assets: npm run build
- Run migrations: php artisan migrate
- Run seeders: php artisan db:seed

## Deployment to Vercel
This project is configured with vercel.json for Vercel deployment.
Connect your GitHub repository to Vercel for automatic deployments.

## Project Structure
app/                    # Application core
  Http/                 # Controllers, middleware
  Models/               # Eloquent models
config/                 # Configuration files
database/               # Migrations and seeders
  migrations/
  seeders/
resources/              # Views and assets
  views/                # Blade templates
routes/                 # Route definitions
  web.php
  api.php
public/                 # Public assets
storage/                # Logs, cache, files
tests/                  # Test files
