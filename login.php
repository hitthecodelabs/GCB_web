<?php 
// Incluimos la cabecera que ya hemos creado y limpiado.
include 'header.php'; 
?>

<!-- ============================================ -->
<!-- INICIO: Contenido de la Página de Login -->
<!-- ============================================ -->

<main class="main-wrap" id="main">
    <div class="container" style="padding-top: 100px; padding-bottom: 100px; max-width: 500px;">
        
        <h1 style="text-align: center; margin-bottom: 30px;">Sign In</h1>

        <!-- 
            Este es el formulario que clonaremos.
            Por ahora, el 'action' está vacío (#) porque aún no lo conectamos a Laravel.
            Este es el único trozo que cambiaremos en la Fase 2.
        -->
        <form method="POST" action="#">
            
            <!-- Campo de Email -->
            <div style="margin-bottom: 15px;">
                <label for="email" style="display: block; margin-bottom: 5px;">Email Address</label>
                <input id="email" type="email" name="email" required autofocus style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <!-- Campo de Contraseña -->
            <div style="margin-bottom: 20px;">
                <label for="password" style="display: block; margin-bottom: 5px;">Password</label>
                <input id="password" type="password" name="password" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <button type="submit" style="width: 100%; padding: 15px; background-color: #005A9C; color: white; border: none; border-radius: 5px; font-size: 1.1em; cursor: pointer;">
                Log In
            </button>

        </form>

        <p style="text-align: center; margin-top: 20px;">
            No account? <a href="/register.php">Create one now</a>.
        </p>

    </div>
</main>

<!-- ============================================ -->
<!-- FIN: Contenido de la Página de Login -->
<!-- ============================================ -->

<?php 
// Incluimos el pie de página.
include 'footer.php'; 
?>
