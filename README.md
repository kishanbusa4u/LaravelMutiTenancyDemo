Certainly! Here's the updated **`README.md`** with your new content, including the appropriate modifications for your Laravel multi-tenancy demo project:

---

# Laravel Multi-Tenancy Demo

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/kishanbusa/laravel-multitenancy-demo/actions"><img src="https://github.com/kishanbusa/laravel-multitenancy-demo/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel Multi-Tenancy Demo

This repository demonstrates the implementation of **multi-tenancy** in a Laravel application using the **[stancl/tenancy](https://github.com/stancl/tenancy)** package. The application showcases a simple yet powerful approach to managing multiple tenants (users or organizations) with their own isolated databases and domains within a single Laravel application.

### Key Features

- **Tenant Management**: 
  - Ability to create, view, update, and delete tenants.
  - Manage tenant information, including company name, contact details, and associated domains.
  
- **Domain Management**: 
  - Each tenant can have one or more domains that direct to their specific data.
  - Tenants are dynamically routed to their own environment using the **`stancl/tenancy`** package's tenant identification based on subdomain or domain.

- **Tenant Isolation**: 
  - Each tenant has a separate database for better data security and isolation.
  - The application uses the **`tenant`** database connection for each tenant, ensuring there is no overlap between tenant data.

- **Centralized Management**: 
  - The application provides a central interface to manage tenants, view their details, and perform CRUD operations.

- **Scalable Architecture**: 
  - Designed with scalability in mind, this architecture can easily scale to accommodate hundreds or thousands of tenants with minimal performance overhead.

### Demo Screenshots

- **Tenant List Page**: 
  - A complete list of tenants is displayed along with their associated domains and basic information.

  ![Tenant List Page](https://github.com/kishanbusa4u/LaravelMutiTenancyDem/blob/main/images/tenant-list.png)

- **Create Tenant Page**: 
  - A form that allows users to add new tenants with details like company name, owner, email, and domains.

  ![Create Tenant Page](https://github.com/kishanbusa4u/LaravelMutiTenancyDem/blob/main/images/tenant-create.png)

- **Tenant Management Interface**: 
  - Manage tenant records, edit tenant details, and delete tenants directly from the interface.

  ![Tenant Edit Page](https://github.com/kishanbusa4u/LaravelMutiTenancyDem/blob/main/images/tenant-edit.png)

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

3. **Set Up the Environment**:
   Copy the `.env.example` file to `.env` and update the database and tenancy settings:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Run the Migrations**:
   ```bash
   php artisan migrate
   ```

5. **Start the Development Server**:
   ```bash
   php artisan serve
   ```

Now, you can access the application at `http://localhost:8000`.

## Contributing

Thank you for considering contributing to this project! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

### Code of Conduct

In order to ensure that the community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

### Security Vulnerabilities

If you discover a security vulnerability within this project, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
