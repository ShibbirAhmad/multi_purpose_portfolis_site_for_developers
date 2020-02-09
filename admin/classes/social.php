<?php 

class social {

     

    public $db;
    public $secure;

    public function __construct(){

        $this->db=new database();
        $this->secure=new helper();
    }


    public function updateSocial($data){
           
        $linkedin    =  mysqli_real_escape_string($this->db->link,$data['linkedin']);
        $facebook    =  mysqli_real_escape_string($this->db->link,$data['facebook']);
        $instragram  =  mysqli_real_escape_string($this->db->link,$data['instragram']);
        $twitter     =  mysqli_real_escape_string($this->db->link,$data['twitter']);
    

        $query="UPDATE  table_social SET
         linkedin='$linkedin',
         facebook='$facebook',
         instragram='$instragram',
         twitter ='$twitter'
           WHERE socialId = '1' " ;

        $updating=$this->db->update($query);
        if($updating){

            echo "<span class='success' >data updated successfully </span>";

        }else {

            echo "<span class='warning' >data updating fail </span>";
        }

       



        
    }


       
  
    public function getSocial(){

        $query="SELECT * FROM table_social WHERE socialId='1' ";
        $selecting=$this->db->select($query);
        if ($selecting) {
            
            return $selecting;
        }

    }








}




?>