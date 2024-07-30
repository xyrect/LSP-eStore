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

            <?php 
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"select * from produk where produk_id='$id'");
            while($d = mysqli_fetch_array($data)){
              ?>

              <form action="produk_update.php" method="post" enctype="multipart/form-data">

                <div class="form-group">
                  <label>Product Name</label>
                  <input type="hidden" name="id" value="<?php echo $d['produk_id']; ?>">
                  <input type="text" class="form-control" name="nama" required="required" placeholder="Enter name .." value="<?php echo $d['produk_nama']; ?>">
                </div>

                <div class="form-group">
                  <label>Product Category</label>
                  <div class="row">
                    <div class="col-lg-4">
                      <select name="kategori" required="required" class="form-control">
                        <option value="">- Select Product Category -</option>
                        <?php 
                        include '../koneksi.php';
                        $kategori = mysqli_query($koneksi,"SELECT * FROM kategori");
                        while($k = mysqli_fetch_array($kategori)){
                          ?>
                          <option <?php if($k['kategori_id'] == $d['produk_kategori']){echo "selected='selected'";} ?> value="<?php echo $k['kategori_id']; ?>"><?php echo $k['kategori_nama']; ?></option>
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
                      <input type="number" class="form-control" name="harga" required="required" placeholder="Enter price .." value="<?php echo $d['produk_harga']; ?>">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label>Description</label>
                  <textarea name="keterangan" class="form-control textarea" required="required" style="resize: none" rows="10"><?php echo $d['produk_keterangan']; ?></textarea>
                </div>

                <div class="form-group">
                  <label>Product Weight (gram)</label>
                  <div class="row">
                    <div class="col-lg-4">
                      <input type="number" class="form-control" name="berat" required="required" placeholder="Input weight .." value="<?php echo $d['produk_berat']; ?>">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label>Stock Amount</label>
                  <div class="row">
                    <div class="col-lg-4">
                      <input type="number" class="form-control" name="jumlah" required="required" placeholder="Enter amount .." value="<?php echo $d['produk_jumlah']; ?>">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label>Photo 1 (Main Photo)</label>
                  <input type="file" name="foto1">

                  <?php if($d['produk_foto1'] == ""){ ?>
                    <img src="../gambar/sistem/produk.png" style="width: 120px;height: auto">
                  <?php }else{ ?>
                    <img src="../gambar/produk/<?php echo $d['produk_foto1'] ?>" style="width: 120px;height: auto">
                  <?php } ?>

                  <br/>
                  <small class="text-muted">Leave it blank if you don't want to change the photo.</small>

                </div>

                <div class="form-group">
                  <label>Photo 2</label>
                  <input type="file" name="foto2">

                  <?php if($d['produk_foto2'] == ""){ ?>
                    <img src="../gambar/sistem/produk.png" style="width: 120px;height: auto">
                  <?php }else{ ?>
                    <img src="../gambar/produk/<?php echo $d['produk_foto2'] ?>" style="width: 120px;height: auto">
                  <?php } ?>

                  <br/>
                  <small class="text-muted">Leave it blank if you don't want to change the photo.</small>

                </div>

                <div class="form-group">
                  <label>Photo 3</label>
                  <input type="file" name="foto3">

                  <?php if($d['produk_foto3'] == ""){ ?>
                    <img src="../gambar/sistem/produk.png" style="width: 120px;height: auto">
                  <?php }else{ ?>
                    <img src="../gambar/produk/<?php echo $d['produk_foto3'] ?>" style="width: 120px;height: auto">
                  <?php } ?>

                  <br/>
                  <small class="text-muted">Leave it blank if you don't want to change the photo.</small>

                </div>

                <div class="form-group">
                  <input type="submit" class="btn btn-sm btn-primary" value="Save">
                </div>

              </form>

              <?php 
            }
            ?>

          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>