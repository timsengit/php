use ycfdb;
CREATE table if not EXISTS user(
userNo  int auto_increment PRIMARY KEY comment '主键',
userName VARCHAR(10) not NULL comment '学员姓名',
currentUnit VARCHAR (20) comment '所属单位',
age int NOT NULL comment '学员年龄'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE if NOT EXISTS course(
courseNo VARCHAR (10) NOT NULL comment '课程编号',
courseName VARCHAR (20) NOT NULL comment '课程名称'
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE if NOT EXISTS point(
userNo INT NOT NULL comment '学号',
courseNo VARCHAR (10) NOT NULL comment '课程编号',
grade INT NOT NULL comment '学习成绩'
)