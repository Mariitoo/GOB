<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sube tu documento</title>
    <link rel="stylesheet" href="css/no_gif.css">
    <link href="css/carga.css" rel="stylesheet" />

</head>



<body>
    <!-- BARRA DE BÚSQUEDA IZQUIERDA -->
    <div class="contenedor">
        <nav class="nav">
            <ul class="list">

                <li class="list__item">
                    <div class="list__button">
                        <img src="assets/dashboard.svg" class="list__img">
                        <a href="INICIO.html" class="nav__link">Inicio</a>
                    </div>
                </li>

                <li class="list__item list__item--click">
                    <div class="list__button list__button--click">
                        <img src="assets/docs.svg" class="list__img">
                        <a href="#" class="nav__link">Dependencias</a>
                        <img src="assets/arrow.svg" class="list__arrow">
                    </div>

                    <ul class="list__show">
                        <li class="list__inside">
                            <a href="#" class="nav__link nav__link--inside">no se</a>
                        </li>

                        <li class="list__inside">
                            <a href="#" class="nav__link nav__link--inside">ni idea</a>
                        </li>
                    </ul>

                </li>


                <li class="list__item">
                    <div class="list__button">
                        <img src="assets/stats.svg" class="list__img">
                        <a href="#" class="nav__link">Archivos</a>
                    </div>
                </li>




                <li class="list__item">
                    <div class="list__button">
                        <img src="assets/message.svg" class="list__img">
                        <a href="#" class="nav__link">Contacto</a>
                    </div>
                </li>

            </ul>
        </nav>
    </div>
    <!-- FIN DEL MENU -->
    <div class="sub_cont">
        <div class="sub">
            <h1>Carga de archivos</h1>
            <!-- SE PUEDE USAR ESTE O EL DE ABAJO, COMO GUSTEN -->
            <form action="cargar_archivo.php" method="post" enctype="multipart/form-data">
                <label for="archivo">Selecciona un archivo:</label>
                <input type="file" name="archivo" id="archivo"><br>
                <input type="submit" value="Cargar archivo">
            </form>
            <!--<form method="post" action="cargar_archivo.php" enctype="multipart/form-data">
	        <div class="form-group">
		        <label for="archivo">Selecciona un archivo</label>
		        <input type="file" name="archivo" id="archivo">
	        </div>
	        <button type="submit" class="btn btn-primary">Cargar archivo</button>
        </form>-->

        </div>
    </div>

    <script src="main.js"></script>

    <?php
// Valores de la lista
$opciones = array('A.1 Presupuesto Global', 'A.1.1 Presupuesto de Ingresos Autorizado Global por Capitulo', 'A.1.2 Presupuesto de Egresos Autorizado Global por Capitulo','A.1.3 Presupuesto de Egresos por Secretaría Global','A.4 Asignación del Fondo Unico de Operación','A.4.1b Arqueo del Fondo Único de Operación','A.5 Rel. de Ctas. Bancarias, Inversiones, etc.');

// Valor por defecto
$valorDefecto = 'A.1 Presupuesto Global';

// HTML de la lista desplegable
echo '<select name="opciones">';
foreach ($opciones as $opcion) {
	if ($opcion == $valorDefecto) {
		echo '<option value="' . $opcion . '" selected>' . $opcion . '</option>';
	} else {
		echo '<option value="' . $opcion . '">' . $opcion . '</option>';
	}
}
echo '</select>';
?>
</body>

</html>