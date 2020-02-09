<?php


   
class subscriber {

    public $db;
    public $secure;

    public function __construct(){

        $this->db=new database();
        $this->secure=new helper();
    }

public function subscriberCreate($data){  
       
       $subscriberName       = $this->secure->validation( $data['name']);
       $subscriberProfession = $this->secure->validation( $data['profession']);
       $subscriberEmail      = $this->secure->validation( $data['email']);
       $subscriberMessage    = $this->secure->validation( $data['message']);
       


       $name        = mysqli_real_escape_string($this->db->link,$subscriberName);
       $profession  = mysqli_real_escape_string($this->db->link,$subscriberProfession);
       $email       = mysqli_real_escape_string($this->db->link,$subscriberEmail);
       $message = mysqli_real_escape_string($this->db->link,$subscriberMessage);



       $chkEmail=$this->checkOldEmail($email);

      if (empty($name) || empty($email) ||  empty($message) || empty($profession)) {
        
              echo "<span class='warning'>field must not be empty...! </spna>";
      
      }elseif(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
          
               echo "<span class='warning'>email address isn't valid..! </spna>";

      } elseif($chkEmail==false){
         
        echo "<span class='warning'>this email already exists...! </spna>";   
    
       }else  {
           

       $query="INSERT INTO subscriber_table (name,profession,email,review) 
               VALUES('$name','$profession','$email','$message')";
        $inserting=$this->db->insert($query);
        
        if ($inserting) {
            
            echo "<span class='success'>your have subscribed successfully...! </spna>";
        }else{
            echo "<span class='warning'>somethig wrong.please,try again...! </spna>";
        }


     
    }
      


       
}





//checking email



private function checkOldEmail($email){
     
       $query="SELECT email FROM subscriber_table WHERE email= '$email'  ";
       $checking=$this->db->select($query);
       if ($checking == false) {
           return true;
       } else {
           return false;
       }
       



}



//  subcriber approving

public function approve($approveId){

    $query="UPDATE subscriber_table SET approve='1' WHERE subscriberId='$approveId' "  ;
    $approving=$this->db->update($query);
    if($approving){
  
        echo "<span class='success'> new  subscriber approved..! </spna>";
    
    }
}

//get all subscriber


public function getAllSubscriber(){

       $query="SELECT * FROM subscriber_table ";
       $selecting=$this->db->select($query);
       if ($selecting) {
           return $selecting;
       }
}



//get unapproved

public function getUnapprovedSubscriber(){

    $query="SELECT * FROM subscriber_table WHERE approve='0' ";
    $selecting=$this->db->select($query);
    if ($selecting) {
        return $selecting;
    }
}




//get approved


public function getApprovedSubscriber(){

    $query="SELECT * FROM subscriber_table WHERE approve='1' ";
    $selecting=$this->db->select($query);
    if ($selecting) {
        return $selecting;
    }
}




// delete subscriber

public function deleteSubscriber($id){


      $query="DELETE FROM subscriber_table WHERE subscriberId='$id' ";
      $deleting=$this->db->delete($query);
      
      if ($deleting) {
            
        echo "<span class='success'>one subscriber deleted successfully...! </spna>";

    }else{ 

        echo "<span class='warning'> deleting fail...! </spna>";
    }



}

















    
}





?>