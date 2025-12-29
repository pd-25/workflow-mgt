# Workflow Management System

A comprehensive CRM and project management platform built with Laravel that helps businesses manage leads, clients, projects, and team workflows efficiently.

## About the Project

The Workflow Management System is a role-based application designed to streamline operations from lead management through project delivery. It provides a unified platform for sales teams, project managers, and operations teams to collaborate effectively.

### Key Features

- **Employee Management**: Admin can create and manage employees with different roles and types
- **CRM Functionality**: Sales employees can access the CRM to manage leads with detailed notes
- **Lead Conversion**: Seamlessly convert qualified leads into client projects/orders
- **Project Management**: Assign orders to project managers and operation teams
- **Sprint & Task Management**: Create sprints and tasks with real-time status tracking
- **Role-Based Access Control**: Secure access based on user roles (Admin, Sales, Project Manager, Operations)
- **File Upload Support**: Handle file uploads throughout the workflow
- **24/7 Availability**: Always available platform for team collaboration

## Installation

### Requirements

- PHP 8.1 or higher
- Composer
- Node.js & npm
- MySQL, or PostgreSQL

### Setup Instructions

1. **Clone or Extract the Project**
   ```bash
   cd /path/to/workflow-mgmt
   ```

2. **Install PHP Dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript Dependencies**
   ```bash
   npm install
   ```

4. **Create Environment File**
   ```bash
   cp .env.example .env
   ```

5. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

6. **Configure Database**
   - Edit `.env` file and configure your database connection (DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD)

7. **Run Migrations**
   ```bash
   php artisan migrate
   ```

8. **Seed the Database (Optional)**
   ```bash
   php artisan db:seed
   ```

9. **Build Assets**
   ```bash
   npm run build
   ```

10. **Start Development Server**
    ```bash
    php artisan serve
    ```

The application will be available at `http://localhost:8000`

## Development

To run the development server with hot reload:

```bash
npm run dev
```

In another terminal, run:

```bash
php artisan serve
```

## Testing

Run the test suite:

```bash
php artisan test
```

## Contributing

Thank you for considering contributing to the Workflow Management System! Please feel free to submit pull requests or issues.

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
