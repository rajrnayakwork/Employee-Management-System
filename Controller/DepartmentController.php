<?php require '../Connection.php';
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
            $database = new Connection();
            $error = $this->validation($post);
            if (!empty($error)) {
                return $error;
            }else{
                $name = $post['department_name'];
                $location = $post['department_location'];
                $sql = "INSERT INTO departments(name,location) VALUES('$name','$location')";
                $result = $database->queryExecute($sql);
                if($result){
                    header('location:../View/ViewDepartments.php');
                }else{
                    echo 'data not inserted';
                }
            }
        }

        function viewDepartment(){
            $database = new Connection();
            $sql = "SELECT * FROM departments";
            $result = $database->queryExecute($sql);
            if($result){
                return $result;
            }else{
                echo 'data not fetched';
            }
        }

        function editDepartment($id){
            $database = new Connection();
            $sql = "SELECT * FROM departments WHERE id = $id";
            $result = $database->queryExecute($sql);
            if($result){
                $row = mysqli_fetch_array($result);
                return $row;
            }else{
                echo 'data not fetched';
            }
        }

        function updateDepartment($post){
            $database = new Connection();
            if(!(empty($post['department_id'])) && !(empty($post['department_name'])) && !(empty($post['department_location']))){
                $id = $post['department_id'];
                $name = $post['department_name'];
                $location = $post['department_location'];
                $sql = "UPDATE departments SET name = '$name', location = '$location' WHERE id = $id";
                $result = $database->queryExecute($sql);
                if($result){
                    header('location:../View/ViewDepartments.php');
                }else{
                    echo 'data not inserted';   
                }
            }
        }

        function deleteDepartment($id){
            $database = new Connection();
            $sql = "DELETE FROM departments WHERE id = $id";
            $result = $database->queryExecute($sql);
            if($result){
                header('location:../View/ViewDepartments.php');
            }else{
                echo 'data not deleted';
            }
        }
    }

?>