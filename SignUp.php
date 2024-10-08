<?php

include('Connection.php');

if (isset($_POST['submit'])) {
    date_default_timezone_set('Asia/Kolkata');

    $uname = $_POST['uname'];
    $upwd = $_POST['upwd'];
    $role = $_POST['role'];
    $added_date = date('Y-m-d h:i:s');

    $sql = "INSERT INTO users (uname, upwd, role, added_date) VALUES (?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $uname, $upwd, $role, $added_date);

        if (mysqli_stmt_execute($stmt)) {
            echo '<h4>Inserted</h4>';
        } else {
            echo "Error: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>SignUp</title>
    <link rel="shortcut icon" href="./Image/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./GlobalStyles.css">
    <link rel="stylesheet" href="./Components.css">
    <!-- aos css -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./SignUp.css">

</head>

<body>


<!-- Registration Form -->
<section>
  <div class="container1 mt-3">
    <h2>Registration Form</h2> 
    <form method="post">
      <div class="mb-3 mt-3">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="uname">
      </div>
      <div class="mb-3">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="upwd">
      </div>
      <div class="mb-3">
        <label for="role">Role:</label>
        <select class="form-control" name="role">
          <option value="" disabled selected>Select Role</option>
          <option value="Admin">Admin</option>
          <option value="Customer">Customer</option>
          <option value="Outer Clove Staff">Outer Clove Staff</option>
        </select>
      </div>
      <br>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
    <form action="login.php" method="post">
      <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
    </form>

    <br> <br>
  </div>
</section>


<!--End Registeration Form-->


</body> 
</html>