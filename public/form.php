<?php
$type = $_GET['type'] ?? 'visitor_in';
$type_label = ucfirst(str_replace('_', ' ', $type));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $type_label; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="card shadow">
      <div class="card-body">
        <h3 class="card-title mb-4"><?php echo $type_label; ?></h3>
        <form method="POST" action="submit.php">
          <input type="hidden" name="type" value="<?php echo $type; ?>">
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="company" class="form-label">Company (optional)</label>
            <input type="text" class="form-control" id="company" name="company">
          </div>
          <div class="mb-3">
            <label for="staff" class="form-label">Select Staff</label>
            <select class="form-select" name="staff" id="staff" required>
              <?php
              $staff_list = ["John Smith", "Jane Doe", "Mike Johnson"];
              foreach ($staff_list as $staff) {
                echo "<option value='{$staff}'>{$staff}</option>";
              }
              ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="purpose" class="form-label">Purpose of Visit</label>
            <input type="text" class="form-control" id="purpose" name="purpose">
          </div>
          <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
