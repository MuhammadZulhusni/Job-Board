# Job Board

**Job Board** is a web application built with the Laravel framework that streamlines the job search process. Employers can create and manage job listings, while job seekers can easily search for opportunities and submit their applications.

## Installation

Follow these steps to set up the project locally:

1. **Clone the Repository:**

    ```bash
    git clone https://github.com/MuhammadZulhusni/Job-Board.git
    ```

2. **Navigate to the Project Folder:**

    ```bash
    cd Job-Board
    ```

3. **Install Dependencies:**

    Use Composer to install all required dependencies:

    ```bash
    composer install
    ```

4. **Set Up Environment Variables:**

    Copy the example environment file and update it with your specific configuration:

    ```bash
    cp .env.example .env
    ```

    Ensure that your `.env` file contains the correct database connection information:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

5. **Generate Application Key:**

    ```bash
    php artisan key:generate
    ```

6. **Run Database Migrations:**

    Make sure your database connection is correctly set in the `.env` file, then run the migrations:

    ```bash
    php artisan migrate
    ```

7. **Start the Development Server:**

    ```bash
    php artisan serve
    ```

8. **Compile Front-End Assets:**

    Install and compile the necessary front-end assets using npm:

    ```bash
    npm install && npm run dev
    ```

    You can now access the application at [http://localhost:8000](http://localhost:8000).

## Database Seeding

To refresh the database and seed it with dummy data:

1. Run the following command:

    ```bash
    php artisan migrate:fresh --seed
    ```

    **Note:** This command will drop all tables, run the migrations, and then seed the database with the dummy data.

## Contributing

Contributions are welcome! If you'd like to contribute:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeatureName`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add some feature'`).
5. Push to your branch (`git push origin feature/YourFeatureName`).
6. Submit a Pull Request.
