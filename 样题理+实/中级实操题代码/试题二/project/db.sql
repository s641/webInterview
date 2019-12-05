DROP DATABASE IF EXISTS user_center;
CREATE DATABASE user_center;
USE user_center;

CREATE TABLE `users`
(
   `id` int (11) NOT NULL AUTO_INCREMENT,
   `account` varchar (16) NOT NULL COMMENT '用户帐号,16位字符',
   `password` char (64) NOT NULL COMMENT '密码',
   `telphone` varchar (32) DEFAULT '' COMMENT '手机号',
   PRIMARY KEY (`id`)
)ENGINE= InnoDB DEFAULT CHARSET= utf8;

