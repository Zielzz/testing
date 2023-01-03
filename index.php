<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>

          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
          <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
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


<style>
  .carousel-contain {
  background-color: #212529;
  height: 855px;
}
.footer2{
  background-color: #212529;
  height: 85px;
}
.box{
  width: 500px;
  margin:middle;
  font-size: 15pt;
  float: left;
  color: #262626;
  padding-left: 25px; 
  height: 55px;
}
.cor{
  margin: 1px;
  padding
}

</style>

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
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"><b>HOME</b></a>
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><b>ABOUT</b></a>
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item">
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

    
    

   <div class="container-fluid py-6">
     
    
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">  
  <div class="carousel-indicators cor">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-dark" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="bg-dark"aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="bg-dark"aria-label="Slide 3"></button>
  </div>
  

  <div class="content">
				<div class="page-inner">
					<div class="page-header">
  <h4 class="page-title">Home
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
								<a href="#">Home</a>
							</li>		
						</ul>
            </h4>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="row">
        <div class="col-md-6 card-body"><br>
          <h1><b>EDUCATION</b></h1><br>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi non earum est id esse et, quo vel asperiores 
            quod repudiandae tenetur excepturi fuga repellendus omnis delectus harum alias nisi iure.</p><br>
           <a href="tentang_kami.php"><button type="button" class="btn btn-primary btn-lg">Learn More</button></a> 
            
        </div>
         <div class="col-md-6">&nbsp;&nbsp;
          <img src="img/b4.jpg" class="d-block w-100"  alt="..." height="355"><br>
        </div>
      </div>
    </div>

    <div class="carousel-item">      
      <div class="row">
        <div class="col-md-6">
          <h1><b>ppp</b></h1><br>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, nisi molestias maiores quam ab 
            perspiciatis possimus odit? Consectetur a mollitia saepe nostrum omnis necessitatibus modi, reprehenderit 
            maiores officiis aut provident?</p>
        </div>
        <div class="col-md-6">&nbsp;&nbsp;
          <img src="img/b8.webp" class="d-block w-96"  alt="..." height="355"><br>
        </div>
      </div>
    </div>
    
    <div class="carousel-item">      
      <div class="row">
        <div class="col-md-6">
          <h1><b>asd</b></h1><br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, qui. Dicta placeat perspiciatis quam, 
            corporis consequuntur maiores ab blanditiis iste ipsa natus a nihil temporibus tenetur harum, totam 
            reiciendis ducimus?</p>
        </div>
        <div class="col-md-6">&nbsp;&nbsp;
          <img src="img/b6.webp" class="d-block w-96"  alt="..." height="355"><br>
        </div>
      </div>
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
   
</body>


<center>
<p><h4> Cari data siswa </h4></p>
</center>



                    <form class="d-flex" role="search" action="search.php" method="get">
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; 
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;
                    <input class="form-control me-2 box" type="search"  name="keyword" aria-label="Search" placeholder="Search"/>
                    <button class="btn btn-outline-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg></button> 
                    </form>
                
              <br><br><br><br><br><br><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="#"><img src="img/arrow.svg" class="offset-lg-11 "alt="" width="30px" height="30px"></a></button>
              <br><br>
              <footer>
                    <div class="card-body text-center"><br>
                        <h5 class="card-title">TERIMAKASIH SUDAH BERKUNJUNG DI WEBSITE KAMI</h5>
                        <p class="card-text">Mohon maaf atas ketidaknyamanan anda di website kami.</p>                        
                    </div>
              </footer><br>
              

</html>