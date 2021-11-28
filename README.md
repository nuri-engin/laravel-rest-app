# laravel-rest-app

<small> The application is on live on HEROKU </small> 

<a href="https://laravel-rest-app.herokuapp.com" rel="laravel-rest-app">![laravel-rest-app](https://img.shields.io/badge/Heroku-430098?style=for-the-badge&logo=heroku&logoColor=white)</a> 

---
## # Just another Laravel RESTful Application

The application uses PostgreSQL as database solution.
Database version will be 14 to follow latest features. 

Ensure to install PostgreSQL to your computer, and use he PGAdmin to connect to the Database.

Laravel migration process will handle the database schema creation process.

## # How to run
- Clone the project
- Set the `env` variables.
- Open the terminal and `cd` into the application folder
- Run the command: `php artisan serve`
- Open the Postman and request `http://127.0.0.1:8000/api/products` 

## # Postman collections
Application built-in API request samples exist with Postman Collection folder.

Go to: [/postman-collection/README.md](postman-collection/)

## # Route list
    - POST     | api/login 
    - POST     | api/logout 
    - GET|HEAD | api/products 
    - POST     | api/products 
    - GET|HEAD | api/products/search/{name} 
    - GET|HEAD | api/products/{id} 
    - PUT      | api/products/{id} 
    - DELETE   | api/products/{id} 
    - POST     | api/register 
    - GET|HEAD | api/user 
    - GET|HEAD | sanctum/csrf-cookie 
                