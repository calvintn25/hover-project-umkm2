<!doctype html> 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ea590c57b3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous"> --}}

    <title>Company Website |  {{-- {{ $title }} --}} </title> 
  </head>
  <body class="overflow-x-hidden" id="home">
    @include('partials.navbar')

    <!--Container for welcoming message-->
    <div class="container" >
      <img src="img/blank.jpg" width="500" class="rounded float-end">
      
      <div class="container mt-5">
        <span class="badge text-bg-secondary"><i class="fa-solid fa-thumbs-up"></i> Our Best Sales</span>
        <h1 class="display-1">SELAMAT DATANG!</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nemo, consequatur hic dicta aliquid consectetur sint voluptate. Totam cumque exercitationem veritatis, repudiandae vero quos quas, beatae officiis, at eum eaque!</p>
      </div> <br>

      <div class="d-flex jusitfy-content-around gap-5 mx-5">
        <div class="card h-100" style="width: 12rem;">
          <img src="img/blank.jpg" class="card-img-top" alt="...">
          <div class="card-img-overlay">
            <p class="card-text float-end"> <i class="fa-solid fa-heart" style="color: #ff0000;"></i></p>
          </div>
          <div class="card-body">
            <h5 class="card-title">Bakso Urat Super Jumbo</h5>
          </div>
        </div> 

        <div class="card h-110" style="width: 12rem;">
          <img src="img/blank.jpg" class="card-img-top" alt="...">
          <div class="card-img-overlay">
            <p class="card-text float-end"> <i class="fa-solid fa-heart" style="color: #ff0000;"></i></p>
          </div>
          <div class="card-body">
            <h5 class="card-title">Mie Ayam Bakso</h5>
          </div>
        </div> 

        <div class="card h-100" style="width: 12rem;">
          <img src="img/blank.jpg" class="card-img-top" alt="...">
          <div class="card-img-overlay">
            <p class="card-text float-end"> <i class="fa-solid fa-heart" style="color: #ff0000;"></i></p>
          </div>
          <div class="card-body">
            <h5 class="card-title">Nasi Goreng Kampung</h5>
          </div>
        </div> 
      </div>
    </div>
  <!--End of Container for welcoming message-->
  <br><br><br><br><br>
  
{{-- 
    <div class="container mt-4">
      @yield('container')
    </div> --}}

        {{-- Navbar Menu --}}

        <!--Menu container-->
        <h1 class="display-5 text-center" id="menu"> MENU</h1> <br>
        <div class="container justify-content-between">
          <p class="text-left">Mie Ayam</p>  
        <div class="row row-cols-1 row-cols-md-6 g-4">
          <div class="col">
            <div class="card h-100" style="width: 10rem;">
              <img src="img/blank.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Rp.xx.xxx</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" style="width: 10rem;">
              <img src="img/blank.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Rp.xx.xxx</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" style="width: 10rem;">
              <img src="img/blank.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Rp.xx.xxx</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" style="width: 10rem;">
              <img src="img/blank.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Rp.xx.xxx</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" style="width: 10rem;">
              <img src="img/blank.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Rp.xx.xxx</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" style="width: 10rem;">
              <img src="img/blank.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Rp.xx.xxx</p>
              </div>
            </div>
          </div>
        </div>
      </div>
