<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Category
      <small>Add New Category</small>
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
            <h3 class="box-title">Add New Category</h3>
            <a href="kategori.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Back</a> 
          </div>
          <div class="box-body">
            <form action="kategori_act.php" method="post">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="nama" required="required" placeholder="Enter category name..">
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