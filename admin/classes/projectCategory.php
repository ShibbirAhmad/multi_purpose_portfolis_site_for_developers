<?php


   
class projectCategory {

    public $db;
    public $secure;

    public function __construct(){

        $this->db=new database();
        $this->secure=new helper();
    }



//admin information update 

public function addProjectCategory($data)
{

    $adminCategory    = $this->secure->validation( $data['category']);
    $categoryDescription    = $this->secure->validation($data['description']);

    $category         =  mysqli_real_escape_string($this->db->link,$adminCategory);
    $description      =  mysqli_real_escape_string($this->db->link,$categoryDescription);
    
     if (empty($category) || empty($description) ) {
           
        echo "<span class='warning'>filed must not be empty...! </spna>";

     } else {
         
    
     
    $query="INSERT INTO table_project_category (categoryName,categoryDescription) VALUES('$category','$description')";
    $inserting=$this->db->insert($query);

    if ($inserting) {
            
        echo "<span class='success'>your titleSlogan successfully...! </spna>";
    }else{
        echo "<span class='warning'>information updating fail...! </spna>";
        
        }

     
    }




}





//admin information update 

public function updateProjectCategory($data,$id)
{

    $adminCategory    = $this->secure->validation($data['category']);
    $categoryDescription    = $this->secure->validation($data['description']);

    $category           =mysqli_real_escape_string($this->db->link,$adminCategory);
    $description      =  mysqli_real_escape_string($this->db->link,$categoryDescription);
   

     if (empty($category) || empty($description) ) {
           
        echo "<span class='warning'>filed must not be empty...! </spna>";

     } else {
         
    
     
    $query="UPDATE table_project_category SET categoryName='$category',
                          categoryDescription='$description' WHERE id='$id' ";
    $updating=$this->db->update($query);

    if ($updating) {
            
        echo "<span class='success'>category updated successfully...! </spna>";
    }else{
        echo "<span class='warning'>category updating fail...! </spna>";
        
        }

     
    }




}






//definate admin

public function getAllProjectCategory(){

    $query="SELECT * FROM table_project_category  ";
    $selecting=$this->db->select($query);
    if ($selecting) {
        return $selecting;
    }




}


//definate admin

public function getDefinateCategory($id){

    $query="SELECT * FROM table_project_category WHERE id='$id' ";
    $selecting=$this->db->select($query);
    if ($selecting) {
        return $selecting;
    }




}

//delete category

public function deleteCategory($delId){

    $query="DELETE FROM table_project_category WHERE id='$delId' ";
    $deleting=$this->db->delete($query);

    if ($deleting) {
            
        echo "<span class='success'>one item deleted successfully...! </spna>";

    }else{

        echo "<span class='warning'>category deleting fail...! </spna>";
        
        }

    
}








    
}





?>