<br><br><br>
        <div class="container justify-content-between">
          <p class="text-left">Bakso</p>  
        <div class="row row-cols-1 row-cols-md-6 g-4">
          <div class="col">
            <div class="card h-100" style="width: 10rem;">
              <img src="img/blank.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Rp.xx.xxx</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" style="width: 10rem;">
              <img src="img/blank.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Rp.xx.xxx</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" style="width: 10rem;">
              <img src="img/blank.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Rp.xx.xxx</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" style="width: 10rem;">
              <img src="img/blank.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Rp.xx.xxx</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" style="width: 10rem;">
              <img src="img/blank.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Rp.xx.xxx</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container justify-content-between">
        <br><br><br>
        <p class="text-left">Bakso Jumbo</p>
        <div class="row row-cols-1 row-cols-md-6 g-4" >
          <div class="col">
            <div class="card h-100" style="width: 10rem;">
              <img src="img/blank.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Rp.xx.xxx</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" style="width: 10rem;">
              <img src="img/blank.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Rp.xx.xxx</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" style="width: 10rem;">
              <img src="img/blank.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Rp.xx.xxx</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" style="width: 10rem;">
              <img src="img/blank.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Rp.xx.xxx</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br><br><br>
      <div class="container justify-content-between">
        <p class="text-left">Lainnya</p>  
      <div class="row row-cols-1 row-cols-md-6 g-4">
        <div class="col">
          <div class="card h-100" style="width: 10rem;">
            <img src="img/blank.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Rp.xx.xxx</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100" style="width: 10rem;">
            <img src="img/blank.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Rp.xx.xxx</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100" style="width: 10rem;">
            <img src="img/blank.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Rp.xx.xxx</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100" style="width: 10rem;">
            <img src="img/blank.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Rp.xx.xxx</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100" style="width: 10rem;">
            <img src="img/blank.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Rp.xx.xxx</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100" style="width: 10rem;">
            <img src="img/blank.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Rp.xx.xxx</p>
            </div>
          </div>
        </div>
      </div>
    </div> <br><br><br>
    <div class="container justify-content-between">
      <p class="text-left">Minuman</p>  
    <div class="row row-cols-1 row-cols-md-6 g-4">
      <div class="col">
        <div class="card h-100" style="width: 10rem;">
          <img src="img/blank.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Rp.xx.xxx</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="width: 10rem;">
          <img src="img/blank.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Rp.xx.xxx</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="width: 10rem;">
          <img src="img/blank.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Rp.xx.xxx</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="width: 10rem;">
          <img src="img/blank.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Rp.xx.xxx</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="width: 10rem;">
          <img src="img/blank.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Rp.xx.xxx</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="width: 10rem;">
          <img src="img/blank.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Rp.xx.xxx</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="width: 10rem;">
          <img src="img/blank.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Rp.xx.xxx</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="width: 10rem;">
          <img src="img/blank.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Rp.xx.xxx</p>
          </div>
        </div>
      </div>
    </div>
  </div> 
      <br><br><br><br><br><br><br><br>
    <!-- End of This is menu container -->

    <div class="container" id="about">
      <div class="container">
        <h1 class="display-3 text-center">- PONDOK BAKSO MAREM -</h1>
        <img src="img/blank.jpg" alt="" width="550" class="float-start rounded m-5">
        <p class="lead custom-text">Pondok Bakso Marem dan Mie Ayam Pak Rebo merupakan salah satu usaha UMKM yang sudah berdiri sejak tahun 2010 hingga saat ini. <br> <br>
        Kedua usaha ini bergerak pada bidang kuliner sehingga mampu memberikan kontribusi pada keberagaman kuliner di Batam dan menawarkan pengalaman makan yang memuaskan bagi para pelanggan dengan cita rasanya tersendiri. <br><br>
        Mereka juga menawarkan Produk dan jasanya baik secara offline maupun online ( pengantaran ke rumah ) melalui aplikasi E-Commers.</p>
      </div>
  </div> <br><br><br><br>

  <!-- Footer -->
  <footer class="text-center text-lg-start bg-body-tertiary text-muted" id="contact">

    <!-- Section: Links  -->
    <section class="p-2">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-1">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 custom-margin">
              <img src="img/logo.png" alt="" class="custom-logo">
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 custom-margin2">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mt-5 mb-4">
              contact us
            </h6>
            <p class="text-uppercase">
              komplek taman baloi mas garden <br>
              blok e.20 
              baloi indah, kec. lubuk baja, <br>
              kota batam, kepulauran riau 29432<br><br>
              +62 813 7220 0566
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 custom-margin2">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mt-5 mb-4">
              opening schedule
            </h6>
            <p class="text-uppercase">
              <i class="fa-solid fa-clock"></i> 07:00 - 22:00 <br><br>
              <i class="fa-solid fa-calendar"></i> Monday-Sunday
            </p> <br>
          </div>
      </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      <div class="container d-inline  col-md-3 col-lg-4 col-xl-5 mb-4" >
        <img class="logo-custom mx-3"  src="img/blank.jpg" alt="halal">
        <img class="logo-custom mx-3"  src="img/blank.jpg" alt="halal">
        <img class="logo-custom mx-3"  src="img/blank.jpg" alt="halal">
        <img class="logo-custom mx-3"  src="img/blank.jpg" alt="halal">
        <img class="logo-custom mx-3"  src="img/blank.jpg" alt="halal">
      </div>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
    
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>