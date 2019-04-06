<?php include 'partials/headerAdmin.php' ?>

<div class="container">
	<div class="row">

    <div class="col-md-10">
      <?php echo form_open_multipart('Admin/addProject'); ?>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Project Name</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Project Name" name="pname">
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">Project Type</label>
            <select id="inputState" class="form-control" name="ptype">
              <option selected>Road</option>
              <option>Property</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Client</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Client Name, Company" name="client">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Location</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Address & Company" name="location">
        </div>
        <div class="form-group">
          <label for="inputCity">Date Completed</label>
          <input type="date" class="form-control" id="inputCity" placeholder="Completed Date" name="date">
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Choose Image</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file_name">
        </div>
        <button type="submit" class="btn btn-primary" name="upload" value="upload">Save</button>
      <?php echo form_close(); ?>
    </div>

	</div>
</div>

<?php include 'partials/footerAdmin.php' ?>
