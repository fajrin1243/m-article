<!Doctype HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="M-Articlenian Development">
	<title> Silahkan Mendaftar </title>
	<!-- LINK CSS -->
	<link href="<?= base_url();?>../m-article/assets/css2/bootstrap.css" rel="stylesheet">
	<link href="<?= base_url();?>../m-article/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?= base_url();?>../m-article/assets/css2/morris.css" rel="stylesheet">

	<!-- /# LINK CSS -->
	<style type="text/css">
	#atas {
		background: white;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		background-position: fixed-top;
		width: cover;
		height: 45px;
		margin-bottom: 40px;
		box-shadow: 0px 5px 5px #000000;
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
	#kotak 
	{
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
</style>
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
			<!-- form -->
			<fieldset>
				<form class="form-horizontal" role="form" action='<?=base_url();?>index.php/cdaftar/do_daftar' method="post">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class = "modal-header">
								<a href = "index.php"><button type="button" class="close" data-dismiss="modal">&times;</button></a>
								<h1>Biodata Diri<small> [Sesi Pertama] </small></h1>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label for ="InputEmail3" class="col-sm-2 control-label">Username</label>
									<div class="col-sm-10">
										<input type="text" name="username" class="form-control" maxlength="50" value=<?php echo $this->input->post('username')?>>
									</div>
								</div>
								<div class="form-group">
									<label for ="InputEmail3" class="col-sm-2 control-label">Nama D</label>
									<div class="col-sm-4">
										<input type="text" name="namadepan" class="form-control">
									</div>
									<label for ="InputEmail3" class="col-sm-2 control-label">Nama B</label>
									<div class="col-sm-4">
										<input type="text" name="namabelakang" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label for ="InputEmail3" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-4">
										<input type="password" name="password" class="form-control" value=<?php echo $this->input->post('password')?>>
									</div>
									<label for ="InputEmail3" class="col-sm-2 control-label">Repass</label>
									<div class="col-sm-4">
										<input type="password" name="repass" class="form-control" value="">
									</div>
								</div>
								<!-- <div class="form-group">
									<label for="InputEmail3">Foto Profil</label>
									<div class="col-sm-4">
										<input type="file" id="InputEmail3" name="foto">
									</div>
								</div> -->
<!-- 								<div class="form-group">
									<div class="col-md-1">
										<input type ="checkbox" name="persetujuan" value="Agree">
									</div>
									<b>Anda setuju dengan data ini</b>
								</div> -->
							</div>
							<div class="modal-footer">
								<div class="text-left">
									<blockquote>
										<small>Nama D = <cite title="Nama Depan">Nama Depan</cite></small>
										<small>Nama B = <cite title="Nama Belakang">Nama Belakang</cite></small>
										<small>Repass = <cite title="Re-Passwprd">Re-Password</cite></small>
									</blockquote>
								</div>
								<div class="form-group">
									<div class ="col-md-7">
										<!-- SPACER -->
									</div>
										<div class="col-sm-1">
											<button type="reset" class="btn btn-default">
												<span class="glyphicon glyphicon-retweet"> Reset</span>
											</button>
										</div>
										<div class="col-sm-4">
											<button type="submit" name="submit" class="btn btn-success" > Daftar
												<span class="glyphicon glyphicon-chevron-right"></span>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</fieldset>
			<!-- end form -->
		</div><!-- /# row -->
	</div><!-- /# wrapper -->
</body>
<script type="text/javascript" href="../m-article/assets/js/jquery-1.10.2.js"/>
<script type="text/javascript" href="../m-article/assets/js/bootstrap.js"/>

<script type="text/javascript" href="../m-article/assets/js/js-admin.js"/>
<script type="text/javascript" href="../m-article/assets/js/morris-admin.js"/>
</html>