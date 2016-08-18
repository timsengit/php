use jinlingdb;

INSERT INTO admin(name ,pass,registerIp)VALUE
('admin','admin','12.12.12.12');

INSERT INTO product(name,pathOfPic,description,adder,addTime)VALUES
('网格布','images/prod1.gif','网格布网格布呀网格布网格布呀网格布','admin','2016-8-17 10:17:35'),
('尼龙','images/prod2.gif','尼龙尼龙尼龙','admin','2016-8-17 10:17:35');

INSERT INTO news VALUES (NULL ,'新闻标题','内容内容内容内容内容内容内容',2012222222);
INSERT INTO info VALUES (NULL ,'新闻标题','内容内容内容内容内容内容内容水电费水电费水电费',2012222222);
INSERT into links VALUES
(NULL ,'百度','http://www.baidu.com'),
(NULL ,'要出发','http://www.yaochufa.com'),
(NULL ,'京东','http://www.jd.com');
INSERT into friendlinks VALUES
(NULL ,'卓越网上购物','http://www.baidu.com'),
(NULL ,'京东网上商城','http://www.jd.com'),
(NULL ,'携程旅行网','http://www.jd.com');
INSERT INTO contactus VALUES (NULL ,'广东省广州市广州大道北','乐可','12345678911','12345678910','010-000000');
INSERT INTO productKind VALUES (1,'棉'),(2,'涤纶');