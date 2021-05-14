
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

- Add your database credentials to the necessary `env` fields


- Generate the application key

  ```$ php artisan key:generate```


- Add your database credentials to the necessary `env` fields

- Migrate the application

  ```$ php artisan migrate```



### Run the application

  ```$ php artisan serve```

### Run php unit test

  ```$ ./vendor/bin/phpunit```

**API Documentation**

** 1-Show All Users**
----
  Returns json data about all users.

* **URL**

  api/users

* **Method:**

  `GET`
  
*  **URL Params**

 
None
* **Data Params**

  None

* **Success Response:**

    **Content:** `{ status : 200,data:{id:1,name:Rahul,address:India,age:22,points:0}, message : "List Of Users" }`
    
    
 **2- Show Single User**
----
  Returns json data about a specific users.

* **URL**

  api/users/:id

* **Method:**

  `GET`
  
*  **URL Params**
   `id=[integer]`

 
None
* **Data Params**

  None

* **Success Response:**

    **Content:** `{ status : 200,data:{id:1,name:Rahul,address:India,age:22,points:0}, message : "User Found" }`
    
    
 

   **3- Create Single User**
----
  Create new user and store in database.

* **URL**

  api/users

* **Method:**

  `POST`
  
*  **URL Params**
    None
 
None
* **Data Params**
   `name=[String]`,
   `age=[integer]`,
   `address=[String]`



* **Success Response:**

    **Content:** `{ status : 201,data:{id:1,name:Rahul,address:India,age:22,points:0}, message : "Created" }`
    
    **4- Update User Points**
----
Increment/Decremet User Points
* **URL**

  api/users/:id

* **Method:**

  `PUT`
  
*  **URL Params**
   `id=[integer]`
 
None
* **Data Params**
  
   `is_increment=[0/1]`
  ` 0-to Decrease points`,
   `1-to Increase points`



* **Success Response:**

    **Content:** `{ status : 200,data:{id:1,name:Rahul,address:India,age:22,points:0}, message : "value updated" }`   

 **5- Delete User**
----
Delete User From Database
* **URL**

  api/users/:id

* **Method:**

  `DELETE`
  
*  **URL Params**
   `id=[integer]`
 
None
* **Data Params**
  
None  



* **Success Response:**

    **Content:** `{ status : 200, message : "deleted" }`   


