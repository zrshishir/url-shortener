# Url Shortener using Laravel and vue js

##### tech specifications
    - php version ^7.3|^8.0
    - laravel ^8.75
    - Vue 3.0
    - Bootstrap
    - HTML and CSS 

## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites
What things you need to install the software.

* Git.
* PHP.
* Composer.
* Laravel CLI.
* A webserver like Nginx or Apache.
* A Node Package Manager ( npm or yarn ).

### Install
Clone the git repository on your computer

```$ git clone git@github.com:zrshishir/url-shortener.git```


You can also download the entire repository as a zip file and unpack in on your computer if you do not have git

After cloning the application, you need to install it's dependencies.

```
$ cd url-shortener
$ composer install
```


### Setup
- When you are done with installation, copy the `.env.example` file to `.env`

  ```$ cp .env.example .env```


- Generate the application key

  ```$ php artisan key:generate```


- Add your database credentials to the necessary `env` fields
    ````
         DB_CONNECTION=mysql
         DB_CONNECTION=mysql
         DB_HOST=127.0.0.1
         DB_PORT=3306
         DB_DATABASE=your_database_name
         DB_USERNAME=your_user_name
         DB_PASSWORD=your_password
    ````
  if it is MAMP then add DB_SOCKET also
    ``DB_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock``

- Migrate the application

  ```$ php artisan migrate```

- Install laravel passport

  ```$ php artisan passport:install```

- Seed Database

  ```$ php artisan db:seed```


- Install node modules

  ```$ npm install```


### Run the application

```$ php artisan serve```


## Built With
* [Laravel](https://laravel.com) - The PHP framework for building the API endpoints needed for the application
* [Vue](https://vuejs.org) - The Progressive JavaScript Framework for building interactive interfaces


##### Installation
The installation is pretty simple. You will have php version 7.3+ and Vue js version 3.0 thats it. Below, the details installation is being described.

1.LEMP stack installation:
    - Make ready your linux with nginx, mysql and php. You can follow the link [LEMP stack installation on ubunut 18.04](https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-ubuntu-18-04)
    - Create a database on your phpmyadmin or mysql
    - Import the url-shortener.sql (it is in the root directory) file into your database.
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
