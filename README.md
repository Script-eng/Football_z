# Pizzeria Laravel Project

This Laravel project is a web application for managing a pizzeria. It includes features such as menu management, customer orders, and category organization. The application uses a MySQL database to store and manage data and includes role-based authentication for visitors, registered users, and administrators.

---

## Features

1. **Menu Management**:
   - View a list of pizzas with details.
   - Organize pizzas by categories.

2. **Order Management**:
   - Place orders via a user-friendly interface.
   - Track orders by status.

3. **Role-Based Authentication**:
   - Guest: Browse the menu.
   - Registered User: Place and track orders.
   - Admin: Manage pizzas, categories, and orders.

4. **Database Interaction**:
   - Use of Laravel Migrations for database schema.
   - Object-Relational Mapping (ORM) with Eloquent.

5. **Responsive Design**:
   - Styled with Tailwind CSS or Bootstrap.
   - Optimized for various screen sizes.

---

## Prerequisites

- PHP >= 8.0
- Composer
- MySQL >= 5.7
- Node.js & npm (for front-end assets)

---

## Installation

### Step 1: Clone the Repository
```bash
git clone https://github.com/yourusername/pizzeria-laravel.git
cd pizzeria-laravel
```

### Step 2: Install Dependencies
```bash
composer install
npm install
```

### Step 3: Configure Environment
- Copy the `.env.example` file and rename it to `.env`:
  ```bash
  cp .env.example .env
  ```
- Update the database configuration in the `.env` file:
  ```env
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=pizzeria
  DB_USERNAME=your_username
  DB_PASSWORD=your_password
  ```
  
```

### Step 2: Install Dependencies
```bash
composer install
npm install
```

### Step 3: Configure Environment
- Copy the `.env.example` file and rename it to `.env`:
  ```bash
  cp .env.example .env
  ```
- Update the database configuration in the `.env` file:
  ```env
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=pizzeria
  DB_USERNAME=your_username
  DB_PASSWORD=your_password
  ```

### Step 4: Generate Application Key
```bash
php artisan key:generate
```

### Step 5: Run Migrations
```bash
php artisan migrate
```

### Step 6: Serve the Application
```bash
php artisan serve
```
Access the application at `http://127.0.0.1:8000`.

---

## Usage

- **Guests** can browse the pizza menu.
- **Registered Users** can log in to place orders and view their order history.
- **Admins** can log in to manage pizzas, categories, and orders.

---

## Troubleshooting

### Common Errors

#### `SQLSTATE[HY000] [2002] Connection refused`
1. Ensure MySQL is running.
2. Verify the `.env` file has the correct database credentials.
3. Clear the Laravel configuration cache:
   ```bash
   php artisan config:clear
   php artisan cache:clear
   ```

#### Migrations Fail
1. Ensure the database exists.
2. Verify MySQL user permissions.
3. Rollback and re-run migrations:
   ```bash
   php artisan migrate:rollback
   php artisan migrate
   ```

---

## License

This project is open-source and available under the [MIT License](LICENSE).

---

## Contributing

Feel free to submit issues or pull requests to contribute to this project. Contributions are welcome!


