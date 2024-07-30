<?php include 'header.php'; ?>



<!-- BREADCRUMB -->
<div id="breadcrumb">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Register Customer</li>
		</ul>
	</div>
</div>
<!-- /BREADCRUMB -->

<!-- section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			
			<div class="col-md-12">
				<div class="order-summary clearfix">
					<div class="section-title">
						<h3 class="title">New Customer Registration</h3>
					</div>

					<?php 
					if(isset($_GET['alert'])){
						if($_GET['alert'] == "duplikat"){
							echo "<div class='alert alert-danger text-center'>Sorry, this email is already in use, please use another email.</div>";
						}
					}
					?>

					<div class="row">
						<div class="col-lg-6 col-lg-offset-3">
							
							<form action="daftar_act.php" method="post">
								<div class="form-group">
									<label for="">Full Name</label>
									<input type="text" class="input" required="required" name="nama" placeholder="enter full name ">
								</div>

								<div class="form-group">
									<label for="">Email</label>
									<input type="email" class="input" required="required" name="email" placeholder="example@gmail.com">
								</div>

								<div class="form-group">
									<label for="">No HP / Whatsapp</label>
									<input type="number" class="input" required="required" name="hp" placeholder="enter no. handphone/whatsapp">
								</div>

								<div class="form-group">
									<label for="">Address</label>
									<input type="text" class="input" required="required" name="alamat" placeholder="enter address">
								</div>

								<div class="form-group">
									<label for="">Password</label>
									<input type="password" class="input" required="required" name="password" placeholder="Masukkan password ..">
									<small class="text-muted">This password is used to login to your account.</small>
								</div>

								<div class="form-group">
									<input type="submit" class="primary-btn btn-block" value="Register">
								</div>
							</form>

						</div>
					</div>

				</div>

			</div>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->



<?php include 'footer.php'; ?>