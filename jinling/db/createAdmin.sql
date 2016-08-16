use jinlingdb;
CREATE table if not EXISTS admin(
id int auto_increment PRIMARY KEY comment '主键',
name VARCHAR(10) not NULL comment '管理员姓名',
pass VARCHAR(20) comment '登录密码',
registerIp VARCHAR (20) comment '注册ip'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
