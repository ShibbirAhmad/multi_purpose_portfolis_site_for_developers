<?php


   
class projectSlider {

    public $db;
    public $secure;

    public function __construct(){

        $this->db=new database();
        $this->secure=new helper();
    }



//admin information update 

public function addProjectSlider($data,$file)
{

    $projectLink  = $this->secure->validation( $data['link']);
    $link         = mysqli_real_escape_string($this->db->link,$projectLink);
   
          
           $image_permit=array('jpg','png','gif','jpeg');
           $image_name  =$_FILES['image']['name'];
           $image_size  =$_FILES['image']['size'];
           $image_temp  =$_FILES['image']['tmp_name'];
           $image_div   =explode('.', $image_name);
           $image_extn  =strtolower(end($image_div)) ;
           $image_unique=substr(md5(time()), 0,10).'.'.$image_extn;
           $image_upload="upload/".$image_unique;

    
    
           if($link=="" || $image_name==""  ){

           echo "<span class='warning'> sorry! fild must be fill   </sapan>";

      }elseif($image_size>5048576){

      echo "<span class='warning'>file size should be less than 3 MB </span>";

     }elseif(in_array($image_extn, $image_permit) == false ){

     echo "<span class='warning'>file format should be:-".implode(',',$image_permit)."</span>";

     }else
     {

       move_uploaded_file($image_temp, $image_upload);

     $query="INSERT INTO table_project_slider (projectImage,link) VALUES('$image_upload','$link') ";
     $inserted=$this->db->insert($query);

     if($inserted){

       echo "<span class='success'>new project slider uploaded successfully.. </span>";
     }else {

       echo "<span class='warning'>project slider uploads fail </span>";
     }

    


    }    
    
    



}





//update slider project


public function updateProjectSlider($data,$file,$id){

       
       
    $projectLink  = $this->secure->validation( $data['link']);
    $link         = mysqli_real_escape_string($this->db->link,$projectLink);
   
          
           $image_permit=array('jpg','png','gif','jpeg');
           $image_name  =$_FILES['image']['name'];
           $image_size  =$_FILES['image']['size'];
           $image_temp  =$_FILES['image']['tmp_name'];
           $image_div   =explode('.', $image_name);
           $image_extn  =strtolower(end($image_div)) ;
           $image_unique=substr(md5(time()), 0,10).'.'.$image_extn;
           $image_upload="upload/".$image_unique;

    
    
           if($link=="" || $image_name==""  ){

           echo "<span class='warning'> sorry! fild must be fill   </sapan>";

      }elseif($image_size>5048576){

      echo "<span class='warning'>file size should be less than 3 MB </span>";

     }elseif(in_array($image_extn, $image_permit) == false ){

     echo "<span class='warning'>file format should be:-".implode(',',$image_permit)."</span>";

     }else
     {

       move_uploaded_file($image_temp, $image_upload);
     
       $query="UPDATE table_project_slider SET projectImage='$image_upload', link='$link' WHERE id='$id' ";
       $updating=$this->db->update($query);
     if($updating){

       echo "<span class='success'>project slider updated successfully.. </span>";
     }else {

       echo "<span class='warning'>project slider updating fail </span>";
     }


    

    }




}


//definate admin

public function getAllProjectSlider(){

    $query="SELECT * FROM table_project_slider ORDER BY id DESC LIMIT 10 ";
    $selecting=$this->db->select($query);
    if ($selecting) {
        return $selecting;
    }




}




//definate slider selectig

public function getDefinateSlider($editSliderId){

    $query="SELECT * FROM table_project_slider WHERE id='$editSliderId' ";
    $selecting=$this->db->select($query);
    if ($selecting) {
        return $selecting;
    }



}





//delete Project Slider

public function deleteSliderImage($id){

       
       $sql="SELECT * FROM table_project_slider  WHERE id='$id'  ";
       $catching=$this->db->select($sql);
       if ($catching) {
         
            while ($result=$catching->fetch_assoc()) {
                 
                   $deleteImage=$result['projectImage']; 
                   unlink($deleteImage);
            }
        
       }
       
      


       $query="DELETE FROM table_project_slider  WHERE id='$id'  ";
       $deleting=$this->db->delete($query);
       

       if($deleting){

        echo "<span class='success'>one slider deleted successfully..! </span>";

      }else {
 
        echo "<span class='warning'> slider deleting fail </span>";
        
      }
 



}











    
}





?>