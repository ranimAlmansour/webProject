<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/iletisim.css">
    <style>
        .ulasin{
            padding: 5% 30%;
        }
    </style>
    <title>Ranim | İletişim</title>
</head>
<body>

     <!--Start Header-->

     <header>
          
        <!--Start Slider-->

            <div class="slider min-hw-100">
                <div class="container-fluid">
                    <div class="login">
                    <a  href="login.htm">
                        <button type="button" class="btn btn-outline-dark">
                            Login
                        </button>
                    </a>
                    </div>
                </div>  

                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="intro">
                                <p class="p1">Hi, I am</p>
                                <h3> &lt; Ranim Almansour... &gt;</h3>
                                <p class="p2">Welcome To My Website</p>
                            </div>
                        </div>  
                    </div>    
                </div>
                <hr>
            </div>

        <!--End Slider-->

        <!--Start navigation-->

            <nav class="navbar navbar-expand-lg navbar-dark bg-silver">
            <div class="container-fluid">

                <a class="navbar-brand" href="index.html">
                <img src="image/coding-language.png" alt="" width="30" height="24">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="index.html">Home</a>
                    <a class="nav-link" href="about-me.htm">Hakkımda</a>
                    <a class="nav-link" href="sehrim.htm">Şehrim</a>
                    <a class="nav-link" href="mirasimiz.htm">Mirasımız</a>
                    <a class="nav-link" href="oz-gecmis.htm">Öz geçmiş</a>
                    <a class="nav-link" href="ilgi-alanlarim.htm">İlgi Alanlarım</a>
                    <a class="nav-link active" href="#">Bana Ulaşın</a>
                </div>
                </div>
            </div>
            </nav>
            <hr>

        <!--End navigation-->

    </header>

<!--End Haeder-->


    <div class="ulasin">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <table>
                        <tr>
                            <td>
                                Ad :
                            <td>
                                <?php echo $_POST["fName"]; ?>
                            </td>
                            <br>
                        </tr>
                        <tr>
                            <td>
                                Soyad :
                            </td>
                            <td>
                                <?php echo $_POST["LastName"]; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                E-mail :
                            </td>
                            <td>
                                <?php echo $_POST["Email"]; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Tel :
                            </td>
                            <td>
                                <?php echo $_POST["Tel"]; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Cinsiyet :  
                            </td>
                            <td>
                                <?php
                                    if(!empty($_POST['Cinsiyet'])) 
                                    {
                                        echo ' , ' . $_POST['Cinsiyet'];
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Meslek :
                            </td>
                            <td>
                            <?php
                                $meslek_ = $_POST['meslek'];

                                    $N = count($meslek_);
                                    
                                    for($i=0; $i < $N; $i++)
                                    {
                                    echo($meslek_[$i] . " ");
                                    }
                                
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Adres :
                            </td>
                            <td>
                            <?php echo $_POST["Adres"]; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Uyruk :
                            </td>
                            <td> 
                                <?php echo $_POST["Uyruk"]; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Mesajiniz : 
                            </td>
                            <td> 
                                <?php echo $_POST["Mesaj"]; ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>Mesjınız iletildi....</p>
                            </td>
                        </tr>
                    </table>
                    
                </div>
            </div>    
        </div>    
  
    </div>   

    <!--Start Footer-->
    <footer>
        <div class="container">
          <div class="row">

            <div class="col-md-7">
              <div class="footer-social">
                <h4>My Social Media :</h4>
                <ul>
                  <li>
                    <a href="https://www.facebook.com/" target="_blank"
                    ><img src="image/facebook.png" alt=""></a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/" target="_blank"
                    ><img src="image/instagram.png" alt=""></a>
                  </li>
                  <li>
                    <a href="https://twitter.com/" target="_blank"
                    ><img src="image/twitter.png" alt=""></a>
                  </li>
                  <li>
                  <a href="https://github.com/" target="_blank"
                  ><img src="image/github.png" alt=""></a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-5">
              <div class="footer-location">
                <h4>My Location</h4>
                <p class="mail"><b>Mail:</b> ranim@gmail.com</p>
                <p><b>Phone :</b>555-555-5555</p>
                <p><b>Location:</b> Sakrya Ünv. Bilgisayar Ve Bilişimleri Fakültesinin Binası</p>
              </div>
            </div> 
          </div>

          <div class="row">
            <div class="col-lg-12 text-center">
              <div class="footer-copy">
                © 2023 <b> Ranim </b>Website, All Rights Reserved.
              </div>
            </div>
          </div>
        </div>
      </footer>

    <!--End Footer-->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
