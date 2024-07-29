<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
    <link rel="icon" type="image/png" href="<?= base_url('images/favicon.png'); ?>">
    <script src="https://kit.fontawesome.com/c0e27fec68.js" crossorigin="anonymous"></script>
    <title>Daftar</title>
</head>

<body>
    <div class='login-outer-container'>
        <div class='login-container'>
            <div class='login-area'>
                <img src="<?= base_url('images/logo.png'); ?>" alt="RedX Logo" class="centered-logo">
                <h3>Register</h3>
                <?php if ($success = session()->getFlashdata('success')): ?>
                    <div class="alert alert-success">
                        <?= $success ?>
                    </div>
                <?php endif ?>

                <?php if ($error = session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?= $error ?>
                    </div>
                <?php endif ?>

                <?php if ($validationErrors = session()->getFlashdata('validation_errors')): ?>
                    <div class="alert alert-danger">
                        <?php foreach ($validationErrors as $error): ?>
                            <?= esc($error) ?>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>

                <form class='login-items' action="<?= site_url('register/process'); ?>" method="post">
                    <label for="nama">Nama</label>
                    <input type="text" class='login' name="nama" placeholder='Nama lengkap' required />
                    <label for="email">Email</label>
                    <input type="email" class='login' name="email" placeholder="email@gmail.com" required />
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="password-container">
                            <input type="password" class="login" name="password" id="password" placeholder="Password" minlength="8"
                                required />
                            <i class="fas fa-eye-slash toggle-password" onclick="togglePassword('password')"></i>
                        </div>
                    </div>
                    <input type="submit" class='login-btn' value="Register" />
                </form>


                <p class='p'>Sudah punya akun?
                    <a class='a' href="<?= site_url('login'); ?>">Login</a>
                </p>
                <p class='p'><a class='a' href="<?= site_url('/'); ?>">Kembali ke Home</a></p>
            </div>
        </div>
    </div>
    <script>
        function togglePassword(inputId) {
            var passwordInput = document.getElementById(inputId);
            var icon = document.querySelector('.toggle-password');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye', 'show-password');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye', 'show-password');
                icon.classList.add('fa-eye-slash');
            }
        }
    </script>
</body>

</html>
