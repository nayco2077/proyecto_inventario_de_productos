<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Inventario - Madhu</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="navbar">
        <span>Inventario de Madhu</span>
        <div style="display: flex; gap: 10px; align-items: center;">
            <input type="text" placeholder="Buscar productos...">
            <button class="btn">Buscar</button>
        </div>
        <div class="informacion-del-usuario">
            <div style="width: 35px; height: 35px; border-radius: 50%; background: linear-gradient(135deg, var(--gold) 0%, var(--amber) 100%); display: flex; align-items: center; justify-content: center; font-weight: bold; color: var(--purple-dark);">U</div>
            <span>Usuario</span>
        </div>
    </div>

    <div class="contenerdor-principal">
        <div class="sidebar">
            <h2>Menú</h2>
            <ul>
                <li>Dashboard</li>
                <li>Productos</li>
                <li> Entradas</li>
                <li>Salidas</li>
                <li> Alertas</li>
                <li> Reportes</li>
                <li> Configuración</li>
            </ul>
        </div>

        <div class="contenido-principal">
            <h1>Dashboard de Inventario</h1>

            <div class="dashboard-cards">
                <div class="card">
                    <div class="card-header">Productos en Stock</div>
                    <div class="card-value">21</div>
                </div>
                <div class="card">
                    <div class="card-header">Productos Bajos en Stock</div>
                    <div class="card-value">2</div>
                </div>
                <div class="card">
                    <div class="card-header">Próximos a Vencer</div>
                    <div class="card-value">1</div>
                </div>
                <div class="card">
                    <div class="card-header">Valor Total Inventario</div>
                    <div class="card-value">$2,000</div>
                </div>
            </div>

            <h2>Productos con Stock Bajo</h2>
            <table class="tabla-de-productos">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Stock Actual</th>
                        <th>Stock Mínimo</th>
                        <th>Días hasta agotarse</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bajo-stock">
                        <td>Pan Ciabatta</td>
                        <td>5</td>
                        <td>15</td>
                        <td>2</td>
                        <td><button class="btn">Reabastecer</button></td>
                    </tr>
                    <tr class="bajo-stock">
                        <td>Croissants de Chocolate</td>
                        <td>8</td>
                        <td>20</td>
                        <td>1</td>
                        <td><button class="btn">Reabastecer</button></td>
                    </tr>
                    <tr class="proximo-a-vencer">
                        <td>Torta de Zanahoria</td>
                        <td>12</td>
                        <td>-</td>
                        <td>Vence en 2 días</td>
                        <td><button class="btn">Promocionar</button></td>
                    </tr>
                </tbody>
            </table>

            <h2>Movimientos Recientes</h2>
            <table class="tabla-de-movimientos">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Producto</th>
                        <th>Tipo</th>
                        <th>Cantidad</th>
                        <th>Usuario</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>15/11/2025</td>
                        <td>Pan de Molde Integral</td>
                        <td>Venta</td>
                        <td>-10</td>
                        <td>Luis Ramirez</td>
                    </tr>
                    <tr>
                        <td>15/11/2025</td>
                        <td>Harina Integral</td>
                        <td>Compra</td>
                        <td>+50 kg</td>
                        <td>Carlos</td>
                    </tr>
                    <tr>
                        <td>14/11/2025</td>
                        <td>Empanadas de Queso</td>
                        <td>Venta</td>
                        <td>-24</td>
                        <td>Maria</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>