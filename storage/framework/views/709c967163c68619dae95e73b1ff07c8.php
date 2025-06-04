<?php
// home.php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Maky System</title>
    <link rel="icon" href="../../static/img/fondo_aguilas_saber.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<style>
    /* Base Layout */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    background-color: #f8f9fa;
    overflow-x: hidden;
}

/* Animación para el encabezado */
.main-header {
    opacity: 0;
    transform: translateY(-20px);
    animation: slideInUp 1s ease-out forwards;
}

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

/* Animación para el párrafo */
.text-secondary {
    opacity: 0;
    transform: translateY(-15px);
    animation: slideInUp 1s ease-out 0.3s forwards;
}

/* Ajuste para la animación de la fila (row) */
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


/* Sidebar */
#sidebar {
    width: 600px;
    min-height: 100vh;
    background-color: #343a40;
    color: #fff;
    transition: all 0.3s ease;
}

/* Estilos mejorados para el nav-link */
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

/* Efecto de hover */
#sidebar .nav-link:hover {
    background-color: #007bff; 
    color: #fff; 
    box-shadow: 0px 4px 8px rgba(0, 123, 255, 0.2); 
    transform: translateX(8px); 
}

/* Efecto de hover en los iconos */
#sidebar .nav-link i {
    margin-right: 12px;
    transition: transform 0.3s ease; 
}

/* Iconos aumentan de tamaño al hacer hover */
#sidebar .nav-link:hover i {
    transform: scale(1.1); 
}

/* Estilo para el enlace activo */
#sidebar .nav-link.active {
    background-color: #dc3545; 
    color: white;
    font-weight: bold;  
    box-shadow: 0px 4px 12px rgba(220, 53, 69, 0.2); 
    transform: translateX(5px); 
}

/* Efecto de transición cuando el enlace es inactivo */
#sidebar .nav-link:not(.active):hover {
    background-color: #343a40; 
    color: #f8f9fa; 
}


/* Main Content */
.main-content {
    flex: 1;
    padding: 30px;
    margin-left: 550px;
    transition: margin-left 0.5s ease;
}

.main-content h1 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 20px;
    color: #333;
    transition: all 0.4s ease;
}

.main-content p {
    font-size: 1.2rem;
    color: #555;
    margin-bottom: 25px;
    transition: all 0.4s ease;
}

/* Table Styles */
.table-responsive {
    margin-top: 30px;
    overflow-x: auto;
    animation: fadeIn 1s ease-out;
}

.table {
    width: 100%;
    margin-bottom: 1rem;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.table th {
    background-color: #343a40;
    color: white;
    padding: 12px;
    transition: background-color 0.3s ease;
}

.table th:hover {
    background-color: #495057;
}

.table td {
    padding: 12px;
    vertical-align: middle;
    transition: transform 0.3s ease;
}

.table td:hover {
    transform: scale(1.05);
}

.table tbody tr {
    transition: transform 0.3s ease, background-color 0.3s ease;
}

.table tbody tr:hover {
    background-color: #f8f9fa;
    transform: translateY(-5px);
}

/* Form Controls */
.form-select, .form-control {
    margin-bottom: 15px;
    transition: all 0.3s ease;
}

.form-select:focus, .form-control:focus {
    border-color: #28a745;
    box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
    transform: scale(1.05);
}

/* Buttons */
.btn {
    transition: all 0.3s ease;
    padding: 10px 20px;
    font-size: 16px;
}

.btn:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    background-color: #0069d9;
}

.btn:active {
    transform: translateY(2px);
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #004085;
}

.btn-primary:active {
    background-color: #004085;
    border-color: #003366;
}

/* Badge Styles */
.badge {
    padding: 5px 15px;
    border-radius: 20px;
    font-weight: bold;
    font-size: 14px;
    transition: transform 0.3s ease;
}

.badge-active {
    background-color: #28a745;
    color: white;
}

.badge-inactive {
    background-color: #dc3545;
    color: white;
}

.badge-warning {
    background-color: #ffc107;
    color: white;
}

.badge:hover {
    transform: scale(1.1);
}

/* Animations */
@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

.fade {
    opacity: 0;
    animation: fadeIn 1s ease-out forwards;
}

.collapse {
    transition: all 0.3s ease;
}

/* Responsive Breakpoints */
@media (max-width: 992px) {
    #sidebar {
        width: 250px;
    }

    .main-content {
        margin-left: 250px;
        padding: 25px;
    }
}

@media (max-width: 768px) {
    .d-flex {
        flex-direction: column;
    }

    #sidebar {
        width: 100%;
        min-height: auto;
        position: relative;
    }

    .main-content {
        margin-left: 0;
    }

    .table-responsive {
        margin-top: 10px;
    }

    .table thead {
        display: none;
    }

    .table tbody tr {
        display: block;
        margin-bottom: 1rem;
        border: 1px solid #dee2e6;
    }

    .table tbody td {
        display: block;
        text-align: right;
        padding: 0.5rem;
        position: relative;
    }

    .table tbody td::before {
        content: attr(data-label);
        float: left;
        font-weight: bold;
    }
}

