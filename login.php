<?php include 'header.php'; ?>

<main class="main-wrap" id="main">
    <div class="container" style="padding-top: 100px; padding-bottom: 100px; max-width: 500px;">
        
        <h1 style="text-align: center; margin-bottom: 30px;">Sign In</h1>

        <!-- ============================================================================== -->
        <!-- CAMBIO IMPORTANTE AQUÍ -->
        <!-- El 'action' ahora apunta al punto de entrada de Laravel y la ruta de login. -->
        <!-- ============================================================================== -->
        <form method="POST" action="index_laravel.php/login">
            
            <!--
                MÁS ADELANTE, CUANDO INTEGREMOS EN LARAVEL, AÑADIREMOS LA LÍNEA MÁGICA:
                @csrf 
                Por ahora no la ponemos para evitar errores de PHP.
            -->

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

<?php include 'footer.php'; ?>
