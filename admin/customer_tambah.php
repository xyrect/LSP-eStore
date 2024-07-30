<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Customer
      <small>Add New Customer</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-6 col-lg-offset-3">       
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Add New Customer</h3>
            <a href="customer.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Back</a> 
          </div>
          <div class="box-body">
            <form action="customer_act.php" method="post">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="nama" required="required" placeholder="Enter customer name..">
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" required="required" placeholder="Enter customer email..">
              </div>

              <div class="form-group">
                <label>No. HP</label>
                <input type="number" class="form-control" name="hp" required="required" placeholder="Enter customer's mobile number..">
              </div>

              <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="alamat" required="required" placeholder="Enter customer address..">
              </div>

               <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required="required" placeholder="Enter customer password..">
              </div>

              <div class="form-group">
                <input type="submit" class="btn btn-sm btn-primary" value="Save">
              </div>
            </form>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>