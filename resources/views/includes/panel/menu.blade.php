<!-- panel del Menu Principal del Usuario -->

<!-- Heading -->
<h6 class="navbar-heading text-muted">Menu principal </h6>
<ul class="navbar-nav">
          <li class="nav-item  active ">
            <a class="nav-link  active " href="home">
              <i class="ni ni-favourite-28 text-primary"></i> Novedades
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="homePaula">
              <i class="ni ni-briefcase-24 text-red"></i> Administracion
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">
              <i class="fas fa-car-alt text-orange"></i> Visitas Esperadas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">
              <i class="ni ni-single-copy-04 text-info"></i> Informacion
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route ('logout')}}"
                onclick="event.preventDefault(); document.getElementById('formLogout').submit();"
            >
              <i class="ni ni-user-run"></i> Cerrar Sesion
            </a>
            <form action ="{{ route('logout')}}" method="POST" style="display: none;" id="formLogout" >
                @csrf
            </form>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <!-- <h6 class="navbar-heading text-muted">Idea</h6> -->
        <!-- Navigation -->
       <!--  <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="homePaula">
              <i class="ni ni-spaceship"></i> Paula
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-palette"></i> Te Amo
            </a>
          </li>
        </ul> -->