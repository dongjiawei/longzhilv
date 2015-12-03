<?php
define('UC_CONNECT', 'mysql');		//数据库连接方式
define('UC_DBHOST', 'localhost');	//数据库存放
define('UC_DBUSER', 'root');		//登录名
define('UC_DBPW', 'root');		//登录密码
define('UC_DBNAME', 'lzl');			//数据库名 (Ucenter 所在数据库名)
define('UC_DBCHARSET', 'utf8');		//数据库编码
define('UC_DBTABLEPRE', '`lzl`.pre_ucenter_');	//数据库前缀(`数据库名`.前缀)
define('UC_DBCONNECT', 0);			//是否持久连接（貌似是这个，一般为0）
define('UC_KEY', '123456');			//通信密钥
define('UC_API', 'http://127.0.0.9/longzhilv/discuz/uc_server');	//Ucenter服务所在路径
define('UC_CHARSET', 'utf-8');		//字符编码
define('UC_IP', '');			//顾名思义（不知道怎么解释）,如果项目和Ucenter在本机就留空
define('UC_APPID', '2');		//应用ID（在Ucenter添加应用时会生成一个ID）
define('UC_PPP', 20);
//同步登录 Cookie 设置
$cookiedomain = 'http://127.0.0.9'; 			// cookie 作用域
$cookiepath = '/';			// cookie 作用路径