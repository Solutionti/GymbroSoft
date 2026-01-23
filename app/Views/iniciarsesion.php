
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>GymbroSoft</title>
    <link rel="stylesheet" href="<?= base_url('fontawesome/css/fontawesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('fontawesome/css/brands.css') ?>">
    <link rel="stylesheet" href="<?= base_url('fontawesome/css/solid.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/estilo.css') ?>">

    <link rel="stylesheet" href="https://coreui.io/demos/bootstrap/5.3/free/vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="https://coreui.io/demos/bootstrap/5.3/free/css/vendors/simplebar.css">
    <link href="https://coreui.io/demos/bootstrap/5.3/free/css/style.css" rel="stylesheet">
    <link href="https://coreui.io/demos/bootstrap/5.3/free/css/examples.css" rel="stylesheet">
    <script src="https://coreui.io/demos/bootstrap/5.3/free/js/config.js"></script>
    <script src="https://coreui.io/demos/bootstrap/5.3/free/js/color-modes.js"></script>
  </head>
  <body>
    <div class="bg-body-tertiary min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card-group d-block d-md-flex row">
              <div class="card col-md-7 p-4 mb-0">
                <div class="card-body">
                  <div class="text-center">
                    <img
                      src="<?= base_url('img/logo-zonafit.svg') ?>"
                      alt="ZonaFit Logo"
                      class="mb-3"
                      width="90"
                    >
                  </div>
                  <h1 class="">Iniciar Sesión</h1>
                  <p class="text-body-secondary">Iniciar sesión en su cuenta</p>
                  <div class="messageError mt-2"></div>
                  <form role="form" method="post" validate id="FormLOG">
                    <div class="input-group mb-3">
                      <span class="input-group-text">
                        <i class="fas fa-user"></i>
                      </span>
                      <input
                        class="form-control"
                        type="text"
                        placeholder="Usuario"
                        id="usuario"
                      >
                    </div>
                    <div class="input-group">
                    <input
                      type="password"
                      class="js-toggle-password form-control"
                      placeholder="Contraseña"
                      id="password"
                    >
                    <a
                      class="input-group-append input-group-text"
                    >
                      <i id="changePassIcon" class="fas fa-eye"></i>
                    </a>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <button
                        type="submit"
                        class="btn naraja-background px-4 mt-3"
                        id="login"
                      >
                        Ingresar
                      </button>
                    </div>
                    <div class="col-6 text-end">
                      <button class="btn btn-link px-0 text-white" type="button">¿Has olvidado tu contraseña?</button>
                    </div>
                  </div>
                  </form>

                </div>
              </div>
              <div class="card col-md-5 text-white naraja-background py-5">
                <div class="card-body text-center">
                  <div>
                    <h2>Inscribirse</h2>
                    <p>
                      Este software de gimnasio optimiza entrenamientos, organiza rutinas, 
                      analiza avances y motiva al usuario a mejorar cada dia. 
                    </p>
                    <button class="btn btn-lg btn-outline-light mt-3" type="button">Regístrate ahora!</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CoreUI and necessary plugins-->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://coreui.io/demos/bootstrap/5.3/free/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="https://coreui.io/demos/bootstrap/5.3/free/vendors/simplebar/js/simplebar.min.js"></script>
    <script>
      const header = document.querySelector('header.header');
      document.addEventListener('scroll', () => {
        if (header) {
          header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
        }
      });
    </script>
    <script src="https://coreui.io/demos/bootstrap/5.3/free/vendors/chart.js/js/chart.umd.js"></script>
    <script src="https://coreui.io/demos/bootstrap/5.3/free/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="https://coreui.io/demos/bootstrap/5.3/free/vendors/@coreui/utils/js/index.js"></script>
    <script src="https://coreui.io/demos/bootstrap/5.3/free/js/main.js"></script>
    <script></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"496f8c1a159448ef82d6c94971e63824","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
    <script>
      var baseurl = '<?= base_url() ?>';
    </script>
    <script src="<?= base_url('js/login.js') ?>"></script>
</body>
</html>