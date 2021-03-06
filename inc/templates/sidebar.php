    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center mt-2" href="index.php?request=main">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src="img/whiteLogo.png" width="85" alt="Logo MEXQ" class="responsive-img mb-2">
          <!-- <i class="fas fa-laugh-wink"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3">Empleados <sup>MEXQ</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <div id="sidePaneAdmin d-none">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active seccionPanel d-none">
        <a class="nav-link" href="index.php?request=main">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Panel de control</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading d-none">
        RRHH
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item rh d-none">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#rh" aria-expanded="true" aria-controls="rh">
          <i class="fas fa-handshake"></i>
          <span>Módulo RRHH</span>
        </a>
        <div id="rh" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones de consulta:</h6>
            <a class="collapse-item" href="index.php?request=empleado"><i class="fas fa-users"></i> Empleados activos</a>
            <a class="collapse-item" href="index.php?request=bajas"><i class="fas fa-user-alt-slash"></i> Empleados inactivos</a>
          </div>
        </div>
      </li>

      <li class="nav-item laborales d-none">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#laborales" aria-expanded="true" aria-controls="laborales">
          <i class="fas fa-users-cog"></i>
          <span>Módulo Laborales</span>
        </a>
        <div id="laborales" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones de consulta:</h6>
            <a class="collapse-item" href="index.php?request=empleado"><i class="fas fa-users"></i> Empleados activos</a>
            <a class="collapse-item" href="index.php?request=bajas"><i class="fas fa-user-alt-slash"></i> Empleados inactivos</a>
            <a class="collapse-item" href="index.php?request=becarios"><i class="fas fa-user-graduate"></i> Becarios</a>
            <a class="collapse-item" href="index.php?request=ci"><i class="fas fa-align-justify"></i> CI</a>
            <a class="collapse-item" href="index.php?request=seguimiento"><i class="fas fa-user-tag"></i> Seguimiento</a>
            <a class="collapse-item" href="index.php?request=historial-empleados"><i class="fas fa-user-clock"></i> Historial de empleado</a>
            <a class="collapse-item" href="index.php?request=encuesta_salida"><i class="fas fa-tasks"></i> Encuestas de salida</a>
            <hr class="sidebar-divider">
            <h6 class="collapse-header">Administrar registros:</h6>
            <a class="collapse-item" href="index.php?request=alta-empleado"><i class="fas fa-user-plus"></i> Alta de empleado</a>
            <a class="collapse-item" href="index.php?request=altas"><i class="fas fa-user-cog"></i> Administrar Altas</a>
            <a class="collapse-item" href="index.php?request=semanales"><i class="fas fa-user-check"></i> Altas Semanales</a>
            <hr class="sidebar-divider">
            <h6 class="collapse-header">Administrar Bajas</h6>
            <a class="collapse-item" href="index.php?request=bajaPuesto"><i class="fas fa-user-minus"></i> Bajas cambio puesto</a>
            <a class="collapse-item" href="index.php?request=administrarBajas"><i class="fas fa-user-times"></i> Administrar Bajas</a>
            <h6 class="collapse-header laborales_supervisor d-none">Administrar</h6>
            <a class="collapse-item laborales_supervisor d-none" href="index.php?request=gestionar-codigos"><i class="fas fa-dice"></i> Clasificacion de Bajas</a>
            <!-- <a class="collapse-item" href="index.php?request=gestionar-tabuladores"><i class="fas fa-poll-h"></i> Tabuladores</a> -->
          </div>
        </div>
      </li>

      <li class="nav-item dh d-none">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dh" aria-expanded="true" aria-controls="dh">
          <i class="fas fa-user-tag"></i>
          <span>Módulo DH</span>
        </a>
        <div id="dh" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones de consulta:</h6>
            <a class="collapse-item" href="index.php?request=fecha2"><i class="far fa-clock"></i> Antiguedad</a>
            <a class="collapse-item" href="index.php?request=fecha1"><i class="fas fa-birthday-cake"></i> Cumpleañeros</a>
            <!-- <a class="collapse-item" href="index.php?request=notificaciones"><i class="far fa-envelope"></i> Notificaciones</a> -->
          </div>
        </div>
      </li>

      <li class="nav-item transportes d-none">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#transportes" aria-expanded="true" aria-controls="transportes">
          <i class="fas fa-bus"></i>
          <span>Módulo Transportes</span>
        </a>
        <div id="transportes" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones de consulta:</h6>
            <a class="collapse-item" href="index.php?request=direcciones"><i class="fas fa-align-justify"></i> Transportes</a>
          </div>
        </div>
      </li>

      <li class="nav-item rh_generales d-none">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#rh_generales" aria-expanded="true" aria-controls="rh_generales">
        <i class="fas fa-user-circle"></i>
          <span>RH General</span>
        </a>
        <div id="rh_generales" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones:</h6>
            <a class="collapse-item" href="index.php?request=encuesta"><i class="fas fa-file-alt"></i> Encuesta de salida</a>
          </div>
        </div>
      </li>

      <li class="nav-item nominas d-none">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#nominas" aria-expanded="true" aria-controls="nominas">
          <i class="fas fa-file-invoice"></i>
          <span>Módulo Nóminas</span>
        </a>
        <div id="nominas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones de consulta:</h6>
            <a class="collapse-item" href="index.php?request=empleado"><i class="fas fa-users"></i> Empleados activos</a>
            <a class="collapse-item" href="index.php?request=bajas"><i class="fas fa-user-alt-slash"></i> Empleados inactivos</a>
            <a class="collapse-item" href="index.php?request=ci"><i class="fas fa-align-justify"></i> CI</a>
            <hr class="sidebar-divider">
            <h6 class="collapse-header">Administrar registros:</h6>
            <a class="collapse-item" href="index.php?request=altas"><i class="fas fa-user-cog"></i> Administrar Altas</a>
            <a class="collapse-item" href="index.php?request=semanales"><i class="fas fa-user-check"></i> Altas Semanales</a>
            <h6 class="collapse-header">Administrar Bajas</h6>
            <a class="collapse-item" href="index.php?request=bajaPuesto"><i class="fas fa-user-minus"></i> Bajas cambio puesto</a>
            <a class="collapse-item" href="index.php?request=administrarBajas"><i class="fas fa-user-times"></i> Administrar Bajas</a>
          </div>
        </div>
      </li>

      <li class="nav-item capacitacion d-none">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#capacitacion" aria-expanded="true" aria-controls="capacitacion">
          <i class="fas fa-users"></i>
          <span>Módulo Capacitación</span>
        </a>
        <div id="capacitacion" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Modulos</h6>
            <a class="collapse-item" href="index.php?request=puestos"><i class="fas fa-users-cog"></i> Puestos</a>
          </div>
        </div>
      </li>

      <li class="nav-item coordinadora d-none">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#coordinadora" aria-expanded="true" aria-controls="coordinadora">
          <i class="fas fa-pencil-ruler"></i>
          <span>Módulo Coordinadoras</span>
        </a>
        <div id="coordinadora" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Modulos</h6>
            <a class="collapse-item" href="index.php?request=altasc"><i class="fas fa-users"></i> Altas</a>
            <a class="collapse-item" href="index.php?request=bajasc"><i class="fas fa-user-alt-slash"></i> Bajas</a>
            <a class="collapse-item" href="index.php?request=seguimiento"><i class="fas fa-user-tag"></i> Seguimiento</a>
          </div>
        </div>
      </li>

      <li class="nav-item administrador d-none">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#administrador" aria-expanded="true" aria-controls="administrador">
          <i class="fas fa-fw fa-cog"></i>
          <span>Módulo Administrador</span>
        </a>
        <div id="administrador" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Modulos</h6>
            <a class="collapse-item" href="index.php?request=administrar"><i class="fas fa-cogs"></i> Administrar</a>
          </div>
        </div>
      </li>

      


      <!-- Divider -->
      <!-- <hr class="sidebar-divider"> -->

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Addons
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Charts -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li> -->

      <!-- Nav Item - Tables -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li> -->

      </div>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

      

    </ul>
    <!-- End of Sidebar -->