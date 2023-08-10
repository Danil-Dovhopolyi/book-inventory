# Book Inventory

This project it's test task in company

## Installation and Setup

1. Clone the repository:

    ```bash
    git clone https://github.com/Danil-Dovhopolyi/book-inventory.git
    ```

2. Install dependencies:

    ```bash
    npm install
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

6. Open a web browser and navigate to the link displayed in the terminal where the server is running(terminal, where you wrote php artisan serve):
