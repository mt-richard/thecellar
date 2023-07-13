`<?php
require_once("../models/dbconnection.php");
class contact extends dbconnection{
    private $id;
    private $name;
    private $message;
    private $email;
    private $phone;
    public function __construct($id=null,$email="", $name="",$message="", $phone=""){
        parent::__construct();
        $this->id = $id;
        $this->phone=$phone;
        $this->email=$email;
        $this->message=$message;
    }

    //function for saving into database
    public function save(){
        try{
            $stm = $this->db->prepare("INSERT INTO contact(`co_name`,`co_email`, `co_phone`, `co_message`) VALUES(?,?,?,?)");
            $stm->execute([$this->name, $this->email, $this->phone, $this->message]);
            return "Thanks For Contact Us !!!";
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //function for retrieving data from database
    public function getAll(){
        try{
            $stm = $this->db->prepare("SELECT * FROM contact");
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
            $stm = $this->db->prepare("SELECT * FROM contact WHERE co_id=?");
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
            $stm = $this->db->prepare("DELETE FROM contact WHERE co_id=?");
            $stm->execute([$id]);
            return "Contact deleted successfully!";
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    

}
?>