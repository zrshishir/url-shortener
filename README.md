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
    ```DB_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock```

- Migrate the application

  ```$ php artisan migrate```

### Run the application

```$ php artisan serve```

### Project features:
- Url shortening task
- Create a form, that allows adding URL and system generates short unique URL:
  - The format of generated URL: example.com/[hash];
  - The short URL must be a valid URL;
  - The URL must be shortened till 6 symbols hash, which contains alphanumeric symbols;
  - Algorithm must recognize duplicate URL and instead of generating new short URL, show previously
  created;
  - Upon submit, the URL should be checked using the „Google Safe Browsing“ API
  (https://developers.google.com/safe-browsing/v4/lookup-api). Or any other API with the same
  function. 
- After implementation, upon opening the short URL, the user must be redirected to the original URL.
- Advantage, if functionality could work from folder (e.g.: example.com/something/[hash]).
- For implementation use Laravel and Vue.js.

#### Screenshots
Main Page
![Main page](/resources/image/home_page.png)

### Built With
* [Laravel](https://laravel.com) - The PHP framework for building the API endpoints needed for the application
* [Vue](https://vuejs.org) - The Progressive JavaScript Framework for building interactive interfaces

#### NB: If you face any issue, please inform me. 
