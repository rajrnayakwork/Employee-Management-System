<?php require '../Controller/UserController.php'; ?>
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
                    <a class="nav-link active" aria-current="page" href="">Employees</a>
                    <a class="nav-link" href="ViewDepartments.php">Departments</a>
                </div>
                </div>
            </div>
        </nav>

        <br><br><br>
        <h1 class="d-flex justify-content-center">Employees page :-</h1>
        <br><br><br>
        <a class="d-flex justify-content-center" href="AddEmployee.php"><button type="submit" class="btn btn-primary">Add Employee</button></a><br>
        <table class="table table-bordered border-primary w-75 p-3 mx-auto">
            <thead>
                <tr>
                    <th scope="col">S.R.No</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">City</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>raj</td>
                    <td>nayak</td>
                    <td>23</td>
                    <td>male</td>
                    <td>kalol</td>
                </tr>
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