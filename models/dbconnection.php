<?php
//
// require_once("../config/database.php");
// include "../config/database.php";
//     class dbconnection {
//         protected $db;
//         public function __construct(){
//             $this->db = new PDO(DB_DRIVER.":host=".DB_HOST.";dbname=".DB_NAME,
//             DB_USER,DB_PWD,[PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
//             ]);
//         }
//     }

    class dbconnection {
        protected $db;
        public function __construct(){
            $this->db = new PDO("mysql:host=localhost;dbname=thecellar","root","");
            
        }
    }
?>