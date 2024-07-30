<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Delete Category
      <small>Data Category</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-6">       
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Are you sure you want to delete the category?</h3>
          </div>
          <div class="box-body">
            <p>By deleting, all product data using this category will be redirected to "Uncategorized".</p>
            <br/>
            <a href="kategori.php" class="btn btn-danger btn-sm"><i class="fa fa-reply"></i> &nbsp Back</a> 
            <?php 
            $idd = $_GET['id'];
            ?>
            <a href="kategori_hapus.php?id=<?php echo $idd; ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-check"></i> &nbsp Delete</a> 
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>