use ycfdb;
CREATE table if not EXISTS tb_stuinfo(
id int auto_increment PRIMARY KEY comment '主键',
name VARCHAR(10) not NULL comment '学生姓名',
sex char(1) not null DEFAULT '男' comment '性别',
age int NOT NULL comment '学生年龄' ,
address VARCHAR(20) comment '学生住址',
phonenum INT comment '学生电话'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
