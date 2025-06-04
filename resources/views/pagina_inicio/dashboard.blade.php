<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Maky System</title>
    <link rel="icon" href="../../static/img/fondo_aguilas_saber.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<style>
/* Ensure the footer is at the bottom */
html, body {
    font-family: Arial, sans-serif;
    height: 100%;
    margin: 0;
}

.d-flex {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.flex-grow-1 {
    flex: 1;
}

footer {
    background-color: #dc3545;
    color: white;
    text-align: center;
    padding: 1rem 0;
    margin-top: auto;
    z-index: 1000;
}

/* Sidebar */
#sidebar {
    height: 100vh; /* Full height */
    position: fixed; /* Fixed to the left side */
    top: 0;
    left: 0;
    width: 250px; /* Sidebar width */
    overflow-y: auto; /* Scroll if too many items */
    background-color: #343a40; /* Background color */
    transition: all 0.3s ease; /* Smooth transition */
    z-index: 1000; /* Ensure sidebar is on top */
}

#content {
    margin-left: 250px; /* Adjust content to the right of the sidebar */
    padding: 20px;
}

#sidebar .nav-link {
    font-size: 16px;
    margin: 10px 0;
    padding: 12px 16px;
    color: #fff;
    display: flex;
    align-items: center;
    text-decoration: none;
    border-radius: 8px;
    transition: all 0.3s ease;
    font-weight: 500;
}

#sidebar .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.1);
}

#sidebar .nav-link.active {
    background-color: #dc3545;
    color: white;
    font-weight: bold;
}

/* Card styles */
.card {
    height: auto; /* Adjust height automatically */
    border-radius: 20px; /* Rounded corners */
    overflow: hidden; /* Prevent overflow */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow for better visual */
    margin-bottom: 10px; /* Spacing between cards */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition */
}

.card:hover {
    transform: translateY(-5px); /* Lift effect on hover */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Deeper shadow on hover */
}

.card-header {
    font-size: 1.2rem;
    font-weight: bold;
    text-align: center;
    padding: 10px;
}

.card-body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 300px;
    padding: 20px; /* Internal spacing */
}

.card-body canvas {
    max-width: 100%;
    max-height: 100%;
}

/* Animations */
@keyframes slideInUp {
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.text-secondary {
    opacity: 0;
    transform: translateY(-15px);
    animation: slideInUp 1s ease-out 0.3s forwards;
}

.row {
    opacity: 0;
    animation: fadeIn 1s ease-out 0.6s forwards;
}

@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

/* Responsive styles */
@media (max-width: 1200px) {
    .col-lg-4 {
        flex: 0 0 50%;
        max-width: 50%;
    }
}

@media (max-width: 768px) {
    #sidebar {
        width: 100%; /* Full width on small screens */
        height: auto; /* Auto height */
        position: relative; /* Relative positioning */
    }

    #content {
        margin-left: 0; /* Remove left margin */
    }

    .d-flex {
        flex-direction: column; /* Stack elements vertically */
    }

    .flex-grow-1 {
        margin-top: 20px; /* Add margin to main content */
    }

    .col-md-6 {
        flex: 0 0 100%;
        max-width: 100%;
    }
}

