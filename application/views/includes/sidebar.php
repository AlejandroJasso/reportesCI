      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?php echo base_url(); ?>assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">
                    <?php
                      if (isset($_SESSION['nombre']) && isset($_SESSION['apellidos'])) {
                        //echo strtoupper($_SESSION['nombre'])." ".strtoupper(.$_SESSION['apellidos']); //Convierte en mayusculas
                        echo $_SESSION['nombre']." ".$_SESSION['apellidos'];
                      }
                    ?> 

                  </h5>
              	  	
                  <li class="mt">
                      <!--<a class="active" href="index.html">-->
                        <a href="<?= base_url()?>Dashboard/login">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <!--Evalua si el usuario es agente para mostrar el menu de Crear tareas y Gestión de Dueños-->
                  <?php
                    if($_SESSION['tipo']=="agente"){

                  ?>
                  <li class="sub-menu">
                      <a href="<?= base_url()?>Dashboard/gestionDuenyos">
                          <i class="fa fa-th"></i>
                          <span>Gestión de dueños</span>
                      </a>
                  </li>
<!--                   <li class="sub-menu">
                      <a href="<?= base_url()?>Dashboard/listadoDuenyos">
                          <i class="fa fa-file"></i>
                          <span>Listado de dueños</span>
                      </a>
                  </li> -->   
                  <li class="sub-menu">
                      <a href="<?= base_url()?>Dashboard/catalogoAutos">
                          <i class="fa fa-car"></i>
                          <span>Catalogo de autos</span>
                      </a>
                  </li>                                 
                  <li class="sub-menu">
                      <a href="<?= base_url()?>Dashboard/gestionarReportes">
                          <i class="fa fa-book"></i>
                          <span>Mis reportes</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="<?= base_url()?>Dashboard/duenyosAutos">
                          <i class="fa fa-user"></i>
                          <span>Registrar dueños de autos</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="<?= base_url()?>Dashboard/agregarAuto">
                          <i class="fa fa-desktop"></i>
                          <span>Registrar auto</span>
                      </a>
                  </li>                  
                  <li class="sub-menu">
                      <a href="<?= base_url()?>Dashboard/crearReporte">
                          <i class="fa fa-list"></i>
                          <span>Crear reporte</span>
                      </a>
                  </li>
<!--                   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Crear Tareas</span>
                      </a>
                  </li> -->
                  <?php
                    }
                  ?>
                  <!--Fin de la evaluación si el usuario es agente para mostrar el menu de Crear tareas y Gestión de Dueños-->

<!--                   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Mis Tareas</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Mensajes</span>
                      </a>
                  </li> -->                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->