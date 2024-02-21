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
                    <a class="nav-link" href="ViewEmployees.php">Employees</a>
                    <a class="nav-link" href="ViewDepartments.php">Departments</a>
                </div>
                </div>
            </div>
        </nav>
        <!-- ------------------------------------------------------------------------------------ -->
        <br><br><br>
        <h1 class="d-flex justify-content-center">Add Users page :-</h1><br><br><br>
        <form class="w-50 p-3 mx-auto" method="POST" action="">
            <div class="mb-3">
                <label for="InputFirstName" class="form-label">First Name</label>
                <input type="text" name="First_name" class="form-control" id="InputFirstName" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="InputLastName" class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="InputLastName" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="InputAge" class="form-label">Age</label>
                <input type="number" name="age" class="form-control" id="InputAge">
            </div>
            <div class="mb-3">
                <label for="InputCity" class="form-label">City</label>
                <input type="text" name="city" class="form-control" id="InputCity" aria-describedby="emailHelp">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male">
                <label class="form-check-label" for="exampleRadios1">
                    Male
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
                <label class="form-check-label" for="exampleRadios2">
                    Female
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="exampleRadios3" value="other">
                <label class="form-check-label" for="exampleRadios3">
                    LGBTQ+
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!-- ------------------------------------------------------------------------------------ -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>