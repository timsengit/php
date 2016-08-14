use ycfdb;
DROP TABLE if EXISTS tb_stuinfo2;
CREATE TABLE tb_stuinfo2 SELECT name,sex,age,phonenum,education FROM tb_stuinfo;
ALTER TABLE tb_stuinfo2 ADD id int auto_increment PRIMARY KEY ;
SELECT * FROM tb_stuinfo2 WHERE id<=(SELECT count(*) FROM tb_stuinfo2)*0.25;
