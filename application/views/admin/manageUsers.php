<?php include 'partials/headerAdmin.php' ?>

<div class="container">
  <div class="alert alert-primary" role="alert">
    <b>Manage Users</b>
  </div>

  <hr>
  <h3>Users</h3>
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
      <tr>
        <th scope="row"><?php echo $user->id; ?></th>
        <td><?php echo $user->fname; ?></td>
        <td><?php echo $user->lname; ?></td>
        <td><?php echo $user->email; ?></td>
        <td>
          <?php if($user->id != $this->session->userdata('user_id')){ ?>
            <a href="<?php echo base_url().'index.php/Admin/editUser/'; ?><?php echo $user->id; ?>"><button type="button" class="btn btn-success">Edit</button></a>
            <a href="<?php echo base_url().'index.php/Admin/deleteUser/'; ?><?php echo $user->id; ?>"><button type="button" class="btn btn-danger">Delete</button></a>
          <?php }else{ ?>
            <a href="<?php echo base_url().'index.php/Admin/editUser/'; ?><?php echo $user->id; ?>"><button type="button" class="btn btn-success">Edit</button></a>
          <?php } ?>
        </td>
      </tr>
      <?php }?>
    </tbody>
  </table>
</div>

<!-- <div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->

<?php include 'partials/footerAdmin.php' ?>
