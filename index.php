<?php 
require 'db.php';
$dbresults = $connection->query('select * from employees');
$employees = $dbresults->fetchAll(PDO::FETCH_OBJ);

 ?>
<?php require 'partials/header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Employees Records</h2>
    </div>
    <div class="card-body">
    <?php if (count($employees)) : ?>
      <table class="table table-bordered">
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Actions</th>
        </tr>
        
        <?php foreach($employees as $employee) :?>
        <tr>
          <td><?php echo $employee->id; ?></td>
          <td><?php echo $employee->name; ?></td>
          <td><?php echo $employee->email; ?></td>
          <td>
            <a href="/edit.php?id=<?php echo $employee->id; ?>" class="btn btn-info">Edit</a>
            <a onclick="return confirm('Are you sure you want to delete this entry?')" href="/delete.php?id=<?php echo $employee->id; ?>" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
     </table>
   <?php else :  ?>
    <h2>No records found in database. Create a new employee <a class="btn btn-info" href="/create.php">here</a></h2>
   <?php endif; ?>

      <a href="/create.php" class="btn btn-link">Create a Employee Record</a>
    </div>
  </div>

</div>
<?php require 'partials/footer.php'; ?>
