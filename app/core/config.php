<?php

if($_SERVER['SERVER_NAME'] == 'localhost'){

    /**
     *  database config
     */
    define("DBNAME",'my_db');
    define("DBHOST",'localhost');
    define("DBUSER",'root');
    define("DBPASS",'');
    define("DBDRIVER",'');

    define('ROOT',"http://localhost/phpStorm/mvc/public");
}
else{

    /**
     *  database config
     */
    define("DBNAME",'my_db');
    define("DBHOST",'localhost');
    define("DBUSER",'root');
    define("DBPASS",'');
    define("DBDRIVER",'');

    define('ROOT',"http://localhost/phpStorm/mvc/public");
}
