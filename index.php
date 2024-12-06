<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema STEM</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Problematica de STEM</h1>
            <h2>Quiñonez Benitez Elias</h2>
            <p>No. de Control: 22090727</p>
        </header>
        <section class="contenedor">
            <form id="calculo-form" method="post" action="calculadora.php">
                <div class="cuadro">
                    <h3>Problema</h3>
                    <p>Un panel fotovoltaico entrega una potencia útil de 75 000 W. Suponiendo que la densidad de radiación sea de 1000 W/m² y el rendimiento del panel del 50 %, calcular la superficie del panel.</p>
                </div>
                <div class="cuadro">
                    <h3>Imagen del Problema</h3>
                    <img src="images/problema.png" alt="Problema" class="problem-image">
                </div>
                <div class="cuadro">
                    <h3>Datos</h3>
                    <ul>
                        <li><b>Q:</b> Energía generada</li>
                        <li><b>K:</b> Coeficiente de radiación</li>
                        <li><b>t:</b> Tiempo, en minutos</li>
                        <li><b>S:</b> Área, cm²</li>
                        <li><b>r:</b> Rendimiento</li>
                    </ul>
                </div>
                <div class="cuadro">
                    <h3>Fórmulas</h3>
                    <ul>
                        <li>\( Q = K \cdot t \cdot S \cdot r \) en kcal</li>
                        <li>Convertir a kWh (base 1 h)</li>
                    </ul>
                </div>
                <div class="cuadro">
                    <h3>Datos del cálculo</h3>
                    <input type="number" name="potenciaUtil" placeholder="Potencia útil (W)" required>
                    <input type="number" name="rendimiento" placeholder="Rendimiento (%)" required>
                    <input type="number" name="densidadRadiacion" placeholder="Densidad de radiación (W/m²)" required>
                    <button type="submit">Calcular</button>
                </div>
                <div class="cuadro">
                    <h3>Resultado</h3>
                    <p id="resultado-texto" style="display: none;"></p>
                    <button id="ocultar-btn" style="display: none;">Ocultar Resultado</button>
                </div>
            </form>
        </section>
        <footer>
            <p>&copy; Creative Commons SciFoft 2024 :D</p>
        </footer>
    </div>
</body>
</html>
