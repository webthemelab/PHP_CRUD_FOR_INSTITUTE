<?php
use  rezaul\karim\connection;
class instituteView{
    public function viewInstituteInfo(){
        $sql="SELECT *FROM `departments-info`";



		  if(mysqli_query(connection::dbConnection(),$sql)){
		     $institute_info = mysqli_query(connection::dbConnection(),$sql);
			 return $institute_info;
		
			 
			
		    
		 } else{
		     die('query problem'.mysqli_error(connection::dbConnection()));
		 }
    }
}
?>