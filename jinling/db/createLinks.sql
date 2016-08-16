use jinlingdb;
#链接
CREATE table if not EXISTS links(
id int auto_increment PRIMARY KEY comment '主键',
name VARCHAR(10) not NULL comment '链接名称',
link VARCHAR (30) comment '添加时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
