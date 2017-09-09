<html>
    <head>
        <title>Registration Form</title>
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/material-dashboard.css"> 
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        
        <div class="col-lg-4 col-md-4 col-sm-4 container-fluid">
            <div class="card" style="background-color: rgba(255, 255, 255, 2)">
                <div class="card-header">
                <p style="text-align: center; color: white;">Registration</p>
                </div>
            <div class="card-content">

            <form role="form" action="dashboard.php" method="POST">

                <div class="form-group label-floating">
                    <label for="username" class="control-label">Username</label>
                    <input type="text" id="username" class="form-control" name="username" value="" autofocus>
                </div>

                <div class="form-group label-floating">
                    <label for="password" class="control-label">Password</label>
                    <input type="password" name="password" value="" class="form-control" id="password">
                </div>

                <div class="form-group label-floating">
                    <label for="confirm_password" class="control-label">Confirm Password</label>
                    <input type="password" name="confirm_password" value="" class="form-control" id="confirm_password">
                </div>

                <div class="form-group label-floating">
                    <label for="firstname" class="control-label">Firstname</label>
                    <input type="text" name="firstname" value="" class="form-control" id="firstname">
                </div>

                <div class="form-group label-floating">
                    <label for="middlename" class="control-label">Middlename</label>
                    <input type="text" name="middlename" value="" class="form-control" id="middlename">
                </div>

                <div class="form-group label-floating">
                    <label for="lastname" class="control-label">Lastname</label>
                    <input type="text" name="lastname" value="" class="form-control" id="lastname">
                </div>

                <div class="form-group label-floating">
                    <label for="address" class="control-label">Address</label>
                    <input type="text" name="address" value="" class="form-control" id="address">
                </div>
                
                <div class="form-group label-floating">
                    <label for="contact_number" class="control-label">Contact#</label>
                    <input type="tel" name="contact_number" value="" class="form-control" id="contact_number">
                </div>

                <div>
                    <button type="submit" name="submit" class="btn btn-info btn-block"><i class="fa fa-sign-in"></i> <b>Login</b></button>
                </div>
            </form>
        </div>        

        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/material.min.js"></script>
        <script src="js/material-dashboard.js"></script>

    </body>
</html>