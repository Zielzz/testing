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

<?php

include('connection.php');

///MEMED GANTENG///

$query = mysqli_query($connect, "SELECT * FROM sign_in");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>


<body>
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
                        <a class="nav-link" href="index.php"><b>HOME</b></a>
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><b>ABOUT</b></a>
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item active">
                        <a class="nav-link active" href="list.php"><b>DATA SISWA</b></a>
                    </li>
                   
                </ul>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="nav-link" href="https://www.facebook.com/profile.php?id=100074898640460"><img src="img/fb.svg" width="25px"></a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a class="nav-link" href="https://www.instagram.com/ahmad_syahputraaaa/"><img src="img/ig.svg" width="25px"></a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a class="nav-link" href="#"><img src="img/wa.svg" width="25px"></a>
                
                    
            </div>
        </div>
        
    </nav><br><br><br><br>
    
    
			
                              <div class="content">
                      <div class="page-inner">
                        <div class="page-header">
                <h4 class="page-title">Data Siswa
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
                              <a href="#">Data Siswa</a>
                            </li>		
                          </ul>
                          </h4>
                
            

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
                                <a href="add.php"><div class="card-title"><button type="button" class="btn btn-success">Tambah Data</button></a>
                                </div>
								</div>
								    <div class="card-body">
									  <div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" > 

                                        <thead>
												<tr>
													<th>Nama</th>
													<th>Alamat</th>
													<th>Umur</th>
													<th>Jenis Kelamin</th>
													<th>Email</th>
													<th>File</th>
                                                    <th></th>
												</tr>
											</thead>
                                            <tfoot>
												<tr>
                                                <th>Nama</th>
													<th>Alamat</th>
													<th>Umur</th>
													<th>Jenis Kelamin</th>
													<th>Email</th>
													<th>File</th>
                                                    <th></th>
												</tr>
											</tfoot>
                                            <tbody>
                
            <?php foreach ($results as $result) :?>

                <tr>
                   
                    <td><?php echo $result['nama']?></td>
                    <td><?php echo $result['alamat']?></td>
                    <td><?php echo $result['umur']?></td>
                    <td><?php echo $result['jenis_kelamin']?></td>
                    <td><?php echo $result['email']?></td>
                    <td>
                        <center>
                    <?php echo "<img src='images/$result[foto]' width='35' height='40'>";
                     ?></center>
                     </td>
                        <td>

                        
                        <small class="text-muted"> <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="Edit" >
                        <a href="edit.php?id=<?php echo $result['id']?>" class="btn btn-link btn-warning btn-lg">
                            <i class="fa fa-edit"></i>
                        </a></small>

                        <small class="text-muted"> <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="Delete" >
                        <button type="button" class="btn btn-link btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $result['id']?>">
                            <i class="fas fa-trash"></i>
                        </button></small>

                        <div class="modal fade" id="hapus<?php echo $result['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <table><tbody><b>Detail</b>
                                <br><br>
                                <tr><td><b>Username</td><td>:</td></b><td><?php echo $result['nama']; ?></td> </tr>
                                <tr><td><b>Alamat</td><td>:</td> </b><td><?php echo $result['alamat']; ?></td></tr>
                                <tr><td><b>Umur</td><td>:</td> </b><td><?php echo $result['umur']; ?></td></tr> 
                                <tr><td><b>Jenis Kelamin</td><td>:</td> </b><td><?php echo $result['jenis_kelamin']; ?> </td></tr>
                                <tr><td><b>Email</td><td>:</td> </b><td><?php echo $result['email']; ?></td></tr>
                                </tbody></table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <a href="delete.php?id=<?php echo $result['id']?>" class="btn btn-danger">Hapus</a>
                            </div>
                            </div>
                        </div>
                        </div>

                        <small class="text-muted"> <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="Detail" >
                        <button type="button" class="btn btn-link btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#detail<?php echo $result['id']?>">
                        <i class="fas fa-address-card"></i>
                        </button></small>
                        <div class="modal fade" id="detail<?php echo $result['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table><tbody><b>Detail</b>
                                <br><br>
                                <tr><td><b>Username</td><td>:</td></b><td><?php echo $result['nama']; ?></td> </tr>
                                <tr><td><b>Alamat</td><td>:</td> </b><td><?php echo $result['alamat']; ?></td></tr>
                                <tr><td><b>Umur</td><td>:</td> </b><td><?php echo $result['umur']; ?></td></tr> 
                                <tr><td><b>Jenis Kelamin</td><td>:</td> </b><td><?php echo $result['jenis_kelamin']; ?> </td></tr>
                                <tr><td><b>Email</td><td>:</td> </b><td><?php echo $result['email']; ?></td></tr>
                                </tbody></table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                            </div>
                            </div>

                              
                    
                </tr>
                

            <?php endforeach;?>
            </tbody>           
            </table><br>

            <table class="table table-bordered">
		
		
		</table>
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

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
                <script>
                var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
                })
                </script>
    <script type="text/javascript">
                $(document).ready( function () {
                    $('#example').DataTable();
                } );

            </script>

            </div>
            </body>
            
                <footer>
                    <div class="card-body text-center"><br>
                        <h5 class="card-title">TERIMAKASIH SUDAH BERKUNJUNG DI WEBSITE KAMI</h5>
                        <p class="card-text">Mohon maaf atas ketidaknyamanan anda di website kami.</p>                        
                    </div>
                </footer>

            </html>