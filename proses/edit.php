<?php

include('connection.php');

$id = $_GET['id'];

$query = mysqli_query($connect, "SELECT * FROM sign_in WHERE id='$id' LIMIT 1");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
    

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> 
        <link rel="icon" href="img/logo.jpg" type="image/x-icon"/>
        
            <!-- CSS Files -->
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="atlantis.min.css">
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link rel="stylesheet" href="demo.css">
        
        <!-- Fonts and icons -->
        <script src="webfont.min.js"></script>
        <script>
            WebFont.load({
                google: {"families":["Lato:300,400,700,900"]},
                custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

        <!-- <script type="text/javascript"  href="https://code.jquery.com/jquery-3.5.1.js"> </script> -->

        <script type="text/javascript"  src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript"  src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    </head>



    <body>
        <br><br>


        <nav class= "navbar navbar-expand-lg navbar-light fixed-top card" style="background-color : white;">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/logo.jpg" width="55px"></a>
            <h2><b>RZ</b></h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 offset-lg-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php"><b>HOME</b></a>
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php"><b>ABOUT</b></a>
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item active">
                        <a class="nav-link active" href="list.php"><b>DATA SISWA</b></a>
                    </li>
                   
                </ul>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="nav-link" href="https://www.facebook.com/profile.php?id=100074898640460"><img src="img/fb.svg" width="25px"></a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a class="nav-link" href="https://www.instagram.com/ahmad_syahputraaaa/"><img src="img/twit.svg" width="25px"></a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a class="nav-brand" href="#"><img src="img/wa.svg" width="25px"></a>
                
                    
            </div>
        </div>
        
    </nav><br><br>

    <div class="content">
				<div class="page-inner">
					<div class="page-header">
  <h4 class="page-title">Edit Data
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="index.php">
									<i class="flaticon-home"></i>
								</a>
							</li>
              <li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="list.php">Data siswa</a>
							</li>								
             <li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Edit Data</a>
							</li>		
						</ul>
            </h4>

            <div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Edit Data</div>
								</div>
								<div class="card-body">
									<div class="row">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<div class="col-md-6 col-lg-5">
											<div class="form-group">
												<label for="nama">Nama</label>
												<input type="text" name="nama" class="form-control"  placeholder="Nama" required>
												
											</div>
											<div class="form-group">
												<label for="alamat">Alamat</label>
												<textarea name="alamat" class="form-control"  rows="3" placeholder="Alamat" required></textarea>
											</div>
										
											<div class="form-check">
												<label>Gender</label><br/>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="optionsRadios" value=""  checked="">
													<span class="form-radio-sign">Male</span>
												</label>
												<label class="form-radio-label ml-3">
													<input class="form-radio-input" type="radio" name="optionsRadios" value="">
													<span class="form-radio-sign">Female</span>
												</label>
											</div>
											
											<div class="form-check">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="">
													<span class="form-check-sign">Agree with terms and conditions</span>
												</label>
											</div>
										</div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<div class="col-md-6 col-lg-5">
											<div class="form-group">
												<label for="umur">Umur</label>
                                                <input type="text" name="umur" class="form-control" required placeholder="Input Angka" onkeypress="return hanyaAngka(event)">												
											</div>

                                            <div class="form-group">
												<label for="email">Email</label>
                                                <input type="email" name="email" class="form-control" required placeholder="Email">											
											</div>
                                                <br><br><br>
                                            <div class="form-group">
                                                <label for=foto><b>Foto :</b></label>
                                                <input type="file" name="foto" required="required">
                                                <p style="color: red"><b> Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif </b></p>
                                            </div>	
		                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="assets/js/setting-demo2.js"></script>
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
    <script type="text/javascript">
                $(document).ready( function () {
                    $('#example').DataTable();
                } );

            </script>
    
</html>