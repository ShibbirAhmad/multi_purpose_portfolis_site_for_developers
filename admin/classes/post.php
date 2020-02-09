<?php
  
class post {

    public $db;
    public $secure;

    public function __construct(){

        $this->db=new database();
        $this->secure=new helper();
    }




//admin information add

public function addPost($data,$file)
{
    

 

        
  $title        =  mysqli_real_escape_string($this->db->link,$data['title']);
  $description  =  mysqli_real_escape_string($this->db->link,$data['description']);
  $tags         =  mysqli_real_escape_string($this->db->link,$data['tags']);
  $author       =  mysqli_real_escape_string($this->db->link,$data['author']);
  $publisherId  =  mysqli_real_escape_string($this->db->link,$data['publisherId']);

        
         $image_permit=array('jpg','png','gif','jpeg');
         $image_name  =$_FILES['image']['name'];
         $image_size  =$_FILES['image']['size'];
         $image_temp  =$_FILES['image']['tmp_name'];
         $image_div   =explode('.', $image_name);
         $image_extn  =strtolower(end($image_div)) ;
         $image_unique=substr(md5(time()), 0,10).'.'.$image_extn;
         $image_upload="upload/".$image_unique;

  
  
         if($title=="" ||  $description=="" || $tags=="" || $publisherId=="" || $author==""  ){

         echo "<span class='warning'> sorry! fild must be fill   </sapan>";

    }else { 

    if(!empty($image_name)){

    if($image_size>5048576){

    echo "<span class='warning'>file size should be less than 3 MB </span>";

   }elseif(in_array($image_extn, $image_permit) == false ){

   echo "<span class='warning'>file format should be:-".implode(',',$image_permit)."</span>";

   }else
   {

    move_uploaded_file($image_temp, $image_upload);
      
    $query="INSERT INTO post_table (PostTitle,postDescription,postImage,postTags,postAuthor,publisherId)
           VALUES('$title','$description','$image_upload','$tags','$author', '$publisherId') ";
   $inserted=$this->db->insert($query);
  
   if($inserted){
  
     echo "<span class='success'>new post  uploaded successfully.. </span>";
   }else {
  
     echo "<span class='warning'> New post uploading fail </span>";
   }

  

  }

  

}else {

   
  
  $title        =  mysqli_real_escape_string($this->db->link,$data['title']);
  $description  =  mysqli_real_escape_string($this->db->link,$data['description']);
  $tags         =  mysqli_real_escape_string($this->db->link,$data['tags']);
  $author       =  mysqli_real_escape_string($this->db->link,$data['author']);
  $publisherId  =  mysqli_real_escape_string($this->db->link,$data['publisherId']);

  

  if($title=="" ||  $description=="" || $tags=="" || $publisherId=="" || $author==""  ){

         echo "<span class='warning'> sorry! fild must be fill   </sapan>";

  }else{

     
   
    $query="INSERT INTO post_table (PostTitle,postDescription,postTags,postAuthor,publisherId)
    VALUES('$title','$description','$tags','$author', '$publisherId') ";
     
     $inserted=$this->db->insert($query);
    

   if($inserting){

     echo "<span class='success'>post uploded successfully.. </span>";
           
   }else {

     echo "<span class='warning'>post  uploading fail </span>";
   }



  }


}


}  
 
   
    
    



}





//update post


public function updatePost($data,$file,$id){

     


        
    $title        =  mysqli_real_escape_string($this->db->link,$data['title']);
    $description  =  mysqli_real_escape_string($this->db->link,$data['description']);
    $tags         =  mysqli_real_escape_string($this->db->link,$data['tags']);
    $author       =  mysqli_real_escape_string($this->db->link,$data['author']);
    $publisherId  =  mysqli_real_escape_string($this->db->link,$data['publisherId']);

          
           $image_permit=array('jpg','png','gif','jpeg');
           $image_name  =$_FILES['image']['name'];
           $image_size  =$_FILES['image']['size'];
           $image_temp  =$_FILES['image']['tmp_name'];
           $image_div   =explode('.', $image_name);
           $image_extn  =strtolower(end($image_div)) ;
           $image_unique=substr(md5(time()), 0,10).'.'.$image_extn;
           $image_upload="upload/".$image_unique;

    
    
           if($title=="" ||  $description=="" || $tags=="" || $publisherId=="" || $author==""  ){

           echo "<span class='warning'> sorry! fild must be fill   </sapan>";

      }else { 

      if(!empty($image_name)){

      if($image_size>5048576){

      echo "<span class='warning'>file size should be less than 3 MB </span>";

     }elseif(in_array($image_extn, $image_permit) == false ){

     echo "<span class='warning'>file format should be:-".implode(',',$image_permit)."</span>";

     }else
     {

       move_uploaded_file($image_temp, $image_upload);
     
       $query="UPDATE post_table SET 
                     postTitle='$title',
                     postDescription='$description',
                     postImage='$image_upload',
                     postTags='$tags',
                     postAuthor='$author',
                     publisherId='$publisherId'      WHERE postId='$id' ";

       $updating=$this->db->update($query);

     if($updating){

       echo "<span class='success'>post updated successfully.. </span>";
     }else {

       echo "<span class='warning'>post  updating fail </span>";
     }


    

    }

    

  }else {

     
    
    $title        =  mysqli_real_escape_string($this->db->link,$data['title']);
    $description  =  mysqli_real_escape_string($this->db->link,$data['description']);
    $tags         =  mysqli_real_escape_string($this->db->link,$data['tags']);
    $author       =  mysqli_real_escape_string($this->db->link,$data['author']);
    $publisherId  =  mysqli_real_escape_string($this->db->link,$data['publisherId']);

    

    if($title=="" ||  $description=="" || $tags=="" || $publisherId=="" || $author==""  ){

           echo "<span class='warning'> sorry! fild must be fill   </sapan>";

    }else{

       
     
       $query="UPDATE post_table SET 
                     postTitle='$title',
                     postDescription='$description',
                     postTags='$tags',
                     postAuthor='$author',
                     publisherId='$publisherId'      WHERE postId='$id' ";

       $updating=$this->db->update($query);

     if($updating){

       echo "<span class='success'>post updated successfully.. </span>";
             
     }else {

       echo "<span class='warning'>post  updating fail </span>";
     }

  

    }


  }


  }  
   




}


//definate post

public function getLimitPost(){

    $query="SELECT * FROM post_table ORDER BY postId DESC LIMIT 3  ";
    $selecting=$this->db->select($query);
    if ($selecting) {
        return $selecting;
    }




}



//all post

public function getAllPost(){

  $query="SELECT * FROM post_table ORDER BY postId DESC ";
  $selecting=$this->db->select($query);
  if ($selecting) {
      return $selecting;
  }

}


//get Range post


public function getRangeLimitPost(){

  $query="SELECT * FROM post_table ORDER BY postId DESC LIMIT 15 ";
  $selecting=$this->db->select($query);
  if ($selecting) {
      return $selecting;
  }

}




//definate post

public function getDefinatePost($id){

    $query="SELECT * FROM post_table WHERE postId='$id' ";
    $selecting=$this->db->select($query);
    if ($selecting) {
        return $selecting;
    }

}





//this is from project class

//All Limit 10


public function getLimitedProject(){

  $query="SELECT * FROM project_table ORDER BY projectId DESC LIMIT 10 ";
  $selecting=$this->db->select($query);
  if ($selecting) {
      return $selecting;
  }

}







//delete Project Slider

public function deletePost($id){

      
    $sql="SELECT * FROM post_table  WHERE postId='$id'  ";
    $catching=$this->db->select($sql);
    if ($catching) {
      
         while ($result=$catching->fetch_assoc()) {
              
                $deleteImage=$result['postImage']; 
                unlink($deleteImage);
         }
     
    }


       $query="DELETE FROM post_table  WHERE postId='$id'  ";
       $deleting=$this->db->delete($query);
       

       if($deleting){

        echo "<span class='success'>one post deleted successfully..! </span>";

      }else {
 
        echo "<span class='warning'> post deleting fail </span>";
        
      }
 



}











    
}





?>