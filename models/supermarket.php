`<?php
// require_once("../models/dbconnection.php");

include "dbconnection.php";

class message extends dbconnection{
    private $id;
    private $name;
    private $message;
    private $email;

    public function __construct($id=null,$email="", $name="",$message=""){
        parent::__construct();
        $this->id = $id;
        $this->email=$email;
        $this->message=$message;
        $this->name=$name;
    }

    //function for saving into database
    public function save(){
        try{
            $stm = $this->db->prepare("INSERT INTO `message`(`name`,`email`, `message`) VALUES(?,?,?)");
            $stm->execute([$this->name, $this->email, $this->message]);
            return "Thanks For Messaging Us !!!";
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //function for retrieving data from database
    public function getAll(){
        try{
            $stm = $this->db->prepare("SELECT * FROM `message`");
            $stm->execute();
            return $stm->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
    //function for retrieving one by Id
    public function getById(){
        try{
            $stm = $this->db->prepare("SELECT * FROM `message` WHERE id=?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //function for delete
    public function destroy($id){
        try {
            $stm = $this->db->prepare("DELETE FROM `message` WHERE id=?");
            $stm->execute([$id]);
            return "message deleted successfully!";
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    

}
?>