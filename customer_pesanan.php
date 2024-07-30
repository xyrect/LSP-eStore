<?php include 'header.php'; ?>

<!-- BREADCRUMB -->
<div id="breadcrumb">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Customer Order</li>
		</ul>
	</div>
</div>
<!-- /BREADCRUMB -->

<div class="section">
	<div class="container">
		<div class="row">
			
			<?php 
			include 'customer_sidebar.php'; 
			?>

			<div id="main" class="col-md-9">
				
				<h4>ORDER</h4>

				<div id="store">
					<div class="row">

						<div class="col-lg-12">

							<?php 
							if(isset($_GET['alert'])){
								if($_GET['alert'] == "gagal"){
									echo "<div class='alert alert-danger'>Image failed to upload!</div>";
								}elseif($_GET['alert'] == "sukses"){
									echo "<div class='alert alert-success'>Order successfully created, please make payment!</div>";
								}elseif($_GET['alert'] == "upload"){
									echo "<div class='alert alert-success'>Payment confirmation has been successfully saved, please wait for confirmation from the admin!</div>";
								}
							}
							?>

							<small class="text-muted">
							All your order / invoice data.
							</small>

							<br/>
							<br/>


							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>NO</th>
											<th>No.Invoice</th>
											<th>Date</th>
											<th>recipient name</th>
											<th>Total Payment</th>
											<th class="text-center">Status</th>
											<th class="text-center">OPTION</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$id = $_SESSION['customer_id'];
										$invoice = mysqli_query($koneksi,"select * from invoice where invoice_customer='$id' order by invoice_id desc");
										while($i = mysqli_fetch_array($invoice)){
											?>
											<tr>
												<td><?php echo $i['invoice_id'] ?></td>
												<td>INVOICE-00<?php echo $i['invoice_id'] ?></td>
												<td><?php echo $i['invoice_tanggal'] ?></td>
												<td><?php echo $i['invoice_nama'] ?></td>
												<td><?php echo "Rp. ".number_format($i['invoice_total_bayar'])." ,-" ?></td>
												<td class="text-center">
													<?php 
													if($i['invoice_status'] == 0){
														echo "<span class='label label-warning'>Waiting for payment</span>";
													}elseif($i['invoice_status'] == 1){
														echo "<span class='label label-default'>Waiting for confirmation</span>";
													}elseif($i['invoice_status'] == 2){
														echo "<span class='label label-danger'>Rejected</span>";
													}elseif($i['invoice_status'] == 3){
														echo "<span class='label label-primary'>Confirmed & In Process</span>";
													}elseif($i['invoice_status'] == 4){
														echo "<span class='label label-warning'>Sent</span>";
													}elseif($i['invoice_status'] == 5){
														echo "<span class='label label-success'>Done</span>";
													}
													?>
												</td>
												<td class="text-center">
													<?php 
													if($i['invoice_status'] == 0){
														?>
														<a class='btn btn-sm btn-primary' href="customer_pembayaran.php?id=<?php echo $i['invoice_id']; ?>"><i class="fa fa-money"></i> Payment Confirmation</a>
														<?php
													}elseif($i['invoice_status'] == 1){
														?>
														<a class='btn btn-sm btn-primary' href="customer_pembayaran.php?id=<?php echo $i['invoice_id']; ?>"><i class="fa fa-money"></i> Payment Confirmation</a>
														<?php
													}
													?>
													<a class='btn btn-sm btn-success' href="customer_invoice.php?id=<?php echo $i['invoice_id']; ?>"><i class="fa fa-print"></i> Invoice</a>
												</td>
											</tr>
											<?php 
										}
										?>
									</tbody>
								</table>
							</div>
							


						</div>	

					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>