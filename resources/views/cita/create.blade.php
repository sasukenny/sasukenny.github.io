<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacunación Covid-19 Perú</title>

    <link rel="stylesheet" type="text/css" href="estilos/login.css">
    <link rel="stylesheet" type="text/css" href="estilos/inicio.css">
    <link rel="stylesheet" type="text/css" href="estilos/programar.css">
    <link rel="stylesheet" href="estilos/css/all.min.css">

</head>
<body>
    <div id="volver">
        <a href="">Volver</a>
    </div>
    <div id="salida">
        <a href="">Salir</a>
    </div>
    <h1>!Hola Xocrona!</h1>

    <div id="proceso">
        <div id="proceso1" class="procesoelemento">
            <img src="imgs/flecha seleccionada.svg" alt="Lugar">
            <span>Lugar</span>
        </div>
        <div id="proceso2" class="procesoelemento">
            <img src="imgs/flecha deseleccionada.svg" alt="Hora">
            <span>Hora</span>            
        </div>
        <div id="proceso3" class="procesoelemento">
            <img src="imgs/flecha deseleccionada.svg" alt="Confirmar">
            <span>Confirmar</span>            
        </div>
    </div>

    <div id="cuadroLugar">
        <form  method="POST">
            <diV class="miniCuadroLugar">
                <select class="dropDown" required>
                    <option selected disabled value="">Región</option>
                    <option value="1">Lima</option> 
                    <option value="2">Lima</option> 
                    <option value="3">Lima</option>
                    <option value="10">Lima</option> 
                    <option value="11">Lima</option> 
                    <option value="12">Lima</option> 
                </select>
            </diV>
            <diV class="miniCuadroLugar">
                <select class="dropDown" required>
                    <option selected disabled value="">Provincia</option>
                    <option value="1">Lima</option> 
                    <option value="2">Lima</option> 
                    <option value="3">Lima</option>
                    <option value="10">Lima</option> 
                    <option value="11">Lima</option> 
                    <option value="12">Lima</option> 
                </select>
            </diV>
            <diV class="miniCuadroLugar">
                <select class="dropDown" required>
                    <option selected disabled value="">Distrito</option>
                    <option value="1">Lima</option> 
                    <option value="2">Lima</option> 
                    <option value="3">Lima</option>
                    <option value="10">Lima</option> 
                    <option value="11">Lima</option> 
                    <option value="12">Lima</option> 
                </select>
            </diV>
            <diV class="miniCuadroLugar">
                <select class="dropDown" required>
                    <option selected disabled value="" >Centro de Salud</option>
                    <option value="1">Lima1</option> 
                    <option value="2">Lima</option> 
                    <option value="3">Lima</option>
                    <option value="10">Lima</option> 
                    <option value="11">Lima</option> 
                    <option value="12">Lima</option> 
                </select>
          </diV>
          <diV class="miniCuadroLugar">
            <input type="submit" id="Siguiente" value="Siguiente">
          </diV>
        </form>
      </div>

    <div id="footer-div">
        <footer id="footer-imagen">
            <img src="imgs/minsa_logo.jfif" alt="Logo Minsa" width="200">
        </footer>
    </div>
</body>
<script src="js/inicio.js"></script>
</html>