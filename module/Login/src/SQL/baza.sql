CREATE DATABASE zend;  --tworzenie bazy
USE zend;
CREATE TABLE z_users (
  user_id INT NOT NULL AUTO_INCREMENT,
  username VARCHAR(25) NOT NULL,
  email VARCHAR(30) NOT NULL,
--  display_name VARCHAR(50) NOT NULL,
  password CHAR(41) NOT NULL,
  PRIMARY KEY (user_id),
  UNIQUE INDEX (email),
  UNIQUE INDEX (username)
) ENGINE=INNODB;