@media (max-width: 576px) {
    .main-content {
        padding: 15px;
    }

    .btn {
        width: 100%;
        margin-bottom: 0.5rem;
    }

    .pagination {
        flex-wrap: wrap;
        justify-content: center;
    }

    .pagination .page-item {
        margin: 2px;
    }

    .modal-footer {
        flex-direction: column;
    }

    .modal-footer .btn {
        width: 100%;
        margin: 5px 0;
    }
}
    </style>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-dark text-white p-3" id="sidebar">
            <div class="text-center mb-4">
                <img src="<?php echo e(asset('img/fondo_aguilas_saber.png')); ?>" alt="Logo Maky System" class="img-fluid mb-2" style="max-height: 80px;">
                <h4>Maky System</h4>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="../../paginas/pagina_inicio/dashboard.html" class="nav-link text-white">
                        <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="home.php" class="nav-link active text-white">
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
            <a href="../../index.php" class="btn btn-danger w-100">Cerrar sesión</a>
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1 p-4">
            <h1 class="main-header mb-3">Bienvenido a Maky System</h1>
            <p class="text-secondary mb-4">Una plataforma integral para gestionar usuarios, préstamos, productos y más de forma eficiente.</p>
            <div class="row">
                <?php
                $cards = [
                    ["icon" => "fas fa-users", "color" => "primary", "title" => "Gestión de Usuarios", "text" => "Administra información de usuarios registrados en el sistema.", "href" => "../../paginas/usuarios/listado-usuarios.php", "btn" => "primary", "label" => "Ir a Usuarios"],
                    ["icon" => "fas fa-archive", "color" => "success", "title" => "Gestión de Préstamos", "text" => "Supervisa y gestiona los préstamos de artículos o libros.", "href" => "../../paginas/prestamos/prestamos.php", "btn" => "success", "label" => "Ir a Préstamos"],
                    ["icon" => "fas fa-undo", "color" => "warning", "title" => "Gestión de Devoluciones", "text" => "Controla las devoluciones y asegura el inventario.", "href" => "../../paginas/devoluciones/devoluciones.php", "btn" => "warning", "label" => "Ir a Devoluciones"],
                    ["icon" => "fas fa-shopping-cart", "color" => "danger", "title" => "Gestión de Productos", "text" => "Monitorea y organiza el inventario de productos disponibles.", "href" => "../../paginas/productos/listado-productos.php", "btn" => "danger", "label" => "Ir a Productos"],
                    ["icon" => "fas fa-database", "color" => "info", "title" => "Recursos", "text" => "Controla y organiza los recursos de manera eficiente.", "href" => "../../paginas/recursos/recursos.php", "btn" => "info", "label" => "Ir a Recursos"],
                    ["icon" => "fas fa-user-shield", "color" => "dark", "title" => "Gestión de Roles", "text" => "Administra y asigna roles y permisos a los usuarios del sistema.", "href" => "../roles/listado-roles.php", "btn" => "dark", "label" => "Ir a Roles"],
                    ["icon" => "fas fa-key", "color" => "secondary", "title" => "Gestión de Permisos", "text" => "Administra los permisos y roles asignados a los usuarios.", "href" => "../../paginas/roles/gestion-permisos/gestion-permisos.php", "btn" => "secondary", "label" => "Ir a Permisos"],
                    ["icon" => "fas fa-chart-line", "color" => "warning", "title" => "Ver Estado de Recursos", "text" => "Consulta el estado actual y la disponibilidad de los recursos.", "href" => "../../paginas/recursos/estado-recursos/estado-recursos.php", "btn" => "warning", "label" => "Ir a Estado de Recursos"],
                    ["icon" => "fas fa-arrow-up", "color" => "info", "title" => "Gestión de Ingresos", "text" => "Administra los ingresos de productos y recursos al sistema.", "href" => "../../paginas/productos/ingreso-productos/ingreso-productos.php", "btn" => "info", "label" => "Ir a Ingresos"]
                ];

                foreach ($cards as $card) {
                    echo '<div class="col-lg-4 col-md-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body text-center">
                                <i class="' . $card["icon"] . ' fa-3x text-' . $card["color"] . ' mb-3"></i>
                                <h5 class="card-title">' . $card["title"] . '</h5>
                                <p class="card-text">' . $card["text"] . '</p>
                                <a href="' . $card["href"] . '" class="btn btn-' . $card["btn"] . '">' . $card["label"] . '</a>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-danger text-white text-center py-3">
        © 2024 Maky System. Todos los derechos reservados.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener('load', function () {
            const cards = document.querySelectorAll('.card');
            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.classList.add('visible');
                }, 200 * (index + 1));
            });
        });
    </script>
</body>
</html><?php /**PATH C:\Users\DELL\aguilas_saber\resources\views/pagina_inicio/home.blade.php ENDPATH**/ ?>