<?php include 'partials/headerAdmin.php' ?>

<div class="container">
  <div class="alert alert-primary" role="alert">
    <b>System Users</b>
  </div>

  <hr>
  <h3>Admins</h3>
  <hr>

  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Admin Id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($data as $user) {?>
      <?php if ($user->type_id == 1) {?>
      <tr>
        <th scope="row"><?php echo $user->id; ?></th>
        <td><?php echo $user->fname; ?></td>
        <td><?php echo $user->lname; ?></td>
        <td><?php echo $user->email; ?></td>
      </tr>
      <?php } ?>
      <?php }?>
    </tbody>
  </table>

  <hr>
  <h3>Customers</h3>
  <hr>

  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Customer Id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($data as $user) {?>
      <?php if ($user->type_id == 2) {?>
      <tr>
        <th scope="row"><?php echo $user->id; ?></th>
        <td><?php echo $user->fname; ?></td>
        <td><?php echo $user->lname; ?></td>
        <td><?php echo $user->email; ?></td>
        <td>
          <a href="<?php echo base_url().'index.php/Admin/makeAdmin/'; ?><?php echo $user->id; ?>"><button type="button" class="btn btn-success">Make Admin</button></a>
        </td>
      </tr>
      <?php } ?>
      <?php }?>
    </tbody>
  </table>

</div>

<?php include 'partials/footerAdmin.php' ?>
