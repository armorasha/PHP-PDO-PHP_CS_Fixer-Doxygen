# PHP: PDO Data Abstraction Layer + Code Linting + Code Documentation

### R_CAUTION
> DO NOT MAKE THIS REPO PUBLIC. CONTAINS MYSQL SYSTEM ROOT PASSWORD and references to my own docx summaries which is useless to others.

### R_MySQL 8.x's 'caching_sha2_password' authentication
PHP 7.4 does not support MySQL 8.x's ```caching_sha2_password``` user authentication method/plugin yet, db user authentication is required for PDO similar to mysqli. You need to change the access user's (that will be used in this PDO exercises) auth method/plugin to ```mysql_native_password``` in MySQL. I used ```root``` user and changed its auth method.

### R_How to use this exercise
Start with running ```index.php``` with XAMPP's Apache, which contains links to all the exercises. Use create_database.sql to create a database in MySQL Workbench for this exercise to connect to. Don't use phpMyAdmin. 

# PDO

## 1. PDO 
Using PDO (PHP Data Object, a Data Abstraction layer) in PHP to connect to different databases like MySQL, SQLite and MSSQL with no code change in the actual PHP project itself. The code change will happen only in PDO layer. Without PDO, change in database (MySQL->MSSQL) will result in change of all SQL queries in the PHP project.

#### Keywords and Notes
- PDO - PHP Data Object, a Data Abstraction layer. ```$pdo = new PDO($dsn, $user, $password);```
- DSN - Data Source Name. DSN is the connection method to a database. ```$dsn = 'mysql:host=localhost;dbname=php_pdo';```
- DAL - Data Abstraction Layer. There are many DALs: PHP's PDO and also other third party DALs.
- Prepared statement / Parameterized queries are used in PDO DAL.
- fetch 
  - fetch in many ways including associative array object (main) but there are others.
  - you can also override and fetch array, instead of object.

 ## 2. Parameterized SQL queries
 Must use Parameterized SQL queries for PDO. See third paragraph to find out why.
 A parameterized query (aka prepared statement) is a means of pre-compiling a SQL statement so that all you need to supply are the "parameters" (like "variables") that need to be inserted into the statement for it to be executed. It's commonly used as a means of preventing SQL injection attacks.
 Prepared statements are so useful that they are the only feature that PDO will emulate for drivers that don't support them. This ensures that an application will be able to use the same data access paradigm regardless of the capabilities of the database.

#### Keywords and Notes
- Prepared Statements can have
  - positional params (0,1,2,..)
  - named params (id, name, age,..)

## 3. Transactions
 A transaction is an atomic (wholesome) unit of database operations against the data in one or more databases. The results of all the SQL statements in a transaction can be either **all committed** to the database or **all rolled back**.
 For example, an order processing can have SQL statements for creating new customer and inserting new order for that customer. If inserting new order fails for any reason, then there will be a new customer in DB without any order, without using transactions. With using transactions, when inserting new order fails, the new customer account created will also be rolled back. 
 Transactions will rollback even when sending queries to different DBs.

#### Keywords and Notes
1. begin transaction
2. execute several queries in several databases
3. commit, if all queries successful.
4. rollback all queries, if any query failed.

## 4. Get Metadata and Attributes
Using PDO, You can also retrieve
- metadata of a query, like column count of result set. (Eg: '2' for country_name and population columns)
- database connection attributes (Eg: Driver: mysql, Server version: 5.7.22-0ubuntu0.16.04.1, Autocommit mode: 1)
- columns metadata of a result (Eg: Table name: countries, Column name: id, Column length: 20, Column flags: not_null primary_key)

# Linting, Block Commenting & Code HTML Documentation (like JavaDoc)

### Tools used:
#### VSCode Extensions: 
* **PHP-CS-Fixer** for linting PHP code
* **PHP DocBlocker** for Block Commenting PHP similar to JavaDoc for Java in NetBeans
#### Third Party Software: 
* **Doxygen GUI for Windows** for auto-generating HTML documents from the Block comments in PHP files

## 1. Automatic Linting-on-save using PHP-CS-Fixer
Use [my Medium blog post](https://medium.com/@armorasha/php-cs-fixer-how-to-install-vs-code-2020-windows-10-75b6d5ed03ce) for how to install and use PHP-CS-Fixer in VS Code. This linter ***lints code automatically*** everytime on-save, so you need not lint the code manually.

## 2. Block Commenting and Code HTML Documentation (like JavaDoc for Java)
1. **Block Commenting:** Used **PHP DocBlocker extension** for auto-fill commenting as in 1_Block_Commenting.php file in this repo. 
```/**
 * Undocumented function
 *
 * @author Raja <raja@email.com>
 *
 * @param integer $a
 * @param integer $b
 * @return void
 */```
 
2. **Code Documentation:** Used third party software like **Doxygen** to generate HTML document, I used this [GUI based Windows Doxygen tool](https://www.doxygen.nl/download.html) to generate HTML documentation for my code. ***You cannot generate a HTML Code Documentation file from the block comments within VS Code***.

### Screenshots
See **Screenshots_private_folder** in this repo for Doxygen run and results screenshots.

### Documentation
Open index.html from **Documentation folder** in this repo for this project's documentation, generated by **Doxygen**.

