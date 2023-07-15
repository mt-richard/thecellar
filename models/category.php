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
    public function save()
        {
            try {
                $checkStm = $this->db->prepare("SELECT COUNT(*) FROM category WHERE c_name = ?");
                $checkStm->execute([$this->name]);
                $count = $checkStm->fetchColumn();

                if ($count > 0) {
                    return "Category already exists.";
                }

                $stm = $this->db->prepare("INSERT INTO category(c_name) VALUES(?)");
                $stm->execute([$this->name]);

                if ($stm) {
                    return "Category added successfully!";
                } else {
                    return "Failed to add the category.";
                }
            } catch (Exception $e) {
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
    public function getById($id){
        try{
            $stm = $this->db->prepare("SELECT * FROM category WHERE c_id=?");
            $stm->execute([$id]);
            return $stm->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
    //function for updating

    public function update($id, $name){
        try {
            $checkStm = $this->db->prepare("SELECT * FROM category WHERE c_id = ?");
            $checkStm->execute([$id]);
            $count = $checkStm->rowCount(); // Use rowCount() to get the number of rows
    
            if ($count == 0) { // Check if the category does not exist
                return "Category does not exist.";
            }
    
            $stm = $this->db->prepare("UPDATE category SET c_name=? WHERE c_id = ?");
            $result = $stm->execute([$name, $id]);
    
            if ($result) {
                return "Category updated successfully!";
            } else {
                return "Failed to update the category.";
            }
        } catch(Exception $e){
            return $e->getMessage();
        }
    }
    

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