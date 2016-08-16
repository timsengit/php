use jinlingdb;
#新闻
CREATE table if not EXISTS info(
id int auto_increment PRIMARY KEY comment '主键',
name VARCHAR(10) not NULL comment '新闻标题',
article text comment '新闻内容',
addTime datetime comment '添加时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
