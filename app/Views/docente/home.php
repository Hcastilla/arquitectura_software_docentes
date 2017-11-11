<?php
  $var('title', 'Docente');
  $resource('/includes/head'); 
?>
<div id="homeDocente">
<header class="row">
<nav class="back-color">
    <div class="nav-wrapper container">
        <a href="index.html" class="brand-logo"><i class="material-icons">bookmark</i>Menú</a>
        <ul class="right hide-on-med-and-down">
            <li>
                <ul id="slide-out" class="side-nav">
                    <li>
                        <div class="user-view">
                            <div class="background">
                                <img src="img/office.jpg">
                            </div>
                            <a href="#!user"><img class="circle" src="img/johan.jpg"></a>
                            <a href="#!name">
                                <span class="white-text name">Johan Robles Solano</span>
                                <a href="#" class="btn-floating right">
                                    <i class="material-icons">camera_alt</i>
                                </a>
                            </a>
                            <a href="#!email">
                                <span class="white-text email">johanrobles@hotmail.com</span>
                            </a>
                        </div>
                    </li>
                    <li><a href="index.html"><i class="material-icons">home</i>Inicio</a></li>
                    <li>
                        <div class="divider"></div>
                    </li>
                    <li><a class="subheader"><i class="material-icons">settings</i>Configuración</a></li>
                    <li><a href="#change_pass" class="modal-trigger">Cambiar contraseña</a></li>
                    <li><a href="/logout">Salir</a></li>
                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse">
                    <img src="img/johan.jpg" class="responsive-img perfil" alt="foto de perfil">
                    <span><?php echo $_SESSION['user']['primerNombre']." ".$_SESSION['user']['primerApellido'];?></span>
                </a>
            </li>
        </ul>
    </div>
</nav>
</header>
<div class="container">
<div class="row layout">

    <div class="col s6 m4 center" id="listado">
        <a href="#" class="btn btn-floating btn-large blue-ligth">
            <i class="material-icons">list</i>
        </a>
        <h5 class="flow-text">Listado de clases</h5>
    </div>

    <div class="col s6 m4 center" v-if="clase != null &&  claseActive == false">
        <a href="#" class="btn btn-floating btn-large pulse blue-ligth" 
        v-on:click="iniciarClase()">
            <i class="material-icons">play_arrow</i>
        </a>
        <h5 class="flow-text">Iniciar la clase</h5>
    </div>
    <div class="col s6 m4 center" v-if="clase != null && claseActive == true">
        <a href="#" class="btn btn-floating btn-large red" 
            v-on:click="terminarClase()">
            <i class="material-icons">stop</i>
        </a>
        <h5 class="flow-text">Terminar clase</h5>
    </div>
    <div class="col s6 m4 center" v-if="clase != null">
        <a href="#" class="btn btn-floating btn-large red" onclick="Materialize.toast('Se ha cancelado la clase', 2000)">
            <i class="material-icons">close</i>
        </a>
        <h5 class="flow-text">Cancelar la clase</h5>
    </div>
    <div class="col s6 m4 center">
        <a href="#registry_class" class="btn btn-floating btn-large modal-trigger blue-ligth">
            <i class="material-icons">import_contacts</i>
        </a>
        <h5 class="flow-text">Registar clase/tema</h5>
    </div>
    <div class="col s6 m4 center">
        <a href="#edit_class" class="btn btn-floating btn-large modal-trigger blue-ligth">
            <i class="material-icons">mode_edit</i>
        </a>
        <h5 class="flow-text">Modificar clase/tema</h5>
    </div>
    <div class="col s6 m4 center">
        <a href="Registrar_ausencia.html" class="btn btn-floating btn-large blue-ligth">
            <i class="material-icons">visibility_off</i>
        </a>
        <h5 class="flow-text">Registrar ausencias</h5>
    </div>
    <div class="col s6 m4 center">
        <a href="Registrar_excusa.html" class="btn btn-floating btn-large blue-ligth">
            <i class="material-icons">mail</i>
        </a>
        <h5 class="flow-text">Registar excusa</h5>
    </div>
    <div class="col s6 m4 center">
        <a href="#lista_por_clase" class="btn btn-floating btn-large modal-trigger blue-ligth">
            <i class="material-icons">supervisor_account</i>
        </a>
        <h5 class="flow-text">Lista de estudiantes</h5>
    </div>
    <div class="col s6 m4 center">
        <a href="horario.html" class="btn btn-floating btn-large blue-ligth">
            <i class="material-icons">web</i>
        </a>
        <h5 class="flow-text">Mi horario</h5>
    </div>
    <div class="col s6 m4 center">
        <a href="cursos.html" class="btn btn-floating btn-large blue-ligth">
            <i class="material-icons">visibility</i>
        </a>
        <h5 class="flow-text">Mis cursos</h5>
    </div>
