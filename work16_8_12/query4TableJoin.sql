use ycfdb;
DROP TABLE if EXISTS test;
CREATE TABLE test(
id int ,
name CHAR (10)
);
INSERT INTO test VALUES (1,'李四'),(1,'阿里'),(2,'阿里');
SELECT * FROM user
NATURAL LEFT JOIN point
NATURAL RIGHT JOIN course
NATURAL RIGHT JOIN test
;
