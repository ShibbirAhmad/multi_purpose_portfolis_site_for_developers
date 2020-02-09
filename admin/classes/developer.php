<?php


   
class developer {

    public $db;
    public $secure;

    public function __construct(){

        $this->db=new database();
        $this->secure=new helper();
    }  

public function developerCreate($data,$file){
       
       $name          = $this->secure->validation( $data['name']);
       $designation   = $this->secure->validation( $data['designation']);
       $description   = $this->secure->validation( $data['description']);
       $email         = $this->secure->validation( $data['email']);
       $facebook      = $this->secure->validation( $data['facebook']);
       $linkedin      = $this->secure->validation( $data['linkedin']);
       $instragram    = $this->secure->validation( $data['instragram']);
       $skillPosition = $this->secure->validation( $data['skillPosition']);


    

       $chkEmail=$this->checkOldEmail($email);

             
              $image_permit=array('jpg','png','gif','jpeg');
              $image_name  =$_FILES['image']['name'];
              $image_size  =$_FILES['image']['size'];
              $image_temp  =$_FILES['image']['tmp_name'];
              $image_div   =explode('.', $image_name);
              $image_extn  =strtolower(end($image_div)) ;
              $image_unique=substr(md5(time()), 0,10).'.'.$image_extn;
              $image_upload="upload/".$image_unique;
   
       
      if (empty($name) || empty($email) || empty($description) || empty($designation) ||
       empty($facebook) || empty($linkedin) || empty($instragram) || empty($skillPosition) || empty($image_name) ) {
        
              echo "<span class='warning'>field must not be empty...! </spna>";
      
      }elseif(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
          
               echo "<span class='warning'>email address isn't valid..! </spna>";

      } elseif($chkEmail==false){
         
        echo "<span class='warning'>this email already exists...! </spna>";   
    
       }elseif($image_size>5048576){
    
        echo "<span class='warning'>file size should be less than 3 MB </span>";
  
       }elseif(in_array($image_extn, $image_permit) == false ){
  
       echo "<span class='warning'>file format should be:-".implode(',',$image_permit)."</span>";
  
       }else  {
              
        move_uploaded_file($image_temp, $image_upload);

       $query="INSERT INTO develeoper_table (name,image,designation,description, email , facebook,linkedin,instragram,skillPosition) 
               VALUES('$name','$image_upload','$designation','$description','$email','$facebook','$linkedin','$instragram','$skillPosition')";
        $inserting=$this->db->insert($query);
        
        if ($inserting) {
            
            echo "<span class='success'>developer created successfully...! </spna>";
        }else{
            echo "<span class='warning'>developer creating fail...! </spna>";
        }


     
    }
      


       
}




//checking email



private function checkOldEmail($email){
     
       $query="SELECT email FROM develeoper_table WHERE email= '$email'  ";
       $checking=$this->db->select($query);
       if ($checking == false) {
           return true;
       } else {
           return false;
       }
       



}







//developer information update 

public function developerUpdate($data,$file,$id)
{

    $name          = $this->secure->validation( $data['name']);
    $designation   = $this->secure->validation( $data['designation']);
    $description   = $this->secure->validation( $data['description']);
    $email         = $this->secure->validation( $data['email']);
    $facebook      = $this->secure->validation( $data['facebook']);
    $linkedin      = $this->secure->validation( $data['linkedin']);
    $instragram    = $this->secure->validation( $data['instragram']);
    $skillPosition = $this->secure->validation( $data['skillPosition']);

    
    $image_permit=array('jpg','png','gif','jpeg');
    $image_name  =$_FILES['image']['name'];
    $image_size  =$_FILES['image']['size'];
    $image_temp  =$_FILES['image']['tmp_name'];
    $image_div   =explode('.', $image_name);
    $image_extn  =strtolower(end($image_div)) ;
    $image_unique=substr(md5(time()), 0,10).'.'.$image_extn;
    $image_upload="upload/".$image_unique;

   

    if (empty($name) || empty($email) || empty($description) || empty($designation) ||
    empty($facebook) || empty($linkedin) || empty($instragram) || empty($skillPosition) || empty($image_name) ) {
     
           echo "<span class='warning'>field must not be empty...! </spna>";
   
   }elseif(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
       
            echo "<span class='warning'>email address isn't valid..! </spna>";

   }elseif($image_size>5048576){
 
     echo "<span class='warning'>file size should be less than 3 MB </span>";

    }elseif(in_array($image_extn, $image_permit) == false ){

    echo "<span class='warning'>file format should be:-".implode(',',$image_permit)."</span>";

    }else  {

        move_uploaded_file($image_temp, $image_upload);
   
    $query="UPDATE develeoper_table  SET 
                                   
                                    name='$name',
                                    image='$image_upload',
                                    designation='$designation',
                                    description ='$description',
                                    email   ='$email',
                                    facebook='$facebook',
                                    linkedin='$linkedin',
                                    instragram='$instragram',
                                    skillPosition  ='$skillPosition'
                                    
                                                     WHERE developerId='$id' ";
       
       $updating=$this->db->update($query);

    if ($updating) {
            
        echo "<span class='success'>your information updated successfully...! </spna>";

    }else{
        echo "<span class='warning'>information updatin fail...! </spna>";
    }

     
}


}




//get AllAdmin


public function getAllDeveloper(){

       $query="SELECT * FROM develeoper_table ORDER BY developerId ASC LIMIT 4 ";
       $selecting=$this->db->select($query);
       if ($selecting) {
           return $selecting;
       }
}


//definate developer

public function getDefinateDeveloper($developerId){

    $query="SELECT * FROM develeoper_table WHERE developerId='$developerId' ";
    $selecting=$this->db->select($query);
    if ($selecting) {
        return $selecting;
    }




}


public function developerDelete($id){


      $query="DELETE FROM develeoper_table WHERE developerId='$id' ";
      $deleting=$this->db->delete($query);
      
      if ($deleting) {
            
        echo "<span class='success'>one developer deleted successfully...! </spna>";

    }else{ 

        echo "<span class='warning'> developer deleting fail...! </spna>";
    }



}

















    
}





?>