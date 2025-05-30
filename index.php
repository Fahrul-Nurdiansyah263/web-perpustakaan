<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootsrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      />

    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Web Perpustakaan</title>
</head>
<body>
  <!-- Script Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Navbar-->
   
    <div class="fContainer">
      <nav class="Navbar">
        <div class="brand">
          <div class="firstname">cognitio</div>
          <div class="lastname">augmentum</div>
        </div>
        <ul class="navigation">
          <li><a href="../../index.php" class="active">Home</a></li>
        </ul>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
              Kategori
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#hukum">Hukum</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#novel">Novel</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#comic">Comic</a></li>
            </ul>
          </li>
       

        <div class="NavbarsocialIcons">
          <a href="https://www.facebook.com/facebook?mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a>   
          <a href="https://instagram.com/instagram?igshid=NTc4MTIwNjQ2YQ=="><i class="fa-brands fa-instagram"></i></a>   
          <a href="https://www.bing.com/ck/a?!&&p=95e18e39a36d77a9JmltdHM9MTcwMTA0MzIwMCZpZ3VpZD0wNTk3NGEyNi01NTRjLTY5YzAtMTBhYS01OTg0NTQ0ZDY4MjAmaW5zaWQ9NTIxNg&ptn=3&ver=2&hsh=3&fclid=05974a26-554c-69c0-10aa-5984544d6820&psq=twitter&u=a1aHR0cHM6Ly90d2l0dGVyLmNvbS8&ntb=1"><i class="fa-brands fa-twitter"></i></a>   
          <a href="https://www.tiktok.com/@tiktok"><i class="fa-brands fa-tiktok"></i></a>   
          <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>   
        </div>  

     
       
      </nav>
    </div>

 <!-- Akhir Navbar -->

  

      
      <div class="jumbotron">
        
       
          
             
          <p class="display-4">Ayo Membaca!<br>Dengan Membaca <br>Anda Bisa Mengenal Dunia</p>   
          <a class="btn" href="lihatsemua.php" role="button" >Lihat Buku</a> 

      
          <img  src="photo_6203862221218494687_x.jpg">

      </div>


      <!--Slide Buku-->

      <div class="container">
        <div class="top" id="hukum">
          <h4>Hukum</h4>
          <a class="all"  a href="lihatsemua.html"  > Lihat Semua</a>
        </div>
        <div class="row row-cols-1 row-cols-md-6 g-4">
          <div class="col card-group">
            <div class="card">
              <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/10/21/grf9ipkhkifhe5xd9luekt.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="List Buku/Hukum/titiksinggungmengadili.html" class="card-title">Titik Singgung Mengadili</a>                  
              </div>
            </div>
          </div>
          <div class="col card-group">
            <div class="card">
              <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/10/18/emfcl3vdj3lwmsf39apagt__w149_hauto.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="List Buku/Hukum/hukumkesehatan.html" class="card-title">Hukum Kesehatan</a>       
              </div>
            </div>
          </div>
          <div class="col card-group">
            <div class="card">
              <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/10/20/2kfuesgrt2ben4vcscqmsj__w149_hauto.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="List Buku/Hukum/kitabkuhp.html" class="card-title">Kitab Undang-Undang KUHP</a>
              </div>
            </div>
          </div>
          <div class="col card-group">
            <div class="card">
              <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/10/18/ayr72ypbuqmjdoz8awdlki__w149_hauto.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="./rekomen/hukumtatanegara.html" class="card-title">Hukum Tata Negara</a>
              </div>
            </div>
          </div>
          <div class="col card-group">
            <div class="card">
              <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/10/18/nyvuiuscd9xugbsvwvt4eb__w149_hauto.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="./rekomen/UUDkesehatan.html" class="card-title">Undang-Undang Kesehatan</a href="./rekomen/jujutsukaisen.html">
              </div>
            </div>
          </div>
          <div class="col card-group">
            <div class="card">
              <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/8/28/pgxscprpsbq2fhdydchjyk__w149_hauto.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="./rekomen/hukumlaut.html" class="card-title">Hukum Laut</a>
              </div>
            </div>
          </div>  
        </div>     
      </div>
          
      
          <div style="margin-top: 120px" class="container">
            <div class="top" id="novel">
              <h4>Novel</h4>
              <a class="all"  a href=""  > Lihat Semua</a>
            </div>
            <div class="row row-cols-1 row-cols-md-6 g-4">
              <div class="col card-group">
                <div class="card">
                  <img src="https://hypeabis.id/assets/content/20220218185641_Don-Quixote-cover.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <a href="" class="card-title">Don Quixote </a href="">                  
                  </div>
                </div>
              </div>
              <div class="col card-group">
                <div class="card">
                  <img src="https://hypeabis.id/assets/content/20220218185747_A-Tale-of-Two-Cities-Cover.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"> A Tale of Two Cities </h5>       
                  </div>
                </div>
              </div>
              <div class="col card-group">
                <div class="card">
                  <img src="https://hypeabis.id/assets/content/20220218185817_Lord-of-the-Rings-cover.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">The Lord of the Rings </h5>
                  </div>
                </div>
              </div>
              <div class="col card-group">
                <div class="card">
                  <img src="https://hypeabis.id/assets/content/20220218185912_The-Little-Prince-book-cover.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">The Little Prince</h5>
                  </div>
                </div>
              </div>
              <div class="col card-group">
                <div class="card">
                  <img src="https://hypeabis.id/assets/content/20220218190357_The-Da-Vinci-Code-book-cover.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <a class="card-title" a href="rekomen/dc102.html"> The Da Vinci Code</a>
                  </div>
                </div>
              </div>
              <div class="col card-group">
                <div class="card">
                  <img src="https://hypeabis.id/assets/content/20220218190250_She-A-History-of-Adventure-book-cover.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"> She: A History of Adventure</h5>
                  </div>
                </div>
              </div>  
            </div>




          <div style="margin-top: 120px; margin-bottom: 250px;" class="container">
            <div class="top" id="comic">
              <h4>Comic</h4>
              <a class="all"  a href=""  > Lihat Semua</a>
            </div>
            <div class="row row-cols-1 row-cols-md-6 g-4">
              <div class="col card-group">
                <div class="card">
                  <img src="https://th.bing.com/th/id/OIP.fizOTQhxmw1nHDJfyvFAqQAAAA?pid=ImgDet&w=198&h=283&c=7&dpr=1,3" class="card-img-top" alt="...">
                  <div class="card-body">
                    <a href="" class="card-title">Si Juki Mencari Kerja</a href="">                  
                  </div>
                </div>
              </div>
              <div class="col card-group">
                <div class="card">
                  <img src="https://th.bing.com/th/id/OIP.MzHo-qnrcbO6OLiBZCaCzwHaK1?w=206&h=302&c=7&r=0&o=5&dpr=1.3&pid=1.7" class="card-img-top" alt="...">
                  <div class="card-body">
                    <a href="" class="card-title">Sri Asih</a href="">       
                  </div>
                </div>
              </div>
              <div class="col card-group">
                <div class="card">
                  <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/6/8/3qaxyret7kcgarrevayw6d__w149_hauto.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Lofarsa</h5>
                  </div>
                </div>
              </div>
              <div class="col card-group">
                <div class="card">
                  <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/6/25/4eud5zhznvdad6k2a2bcbi__w149_hauto.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Our Violent Ends</h5>
                  </div>
                </div>
              </div>
              <div class="col card-group">
                <div class="card">
                  <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/6/22/ky3hz5zabnq6qvpgyr3vth__w149_hauto.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Nikola Maldini</h5>
                  </div>
                </div>
              </div>
              <div class="col card-group">
                <div class="card">
                  <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/6/12/vbgkln48c8mexctc8qhynl__w149_hauto.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Perihal Gendis</h5>
                  </div>
                </div>
              </div>
            </div>





        </div>
      </div>
      
      <!--Akhir Slide Buku-->

      <!-- Footer -->
      <footer > 
        <div class="footer">
           <div class="footerContainer"> 
               <div class="socialIcons">
                 <a href="https://www.facebook.com/facebook?mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a>   
                 <a href="https://instagram.com/instagram?igshid=NTc4MTIwNjQ2YQ=="><i class="fa-brands fa-instagram"></i></a>   
                 <a href="https://www.bing.com/ck/a?!&&p=95e18e39a36d77a9JmltdHM9MTcwMTA0MzIwMCZpZ3VpZD0wNTk3NGEyNi01NTRjLTY5YzAtMTBhYS01OTg0NTQ0ZDY4MjAmaW5zaWQ9NTIxNg&ptn=3&ver=2&hsh=3&fclid=05974a26-554c-69c0-10aa-5984544d6820&psq=twitter&u=a1aHR0cHM6Ly90d2l0dGVyLmNvbS8&ntb=1"><i class="fa-brands fa-twitter"></i></a>   
                 <a href="https://www.tiktok.com/@tiktok"><i class="fa-brands fa-tiktok"></i></a>   
                 <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>   
               </div>  
               <div class="footerNav">
                 <ul>
                   <li><a href="../../index.php">Home</a></li>
                   <li><a href="">Contact Us</a></li>
                 </ul>
               </div>
               <div class="footerBottom">
                 <p>Copyright &copy;2023</p>
               </div>                   
         </div>
       </footer>
      
      <!-- akhir footer -->
    

      
      <!-- Optional JavaScript; choose one of the two! -->
    
      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
      <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
      -->
</body>
</html>