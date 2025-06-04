<?php
// Mensajes para procesamiento de login y recuperación de contraseña
$mensaje = $_GET['mensaje'] ?? '';
$tipo = $_GET['tipo'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Aguilas del Saber</title>
    <link rel="icon" href="static/img/fondo_aguilas_saber.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<style>
    /* Estilos para la página de login */
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #ff0000 30%, #ffffff 100%);
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #333;
    overflow: hidden;
}
.login-container {
  background: rgba(255, 255, 255, 0.95);
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
  max-width: 400px;
  width: 100%;
  padding: 40px;
  text-align: center;
  animation: fadeInUp 0.8s forwards ease-in-out;
  position: relative;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(50px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.login-container img {
  max-width: 100px; 
  margin-bottom: 20px;
  border-radius: 50%; 
  animation: bounceIn 1s ease-out;
}

@keyframes bounceIn {
  0% {
    transform: scale(0.8);
    opacity: 0.5;
  }
  60% {
    transform: scale(1.2);
    opacity: 1;
  }
  100% {
    transform: scale(1);
  }
}

h2 {
  color: #ff0000;
  font-weight: 700;
  font-size: 1.8rem;
  margin-bottom: 20px;
  animation: fadeInRight 1s ease-out;
}

@keyframes fadeInRight {
  from {
    opacity: 0;
    transform: translateX(-50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

.form-group {
  position: relative;
  margin-bottom: 25px;
  animation: slideInLeft 1s ease-in-out;
}

@keyframes slideInLeft {
  from {
    transform: translateX(-100%);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

.input-group-text i {
  color: #ff0000;
  font-size: 1.2rem;
}

.form-control {
  width: 100%;
  border-radius: 10px;
  border: 1px solid #ddd;
  font-size: 1rem;
  padding: 0.8rem;
  transition: all 0.3s ease;
}

.form-control:focus {
  border-color: #ff0000;
  box-shadow: 0 0 10px rgba(255, 0, 0, 0.2);
}

.btn-danger {
  background-color: #ff0000;
  color: white;
  border-radius: 10px;
  font-weight: bold;
  font-size: 1.1rem;
  padding: 0.8rem 1.2rem;
  transition: all 0.3s ease;
  animation: fadeInBottom 1s ease-out;
}

@keyframes fadeInBottom {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.btn-danger:hover {
  background-color: #cc0000;
  transform: translateY(-2px);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.skeleton {
  background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
  background-size: 200% 100%;
  animation: shimmer 1.5s infinite;
}

@keyframes shimmer {
  from {
    background-position: -200% 0;
  }
  to {
    background-position: 200% 0;
  }
}

/* Footer */
footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  background-color: #f8f9fa;
  padding: 1rem;
  text-align: center;
  box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
}

footer p {
  margin: 0;
  font-size: 0.9rem;
  color: #666;
}

a {
  color: #333;
  text-decoration: none; 
  font-weight: 500; 
  transition: color 0.3s ease, border-bottom 0.3s ease; 
}

a:hover {
  color: #ff0000; 
  border-bottom: 2px solid #ff0000; 
}
    </style>
<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="login-container p-4 shadow rounded-3">
      <div class="text-center mb-4">
      <img src="{{ asset('img/fondo_aguilas_saber.png') }}" alt="Logo de la escuela" class="img-fluid">
      </div>
      <h2 class="text-center mb-4">Iniciar Sesión</h2>
      <form id="loginForm" action="procesar_login.php" method="POST">
        <div class="input-group mb-3">
          <input type="text" name="usuario" class="form-control" placeholder="Nombre de usuario" required>
          <span class="input-group-text"><i class="fas fa-user"></i></span>
        </div>              
        <div class="mb-3 position-relative">
          <input type="password" name="contraseña" id="contraseña" class="form-control" placeholder="Contraseña" required>
          <span id="toggle-password" class="position-absolute top-50 end-0 translate-middle-y pe-3" style="cursor: pointer;">
            <i class="fas fa-eye-slash"></i>
          </span>
        </div>
        <button type="submit" class="btn btn-danger w-100">Iniciar sesión</button>
      </form>
      <div class="footer text-center mt-3">
        <p><a href="#" data-bs-toggle="modal" data-bs-target="#recoverPasswordModal">¿Olvidaste tu contraseña?</a></p>
      </div>
    </div>
  </div>

  <!-- Modal Recuperar contraseña -->
  <div class="modal fade" id="recoverPasswordModal" tabindex="-1" aria-labelledby="recoverPasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="recuperar_contraseña.php" method="POST">
          <div class="modal-header">
            <h5 class="modal-title" id="recoverPasswordModalLabel">Recuperar Contraseña</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="email" class="form-label">Correo electrónico</label>
              <input type="email" name="email" class="form-control" placeholder="Ingresa tu correo" required>
            </div>
            <button type="submit" class="btn btn-danger w-100">Recuperar contraseña</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php if ($mensaje): ?>
  <div class="toast align-items-center text-bg-<?= $tipo ?> border-0 position-fixed bottom-0 end-0 m-3 show" role="alert">
    <div class="d-flex">
      <div class="toast-body"><?= htmlspecialchars($mensaje) ?></div>
      <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Cerrar"></button>
    </div>
  </div>
  <?php endif; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById('toggle-password').addEventListener('click', function () {
      const passInput = document.getElementById('contraseña');
      const type = passInput.type === 'password' ? 'text' : 'password';
      passInput.type = type;
      this.innerHTML = type === 'password' ? '<i class="fas fa-eye-slash"></i>' : '<i class="fas fa-eye"></i>';
    });
  </script>
</body>
</html>