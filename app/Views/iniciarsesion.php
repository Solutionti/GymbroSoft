
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
    <link rel="stylesheet" href="https://coreui.io/demos/bootstrap/5.3/free/vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="https://coreui.io/demos/bootstrap/5.3/free/css/vendors/simplebar.css">
    <link href="https://coreui.io/demos/bootstrap/5.3/free/css/style.css" rel="stylesheet">
    <link href="https://coreui.io/demos/bootstrap/5.3/free/css/examples.css" rel="stylesheet">
    <script src="https://coreui.io/demos/bootstrap/5.3/free/js/config.js"></script>
    <script src="https://coreui.io/demos/bootstrap/5.3/free/js/color-modes.js"></script>
  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
      <div class="sidebar-header border-bottom">
        <div class="sidebar-brand">
          <img 
            src="https://static.vecteezy.com/system/resources/thumbnails/051/226/424/small/abstract-flame-logo-design-with-orange-yellow-and-brown-shades-ideal-for-business-branding-technology-companies-and-modern-designs-png.png"
            class="img-fluid mx-1"
            width="80"
          >
        </div>
        <button class="btn-close d-lg-none text-white" type="button" data-coreui-theme="dark" aria-label="Close" onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#sidebar&quot;)).toggle()"></button>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="index.html">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
            </svg> Inicio<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
            <li class="nav-item"><a class="nav-link" href="typography.html">
                <svg class="nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
                </svg> Membresias</a>
            </li>
        <li class="nav-item"><a class="nav-link" href="colors.html">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
            </svg> Usuarios</a></li>
        <li class="nav-item"><a class="nav-link" href="typography.html">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
            </svg> Miembros</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="typography.html">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
            </svg> Visita regular</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="typography.html">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
            </svg> Programacion de clases</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="typography.html">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
            </svg> Ventas</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="typography.html">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
            </svg> Pagos</a>
        </li>
        <li class="nav-title">Version</li>
        <!-- <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
            </svg> Notifications</a>
          <ul class="nav-group-items compact">
            <li class="nav-item"><a class="nav-link" href="notifications/alerts.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Alerts</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/badge.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Badge</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/modals.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Modals</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/toasts.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Toasts</a></li>
          </ul>
        </li> -->
        <li class="nav-item"><a class="nav-link text-primary fw-semibold" href="https://coreui.io/product/bootstrap-dashboard-template/" target="_top">
            <svg class="nav-icon text-primary">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
            </svg>1.0.0.0</a></li>
      </ul>
      <div class="sidebar-footer border-top d-none d-md-flex">
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
      </div>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100">
      <header class="header header-sticky p-0 mb-4">
        <div class="container-fluid border-bottom px-4">
          <button class="header-toggler" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()" style="margin-inline-start: -14px;">
            <i class="fas fa-bars"></i>
          </button>
          <ul class="header-nav d-none d-lg-flex">
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="#">Jerson Galvez Ensuncho</a>
            </li>
          </ul>
          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                <i class="fas fa-bell"></i>
            </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">
               <i class="fas fa-tasks"></i>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">
                <i class="fas fa-envelope">
            </i> 
           </a>
            </li>
          </ul>
          <ul class="header-nav">
            <li class="nav-item py-1">
              <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown">
              <button class="btn btn-link nav-link py-2 px-2 d-flex align-items-center" type="button" aria-expanded="false" data-coreui-toggle="dropdown">
                <i class="fas fa-moon mt-1"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end" style="--cui-dropdown-min-width: 8rem;">
                <li>
                  <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="light">
                    <svg class="icon icon-lg me-3">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-sun"></use>
                    </svg>Claro
                  </button>
                </li>
                <li>
                  <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="dark">
                    <svg class="icon icon-lg me-3">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-moon"></use>
                    </svg>Oscuro
                  </button>
                </li>
                <li>
                  <button class="dropdown-item d-flex align-items-center active" type="button" data-coreui-theme-value="auto">
                    <svg class="icon icon-lg me-3">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                    </svg>Auto
                  </button>
                </li>
              </ul>
            </li>
            <li class="nav-item py-1">
              <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link py-0 pe-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md">
                    <img class="avatar-img " src="https://coreui.io/demos/bootstrap/5.3/free/assets/img/avatars/2.jpg" alt="user@email.com">
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2">Cuenta</div><a class="dropdown-item" href="#">
                  
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                  </svg> Cerrar Sesion</a>
              </div>
            </li>
          </ul>
        </div>
      </header>
      <div class="body flex-grow-1">
        <div class="container-lg px-4">
          <div class="card mb-4">
            <div class="card-header">Membresias</div>
              <div class="card-body">
              <!--  -->
              </div>
            </div>
          </div>
          
          <!--  -->
        </div>
      <footer class="footer px-4">
        <div><a href="https://coreui.io">Todos los derechos reservados </a><a href="https://coreui.io/product/free-bootstrap-admin-template/">GymbroSoft</a> © 2026</div>
        <div class="ms-auto">Desarrollado por&nbsp;<a href="https://coreui.io/bootstrap/docs/">GoFuture</a></div>
      </footer>
    </div>

    <!-- CoreUI and necessary plugins-->
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
</body>
</html>