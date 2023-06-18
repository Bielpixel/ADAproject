<?php
include("ap.php")
?>

<!DOCTYPE html>
<html lang="en">
<link rel="alternate" media="only screen and (max-width: 640px)" href="./php/FormA.php">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Associação de Defesa Animal</title>
  
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="./css/styles.css" rel="stylesheet" />
</head>

<body id="page-top" >
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top branco" id="mainNav">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="#page-top"> </a>

      <button class="mobileButton navbar-toggler navbar-toggler-right pr-2" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          
          <!--<li class="nav-item"><a class="nav-link" href="#about">Como Ajudar?</a></li> -->
          <a href="#"><img src="assets/img/logo.svg" class="logo"></a>
          <li class="nav-item"><a class="nav-link" href="#comoAjudar">Como Ajudar</a></li>
          <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
          <li class="nav-item"><a class="nav-link" href="php/FormA.php">Adoção</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Masthead-->
  <header class="masthead">
    
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
      <div class="d-flex justify-content-center">
        <div class="text-center">
          <h1 class="mx-auto my-0 text-uppercase">Associação de Defesa Animal</h1>
          <h2 class="text-white-50 mx-auto mt-2 mb-5">Sejam Bem-Vindos</h2>
          <!--MDS KSKSKSKSKSK-->
          <a class="btn btn-primary" href="#sobre">Sobre Nós</a>
        </div>
      </div>
    </div>
  </header>
  <!-- About-->
  <section class=" about-section text-center" id="comoAjudar">
            <div class="container px-4 px-lg-5">
              <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                  <h2 class="text-white mb-4">COMO AJUDAR ?</h2>
                  <p class="text-white-50">
                    Nossos amiguinhos precisam de todo tipo de ajuda neste momento de tamanha crueldade e abandono e a
                    única coisa que será contagiada é a solidariedade, você pode doar a quantia que seu coração mandar e
                    ou colaborar trazendo mantimentos em nossa sede (Fauze Kassim 662, Pereira Barreto/SP)
                  </p>
                  <a id="Rerror" class="btn btn-primary" href="php/ajudar.php">Formas de Ajudar</a>
                </div>
              </div>
            </div>
            </section>
            <!-- SOBRE NOS>
            <section class="projects-section bg-light" id="sobre">
              <div class="container px-4 px-lg-5">
                Featured Project Row-->

    <section id="sobre">
      <h4>SOBRE NÓS</h4>
       <p>Somos uma Associação não governamental, que através de doações, realiza o resgate de animais em
        estado de vulnerabilidade.</p>
        
            <!-- Project One Row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
              <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="..." /></div>
              <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                  <div class="d-flex h-100">
                    <div class="project-text w-100 my-auto text-center text-lg-left">
                      <h4 class="text-white">Exemplo</h4>
                      <p class="mb-0 text-white-50">
                        -----------------------------------------------------------------------------------------------------------------------------------
                      </p>
                      <hr class="d-none d-lg-block mb-0 ms-0" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Project Two Row-->
            <div class="row gx-0 justify-content-center">
              <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-02.jpg" alt="..." /></div>
              <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                  <div class="d-flex h-100">
                    <div class="project-text w-100 my-auto text-center text-lg-right">
                      <h4 class="text-white">Sobre o site</h4>
                      <p class="mb-0 text-white-50">esse site é um Projeto do nosso TCC</p>
                      <hr class="d-none d-lg-block mb-0 me-0" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="signup">
          <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
              <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <h2 class="text-white mb-5">Entrar em Contato</h2>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                  <!-- Email address input-->
                  <div class="row input-group-newsletter">
                    <div class="col"><input class="form-control" id="emailAddress" type="email"
                        placeholder="Digite seu Email..." aria-label="Enter email address..."
                        data-sb-validations="required,email" /></div>
                    <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Me
                        Avisa!</button></div>
                  </div>
                  <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.
                  </div>
                  <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                  <!-- Submit success message-->
                  <!---->
                  <!-- This is what your users will see when the form-->
                  <!-- has successfully submitted-->
                  <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3 mt-2 text-white">
                      <div class="fw-bolder">Form submission successful!</div>
                      To activate this form, sign up at
                      <br />
                      <a
                        href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                  </div>
                  <!-- Submit error message-->
                  <!---->
                  <!-- This is what your users will see when there is-->
                  <!-- an error submitting the form-->
                  <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3 mt-2">Error sending message!</div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black" id="contato">
          <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
              <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                  <div class="card-body text-center">
                    <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                    <h4 class="text-uppercase m-0">Endereço</h4>
                    <hr class="my-4 mx-auto" />
                    <div class="small text-black-50">Fauze Kassim 662, Pereira Barreto/SP</div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                  <div class="card-body text-center">
                    <i class="fas fa-envelope text-primary mb-2"></i>
                    <h4 class="text-uppercase m-0">Email</h4>
                    <hr class="my-4 mx-auto" />
                    <div class="small text-black-50"><a href="#!">gp727273@gmail.com</a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                  <div class="card-body text-center">
                    <i class="fas fa-mobile-alt text-primary mb-2"></i>
                    <h4 class="text-uppercase m-0">Telefone</h4>
                    <hr class="my-4 mx-auto" />
                    <div class="small text-black-50">+55 (018) 99803-7031</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="social d-flex justify-content-center">
              <a class="mx-2" href="https://twitter.com/Biel06830757"><i class="fab fa-twitter"></i></a>
              <a class="mx-2" href="https://www.facebook.com/Bielzinnnbr"><i class="fab fa-facebook-f"></i></a>
              <a class="mx-2" href="https://github.com/Bielpixel"><i class="fab fa-github"></i></a>
            </div>
          </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50">
          <div class="container px-4 px-lg-5">(Não tem)Copyright &copy; Gabriel´s Corporation 2023</div>


        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>