<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="webstyle.css">
    <title>Document</title>
<!-- <new> -->
    <script>

function Student_link()
{
     location.href = "Student_login.php";
} 

function Tutor_link()
{
     location.href = "Tutor_login.php";
} 

</script>
<!-- </new> -->
</head>
<body>
<nav class="navbar navbar-expand-sm grey"> <!-- Navigation Bar -->
  <div class="container-fluid">
    <a class="navbar-brand" href="/projects/website/TrevonDiggs/Website/Tutor_student.phpd"> <!-- Logo -->
        <img src="logo.png" alt="Company Logo" style="width:99px; height:60px"> 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- <New> -->
<div class="container mt-3">
  <center>
    <h2>Hello, are you a student or tutor?</h2>
  </center>
  <div class="d-grid gap-3">
    <button class="btn btn-primary btn-block" type="button" onclick="Student_link()">Student</button>
    <button class="btn btn-primary btn-block" type="button" onclick="Tutor_link()">Tutor</button>
  </div>
</div>
<!-- </New> -->
</body>
</html>