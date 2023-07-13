`<?php
require_once("../models/dbconnection.php");
class booking extends dbconnection{
    private $id;
    private $name;
    private $phone;
    private $email;
    private $time;
    private $checkin;
    private $guest;
    private $space;


    public function __construct($id=null,$email="", $name="",$phone="",$time="",$checkin="",$guest="",$space=""){
        parent::__construct();
        $this->id = $id;
        $this->name=$name;
        $this->email=$email;
        $this->phone=$phone;
    }

    //function for saving into database
    public function save(){
        try{
            $stm = $this->db->prepare("INSERT INTO booked(`b_name`,`b_email`, `b_phone`, `b_time`, `b_checkin`, `b_guest`, b_space`) VALUES(?,?,?,?,?,?,?)");
            $stm->execute([$this->name, $this->email, $this->phone, $this->time, $this->checkin, $this->guest, $this->space]);
            return "Booking successful done !!!";
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //function for retrieving data from database
    public function getAll(){
        try{
            $stm = $this->db->prepare("SELECT * FROM booked");
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
            $stm = $this->db->prepare("SELECT * FROM booked WHERE a_id=?");
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
            $stm = $this->db->prepare("DELETE FROM booked WHERE b_id=?");
            $stm->execute([$id]);
            return "Booking deleted successfully!";
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }


}
?>