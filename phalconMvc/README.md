#一个基于phalcon的mvc骨架

##特点

* 依赖phalcon扩展，性能强劲
* mvc+s，增加service层，不用在controller里面写逻辑代码，让controller保持清爽
* 受Yii框架的影响，生成的文件都放在runtime里面，保证该目录可写
* cli应用使用：cd app，php run；tasks目录下文件为cli应用逻辑
* 没有用多模块，而是用多层级controller，适合中小型应用


## 安装
* phalcon扩展，安装步骤：https://github.com/phalcon/cphalcon
* git clone https://github.com/kcloze/phalconMvc.git
* 导入数据表 database.sql
* public为网站根目录，配置nginx或者apache

![首页][1]

![添加][2]


![用户列表][3]


  [1]: ./images/%E9%A6%96%E9%A1%B5.png "首页.png"
  [2]: ./images/%E6%B7%BB%E5%8A%A0.png "添加.png"
  [3]: ./images/%E7%94%A8%E6%88%B7%E5%88%97%E8%A1%A8.png "用户列表.png"