</div>
</div>
<div id="edit_class" class="modal">
    <div class="modal-content center">
        <h5 class="lobster">Modificar tema</h5>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="tema" type="text" class="validate" value="Casos de uso">
                        <label for="tema">Tema</label>
                    </div>
                </div>
                <h5 class="lobster">Actividades</h5>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="actividad1" type="text" class="validate" value="listar requerimientos">
                        <label for="actividad1">Actividad 1</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="actividad2" type="text" class="validate" value="Hacer diagrama en enterprise arquitect">
                        <label for="actividad2">Actividad 2</label>
                    </div>
                </div>
                <button class="btn btn-floating btn-large blue-ligth"><i class="material-icons">save</i></button>
            </form>
        </div>
    </div>
</div>
<div id="change_pass" class="modal">
    <div class="modal-content center">
        <h5 class="lobster">Cambiar contraseña</h5>
        <div class="row">
            <form class="col s12">
                <div class="input-field">
                    <input id="actual" type="password" class="validate">
                    <label for="actual">Contrseña actual</label>
                </div>
                <div class="input-field">
                    <input id="nueva" type="password" class="validate">
                    <label for="nueva">Contraseña nueva</label>
                </div>
                <button class="btn btn-floating btn-large blue-ligth"><i class="material-icons">save</i></button>
            </form>
        </div>
    </div>
</div>
<div id="registry_class" class="modal">
    <div class="modal-content center">
        <h5 class="lobster">Registrar clase y actividades</h5>
        <div class="row">
            <form action="" class="col s12">
                <div class="input-field">
                    <input id="last_name" type="text" class="validate" required>
                    <label for="last_name">Last Name</label>
                </div>
                <h5 class="lobster">Actividades</h5>

                <div class="input-field">
                    <input id="actividad1" type="text" class="validate">
                    <label for="actividad1">Actividad 1</label>
                </div>
                <div class="input-field">
                    <input id="actividad2" type="text" class="validate">
                    <label for="actividad2">Actividad 2</label>
                </div>
                <button class="btn btn-floating btn-large blue-ligth"><i class="material-icons">save</i></button>
            </form>
        </div>
    </div>
</div>
<div id="lista_por_clase" class="modal">
    <div class="modal-content center">
        <table class="responsive-table centered striped">
            <thead class="back-color">
                <tr style="color: white;">
                    <th>Asignatura</th>
                    <th>Grupo</th>
                    <th>Horario</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>P.O.O</td>
                    <td>Grupo1</td>
                    <td><a href="lista_estudiantes.html">Lunes de 6 a 8</a></td>
                </tr>
                <tr>
                    <td>P.O.O</td>
                    <td>Grupo2</td>
                    <td><a href="lista_estudiantes.html">Lunes de 8 a 10</a></td>
                </tr>
                <tr>
                    <td>Programación 1</td>
                    <td>Grupo 3</td>
                    <td><a href="lista_estudiantes.html">Martes de 8 a 10</a></td>
                </tr>
                <tr>
                    <td>Arquitectura del sw</td>
                    <td>Grupo 2</td>
                    <td><a href="lista_estudiantes.html">Viernes de 8 a 10</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div id="modal3" class="modal">
    <div class="modal-content center">
        <table class="responsive-table centered bordered">
            <thead class="blue-ligth">
                <tr style="color: white;">
                    <th>Asignatura</th>
                    <th>Grupo</th>
                    <th>Horario</th>
                </tr>
            </thead>

            <tbody>
                <tr class="clickeable" v-for="(clase, i) in clases" 
                    v-on:click="setClase(clase, i)">
                    <td class="lobster">{{clase.asignatura.nombre}}</td>
                    <td>{{clase.grupo.nombre}}</td>
                    <td class="c_blue-ligth">---</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>

<?php $resource('/includes/scripts'); ?>
