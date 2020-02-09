<?php


   
class titleDescription {

    public $db;
    public $secure;

    public function __construct(){

        $this->db=new database();
        $this->secure=new helper();
    }



//admin information update 

public function titleSloganUPdate($data)
{

    $adminTitle          = $this->secure->validation( $data['title']);
    $adminDescription    = $this->secure->validation( $data['description']);
 
    $title           =mysqli_real_escape_string($this->db->link,$adminTitle);
    $description     =mysqli_real_escape_string($this->db->link,$adminDescription);
   
   
    $query="UPDATE tbl_title_slogan  SET title='$title', 
                                         description='$description'
                               WHERE id='1' ";
    $updating=$this->db->update($query);
    if ($updating) {
            
        echo "<span class='success'>your titleSlogan successfully...! </spna>";
    }else{
        echo "<span class='warning'>information updating fail...! </spna>";
    }

                                                     


}





//definate admin

public function getAdminTitle(){

    $query="SELECT * FROM tbl_title_slogan WHERE id='1' ";
    $selecting=$this->db->select($query);
    if ($selecting) {
        return $selecting;
    }




}





    
}





?>