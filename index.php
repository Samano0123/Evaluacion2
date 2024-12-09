<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script>
        function calcular() {

            const xhr = new XMLHttpRequest();
            xhr.open("POST", "calculaStem.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


            xhr.onload = function () {
                if (xhr.status === 200) {

                    document.getElementById("resultadoA").innerHTML = xhr.responseText;
                } else {
                    document.getElementById("resultadoA").innerHTML = "<p>Ocurrió un error al calcular los resultados.</p>";
                }
            };


            xhr.send();
        }
    </script>
</head>
<body>
    <section class="wrapper">
        <header>
            <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
        </header>
        <section id="contenedor">
            <section class="problema">
                <h2>Placa fotovoltaica</h2>
                <p>Resolver el siguiente enunciado planteado:</p>
                <p>
                    Se dispone de una placa fotovoltaica de 80x40 cm, cuyo rendiemiento es del 20%. Determinar se la cantidad de
                    energia electrica (KWh) que genera, para acumular una bateria, si la placa ha estado funcionando durante
                    12 horas, siendo el coeficiente de radiacion de 0.9 cal/min cm2. Se admite que no hay perdidas ni en el 
                    transporte, ni en la carga de la bateria. 
                </p>
            </section>
            <section class="esquemaProblema">
                <h2>Esquema</h2>
                <center>
                    <img class="imgProblema" src="images/placa.jpeg" alt="Esquema de placa fotovoltaica">
                </center>
            </section>
            <section class="formulas">
                <h2>Fórmulas:</h2>
                <p>
                    - Q= K * t * S * r
                </p>
            </section>
            <section class="datos">
                <h2>Datos:</h2>
                <p>
                    - Dimensiones de la placa (S): 80 cm x 40 cm = 3200 cm2 <br>
                    - Tiempo de operación (t): 12 h = 720 minutos <br>
                    - Coeficiente de radiación(K): 0.9 cal/min.cm2 <br>
                    - Rendimiento (r)= 20 % = 0.2
                </p>
            </section>
            <section class="calculos">
                <h2>Solución:</h2>
                <p>
                    Haz clic en el botón para calcular los resultados.
                </p>
                <button onclick="calcular();">Calcular</button>
            </section>
            <section class="resultado">
                <h2>Resultados:</h2>
                <div id="resultadoA"></div>
            </section>
        </section>
        <footer class="pie">
            Creative Commons versión 3.0 SciSoft 2024
        </footer>
    </section>
</body>
</html>
