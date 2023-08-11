# Book Inventory

This project is a test task for a company.

## Requirements

Before you begin, make sure you have the following software installed:

-   [Node.js](https://nodejs.org/)
-   [npm](https://www.npmjs.com/)
-   [PHP](https://www.php.net/)
-   [Composer](https://getcomposer.org/)

## Installation and Setup

1. **Clone the Repository**:

    ```bash
    git clone https://github.com/Danil-Dovhopolyi/book-inventory.git
    ```

2. **Install Dependencies**:

    ```bash
    npm install
    composer install
    ```

3. **Copy `.env.example` File**:

    In the root directory of your project, find a file named `.env.example`. Make a copy of this file and rename it to `.env`.

4. **Update Database Connection Settings**:

    Open the newly created `.env` file in a text editor. Locate the section that specifies database connection settings and update it according to your environment:

    ```dotenv
        DB_CONNECTION=sqlite
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_USERNAME=root
        DB_PASSWORD=
    ```

5. **Generate Application Key**:

    In the `.env` file, you'll find an entry for the application key:

    ```dotenv
    APP_KEY=
    ```

    Generate a new application key by running the following command in your terminal:

    ```bash
    php artisan key:generate
    ```

    This command will generate a random key and update the `APP_KEY` value in your `.env` file.

6. **Run Database Migrations**:

    ```bash
    php artisan migrate
    ```

7. **Seed Users and Books**:

    ```bash
    php artisan db:seed
    ```

8. **Open Two Terminals**:

    - In the first terminal, start the server:

        ```bash
        php artisan serve
        ```

    - In the second terminal, build the frontend:

        ```bash
        npm run dev
        ```

9. **Open a Web Browser**:

    Navigate to the link displayed in the terminal where the server is running (the terminal where you ran `php artisan serve`).
