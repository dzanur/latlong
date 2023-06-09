<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplikasi ambil tikor online, Aplikasi tikor online, get latlong, get latitude, get longitude, online">
    <title>Get TiKor Online</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <script async src="https://arc.io/widget.min.js#Fi9zYGW4"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2320264466032858"
     crossorigin="anonymous"></script>
    </head>
</head>
<body>
    <nav class="navbar navbar-light bg-primary py-2">
        <div class="container">
            <a href="#" class="navbar-brand"><span class="navbar-brand mb-0 h1 text-dark bg-light px-3 rounded"><i class="fa-solid fa-location-dot text-danger"></i> TiKor</span></a>
        </div>
    </nav>
    <div class="container wrapper p-5">
        <div class="card p-md-4">
            <div class="card-body">
            <h5 class="card-title mb-3">Ambil Titik koordinat</h5>
            <div id="map-canvas" class="mb-3"></div>
            <?php
            if(!isset($_POST['latlong'])) {
            echo "";
            }else {
            ?>
            <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
                Sukses : <?= $_POST['latlong']?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }?>
            <form id="tampilkan" NAME="rd" METHOD="POST">
                <div class="form-group">
                    <label for="lat">Latitude</label>
                    <INPUT TYPE="text" NAME="lat" ID="lat" class="form-control" VALUE="" disabled>
                </div>
                <div class="form-group">
                    <label for="long">Longitude</label>
                    <INPUT TYPE="text" NAME="long" ID="long" class="form-control" VALUE="" disabled>
                </div>
                <form action="index.php" method="post">
                    <div class="form-group">
                    <label class="" for="inlineFormInput">Posisi</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="latlong" name="latlong" aria-describedby="basic-addon1">
                        <button class="input-group-text bg-primary text-light border-grey" id="basic-addon1" onclick="copy_text()" onmouseout="outFunc()"><span class="tooltiptext" id="myTooltip"><i class="fa-regular fa-clipboard"></i></span></button>
                    </div>
                    </div>
                </form>
                <div class="d-grid gap-2">
                    <button type="button" onclick="getLocation(); showlocation()" class="btn btn-primary"><i class="fa-solid fa-location-dot text-danger shadow"></i> Ambil lokasi</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid py-4 bg-dark">
            <div class="container">
                <p class="text-light text-end">
                    Made with  <i class="fa-solid fa-heart text-danger"></i> by <a href="https://dzanur.com"><strong class="text-light">Dzanur</strong></a>
                </p>
            </div>
        </div>
    </footer>

    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="script.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>

 </body>
</html>