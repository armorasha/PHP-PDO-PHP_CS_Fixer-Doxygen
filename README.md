# CAUTION
> DO NOT MAKE THIS REPO PUBLIC. CONTAINS MYSQL SYSTEM ROOT PASSWORD. 

# PDO Data Abstraction Layer in PHP
Using PDO Data Abstraction layer in PHP to connect to different databases like MySQL, SQLite and MSSQL with no code change in the actual PHP project itself. The code change will happen only in PDO layer. Without PDO, change in database (MySQL->MSSQL) will result in change of all SQL queries in the PHP project.

### Keywords and Notes
- DSN - Data Source Name
- DAL - Data Abstraction Layer.
-     - There are many DALs including PHP's PDO and other third party DALs.
- Prepared statement / Parameterized queries are used in PDO DAL.
- fetch - fetch in many ways including associative array object (main) but there are others.
-       - you can also override & fetch array instead of object.

 ## Parameterized SQL queries
 A parameterized query (also known as a prepared statement) is a means of pre-compiling a SQL statement so that all you need to supply are the "parameters" (like "variables") that need to be inserted into the statement for it to be executed. It's commonly used as a means of preventing SQL injection attacks.

### Keywords and Notes
- Prepared Statements can have - positional params
-                              - named params