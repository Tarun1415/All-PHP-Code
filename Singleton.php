<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

/** *  Class: DB follow the Singleton pattern. *  Some functions and properties to connect with the database. */ 

class DB {

    /* This property contains the host for database connection.  @var string  */    

    private const HOST = "localhost"; 

    /*This property contains the username for database connection.* @var string  */   
    
    private const USERNAME = "hestabit";

    private const PASSWORD = "hestabit"; 

    private const DB = "ormdatabase";


    private static $_instance = null;
    private $connect;
    private function __construct()  
    {  
        // echo "database connected ";   
     } 
    public static function getInstance()
    {
        if(self::$_instance == null){
            return self::$_instance = new DB();
        }
        return self::$_instance;
        
    }
    public static function getDbConn(){
        try{
            $db = self::getInstance();
            $db->connect = new Mysqli(self::HOST, self::USERNAME, self::PASSWORD, self::DB);
            
            return $db->connect;
        }catch(Exception $e){
            echo "Error : " . $e->getMessage();
        }
    }
 }
 $connect = DB::getDbConn();

