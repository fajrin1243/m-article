<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="M-Articlenian Development">
	<title>Welcome to M-Article</title>
	<!-- LINK CSS -->
	<link href="<?= base_url();?>../m-article/assets/css2/bootstrap.css" rel="stylesheet">
	<link href="<?= base_url();?>../m-article/assets/css2/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url();?>../m-article/assets/css2/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?= base_url();?>../m-article/assets/css2/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?= base_url();?>../m-article/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="<?= base_url();?>../m-article/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- /# LINK CSS -->
	<style type="text/css">

	

	body {
		background: url(../m-article/assets/img/wallpaper.jpg) no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		opacity: 0px;
		color: white;
		font-family: Verdana;
	}
	#atas {
		background: white;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		background-position: fixed-top;
		width: 100%;
		height: 45px;
		margin-bottom: 50px;
		box-shadow: 0px 5px 5px #000000;
		/*z-index: 100; //buat fixed-top*/
/*		padding-top: 5px;
	padding-bottom: 5px;
	padding-left: 15px;
	*/		
}
#ikon {
	background: white;
	border: 1px solid gray;
	width : 40px;
	height: 40px;
}
#ikon2 {
	background: white;
	border: 1px solid gray;
	width : 100px;
	height: 40px;
}
.kotak{
	width: 100%;
	padding-left: 4%;
	margin-bottom: 4%;
	/*	margin-top: 15%;
	padding-top: 1%;*/
	border-radius: 2px;
	background-color: rgba(0,0,0,0.3);
	border: 1px solid #e3e3e3;
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
	border-radius: 2%;
	box-shadow: 0px 5px 5px #000000;
}
}
</style>
<?php
$aturan = array(
	'daftar' => array( 
		$daftar = array(
			'type' => 'submit',
			'class' => 'btn btn-success',
			'value' => 'Daftar'
			)
		),
	'masuk' => array(
		$masuk = array(
			'type' => 'submit',
			'class' => 'btn btn-success',
			'value' => 'Masuk'
			),
		$reset = array(
			'type' => 'reset',
			'class' => 'btn btn-default',
			'value' => 'Reset'
			)
		)
	);
?>
</head>
<body>
	<div id="wrapper">
		<div id ="row">
			<!-- Header atas -->
			<div id="atas">
				<div class="col-md-1"></div> <!-- /.col-md-1 -->
				<div class="col-md-8">
					<div id ="ikon">
						ini ikon
					</div><!-- /#ikon -->
				</div><!-- /.col-md-4 -->
				<div class="col-md-3">
					<div id="ikon2">
						ini ikon 2
					</div>
				</div><!-- /.col-md-4 -->
				<div class="col-md-1"></div> <!-- /.col-md-1 -->
			</div> <!-- /#atas -->
			<!-- /# Header atas-->
			<!-- FORM -->
			<div class="col-md-1"></div> <!-- /.col-md-1 -->
			<div class="col-md-5">
				<b>
					<h1>Selamat Datang di<br> 
						M-article.
					</h1>
				</b>
				<br/>
				<h4>Jalin hubungan dengan teman Anda — dan orang<br>
					menarik lainnya. Dapatkan pembaruan aktual<br>
					tentang hal yang Anda minati. Dan saksikan <br>
					peristiwa yang sedang berkembang, secara<br>
					aktual, dari berbagai sudut.
				</h4>
			</div> <!-- /.col-md-5 -->
			<br/>
			<div id="row">
				<div class="col-md-5">
					<div class="kotak">
						<fieldset>
							<legend><font color="white">Punya akun di M-Article? | </font><font color="green">Masuk</font></legend>
							<form class="form-horizontal" role="form" action='<?=base_url();?>index.php/clogin' method="post">
								<div class="form-group">
									<div class="col-sm-11">
										<input type ="text" maxlength="50" name="username" class="form-control" value="" max-length="25" placeholder="Silahkan masukkan username anda">
									</div>
								</div> <!-- /# form-group -->
								<div class="form-group">
									<div class="col-sm-11">
										<input type ="text" maxlength="25" name="pwd" class="form-control" value="" max-length="25" placeholder="Silahkan masukkan password anda">
									</div>
								</div> <!-- /# form-group -->
								<div class="form-group">
									<div class="col-sm-6">
										<?php echo form_submit($masuk); ?>
									</div>
									<div class ="text-right">
										<div class="col-sm-5">
											<?php echo form_input($reset); ?>
										</div>
									</div>
								</div> <!-- /# form-group -->
							</form>
						</fieldset>
					</div><!-- /.kotak -->
				</div><!-- /.col-md-5 -->
			</div>
			<br/>
			<div class="col-md-5">
				<div class="kotak">
					<fieldset>
						<legend><font color="white">Baru di M-Article? | </font><font color="green">Daftar</font></legend>
						<?php echo validation_errors(); ?>
						<form class="form-horizontal" role="form" action='<?=base_url();?>index.php/validator' method="post">
							<div class="form-group">
								<div class="col-sm-11">
									<input type ="text" maxlength="25" name="username" class="form-control" value="" max-length="25" placeholder="Silahkan masukkan username anda">
								</div>
							</div> <!-- /# form-group -->
							<div class="form-group">
								<div class="col-sm-11">
									<input type = "password" maxlength="15" name="password" class="form-control" placeholder="Silahkan masukkan password anda" max-length="25" value="">
								</div>
							</div> <!-- /# form-group -->
							<div class="form-group">
								<div class="col-sm-11">
									<input type = "password" maxlength="15" name="repass" class="form-control" placeholder="Silahkan masukkan re-password anda" max-length="25" value="">
								</div>
							</div> <!-- /# form-group -->
							<div class="form-group">
								<div class="col-sm-6">
									<?php echo form_submit($daftar); ?>
								</div>
								<div class ="text-right">
									<div class="col-sm-5">
										<?php echo form_input($reset); ?>
									</div>
								</div>
							</div> <!-- /# form-group -->
						</form>
					</fieldset>
				</div><!-- /.kotak -->
			</div><!-- /.col-md-5 -->
		</div>
		<!-- /#FORM -->
	</div><!-- /#row -->
</div><!-- /#wrapper -->
</body>
<!-- LINK JS -->
<script type="text/javascript" href="../m-article/assets/js/jquery-1.10.2.js"/>
<script type="text/javascript" href="../m-article/assets/js/bootstrap.js"/>

<script type="text/javascript" href="../m-article/assets/js/js-admin.js"/>
<script type="text/javascript" href="../m-article/assets/js/morris-admin.js"/>
<!-- <script type="text/javascript" href="../m-article/assets/js/jquery.js"/>		
--><!-- /# LINK JS -->
</html>