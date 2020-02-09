<?php


   
class project {

    public $db;
    public $secure;

    public function __construct(){

        $this->db=new database();
        $this->secure=new helper();
    }



//admin information add

public function addProject($data,$file)
{

    
    $name         =  mysqli_real_escape_string($this->db->link,$data['name']);
    $category     =  mysqli_real_escape_string($this->db->link,$data['category']);
    $description  =  mysqli_real_escape_string($this->db->link,$data['description']);
    $price        =  mysqli_real_escape_string($this->db->link,$data['price']);
    
          
           $image_permit=array('jpg','png','gif','jpeg');
           $image_name  =$_FILES['image']['name'];
           $image_size  =$_FILES['image']['size'];
           $image_temp  =$_FILES['image']['tmp_name'];
           $image_div   =explode('.', $image_name);
           $image_extn  =strtolower(end($image_div)) ;
           $image_unique=substr(md5(time()), 0,10).'.'.$image_extn;
           $image_upload="upload/".$image_unique;

    
    
           if($name=="" || $image_name=="" || $description=="" || $price=="" || $category==""  ){

           echo "<span class='warning'> sorry! fild must be fill   </sapan>";

      }elseif($image_size>5048576){

      echo "<span class='warning'>file size should be less than 3 MB </span>";

     }elseif(in_array($image_extn, $image_permit) == false ){

     echo "<span class='warning'>file format should be:-".implode(',',$image_permit)."</span>";

     }else
     {

       move_uploaded_file($image_temp, $image_upload);

     $query="INSERT INTO project_table (projectName,projectCategoryId,projectDescription,projectPrice,ProjectImage)
             VALUES('$name','$category','$description','$price', '$image_upload') ";
     $inserted=$this->db->insert($query);

     if($inserted){

       echo "<span class='success'>new project  uploaded successfully.. </span>";
     }else {

       echo "<span class='warning'> New project uploading fail </span>";
     }

    


    }    
    
    



}





//update slider project


public function updateProject($data,$file,$id){

       
       
    $name         =  mysqli_real_escape_string($this->db->link,$data['name']);
    $category     =  mysqli_real_escape_string($this->db->link,$data['category']);
    $description  =  mysqli_real_escape_string($this->db->link,$data['description']);
    $price        =  mysqli_real_escape_string($this->db->link,$data['price']);
    
          
           $image_permit=array('jpg','png','gif','jpeg');
           $image_name  =$_FILES['image']['name'];
           $image_size  =$_FILES['image']['size'];
           $image_temp  =$_FILES['image']['tmp_name'];
           $image_div   =explode('.', $image_name);
           $image_extn  =strtolower(end($image_div)) ;
           $image_unique=substr(md5(time()), 0,10).'.'.$image_extn;
           $image_upload="upload/".$image_unique;

    
    
           if($name=="" || $image_name=="" || $description=="" || $price=="" || $category=="" ){

           echo "<span class='warning'> sorry! fild must be fill   </sapan>";

      }elseif($image_size>5048576){

      echo "<span class='warning'>file size should be less than 3 MB </span>";

     }elseif(in_array($image_extn, $image_permit) == false ){

     echo "<span class='warning'>file format should be:-".implode(',',$image_permit)."</span>";

     }else
     {

       move_uploaded_file($image_temp, $image_upload);
     
       $query="UPDATE project_table SET 
                     projectName='$name',
                     projectCategoryId= '$category',
                     projectDescription='$description',
                     projectPrice='$price',
                     projectImage='$image_upload'      WHERE projectId='$id' ";

       $updating=$this->db->update($query);

     if($updating){

       echo "<span class='success'>project updated successfully.. </span>";
     }else {

       echo "<span class='warning'>project  updating fail </span>";
     }


    

    }




}


//All project


public function getAllProject(){

    $query="SELECT * FROM project_table  ";
    $selecting=$this->db->select($query);
    if ($selecting) {
        return $selecting;
    }

}


//All Limit 2


public function getLimitTwoProject(){

    $query="SELECT * FROM project_table ORDER BY projectId DESC LIMIT 2 ";
    $selecting=$this->db->select($query);
    if ($selecting) {
        return $selecting;
    }

}



//All Limit 6


public function getLimitedProject(){

    $query="SELECT * FROM project_table ORDER BY projectId DESC LIMIT 6 ";
    $selecting=$this->db->select($query);
    if ($selecting) {
        return $selecting;
    }

}



//definate project selecting

public function getDefinateProject($editProjectId){

    $query="SELECT * FROM project_table WHERE projectId='$editProjectId' ";
    $selecting=$this->db->select($query);
    if ($selecting) {
        return $selecting;
    }



}





//delete Project Slider

public function deleteProject($id){

      
    $sql="SELECT * FROM project_table  WHERE projectId='$id'  ";
    $catching=$this->db->select($sql);
    if ($catching) {
      
         while ($result=$catching->fetch_assoc()) {
              
                $deleteImage=$result['projectImage']; 
                unlink($deleteImage);
         }
     
    }


       $query="DELETE FROM project_table  WHERE projectId='$id'  ";
       $deleting=$this->db->delete($query);
       

       if($deleting){

        echo "<span class='success'>one slider deleted successfully..! </span>";

      }else {
 
        echo "<span class='warning'> slider deleting fail </span>";
        
      }
 



}











    
}





?>