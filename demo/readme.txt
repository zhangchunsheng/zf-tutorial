使用zend framework编写的简单例子
使用了zend的mvc框架
数据库表
CREATE TABLE album (
	id INT(11) NOT NULL AUTO_INCREMENT,
	artist VARCHAR(100) NOT NULL,
	title VARCHAR(100) NOT NULL,
	PRIMARY KEY (id)
);

INSERT INTO album (artist, title)
VALUES
('James Morrison', 'Undiscovered'),
('Snow Patrol', 'Eyes Open');