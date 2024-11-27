# Laravel Multi-Tenancy Demo

<p align="center">
  <a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>
</p>

<p align="center">
  <a href="https://github.com/kishanbusa4u/LaravelMutiTenancyDemo/actions">
    <img src="https://github.com/kishanbusa4u/LaravelMutiTenancyDemo/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

## About Laravel Multi-Tenancy Demo

This project demonstrates the implementation of **multi-tenancy** in a Laravel application using the **[stancl/tenancy](https://github.com/stancl/tenancy)** package. It provides an example of how to manage multiple tenants (users or organizations) with their own isolated data (in separate databases) within a single Laravel application. 

### Key Features

- **Tenant Management**: 
  - Create, view, update, and delete tenants.
  - Track tenant-specific domains and associated metadata.

- **Domain Routing**: 
  - Each tenant can have one or more domains that point to their unique data, with automatic routing to the tenant's environment.
  
- **Tenant Isolation**: 
  - Each tenant operates on its own database, ensuring complete data isolation.
  
- **Scalable Architecture**: 
  - This application is designed to be scalable, allowing hundreds or thousands of tenants with minimal overhead.

### Demo Screenshots

- **Tenant List Page**: 
  - Displaying all tenants with their domains and basic information.

  ![Tenant List](https://github.com/kishanbusa4u/LaravelMutiTenancyDemo/blob/master/tenant-list.png)

- **Create Tenant Page**: 
  - A form for adding new tenants with relevant details.

  ![Create Tenant](https://github.com/kishanbusa4u/LaravelMutiTenancyDemo/blob/master/tenant-create.png)


## Installation

To run this project locally, follow these steps:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/kishanbusa4u/LaravelMutiTenancyDemo.git
   ```

2. **Install Dependencies**:
   ```bash
   cd LaravelMutiTenancyDemo
   composer install
   npm install
   ```

3. **Set Up Environment**:
   Copy `.env.example` to `.env` and update the database and tenancy configurations.
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Run Migrations**:
   Migrate the database.
   ```bash
   php artisan migrate
   ```

5. **Start Development Server**:
   ```bash
   php artisan serve
   ```

Visit `http://localhost:8000` to access the application.

## Usage

After completing the installation, you can:

- **Create Tenants**: Use the admin panel to add tenants.
- **Manage Tenants**: Edit and update tenant details.
- **Manage Domains**: Assign domains to tenants to route to their specific databases.

## Contributing

Thank you for considering contributing to this project! Please refer to the [Laravel documentation](https://laravel.com/docs/contributions) for the contribution guidelines.

### Code of Conduct

Please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct) to ensure a welcoming community.

### Security Vulnerabilities

If you find any security vulnerabilities, please send an email to [taylor@laravel.com](mailto:taylor@laravel.com). Your issue will be handled promptly.

## License

This project is open-sourced and licensed under the [MIT License](https://opensource.org/licenses/MIT).

---

### Notes:

- **Repository Link**: Be sure to check that the URL in your badge links and GitHub links matches the correct repository (the one you just shared).
- **Demo Screenshots**: Replace the images if necessary and upload them to your repository's **images** directory for better structure.
- **Installation Steps**: If you have any special instructions or configurations, be sure to add them here.
