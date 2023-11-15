login_page.html

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <!-- <link rel="icon" href="/favicon.ico" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>login</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600%2C700%2C800%2C900"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600%2C700%2C800"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato%3A400%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost%3A500%2C900"/>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./style/style_login.css"/>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="dist/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
<!-- HEADER  -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/logo-wer.png" height="50px" alt="logo" ></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 " >
            <li class="nav-item">
            <a class="nav-link" href="/"style="color: #bc2a2b">HOME</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/accueil"style="color: #bc2a2b">MARKETPLACE</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/drivesasamarketplace"style="color: #bc2a2b">SERVICES</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#"style="color: #bc2a2b">BLOG</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/login"style="color: #bc2a2b">CONTACT</a>
            </li>
            </ul>
        </div>
    </div>
</nav>

  <section class="page_login">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 login_image">
          <div class="login_icons">
            <a href="#"><i class="bi bi-facebook p-1"></i></a>
            <a href="#"><i class="bi bi-instagram p-1"></i></a>
            <a href="#"><i class="bi bi-twitter p-1"></i></i></a>
          </div>
        </div>
        <div class="col-md-6 py-5 col_bouton_login">
          <div class="titre_sign mb-5">Sign Up as A</div>
          <div class="mes_bouton d-flex mb-3 ">
            <button class="btn  bouton_sign1 text_white" >Custumer</button>
            <button class="btn  bouton_sign2 ms-3" >Dealer/Vendor</button>
            <button class="btn  bouton_sign2 ms-3" >Service Provider</button>
          </div>
          <div class="choose_infos mb-3"> Please fill your information below</div>
          <div class="form_login_group">
            <form class="mt-4">
              <div class="mb-3 d-flex">
                <i class="bi bi-person-fill user_login_icons ps-4"></i>
                <input type="text" class=" put_login_user px-4" id="name" placeholder="Name">
              </div>
              <div class="form-login-group2">

                <fieldset class="ensemble_login rounded-3 mb-4">
                  <legend class="me-4 d-flex float-none w-auto field_title">Mobile Number</legend>
                  <i class="bi bi-phone-fill phone_user_icon ps-4"></i>
                  <input type="text" name="mobile" id="number" class="put_number_login ps-5 pb-2" placeholder="66484553834"/>
                </fieldset>

              </div>
              <div class="mb-3 d-flex">
                <i class="bi bi-envelope-fill user_login_icons ps-4"></i>
                <input type="email" class="px-4 put_login_user" id="email" placeholder="E-mail">
              </div>
              <div class="user_set">
                <button type="submit" class="btn bouton_login_user mt-4">Next
                <i class="bi bi-chevron-right ms-3 text-white"></i></button>
              </div>
            </form>
          </div>
          <div class="row d-flex mt-4 log_in">
            <p >
              <span class="choose_infos"><a href="#">Already have a account?</a></span>
              <span class="choose_infos log_out"><a href="#">Login your account</a> </span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
  crossorigin="anonymous"></script>
</body>
</html>


