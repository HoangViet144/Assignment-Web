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
CREATE TABLE `posts`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `userid` INT NOT NULL,
    `content` VARCHAR(1000),
    `postID` INT,
    `order` INT,
    PRIMARY KEY(id),
    FOREIGN KEY(userid) REFERENCES users(id)
);
INSERT INTO roles VALUES(1,'Khach');
INSERT INTO roles VALUES(2,'ThanhVien');
INSERT INTO roles VALUES(3,'QuanTriVien');
INSERT INTO users (name,pass,email,role) VALUES ('Thanhvien1','1234', 'tv1@gmail.com', 2);
INSERT INTO users (name,pass,email,role) VALUES ('Admin1','1234', 'admin1@gmail.com', 3);
INSERT INTO posts (userid,content,postid,`order`) VALUES ('1','Trang web của tôi có được hỗ trợ vĩnh viễn không?',-1,1609151819);
INSERT INTO posts (userid,content,postid,`order`) VALUES ('1','Tôi không đăng nhập vào trang web của mình được?',-1,1609151819);
INSERT INTO posts (userid,content,postid,`order`) VALUES ('2','Rất tiếc nhưng chúng tôi chỉ hỗ trợ trong vòng 2 năm',1,1609151819);