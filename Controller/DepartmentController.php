<?php require '../connection.php';
    class DepartmentController {
        

        function validation($post){
            $error = [];
            if(!(empty($post['department_name']))){
                if (!preg_match ("/^[a-zA-Z-‘ ]*$/",$post['department_name'])){  
                    $error += ['name' => 'Only alphabets and white space are allowed.'];
                }
            }else{
                $error += ['name' => 'please enter the department name.'];
            }
            if(!(empty($post['department_location']))){
                if (!preg_match ("/^[a-zA-Z-‘ ]*$/",$post['department_location'])){  
                    $error += ['location' => 'Only alphabets and white space are allowed.'];
                }
            }else{
                $error += ['location' => 'please enter the department location.'];
            }
            return $error;
        }

        function addDepartment($post){
            $error = $this->validation($post);
            if (!empty($error)) {
                return $error;
            }else{
                $name = $post['department_name'];
                $location = $post['department_location'];
                $sql = "INSERT INTO departments(name,location) VALUES('$name','$location')";
                global $connection;
                $result = mysqli_query($connection,$sql);
                if($result){
                    header('location:../View/ViewDepartments.php');
                }else{
                    echo 'data not inserted';
                }
            }
        }

        function viewDepartment(){
            $sql = "SELECT * FROM departments";
            global $connection;
            $result = mysqli_query($connection,$sql);
            if($result){
                return $result;
            }else{
                echo 'data not fetched';
            }
        }

        function editDepartment($id){
            $sql = "SELECT * FROM departments WHERE id = $id";
            global $connection;
            $result = mysqli_query($connection,$sql);
            if($result){
                $row = mysqli_fetch_array($result);
                return $row;
            }else{
                echo 'data not fetched';
            }
        }

        function updateDepartment($post){
            if(!(empty($post['department_id'])) && !(empty($post['department_name'])) && !(empty($post['department_location']))){
                $id = $post['department_id'];
                $name = $post['department_name'];
                $location = $post['department_location'];
                $sql = "UPDATE departments SET name = '$name', location = '$location' WHERE id = $id";
                global $connection;
                $result = mysqli_query($connection,$sql);
                if($result){
                    header('location:../View/ViewDepartments.php');
                }else{
                    echo 'data not inserted';   
                }
            }
        }

        function deleteDepartment($id){
            $sql = "DELETE FROM departments WHERE id = $id";
            global $connection;
            $result = mysqli_query($connection,$sql);
            if($result){
                header('location:../View/ViewDepartments.php');
            }else{
                echo 'data not deleted';
            }
        }
    }

?>