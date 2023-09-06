# PHP Web Application

This project is a PHP-based web application that aims to implement a simple system for managing user and advertisement data.

## Features

The project includes the following features:

- List Users: The `user-list.php` file, using the `UserService` class, allows you to retrieve and display users stored in the system in a table format.
- List Advertisements: The `ad-list.php` file, using the `AdvertisementController` class, enables you to retrieve and display advertisements stored in the system in a table format, along with the name of the user who created each ad.

## Installation and Execution

1. Clone the project to your local machine.
2. Place the files on a web server that supports PHP.
3. Start your XAMPP server.
4. Create a database named "rabit" in phpMyAdmin and import the contents of the "rabit.sql" file.
5. Open your browser and enter the following URL: `localhost/Rabit`. This will direct you to the user index page of the website.

## Possible Enhancements

There are several possible directions for further development of the project:

- User Management: Implement functionality to add, edit, and delete users from the system.
- Advertisement Management: Develop features to create, modify, or delete advertisements.
