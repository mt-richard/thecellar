<?php
// require_once("../models/dbconnection.php");
include "dbconnection.php";
class user extends dbconnection{
    private $id;
    private $username;
    private $password;
    private $email;
    public function __construct($id=null,$email="", $username="",$password=""){
        parent::__construct();
        $this->id = $id;
        $this->username=$username;
        $this->email=$email;
        $this->password=$password;
    }

    //function for saving into database
    public function save(){
        try{
            $stm = $this->db->prepare("INSERT INTO account(`a_email`,`a_username`, `a_password`) VALUES(?,?, ?)");
            $stm->execute([$this->email, $this->username, $this->password]);
            return "User Added successful !!!";
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //function for retrieving data from database
    public function getAll(){
        try{
            $stm = $this->db->prepare("SELECT * FROM account");
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
            $stm = $this->db->prepare("SELECT * FROM account WHERE a_id=?");
            $stm->execute([$id]);
            return $stm->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //function for Login
    public function login($username, $password)
    {
        try {
            $stm = $this->db->prepare("SELECT * FROM account WHERE a_username = ? AND a_password = ?");
            $stm->execute([$username, $password]);
            $count = $stm->rowCount();
    
            if ($count > 0) {
                // Login successful
                session_start(); // Start the PHP session
                $_SESSION['logged_in'] = true; // Set a session variable to indicate the user is logged in
                $_SESSION['username'] = $username; // Optionally, store the username in the session for later use
                return "Success";
            } else {
                // Login failed
                return "Login Failure";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    

    //function for updating

    public function update($id, $email, $username, $password){
        try {
            $checkStm = $this->db->prepare("SELECT * FROM account WHERE a_id = ?");
            $checkStm->execute([$id]);
            $count = $checkStm->rowCount(); 
    
            if ($count == 0) {
                return "Account does not exist.";
            }
    
            $stm = $this->db->prepare("UPDATE account SET a_email=?, a_username=?, a_password=? WHERE a_id = ?");
            $result = $stm->execute([$email,$username, $password, $id]);
    
            if ($result) {
                return "Account updated successfully!";
            } else {
                return "Failed to update the Account.";
            }
        } catch(Exception $e){
            return $e->getMessage();
        }
    }

        // retrive number of booked records

        public function countBook(){
            try {
                $stm = $this->db->prepare("SELECT COUNT(*) FROM account");
                $stm->execute();
                return (int) $stm->fetchColumn();
            } catch(Exception $e) {
                return 0; 
            }
        }


    //function for delete
    public function destroy($id){
        try {
            $stm = $this->db->prepare("DELETE FROM account WHERE a_id=?");
            $stm->execute([$id]);
            return "User deleted successfully!";
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    

}
?>