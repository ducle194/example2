<?php include "menu.php"; ?>
<h2>SQL code fỏ the database</h2>
<pre>
    CREATE DATABASE company;
    USE company;
    
    GRANT ALL ON company.* TO 'webuser'@'localhost' IDENTIFIED BY 'webpass';
    USE company;

    CREATE TABLE customers(
    id_customers SMALLINT PRIMARY KEY auto_increment,
    firstname VARCHAR(30),
    lastname VARCHAR(30),
    streetaddress VARCHAR(20)
    ) Engine=InnoDB;

    INSERT INTO customers(firstname,lastname) VALUES('Ann','Smith');
    INSERT INTO customers(firstname,lastname) VALUES('Tom','Johns');

</pre>
<?php include "footer.php"; ?>