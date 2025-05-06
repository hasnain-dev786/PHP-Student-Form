
<?php


include "connect.php";

if(isset($_POST['submit'])){

$sname =   $_POST['sname'];
$batch =   $_POST['batch'];
$course = $_POST['course'];

$sql ="INSERT INTO `abc`.`data` (`sname`, `batch`, `course`) VALUES ('$sname', '$batch', '$course');"; 
$result = mysqli_query($connect, $sql);

if($result){
  header('location:display.php');
}
else{
  die(mysqli_connect_error($connect));

}

mysqli_close($connect);

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">  
  
  
  
  <style>
    body {
      background-color: #f0f9fa;
    }

    .comment-box {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      padding: 30px;
      max-width: 600px;
      margin: 50px auto;
    }

    .form-control:focus {
      border-color: #86b7fe;
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="comment-box">
      <h4 class="mb-4 text-center">Student Detail</h4>
      <form id="commentForm" method="post">
        <div class="mb-3">
          <label for="username" class="form-label">Student Name</label>
          <input type="text" class="form-control" name="sname" id="username" placeholder="Enter Student Name">
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Batch</label>
          <input type="text" class="form-control" name="batch" id="username" placeholder="Enter Your Batch">
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Course</label>
          <input type="text" class="form-control" name="course" id="username" placeholder="Enter Your Course">
        </div>
        <div class="d-grid">
          <button type="submit" name="submit" class="btn btn-primary">Submit Comment</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
