<?php
use rezaul\karim\connection;
class institute{


    public function departmentInfo($data){

       


        $department_name = $data['department-name'];
        $department_establish_date = $data['department-establish-date'];
        $department_batch = $data['department-batch'];
        $department_chairmen_name = $data['department-chairmen'];

        $sql="INSERT INTO `departments-info`(`department-name`, `department-establish-date`, `department-batch`,`department-chairmen`) VALUES ('$department_name','$department_establish_date','$department_batch','$department_chairmen_name')";
        
        if (mysqli_query(connection::dbConnection(),$sql)) {
             
          $sms = 'Department information save successfully';
          return $sms;
             
            
        }else{
            die('query problem'.mysqli_error(connection::dbConnection()));
            
        }
    }//end method

   









}//end class  




?>