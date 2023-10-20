# PHP Notes

### What is PHP?

- **PHP** stands for **Hypertext Preprocessor**.
- It is a widely-used, open-source **server-side scripting language** primarily used for web development.
- PHP is embedded within HTML and is executed on the server, generating dynamic content for web pages.

### Getting Started

- PHP code is typically written in files with the `.php` file extension.
- PHP code is enclosed in `<?php` and `?>` tags to distinguish it from HTML.

### Variables

- In PHP, variables are created by prefixing a name with a dollar sign (`$`).
- Variables are used to store and manipulate data.
- Example: `$name = "John";`

### Data Types

- PHP supports various data types, including:
  - **Integers**: Whole numbers like `5` or `-100`.
  - **Strings**: Text enclosed in single or double quotes, such as `"Hello, World!"`.
  - **Booleans**: True (`true`) or false (`false`) values.
  - **Arrays**: Ordered collections of data.
  - **Objects**: Instances of user-defined classes.
  - **Null**: A special value representing the absence of data.

### Conditional Statements

- PHP offers `if`, `else if`, and `else` statements for making decisions in your code.
- Example:

  ```php
  if ($age < 18) {
    echo "You are a minor.";
  } else {
    echo "You are an adult.";
  }
  ```

### Loops

- Use `for`, `while`, and `foreach` loops to repeat code.
- Example:

  ```php
  for ($i = 0; $i < 5; $i++) {
    echo "This is iteration $i<br>";
  }
  ```

### Functions

- Functions are blocks of code that can be defined and reused.
- They are declared using the `function` keyword.
- Example:

  ```php
  function greet($name) {
    echo "Hello, $name!";
  }
  ```

### File Inclusion

- PHP allows you to include other PHP files into your scripts using `include` or `require` statements.
- This is useful for organizing and reusing code.
- Example:

  ```php
  include('header.php');
  ```

### Super Globals

- PHP provides a set of **super global arrays** that contain essential information for your script, including user input data, server details, and session data.
- Common superglobals include `$_GET`, `$_POST`, and `$_SESSION`.

### Security

- Be aware of security considerations when writing PHP code. Common security issues include:
  - **SQL Injection**: Improper handling of user input in database queries.
  - **Cross-Site Scripting (XSS)**: Inadequate sanitization of user-generated data in web pages.
  - **Cross-Site Request Forgery (CSRF)**: Lack of protection against unauthorized actions triggered by a user.

### Resources

- **PHP Manual**: For in-depth information [PHP Official Documentation](https://www.php.net/manual/en/).
