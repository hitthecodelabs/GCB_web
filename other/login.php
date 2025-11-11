<?php include 'header.php'; ?>

<main class="main-wrap" id="main">
    <section class="auth-hero">
        <div class="container-fluid">
            <div class="auth-layout">
                <div class="auth-intro">
                    <span class="auth-intro__eyebrow">Global Change Bank</span>
                    <h1 class="auth-intro__title">Sign in and power your impact projects</h1>
                    <p class="auth-intro__lead">
                        Manage partnerships, connect with responsible investors, and keep full control of your
                        social initiatives from one place.
                    </p>
                    <ul class="auth-intro__list">
                        <li>Secure access to global collaboration dashboards.</li>
                        <li>Real-time tracking of funds, metrics, and communities.</li>
                        <li>Dedicated GCB support for your mission of change.</li>
                    </ul>
                </div>

                <!-- ============================================================================== -->
                <!-- IMPORTANT CHANGE HERE -->
                <!-- The 'action' now points to Laravel's entry point and the login route. -->
                <!-- ============================================================================== -->
                <div class="auth-card" aria-labelledby="authCardTitle">
                    <div class="auth-card__header">
                        <h2 id="authCardTitle" class="auth-card__title">Sign in to your account</h2>
                        <p class="auth-card__subtitle">Welcome back to the purpose-driven finance community.</p>
                    </div>

                    <form class="auth-card__form" method="POST" action="index_laravel.php/login">

                        <!--
                            LATER, WHEN WE INTEGRATE WITH LARAVEL, WE'LL ADD THE MAGIC LINE:
                            @csrf
                            For now we skip it to avoid PHP errors.
                        -->

                        <!-- Email Field -->
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input id="email" type="email" name="email" required autofocus>
                        </div>

                        <!-- Password Field -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password" required>
                        </div>

                        <button class="btn btn-primary auth-card__submit" type="submit">
                            Sign In
                        </button>
                    </form>

                    <p class="auth-card__footer">
                        Not part of GCB yet? <a href="/register.php">Create your account</a>.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
