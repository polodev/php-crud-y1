<?php 
require 'db.php';
$message = '';
if ( isset($_POST['name'])  && isset($_POST['email']) ) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  if ($connection->query("INSERT INTO employees(name, email) VALUES('$name', '$email')") ) {
    $message = 'Data inserted into database successfully. ';
  }
}

 ?>
<?php require 'partials/header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Create a person</h2>
    </div>
    <div class="card-body">

      <?php  if (!empty($message)): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p><?php echo $message; ?></p>
        </div>
      <?php endif; ?>

      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success">Create a Person</button>
        </div>
      </form>
      <a href="/" class="btn btn-link">Home Page</a>
    </div>
  </div>
</div>
<?php require 'partials/footer.php'; ?>
