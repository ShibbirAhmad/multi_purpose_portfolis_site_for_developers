<?php


   
class postCategory {

    public $db;
    public $secure;

    public function __construct(){

        $this->db=new database();
        $this->secure=new helper();
    }



//admin information update 

public function addPostCategory($data)
{

    $adminCategory    = $this->secure->validation( $data['category']);
   
    $category         =  mysqli_real_escape_string($this->db->link,$adminCategory);

    
     if (empty($category) ) {
           
        echo "<span class='warning'>filed must not be empty...! </spna>";

     } else {
         
    
     
    $query="INSERT INTO table_post_category (categoryName) VALUES('$category')";
    $inserting=$this->db->insert($query);

    if ($inserting) {
            
        echo "<span class='success'>new category inserted successfully...! </spna>";
    }else{
        echo "<span class='warning'>category adding fail...! </spna>";
        
        }

     
    }




}





//admin information update 

public function updatePostCategory($data,$id)
{

    $category    = $this->secure->validation($data['category']);


   

     if (empty($category) ) {
           
        echo "<span class='warning'>filed must not be empty...! </spna>";

     } else {
         
    
     
    $query="UPDATE table_post_category SET categoryName='$category'
                          WHERE id='$id' ";
    $updating=$this->db->update($query);

    if ($updating) {
            
        echo "<span class='success'>category updated successfully...! </spna>";
    }else{
        echo "<span class='warning'>category updating fail...! </spna>";
        
        }

     
    }




}






//definate admin

public function getAllPostCategory(){

    $query="SELECT * FROM table_post_category  ";
    $selecting=$this->db->select($query);
    if ($selecting) {
        return $selecting;
    }




}



//definate admin

public function getDefinatePostCategory($id){

    $query="SELECT * FROM table_post_category WHERE id='$id' ";
    $selecting=$this->db->select($query);
    if ($selecting) {
        return $selecting;
    }




}


//delete category

public function deleteCategory($delId){

    $query="DELETE FROM table_post_category WHERE id='$delId' ";
    $deleting=$this->db->delete($query);

    if ($deleting) {
            
        echo "<span class='success'>one item deleted successfully...! </spna>";

    }else{

        echo "<span class='warning'>category deleting fail...! </spna>";
        
        }

    
}








    
}





?>