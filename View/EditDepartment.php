<?php require '../Controller/DepartmentController.php'; ?>
<?php
    $department = new DepartmentController();
    if($_SERVER['REQUEST_METHOD']==='GET'){
        $department = $department->editDepartment($_GET['editid']);
        $id = $department['id'];
        $name = $department['name'];
        $location = $department['location'];
    }
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $department->updateDepartment($_POST);
    }

?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Hello, world!</title>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="">MainDB</a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="ViewUsers.php">View Users</a>
                    <a class="nav-link" href="ViewEmployees.php">View Employees</a>
                    <a class="nav-link" href="ViewDepartments.php">View Departments</a>
                </div>
                </div>
            </div>
        </nav>
        <!-- ------------------------------------------------------------------------------------ -->
        
        <br><br><br>
        <h1 class="d-flex justify-content-center">Edit Department Page :-</h1><br><br><br>
        <form class="w-50 p-3 mx-auto" method="POST" action="">
            <input type="hidden" name="department_id" class="form-control"  value="<?php echo $id; ?>">
            <div class="mb-3">
                <label for="InputName" class="form-label">Department Name</label>
                <input type="text" name="department_name" class="form-control" id="InputName" value="<?php echo $name; ?>">
            </div>
            <div class="mb-3">
                <label for="InputLocation" class="form-label">Department Location</label>
                <input type="text" name="department_location" class="form-control" id="InputLocation" value="<?php echo $location; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- ------------------------------------------------------------------------------------ -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>