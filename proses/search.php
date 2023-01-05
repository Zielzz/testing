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

$keyword = $_GET['keyword'];

$query = mysqli_query($connect, "SELECT * FROM sign_in WHERE nama='$keyword'");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

    <form action="list.php" method="get">
        <input type="text" name="keyword" placeholder="Keyword .." value="<?php echo $_GET['keyword']?>"/>
        <button type="submit">Search</button>
    </form>

    <br/>

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
        

          
                
            <?php foreach ($results as $result) :?>

                <div class="card mb-3 offset-lg-1" style="max-width: 540px;">
        <div class="row g-0">
    <div class="col-md-4">
    <p>
        <?php echo "<img src='images/$result[foto]' width='200' height='250'>";?>
        </p>
    </div>
    <div class="col-md-8">
      <div class="card-body">
                    <p>Nama: <?php echo $result['nama']?></p>
                    <p>Alamat: <?php echo $result['alamat']?></p>
                    <p>Umur: <?php echo $result['umur']?></p>
                    <p>Jenis Kelamin:<?php echo $result['jenis_kelamin']?></p>
                    <p>Email: <?php echo $result['email']?></p>
      </div>
    </div>
  </div>
</div>
                   
                    
                    
                      
                      

                               <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
                    
                </tr>
                

            <?php endforeach;?>
        
	</div>

    </body>

<script type="text/javascript">
    $(document).ready( function () {
        $('#example').DataTable();
    } );

</script>

            
            </html>