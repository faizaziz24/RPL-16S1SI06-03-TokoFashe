<main class="main">
<!-- Breadcrumb-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">Slider</li>
  <div class="ml-auto">
      <a class="btn btn-sm btn-success" href="<?php echo base_url(); ?>admin/sliders/create"><i class="fa fa-plus"></i> New Slider</a>
  </div>
</ol>

<div class="container-fluid">
  <div class="animated fadeIn">
    <!-- /.card-->
    <div class="row">
      <!-- /.col-->
      <div class="col-lg-12">

        <div class="card">
          <div class="card-header">
            <i class="nav-icon icon-layers"></i>Slider Table</div>
          <div class="card-body">
            <div class="form-group row">
              <div class="col-md-12">
                <div class="input-group">
                  <span class="input-group-prepend">
                    <button class="btn btn-primary" type="button">
                      <i class="fa fa-search"></i> Search</button>
                  </span>
                  <input class="form-control" id="input1-group2" type="text" name="input1-group2" placeholder="Username">
                </div>
              </div>
            </div>
            
            <!-- Flash messages -->
            <?php if($this->session->flashdata('slider_created')): ?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('slider_created').'</p>'; ?>
            <?php endif; ?>

            <!-- Flash messages -->
            <?php if($this->session->flashdata('slider_deleted')): ?>
                <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('slider_deleted').'</p>'; ?>
            <?php endif; ?>

            <table class="table table-responsive-sm table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Description</th>
                  <th>Created</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                <?php $count=0; foreach ($sliders as $slider) : ?>
                <tr>
                  <td><?php echo ++$count; ?></td>
                  <td><div  class="avatar avatar-lg"><img src="<?php echo base_url(); ?>assets/images/slides/<?php echo $slider['slider_image']; ?>"></div></td>
                  <td><?php echo $slider['slider_name']; ?></td>
                  <td><?php echo $slider['slug']; ?></td>
                  <td><?php echo $slider['slider_body']; ?></td>  
                  <td><?php echo $slider['created_at']; ?></td>
                  <td><a class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>admin/sliders/delete/<?php echo $slider['slider_id']; ?>"><i class="fa fa-ban"></i> Delete</a></td>
                </tr>
                <?php endforeach; ?>

              </tbody>
            </table>
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#">Prev</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </div>
        </div>

      </div>
      <!-- /.col-->
    </div>
  </div>
</div>
</main>
</div>