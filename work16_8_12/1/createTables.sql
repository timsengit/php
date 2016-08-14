use ycfdb;
CREATE table if not EXISTS tb_employee(
id int not null comment '主键',
name VARCHAR(10) not NULL comment '员工姓名',
age int NOT NULL comment '员工年龄' ,
address VARCHAR(20) comment '员工住址',
phonenum INT comment '员工电话',
email VARCHAR (20) comment '员工邮箱'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE if NOT EXISTS tb_department(
id INT NOT NULL comment '主键',
departmentName VARCHAR (20) NOT NULL comment '部门名称'
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE if NOT EXISTS tb_position(
id INT NOT NULL comment '主键',
positionName VARCHAR (20) comment '职位名称',
sallery INT NOT NULL comment '职位薪资'
)