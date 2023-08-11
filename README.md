# Book Inventory

This project is a test task for a company.

## Requirements

Before you begin, make sure you have the following software installed:

-   [Node.js](https://nodejs.org/)
-   [npm](https://www.npmjs.com/)
-   [PHP](https://www.php.net/)
-   [Composer](https://getcomposer.org/)

## Installation and Setup

1. Clone the repository:

    ```bash
    git clone https://github.com/Danil-Dovhopolyi/book-inventory.git
    ```

2. Install project dependencies:

    ```bash
    npm install
    composer install
    ```

3. Run database migrations:

    ```bash
    php artisan migrate
    ```

4. Seed users and books:

    ```bash
    php artisan db:seed
    ```

5. Open two terminals:

    - In the first terminal, start the server:

        ```bash
        php artisan serve
        ```

    - In the second terminal, build the frontend:

        ```bash
        npm run dev
        ```

6. Open a web browser and navigate to the link displayed in the terminal where the server is running.

Make sure you have all the required software installed before proceeding with the installation steps.
