use jinlingdb;
#新闻
CREATE table if not EXISTS messages(
id int auto_increment PRIMARY KEY comment '主键',
name VARCHAR(10) not NULL comment '留言者',
message text comment '新闻内容',
addTime INT comment '添加时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
