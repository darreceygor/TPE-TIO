<?php
    

function renderHome() {

include_once('./templates/header.php') ;
            
        echo '
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul  class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="login">Login</a></li>
                <li class="nav-item active">
                    <a class="nav-link" href="registrar">Registro</a></li>
            </ul>
        </nav>

        <table  class="table table-bordered">
        <tr  id="default">

        <th>Nombre de Usuario</th>

        <th>Edad</th>


        </tr>

        <tr>

        <td>Juan Perez</td>

        <td>40</td>


        </tr>

        <tr>

        <td>Rodrigo Rodriguez</td>

        <td>19</td>

        </tr>

        
        ' ;


include_once('./templates/footer.php') ;
}


