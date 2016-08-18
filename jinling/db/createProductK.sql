use jinlingdb;

#将产品种类的产品名称设置为外键
CREATE table if not EXISTS productKind(
id INT not NULL PRIMARY KEY comment '产品id',
kindName VARCHAR(10) not NULL comment '种类名称'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
