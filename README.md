# Url Shortener using Laravel and vue js

##### tech specifications
    - php version ^7.3|^8.0
    - laravel ^8.75
    - Vue 3.0
    - Bootstrap
    - HTML and CSS 


##### Installation
The installation is pretty simple. You will have php version 7.3+ and Vue js version 3.0 thats it. Below, the details installation is being described.
1. XAMPP installation:
- Go to your htdocs directory of your xampp folder and clone the project from github direcotory to your xampp htdocs directory using the following command for https.
  ``git clone git@github.com:zrshishir/url-shortener.git``
- go to your project directory by using command ``cd directory_name``
- Now update your composer using the following command
  ``composer update``
- Create a database on your phpmyadmin or mysql
- Import the `url_shortener.sql` (it is in the root directory) file into your database.
    - Set your database credentials in `.env` file  which is in the root directory if not please copy and rename the .env.example file and edit  with you own credentials:
        ````
         DB_CONNECTION=mysql
         DB_CONNECTION=mysql
         DB_HOST=127.0.0.1
         DB_PORT=3306
         DB_DATABASE=your_database_name
         DB_USERNAME=your_user_name
         DB_PASSWORD=your_password
        ````
- Now open your browser and execute the index.php file which is in your project root directory.

2. LEMP stack installation:
    - Make ready your linux with nginx, mysql and php. You can follow the link [LEMP stack installation on ubunut 18.04](https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-ubuntu-18-04)
    - Create a database on your phpmyadmin or mysql
    - Import the form-submission.sql (it is in the root directory) file into your database.
    - Set your database credentials in DatabaseConnection.php file  which is in app/controller directory and edit $host, $user, $password and $database with you own credentials.
    - Now open your browser, write your domain name and execute the index.php file which is in your project root directory.


##### Project features:
    - Url shortening task


##### Done Tasks:
1. Create a MySQL DB table with the following requirements and a frontend submission form for storing the data. The - field/Column list are:
    - id (bigint 20) ai
    - code (varchar 255) 
    - link (varchar 255) *
    - entry_at (date)
    - entry_by (init 10)

2. * marked columns must submit through the mentioned frontend form.

#### Screenshots
Main Page
![Main page](/resources/image/home_page.png)


#### NB: If you face any issue, please inform me. 
