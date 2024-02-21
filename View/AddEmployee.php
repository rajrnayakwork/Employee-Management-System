<?php require '../Controller/EmployeeController.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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

    <br><br><br>
    <h1 class="d-flex justify-content-center">Add Department Page :-</h1><br><br><br>
    <form class="w-50 p-3 mx-auto" method="POST" action="">
        <div class="mb-3">
            <label for="InputName" class="form-label">Department Name</label>
            <input type="text" name="department_name" class="form-control" id="InputName">
        </div>
        <?php if(isset($error['name'])){ ?>
        <div class="alert alert-danger w-50" role="alert">
        <?php echo $error['name']; ?>
        </div>
        <?php } ?>
        <div class="mb-3">
            <label for="InputLocation" class="form-label">Department Location</label>
            <input type="text" name="department_location" class="form-control" id="InputLocation">
        </div>
        <?php if(isset($error['location'])){ ?>
        <div class="alert alert-danger w-50" role="alert">
        <?php echo $error['location']; ?>
        </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </body>
</html>