@media (max-width: 576px) {
    #sidebar .nav-link {
        font-size: 14px; /* Smaller font size */
        padding: 10px 12px; /* Smaller padding */
    }

    footer {
        padding: 0.5rem 0; /* Smaller padding */
    }

    .col-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }
}
    </style>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-dark text-white p-3" id="sidebar">
            <div class="text-center mb-4">
                <img src="{{ asset('img/fondo_aguilas_saber.png') }}" alt="Logo Maky System" class="img-fluid mb-2" style="max-height: 80px;">
                <h4>Maky System</h4>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="../../paginas/pagina_inicio/dashboard.html" class="nav-link active text-white">
                        <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                    </a>
                </li>    
                <li class="nav-item">
                    <a href="../../paginas/pagina_inicio/home.php" class="nav-link text-white">
                        <i class="fas fa-home me-2"></i>Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#adminSubmenu" class="nav-link text-white" data-bs-toggle="collapse" aria-expanded="false" aria-controls="adminSubmenu">
                        <i class="fas fa-cogs me-2"></i>Administración <i class="fas fa-chevron-down ms-auto"></i>
                    </a>
                    <div class="collapse" id="adminSubmenu">
                        <ul class="nav flex-column ms-3">
                            <li class="nav-item">
                                <a href="../../paginas/usuarios/listado-usuarios.php" class="nav-link text-white">
                                    <i class="fas fa-users me-2"></i>Usuarios
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../paginas/recursos/recursos.php" class="nav-link text-white">
                                    <i class="fas fa-boxes me-2"></i>Recursos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../paginas/prestamos/prestamos.php" class="nav-link text-white">
                                    <i class="fas fa-archive me-2"></i>Préstamos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../paginas/devoluciones/devoluciones.php" class="nav-link text-white">
                                    <i class="fas fa-undo me-2"></i>Devoluciones
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../paginas/productos/listado-productos.php" class="nav-link text-white">
                                    <i class="fas fa-shopping-cart me-2"></i>Productos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../paginas/roles/listado-roles.php" class="nav-link text-white">
                                    <i class="fas fa-user-shield me-2"></i>Rol
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../paginas/roles/gestion-permisos/gestion-permisos.php" class="nav-link text-white">
                                    <i class="fas fa-key me-2"></i>Permisos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../paginas/recursos/estado-recursos/estado-recursos.php" class="nav-link text-white">
                                    <i class="fas fa-chart-line me-2"></i>Estado de Recursos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../paginas/productos/ingreso-productos/ingreso-productos.php" class="nav-link text-white">
                                    <i class="fas fa-arrow-up me-2"></i>Ingresos
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <hr class="text-secondary">
            <a href="../../index.html" class="btn btn-danger w-100">Cerrar sesión</a>
        </div>

        <!-- Content -->
        <div id="content" class="flex-grow-1">
            <h1 class="text-center mb-4">Dashboard - Maky System</h1>
            <div class="container">
                <div class="row g-4">
                    <!-- Tarjeta 1: Gestión de Productos -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card shadow-sm">
                            <div class="card-header bg-primary text-white text-center">
                                Gestión de Productos
                            </div>
                            <div class="card-body">
                                <canvas id="gestionProductosChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Tarjeta 2: Productos por Mes -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card shadow-sm">
                            <div class="card-header bg-success text-white text-center">
                                Productos por Mes
                            </div>
                            <div class="card-body">
                                <canvas id="productosPorMesChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Tarjeta 3: Estado de Recursos -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card shadow-sm">
                            <div class="card-header bg-info text-white text-center">
                                Estado de Recursos
                            </div>
                            <div class="card-body">
                                <canvas id="estadoRecursosChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-danger text-white text-center py-3 mt-auto">
            © 2024 Maky System. Todos los derechos reservados.
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Gráfico 1: Gestión de productos, devoluciones e ingresos
        const gestionProductosCtx = document.getElementById('gestionProductosChart').getContext('2d');
        new Chart(gestionProductosCtx, {
            type: 'bar',
            data: {
                labels: ['Productos', 'Devoluciones', 'Ingresos'],
                datasets: [{
                    label: 'Cantidad',
                    data: [50, 20, 70],
                    backgroundColor: ['#ff6384', '#36a2eb', '#ffce56'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: true },
                },
            }
        });

        // Gráfico 2: Productos por mes
        const productosPorMesCtx = document.getElementById('productosPorMesChart').getContext('2d');
        new Chart(productosPorMesCtx, {
            type: 'bar',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Cantidad de Productos',
                    data: [30, 40, 35, 50, 60],
                    backgroundColor: '#4bc0c0',
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: true },
                },
            }
        });

        // Gráfico 3: Estado de recursos
        const estadoRecursosCtx = document.getElementById('estadoRecursosChart').getContext('2d');
        new Chart(estadoRecursosCtx, {
            type: 'pie',
            data: {
                labels: ['Bueno', 'Deteriorado', 'Malo'],
                datasets: [{
                    label: 'Estado de Recursos',
                    data: [70, 20, 10],
                    backgroundColor: ['#2ecc71', '#f1c40f', '#e74c3c'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: true },
                },
            }
        });
    </script>
</body>
</html>