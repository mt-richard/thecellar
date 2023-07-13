`<?php
require_once("../models/dbconnection.php");
class subscribe extends dbconnection{
    private $id;
    private $email;
    public function __construct($id=null,$email=""){
        parent::__construct();
        $this->id = $id;
        $this->email=$email;
    }

    //function for saving into database
    public function save(){
        try{
            $stm = $this->db->prepare("INSERT INTO subscriber(`co_email`) VALUES(?)");
            $stm->execute([$this->email]);
            return "Thanks For Subscribing !!!";
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //function for retrieving data from database
    public function getAll(){
        try{
            $stm = $this->db->prepare("SELECT * FROM subscriber");
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
            $stm = $this->db->prepare("SELECT * FROM subscriber WHERE s_id=?");
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
            $stm = $this->db->prepare("DELETE FROM subscriber WHERE s_id=?");
            $stm->execute([$id]);
            return "Subscriber deleted successfully!";
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    

}
?>