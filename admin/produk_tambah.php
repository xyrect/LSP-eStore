<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Product
      <small>Add New Product</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-12">       
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Add Product</h3>
            <a href="produk.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Back</a> 
          </div>
          <div class="box-body">

            <form action="produk_act.php" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control" name="nama" required="required" placeholder="Enter name ..">
              </div>

              <div class="form-group">
                <label>Product Category</label>
                <div class="row">
                  <div class="col-lg-4">
                    <select name="kategori" required="required" class="form-control">
                        <option value="">- Select Product Category -</option>
                      <?php 
                      include '../koneksi.php';
                      $data = mysqli_query($koneksi,"SELECT * FROM kategori");
                      while($d = mysqli_fetch_array($data)){
                        ?>
                        <option value="<?php echo $d['kategori_id']; ?>"><?php echo $d['kategori_nama']; ?></option>
                        <?php 
                      }
                      ?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Price</label>
                <div class="row">
                  <div class="col-lg-4">
                    <input type="number" class="form-control" name="harga" required="required" placeholder="Enter price ..">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Description</label>
                <textarea name="keterangan" class="form-control textarea" required="required" style="resize: none" rows="10"></textarea>
              </div>

              <div class="form-group">
                <label>Product Weight (gram)</label>
                <div class="row">
                  <div class="col-lg-4">
                    <input type="number" class="form-control" name="berat" required="required" placeholder="Enter weight ..">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Stock Amount</label>
                <div class="row">
                  <div class="col-lg-4">
                    <input type="number" class="form-control" name="jumlah" required="required" placeholder="Enter amount ..">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Photo 1 (Main Photo)</label>
                <input type="file" name="foto1">
              </div>

              <div class="form-group">
                <label>Photo 2</label>
                <input type="file" name="foto2">
              </div>

              <div class="form-group">
                <label>Photo 3</label>
                <input type="file" name="foto3">
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