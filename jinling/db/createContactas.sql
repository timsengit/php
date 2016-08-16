use jinlingdb;
CREATE table if not EXISTS contactus(
id int auto_increment PRIMARY KEY comment '主键',
address VARCHAR (50) NOT NULL comment '联系地址',
name VARCHAR(10) not NULL comment '联系人名称',
mobile VARCHAR (11) comment '联系人手机',
phone VARCHAR (11) NOT NULL comment '联系人电话',
fax VARCHAR (20) comment '传真'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
