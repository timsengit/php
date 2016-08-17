use jinlingdb;
DROP TABLE if EXISTS product;
CREATE table if not EXISTS product(
id int auto_increment PRIMARY KEY comment '主键',
name VARCHAR(10) not NULL comment '产品名称',
pathOfPic VARCHAR(40) not NULL comment '图片路径',
description text comment '产品描述',
adder VARCHAR(10) comment '添加者',
addTime DATETIME comment '添加时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

