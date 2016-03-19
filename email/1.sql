#该SQL文件可以直接导入，对应的整个小系统数据库名称建为 testmail

SET FOREIGN_KEY_CHECKS=0;

#建了两张表user和mail，分别对应用户实体和邮件实体的信息

CREATE TABLE user(
id int(11) unsigned NOT NULL auto_increment,
username varchar(20) NOT NULL default'',
userpwd varchar(32) NOT NULL default'',
PRIMARY KEY (id)	


);

CREATE TABLE mail(
id int(11) unsigned NOT NULL auto_increment,
uid  mediumint(8) unsigned NOT NULL default'0',
mailtitle varchar(20) NOT NULL default'',
maildat int(10) unsigned NOT NULL default'0',
PRIMARY KEY (id)


);
#这里预先插入（因为该模块没有注册功能）的信息用户名分别是admin和user，密码对应也是admin和user，密码用了md5（）算法加密了就变成那一段数字。
Insert into user(id,username,userpwd) values('1','admin','21232f297a57a5a743894a0e4a801fc3');
Insert into user values('2','user','ee11cbb19052e40b07aac0ca060c23ee');
Insert into mail values('1','1','admin_mail_one','1336886600'),('2','1','admin_mail_two','1336886600');
Insert into mail values('3','1','admin_mail_three','1336886601'),('4','2','user_mail_one','1336886602');
