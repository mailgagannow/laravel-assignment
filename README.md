
## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites
What things you need to install the software.

* Git.
* PHP.
* Composer.
* Laravel CLI.
* A webserver like Nginx or Apache.

### Install
Clone the git repository on your computer




After cloning the application, you need to install it's dependencies. 

```
$ cd laravel-assignment
$ composer install
```


### Setup
- When you are done with installation, copy the `.env.example` file to `.env`



- Generate the application key

  ```$ php artisan key:generate```


- Add your database credentials to the necessary `env` fields

- Migrate the application

  ```$ php artisan migrate```



### Run the application

  ```$ php artisan serve```

### Run php unit test

  ```$ ./vendor/bin/phpunit```


