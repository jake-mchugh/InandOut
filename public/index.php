<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome | Sign In Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html { height: 100%; margin: 0; }
    .split-left { width: 40%; background-color: #f8f9fa; padding: 40px; display: flex; align-items: center; justify-content: center; }
    .split-right { width: 60%; padding: 40px; display: flex; flex-direction: column; justify-content: center; background-color: #ffffff; }
    .container-full { display: flex; height: 100vh; }
    .logo-placeholder { width: 80%; height: auto; border: 2px dashed #ccc; padding: 20px; text-align: center; font-size: 1.2rem; color: #999; }
    .card-option { margin-bottom: 20px; }
  </style>
</head>
<body>
  <div class="container-full">
    <div class="split-left">
      <div class="logo-placeholder">
        Customer Logo<br>(Drag image here or upload later)
      </div>
    </div>
    <div class="split-right">
      <h2 class="mb-4 text-center">Welcome to Andor Group</h2>
      <div class="row">
        <div class="col-md-6 card-option">
          <a href="form.php?type=visitor_in" class="btn btn-primary w-100 p-3">Visitor Sign In</a>
        </div>
        <div class="col-md-6 card-option">
          <a href="form.php?type=visitor_out" class="btn btn-outline-primary w-100 p-3">Visitor Sign Out</a>
        </div>
        <div class="col-md-6 card-option">
          <a href="form.php?type=staff_in" class="btn btn-success w-100 p-3">Staff Sign In</a>
        </div>
        <div class="col-md-6 card-option">
          <a href="form.php?type=staff_out" class="btn btn-outline-success w-100 p-3">Staff Sign Out</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
