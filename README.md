# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> **Warning**
> The end of life date for PHP 7.4 was November 28, 2022. If you are
> still using PHP 7.4, you should upgrade immediately. The end of life date
> for PHP 8.0 will be November 26, 2023.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

- 
# E-Commerce Website

## Description

This project is an e-commerce website built using HTML, CSS, JavaScript, Bootstrap, and PHP with the CodeIgniter 4 framework. It provides a seamless and intuitive user experience for browsing and purchasing products online.

## Features

### Home Page
- *Navigation Bar*: Includes buttons for Home, Register, and Login.
- *User-Friendly Interface*: Designed to engage users with a clean and modern layout.

### Register Page
- *Easy Registration*: Allows new users to sign up with a simple and straightforward form.

### Login Page
- *Secure Login*: Provides a secure way for users to access their accounts.

### Post-Login Navigation
- *Explore*: 
  - *Browse Products*: Users can browse a wide range of products available on the site.
  - *Search Functionality*: Allows users to search for specific items.
  - *Product Details*: Each product includes detailed descriptions, images, and pricing.

- *Categories*: 
  - *Organized Shopping*: Products are categorized to help users find what they are looking for quickly and easily.
  - *Category Pages*: Each category has its own page with a list of relevant products.
  - *Filter Options*: Users can filter products within categories by price, popularity, and other criteria.

- *Cart*: 
  - *Manage Purchases*: Users can view the items they have added to their cart.
  - *Quantity Adjustment*: Allows users to adjust the quantity of items.
  - *Remove Items*: Users can remove items from their cart.
  - *Checkout*: Provides a streamlined process for users to complete their purchases.

## Technologies Used
- *Frontend*: HTML, CSS, JavaScript, Bootstrap
- *Backend*: PHP, CodeIgniter 4 Framework
