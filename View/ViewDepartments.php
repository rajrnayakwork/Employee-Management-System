<?php require '../Controller/DepartmentController.php'; ?>
<?php
    $department = new DepartmentController();
    $departments = $department->viewDepartment();
    if($_SERVER['REQUEST_METHOD']==='GET'){
        if (isset($_GET['deleteid'])) {
            $department->deleteDepartment($_GET['deleteid']);
        }
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
                        <a class="nav-link" href="ViewUsers.php">Users</a>
                        <a class="nav-link" href="ViewEmployees.php">Employees</a>
                        <a class="nav-link active" aria-current="page" href="">Departments</a>
                    </div>
                </div>
            </div>
        </nav>

        <br><br><br>
        <h1 class="d-flex justify-content-center">Department page :-</h1>
        <br><br><br>
        <a class="d-flex justify-content-center" href="AddDepartment.php"><button type="submit" class="btn btn-primary">Add Department</button></a><br>
        <table class="table table-bordered border-primary w-50 p-3 mx-auto">
            <thead>
                <tr>
                    <th scope="col">S.R.No</th>
                    <th scope="col">Department Name</th>
                    <th scope="col">Location</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($departments as $index => $department) {
                ?>
                <tr>
                    <th scope="row"><?php echo $index + 1; ?></th>
                    <td><?php echo $department['name']; ?></td>
                    <td><?php echo $department['location']; ?></td>
                    <td>
                        <a href="EditDepartment.php?editid=<?php echo $department['id']; ?>"><button type="submit" name="edit" class="btn btn-success">Edit</button></a>
                        <a href="ViewDepartments.php?deleteid=<?php echo $department['id']; ?>"><button type="submit" name="delete" class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>


<!-- <nav aria-label="Page navigation example">
        <ul class="pagination">
        <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        </a>
        </li>
        </ul>
        </nav> -->