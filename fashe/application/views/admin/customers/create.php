<main class="main">
<!-- Breadcrumb-->
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/customers">Customer</a></li>
  <li class="breadcrumb-item active">Data Customer</li>
</ol>

<div class="container-fluid">
  <div class="animated fadeIn">
    <!-- /.card-->
    <div class="row">
      <!-- /.col-->
      <div class="col-lg-12">

	    <div class="card">
	      <div class="card-header">
	        <strong>Customer</strong> Form</div>
	      <div class="card-body">
			<?php echo form_open('admin/customers/create'); ?>
	          <div class="form-group row">
	            <label class="col-md-3 col-form-label" for="hf-email">Name</label>
	            <div class="col-md-9">
	              <input class="form-control" type="text" name="name" placeholder="Enter Name">
	            </div>
	          </div>
	          <div class="form-group row">
	            <label class="col-md-3 col-form-label" for="hf-email">Phone</label>
	            <div class="col-md-9">
	              <input class="form-control" type="text" name="phone" placeholder="Enter Phone">
	            </div>
	          </div>
	          <div class="form-group row">
	            <label class="col-md-3 col-form-label" for="hf-email">Email</label>
	            <div class="col-md-9">
	              <input class="form-control" type="email" name="email" placeholder="Enter Email">
	            </div>
	          </div>
	          <div class="form-group row">
	            <label class="col-md-3 col-form-label" for="hf-password">Password</label>
	            <div class="col-md-9">
	              <input class="form-control" type="password" name="password" placeholder="Enter Password">
	            </div>
	          </div>
	          <div class="form-group row">
	            <label class="col-md-3 col-form-label" for="hf-password">Confirm Password</label>
	            <div class="col-md-9">
	              <input class="form-control" type="password" name="password2" placeholder="Confirm Password">
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