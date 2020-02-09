<?php


   
class updateContact {

    public $db;
    public $secure;

    public function __construct(){

        $this->db=new database();
        $this->secure=new helper();
    }



//admin information update 

public function updateContact($data)
{

    $address          = $this->secure->validation( $data['address']);
    $number           = $this->secure->validation( $data['number']);
    $email            = $this->secure->validation( $data['email']);
    $website          = $this->secure->validation( $data['website']);
 

    if($address=="" || $number=="" || $email =="" || $website==""){
       
        echo "<span class='warning'>field must not be empty..! </spna>";
    }else { 
   
    $query="UPDATE table_contact  SET address='$address', 
                                        number='$number',
                                        email ='$email',
                                        website='$website'
                               WHERE contactId='1' ";
    $updating=$this->db->update($query);
    if ($updating) {
            
        echo "<span class='success'>contact information updated successfully...! </spna>";
    }else{
        echo "<span class='warning'>information updating fail...! </spna>";
    }

                                                     
  
  }

}





//definate admin

public function getUpdateContact(){

    $query="SELECT * FROM table_contact WHERE contactId='1' ";
    $selecting=$this->db->select($query);
    if ($selecting) {
        return $selecting;
    }




}





    
}





?>