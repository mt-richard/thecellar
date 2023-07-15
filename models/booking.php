<?php
// require_once("../models/dbconnection.php");
include "dbconnection.php";
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
        $this->time=$time;
        $this->checkin=$checkin;
        $this->space=$space;
        $this->guest=$guest;
    }

    //function for saving into database
    public function save()
{
    try {
        $today = date('Y-m-d');
        if ($this->checkin < $today) {
            return "Invalid check-in date. Please select a later or today's date.";
        } else {
            $currentHour = date('H:i:s');
            if ($this->checkin === $today && $this->time < $currentHour) {
                return "Invalid check-in time. Please select a later or current time.";
            } else {
                $stm = $this->db->prepare("INSERT INTO `booked` (`b_id`, `b_name`, `b_email`, `b_phone`, `b_time`, `b_checkin`, `b_guest`, `b_space`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)");
                $stm->execute([$this->name, $this->email, $this->phone, $this->time, $this->checkin, $this->guest, $this->space]);
                
                return "Thanks for Booking !!!";
            }
        }
    } catch (Exception $e) {
        return "An error occurred while saving the booking. Please try again later.";
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
            $stm = $this->db->prepare("SELECT * FROM booked WHERE b_id=?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    // retrive number of booked records

    public function countBook(){
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
            $stm = $this->db->prepare("DELETE FROM booked WHERE b_id=?");
            $stm->execute([$id]);
            return "Booking deleted successfully!";
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }


}
?>