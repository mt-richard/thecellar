`<?php
require_once("../models/dbconnection.php");
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
    public function getById(){
        try{
            $stm = $this->db->prepare("SELECT * FROM account WHERE a_id=?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //function for Login
    public function login($username,$password)
        {
            try {
                $stm = $this->db->prepare("SELECT * FROM account WHERE a_username = ? AND a_password = ?");
                $stm->execute([$username, $password]);
                $count = $stm->rowCount();
                if ($count > 0) {
                    return "Success";
                } else {
                    return "Login Failure";
                }
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }


    //function for updating

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