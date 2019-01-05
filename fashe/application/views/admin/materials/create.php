<main class="main">
<!-- Breadcrumb-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="<?php echo base_url(); ?>admin/materials">Material</a>
  </li>
  <li class="breadcrumb-item active">New Material</li>
</ol>

<div class="container-fluid">
  <div class="animated fadeIn">
    <!-- /.card-->
    <div class="row">
      <!-- /.col-->
      <div class="col-lg-12">

	    <div class="card">
	      <div class="card-header">
	        <strong>Material</strong> Form</div>
	      <div class="card-body">
			<?php echo form_open('admin/materials/create'); ?>
	          <div class="form-group row">
	            <label class="col-md-3 col-form-label" for="hf-name">Name</label>
	            <div class="col-md-9">
	              <input class="form-control" type="text" name="title" placeholder="Enter Title">
	            </div>
	          </div>
	          <div class="form-group row">
	            <label class="col-md-3 col-form-label" for="hf-body">Body</label>
	            <div class="col-md-9">
	              <textarea  id="editor1" name="description" class="form-control" style="height: 200px;" placeholder="Enter Description"></textarea>	              
	            </div>
	          </div>
	          <div class="form-group row">
	            <label class="col-md-3 col-form-label" for="hf-body">Photo</label>
	            <div class="col-md-9">
	            	<input type="file" name="userfile" size="20">
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