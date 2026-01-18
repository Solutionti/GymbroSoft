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
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/inicio') ?>">
              <i class="fas fa-home mx-3"></i> Inicio<span class="badge badge-sm bg-danger ms-auto">Dasboard</span>
            </a>
          </li>
           <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/membresias') ?>">
                <i class="fas fa-id-card mx-3"></i> Planes</a>
            </li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('/usuarios') ?>">
            <i class="fas fa-users mx-3"></i> Usuarios</a></li>

        <li class="nav-item"><a class="nav-link" href="<?= base_url('/miembros') ?>">
            <i class="fas fa-dumbbell mx-3"></i> Deportistas</a>
        </li>
        <!-- <li class="nav-item"><a class="nav-link" href="<?= base_url('/regular') ?>">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
            </svg> Visitas regulares</a>
        </li> -->
        <li class="nav-item"><a class="nav-link" href="<?= base_url('/clases') ?>">
            <i class="fas fa-calendar mx-3"></i> Programacion de clases</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('/ventas') ?>">
            <i class="fas fa-cash-register mx-3"></i> Ventas</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('/pagos') ?>">
            <i class="fas fa-money-bill-alt mx-3"></i> Pagos</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('/productos') ?>">
            <i class="fas fa-cart-arrow-down mx-3"></i> Productos</a>
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
        <li class="nav-item"><a class="nav-link text-primary fw-semibold">
          <i class="fas fa-code-branch mx-4"></i> 1.0.0.0</a></li>
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
              <a class="nav-link text-uppercase" href="#">
                <?= session()->get('nombre') ?>
              </a>
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
                 <!-- <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                  </svg> Configuracion</a><a class="dropdown-item" href="#">  -->
                <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo base_url(); ?>cerrarsesion">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                  </svg> Cerrar Sesion</a>
                  
                </div>
            </li>
          </ul>
        </div>
      </header>