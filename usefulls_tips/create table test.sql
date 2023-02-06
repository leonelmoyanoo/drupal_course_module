create table test(
id INT NOT NULL AUTO_INCREMENT,
name varchar(255),
surname varchar(255),
date DATETIME default CURRENT_TIMESTAMP,
PRIMARY KEY (id)
);