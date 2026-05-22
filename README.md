# FreeCourses


FreeCourses is a web application built with Laravel that serves as a curated platform for discovering, organizing, and tracking free educational courses from various providers like YouTube, Coursera, and Udemy. It features a comprehensive admin panel for content management and a personalized dashboard for users to manage their learning journey.

## Features

*   **Comprehensive Course Catalog:** Browse a wide range of courses with advanced search and filtering capabilities by category, provider, and difficulty level.
*   **User Dashboard:** Authenticated users can:
    *   Save courses for later.
    *   Track courses that are "in progress".
    *   Mark courses as "completed".
*   **Learning Roadmaps:** Follow structured learning paths composed of multiple courses arranged in a specific order to master a particular skill or technology stack.
*   **Admin Panel:** A dedicated backend for administrators to manage the platform's content:
    *   **Dashboard:** Get a high-level overview with statistics on total courses, roadmaps, and published content.
    *   **Course Management:** Full CRUD (Create, Read, Update, Delete) functionality for courses, including setting featured and published statuses.
    *   **Roadmap Management:** Full CRUD for learning roadmaps, with an intuitive interface to assign courses and define their sequence.
    *   **User Management:** View all registered users on the platform.
*   **Authentication:** Secure user registration, login, and password management powered by Laravel Breeze.

## Tech Stack

*   **Backend:** Laravel
*   **Frontend:** Tailwind CSS, Alpine.js, Blade Templates
*   **Database:** SQLite (default), MySQL, PostgreSQL
*   **Build Tool:** Vite

## Getting Started

Follow these instructions to get a local copy of the project up and running for development and testing purposes.

### Prerequisites

*   PHP >= 8.3
*   Composer
*   Node.js & npm
*   A database server (e.g., SQLite, MySQL)

### Installation

1.  **Clone the repository:**
    ```sh
    git clone https://github.com/esam-05-14/FreeCourses.git
    cd FreeCourses
    ```

2.  **Install PHP dependencies:**
    ```sh
    composer install
    ```

3.  **Create and configure your environment file:**
    ```sh
    cp .env.example .env
    ```
    Update the `DB_*` variables in the `.env` file to match your local database configuration. For the default SQLite setup, simply create the database file:
    ```sh
    touch database/database.sqlite
    ```

4.  **Generate an application key:**
    ```sh
    php artisan key:generate
    ```

5.  **Install NPM dependencies:**
    ```sh
    npm install
    ```

6.  **Build frontend assets:**
    ```sh
    npm run build
    ```

7.  **Run database migrations and seed the database with sample data:**
    ```sh
    php artisan migrate --seed
    ```

8.  **Start the development server:**
    ```sh
    php artisan serve
    ```

The application will now be running at `http://localhost:8000`.

## Usage

### User Registration
You can register for a new user account through the "Sign up" link on the homepage. Once registered and logged in, you will have access to your personal dashboard to track courses.

### Admin Access
To access the admin panel, you need to designate a user as an administrator. After seeding the database, you can manually update a user's `is_admin` status to `true` in the `users` table.

Once you are an admin, the "Admin Panel" link will appear in the navigation bar when you are logged in, granting you access to manager courses, roadmaps, and users.
