<?php
return array(
	//'配置项'=>'配置值'
    'DEFAULT_CHARSET'       =>  'utf-8',
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'think',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀


    //设置模块访问列表
    'MODULE_ALLOW_LIST' =>array('Home','Admin'),
    'DEFAULT_MODULE'    =>'Home',

    //显示页面Trace信息
    'SHOW_PAGE_TRACE'   =>true,
);