<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | <?= $this->config->item('app_name') ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets') ?>/image/faficon.webp">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/adminlte4/plugins/fontawesome-free/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
            box-sizing: border-box;
        }

        h1 {
            margin-bottom: 30px;
            font-size: 28px;
            text-align: center;
            color: white;
            font-weight: 600;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            color: white;
        }

        .form-control {
            height: 45px;
            font-size: 16px;
            border-radius: 10px;
        }

        .input-group-text {
            border-radius: 10px 0 0 10px;
            background-color: #f8f9fa;
        }

        .btn {
            height: 45px;
            font-size: 16px;
            font-weight: 500;
        }

        .alert {
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .alert-success {
            background-color: rgba(40, 167, 69, 0.2);
            border-color: #28a745;
            color: #fff;
        }

        .error-message {
            padding: 15px;
            border-left: 5px solid #dc3545;
            background-color: rgba(220, 53, 69, 0.2);
            color: #fff;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .loginpage-transparent {
            min-height: 100vh;
            background: linear-gradient(to right, rgba(56, 154, 255, 0.8), rgba(144, 0, 149, 0.8)), 
                        url("<?= base_url('assets') ?>/image/ss-dewasa.webp") no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
        }

        .logincard-transparent {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(20px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
            border-radius: 20px;
            padding: 40px 30px;
            color: white;
        }

        .flex-container {
            display: flex;
            gap: 10px;
            margin-top: 30px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .input-group-append .input-group-text {
            cursor: pointer;
            border-radius: 0 10px 10px 0;
        }
    </style>
</head>

<body class="loginpage-transparent">
    <div class="login-container logincard-transparent">
        <div class="logo-container">
            <h1>Login Admin</h1>
        </div>

        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('error')): ?>
            <div class="error-message">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('admin/auth/process_login') ?>" method="post">
            <!-- Username Input -->
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
            </div>

            <!-- Password Input -->
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span id="toggle-password" class="fas fa-eye-slash"></span>
                    </div>
                </div>
            </div>

            <!-- Button Container -->
            <div class="flex-container">
                <a href="<?= base_url('') ?>" class="btn btn-primary">
                    <i class="fas fa-home"></i>&nbsp; Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-sign-in-alt"></i>&nbsp; Login
                </button>
            </div>
        </form>
    </div>
    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        // Toggle password visibility
        document.getElementById('toggle-password').addEventListener('click', function() {
            var passwordField = document.getElementById('password');
            var toggleIcon = this;
            
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            }
        });

        // Auto-hide alerts after 5 seconds
        setTimeout(function() {
            $('.alert, .error-message').fadeOut('slow');
        }, 5000);
    </script>
</body>
</html>