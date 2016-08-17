use jinlingdb;
#关于我们
CREATE table if not EXISTS aboutus(
article text comment '新闻内容'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
