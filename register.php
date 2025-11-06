<?php include 'header.php'; ?>

<main class="main-wrap" id="main">
    <div class="container" style="padding-top: 100px; padding-bottom: 100px; max-width: 500px;">
        
        <h1 style="text-align: center; margin-bottom: 30px;">Join Global Change Bank</h1>

        <!-- ============================================================================== -->
        <!-- CAMBIO IMPORTANTE AQUI ->
        <!-- El 'action' ahora apunta al punto de entrada de Laravel y la ruta de registro. -->
        <!-- ============================================================================== -->
        <form method="POST" action="index_laravel.php/register">
            
            <!--
                MAS ADELANTE, CUANDO INTEGREMOS EN LARAVEL, AGREGAREMOS:
                @csrf 
                Por ahora no la ponemos para evitar errores de PHP.
            -->

            <!-- Campo de Nombre -->
            <div style="margin-bottom: 15px;">
                <label for="name">Full Name</label>
                <input id="name" type="text" name="name" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <!-- Campo de Email -->
            <div style="margin-bottom: 15px;">
                <label for="email">Email Address</label>
                <input id="email" type="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <!-- Campo de Contrasena -->
            <div style="margin-bottom: 15px;">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <!-- Campo de Confirmar Contrasena -->
            <div style="margin-bottom: 20px;">
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <button type="submit" style="width: 100%; padding: 15px; background-color: #005A9C; color: white; border: none; border-radius: 5px; font-size: 1.1em; cursor: pointer;">
                Register
            </button>

        </form>
        
        <p style="text-align: center; margin-top: 20px;">
            Already have an account? <a href="/login.php">Sign in</a>.
        </p>

    </div>
</main>

<?php include 'footer.php'; ?>
