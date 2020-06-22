# PHP PDO: Data Abstraction Layer in PHP

### CAUTION
> DO NOT MAKE THIS REPO PUBLIC. CONTAINS MYSQL SYSTEM ROOT PASSWORD and references to my own docx summaries which is useless to others.

### MySQL 8.x's 'caching_sha2_password' authentication
PHP 7.4 does not support MySQL 8.x's ```caching_sha2_password``` user authentication method/plugin yet, db user authentication is required for PDO similar to mysqli. You need to change the access user's (that will be used in this PDO exercises) auth method/plugin to ```mysql_native_password``` in MySQL. I used ```root``` user and changed its auth method.

## 1. PDO 
Using PDO (Data Abstraction layer) in PHP to connect to different databases like MySQL, SQLite and MSSQL with no code change in the actual PHP project itself. The code change will happen only in PDO layer. Without PDO, change in database (MySQL->MSSQL) will result in change of all SQL queries in the PHP project.

#### Keywords and Notes
- PDO - Data Abstraction layer.
- DSN - Data Source Name. DSN is the connection method to a database.
- DAL - Data Abstraction Layer. There are many DALs including PHP's PDO and other third party DALs.
- Prepared statement / Parameterized queries are used in PDO DAL.
- fetch 
  - fetch in many ways including associative array object (main) but there are others.
  - you can also override & fetch array instead of object.

 ## 2. Parameterized SQL queries
 Must use Parameterized SQL queries for PDO. See third paragraph to find out why.
 A parameterized query (aka prepared statement) is a means of pre-compiling a SQL statement so that all you need to supply are the "parameters" (like "variables") that need to be inserted into the statement for it to be executed. It's commonly used as a means of preventing SQL injection attacks.
 Prepared statements are so useful that they are the only feature that PDO will emulate for drivers that don't support them. This ensures that an application will be able to use the same data access paradigm regardless of the capabilities of the database.

#### Keywords and Notes
- Prepared Statements can have
  - positional params
  - named params

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