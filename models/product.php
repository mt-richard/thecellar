<?php
// require_once("../models/dbconnection.php");
include "dbconnection.php";
class product extends dbconnection{
    private $id;
    private $category;
    private $name;
    private $desc;
    private $size;
    private $price;
    private $img;
    public function __construct($id=null, $category="",$name="",$desc="",$size="",$price="",$img=""){
        parent::__construct();
        $this->id = $id;
        $this->category=$category;
        $this->name=$name;
        $this->desc=$desc;
        $this->size=$size;
        $this->price=$price;
        $this->img=$img;
    }

    //function for saving into database
    public function save(){
        try{
            $stm = $this->db->prepare("INSERT INTO `product` (`p_id`, `p_category`, `p_name`, `p_desc`, `p_size`, `p_price`, `p_img`) VALUES (NULL, ?, ?, ?, ?, ?, ?)");
            // $stm = $this->db->prepare("INSERT INTO `product` (`p_id`, `p_category`, `p_name`, `p_desc`, `p_size`, `p_price`, `p_img`) VALUES (NULL, 'drinks', 'Soda', 'test', 'grand', '1200', 'xxSOad')");
            $stm->execute([ $this->category, $this->name, $this->desc, $this->size,$this->price, $this->img]);
            return "Product Added successfulll !!!";
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //function for retrieving data from database
    public function getAll(){
        try{
            $stm = $this->db->prepare("SELECT * FROM product");
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
            $stm = $this->db->prepare("SELECT * FROM product WHERE p_id=?");
            $stm->execute([$id]);
            return $stm->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
      //function for updating

      public function update($id, $category, $name, $desc, $size, $price, $img)
      {
          try {
              $checkStm = $this->db->prepare("SELECT * FROM product WHERE p_id = ?");
              $checkStm->execute([$id]);
              $count = $checkStm->rowCount();
      
              if ($count == 0) {
                  return "Product does not exist.";
              }
      
              $stm = $this->db->prepare("UPDATE product SET p_category=?, p_name=?, p_desc=?, p_size=?, p_price=?, p_img=? WHERE p_id = ?");
              $result = $stm->execute([$category, $name, $desc, $size, $price, $img, $id]);
      
              if ($result) {
                  return "Product updated successfully!";
              } else {
                  return "Failed to update the product.";
              }
          } catch (Exception $e) {
              return $e->getMessage();
          }
      }
      
      // retrive number of booked records

    public function countBook(){
        try {
            $stm = $this->db->prepare("SELECT COUNT(*) FROM product");
            $stm->execute();
            return (int) $stm->fetchColumn();
        } catch(Exception $e) {
            return 0; 
        }
    }
    
    public function countBookuser(){
        try {
            $stm = $this->db->prepare("SELECT COUNT(*) FROM account");
            $stm->execute();
            return (int) $stm->fetchColumn();
        } catch(Exception $e) {
            return 0; 
        }
    }

    public function countBookbook(){
        try {
            $stm = $this->db->prepare("SELECT COUNT(*) FROM booked");
            $stm->execute();
            return (int) $stm->fetchColumn();
        } catch(Exception $e) {
            return 0; 
        }
    }
    //function for delete
    public function destroy($id){
        try {
            $stm = $this->db->prepare("DELETE FROM product WHERE p_id=?");
            $stm->execute([$id]);
            return "Product deleted successfully!";
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    

}
?>