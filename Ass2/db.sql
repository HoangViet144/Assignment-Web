CREATE DATABASE `db`;
USE `db`;
CREATE TABLE `roles` (
	`roleid` INT UNIQUE NOT NULL,
	`name` VARCHAR(40),
	PRIMARY KEY(roleid)
);
CREATE TABLE `users` (
   `id` INT NOT NULL AUTO_INCREMENT,
   `name` VARCHAR(40),
   `pass` VARCHAR(40),
   `email` VARCHAR(40),
   `role` INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY (role) REFERENCES roles(roleid)
);
INSERT INTO roles VALUES(1,'Khach');
INSERT INTO roles VALUES(2,'ThanhVien');
INSERT INTO roles VALUES(3,'QuanTriVien');
INSERT INTO users (name,pass,email,role) VALUES ('Thanh vien 1','1234', 'tv1@gmail.com', 2);
INSERT INTO users (name,pass,email,role) VALUES ('Admin 1','1234', 'admin1@gmail.com', 3);