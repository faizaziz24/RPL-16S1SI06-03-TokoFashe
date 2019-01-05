<main class="main">
<!-- Breadcrumb-->
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/ages">Age</a></li>
  <li class="breadcrumb-item active">New Age</li>
</ol>

<div class="container-fluid">
  <div class="animated fadeIn">
    <!-- /.card-->
    <div class="row">
      <!-- /.col-->
      <div class="col-lg-12">

	    <div class="card">
	      <div class="card-header">
	        <strong>Age</strong> Form</div>
	      <div class="card-body">
			<?php echo form_open('admin/ages/create'); ?>
	          <div class="form-group row">
	            <label class="col-md-3 col-form-label" for="hf-email">Name</label>
	            <div class="col-md-9">
	              <input class="form-control" type="text" name="age" placeholder="Enter Name">
	            </div>
	          </div>
	          <?php echo validation_errors(); ?>
	      </div>
	      <div class="card-footer">
	        <button class="btn btn-sm btn-primary" type="submit">
	          <i class="fa fa-dot-circle-o"></i> Submit</button>
	      </div>
	      <?php echo form_close(); ?>
	    </div>

      </div>
      <!-- /.col-->
    </div>
  </div>
</div>
</main>
</div>