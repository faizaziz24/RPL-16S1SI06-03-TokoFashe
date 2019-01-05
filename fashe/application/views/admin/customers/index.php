<main class="main">
<!-- Breadcrumb-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">Customer</li>
  <div class="ml-auto">
      <a class="btn btn-sm btn-success" href="<?php echo base_url(); ?>admin/customers/create"><i class="fa fa-plus"></i> New Customer</a>
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
            <i class="fa fa-user-o"></i>Customer Table</div>
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
              <?php if($this->session->flashdata('customer_created')): ?>
                  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('customer_created').'</p>'; ?>
              <?php endif; ?>

            <table class="table table-responsive-sm table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Created</th>
                </tr>
              </thead>
              <tbody>

                <?php $count=0; foreach ($customers as $customer) : ?>
                <tr>
                  <td><?php echo ++$count; ?></td>
                  <td><?php echo $customer['customer_name']; ?></td>
                  <td><?php echo $customer['customer_phone']; ?></td>                 
                  <td><?php echo $customer['customer_email']; ?></td>
                  <td><?php echo $customer['created_at']; ?></td>
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