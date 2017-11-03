<?php 
require 'db.php';
$id = $_GET['id'];
$dbresults = $connection->query("SELECT * FROM  employees where id=$id");
$employee = $dbresults->fetch(PDO::FETCH_OBJ);


if ( isset($_POST['name'])  && isset($_POST['email']) ) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sql = "UPDATE employees SET name='$name', email='$email' WHERE id=$id";
  if ($connection->query($sql) ) {
    header('Location: /');
  }
}

 ?>
<?php require 'partials/header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Edit Employee</h2>
    </div>
    <div class="card-body">
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input value="<?php echo $employee->name; ?>" type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input value="<?php echo $employee->email; ?>" type="text" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success">Update Employee</button>
        </div>
      </form>
      <a href="/" class="btn btn-link">Home Page</a>
    </div>
  </div>
</div>
<?php require 'partials/footer.php'; ?>
