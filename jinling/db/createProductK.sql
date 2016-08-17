use jinlingdb;

#将产品种类的产品名称设置为外键
CREATE table if not EXISTS productKind(
name VARCHAR(10) not NULL comment '产品名称',
kindName VARCHAR(10) not NULL comment '种类名称'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
