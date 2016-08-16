use jinlingdb;
CREATE table if not EXISTS product(
id int auto_increment PRIMARY KEY comment '主键',
name VARCHAR(10) not NULL comment '产品名称',
pathOfPic VARCHAR(40) not NULL comment '图片路径',
adder VARCHAR(10) comment '添加者',
addTime DATETIME comment '添加时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#将产品种类的产品名称设置为外键
CREATE table if not EXISTS productKind(
name VARCHAR(10) not NULL comment '产品名称',
kindName VARCHAR(10) not NULL comment '种类名称',
FOREIGN KEY (name) REFERENCES product(name)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
