`<?php
require_once("../models/dbconnection.php");
class category extends dbconnection{
    private $id;
    private $name;
    public function __construct($id=null,$name=""){
        parent::__construct();
        $this->id = $id;
        $this->name=$name;
    }

    //function for saving into database
    public function save(){
        try{
            $stm = $this->db->prepare("INSERT INTO category(`c_name`) VALUES(?)");
            $stm->execute([$this->name]);
            return "Category Added successful !!!";
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //function for retrieving data from database
    public function getAll(){
        try{
            $stm = $this->db->prepare("SELECT * FROM category");
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
            $stm = $this->db->prepare("SELECT * FROM category WHERE c_id=?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
    //function for updating

    //function for delete
    public function destroy($id){
        try {
            $stm = $this->db->prepare("DELETE FROM category WHERE c_id=?");
            $stm->execute([$id]);
            return "Category deleted successfully!";
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    

}
?>