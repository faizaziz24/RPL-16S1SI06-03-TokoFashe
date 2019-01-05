<main class="main">
  <!-- Breadcrumb-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>
  </ol>
  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-12 col-lg-4">
          <div class="card">
            <div class="card-body p-3 d-flex align-items-center">
              <i class="fa fa-user bg-primary p-3 font-2xl mr-3"></i>
              <div>
                <div class="text-value-sm text-primary"><?php echo $sum_customers_all; ?></div>
                <div class="text-muted text-uppercase font-weight-bold small">Customers</div>
              </div>
            </div>
            <div class="card-footer px-3 py-2">
              <a class="btn-block text-muted d-flex justify-content-between align-items-center" href="<?php echo base_url(); ?>admin/customers">
                <span class="small font-weight-bold">View More</span>
                <i class="fa fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
</div>