<?PHP 
require_once('inc/db.php');
 require_once('inc/dbclass.php');
 require_once('helpers/format.php');
 ?>



<?php

class aCourse {
	private $db;
	private $fm;

	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function courseInsert($data){
		$c_name = mysqli_real_escape_string($this->db->link,$data['c_name']);
		$credit = mysqli_real_escape_string($this->db->link,$data['credit']);


        if ($c_name=="" || $credit=="") {
        	$msg="<span class='error'>Fields Must Not Be Empty</span>";
          	return $msg;
        }
        else{

        	$query="INSERT INTO  course(c_name,credit) 
        	               VALUES('$c_name','$credit')";

        	   $inserted_row=$this->db->insert($query);
               if ($inserted_row) {
               $msg = "<span class='success'>Course Inserted Successfully</span>";
               return $msg;
               }else{
               	$msg = "<span class='error'>Course Not Inserted</span>";
               return $msg;
               }
        }

	}

	public function getAllProduct(){

        $query="SELECT * FROM course";
          $result=$this->db->select($query);
          return $result;
	}

	public function getProById($id){
		$query="SELECT * FROM course WHERE  c_id= '$id'";
          $result=$this->db->select($query);
          return $result;
	}
	public function courseUpdate($data,$id){
	  $c_name = mysqli_real_escape_string($this->db->link,$data['c_name']);
    $credit = mysqli_real_escape_string($this->db->link,$data['credit']);
    
     if ($c_name=="" || $credit=="") {
          $msg="<span class='error'>Fields Must Not Be Empty</span>";
            return $msg;
        }

                 else{

        	      
        	        $query="UPDATE course
        	                SET 
        	                c_name='$c_name',
        	                credit='$credit'
                          
        	                WHERE c_id='$id'";

        	          $updated_row=$this->db->update($query);
                     if ($updated_row) {
                     $msg = "<span class='success'>Product Updated Successfully</span>";
                     return $msg;
                     }else{
               	     $msg = "<span class='error'>Product Not Updated</span>";
                     return $msg;
                          }
                   }
    }   

            


	

	public function delProById($id){
            $query="SELECT * FROM course WHERE c_id='$id'";
            $getData=$this->db->select($query);
            if ($getData) {
            	while ($delImg=$getData->fetch_assoc()) {
            		
            	}
            }

            $delquery="DELETE FROM course WHERE c_id='$id'";
            $deldata=$this->db->delete($delquery);
            if ($deldata) {
                $msg = "<span class='success'>Course Deleted Successfully</span>";
                return $msg; 
              }else{
                 $msg = "<span class='success'>Course Not Deleted </span>";
                 return $msg; 
                    }


           }




           public function msgFromContact($id){
            $query="SELECT * FROM contact";
            $getMsg=$this->db->select($query);

           }

           


}

?>