# **READ ME FIRST**

This project uses **SQLite** as the database. Follow the steps below to set it up correctly.

---

## **Prerequisites**

Before installing this project, ensure you have the following installed on your computer:

-   **Node.js**
-   **Composer**
-   **Laragon** or **XAMPP** (optional)

---

## **PHP Configuration**

Modify your `php.ini` file to enable necessary extensions and settings.

### **Steps:**

1. Locate the `php.ini` file in your PHP environment.

    - If you can’t find it, copy either `php.ini-development` or `php.ini-production` and rename it to `php.ini`.

2. Uncomment the following lines by removing the `;` at the beginning:
    ```ini
    extension=pdo_sqlite
    extension=sqlite3
    extension=zip
    extension=openssl

    ```
3. Update these settings:
    ```ini
    post_max_size = 2047M
    upload_max_filesize = 2047M
    ```

## **Installation Instructions**

1. Prepare the Project

    1. Open a terminal in the project directory and run:

        - npm install
        - composer update

    2. Rename the .env.example file to .env:

        - mv .env.example .env

    3. Generate the application key:
        - php artisan key:generate

2. Run the Project

    ### **Without XAMPP or Laragon:**

    1. Open a terminal in the project directory and run:

        - npm run dev
          (Keep this terminal running.)

    2. Open a second terminal and run:

        - php artisan serve
          (Keep this terminal running too.)

    3. Open a third terminal and run:
        - php artisan migrate
        - php artisan db:seed

    ### **With XAMPP or Laragon (Using Apache Server):**

    1. Open a terminal in the project directory and run:

        - npm run dev
          (Keep this terminal running.)

    2. Open a second terminal and run:
        - php artisan migrate
        - php artisan db:seed
    3. Start the Apache server:

        - If using Laragon, click Start All.
        - If using XAMPP, start the Apache module.

    4. In Laragon, right-click on the background, select WWW, and choose the sekolah project to open the website.
