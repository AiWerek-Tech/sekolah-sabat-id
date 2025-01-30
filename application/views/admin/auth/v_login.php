<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | <?= $this->config->item('app_name') ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets') ?>/image/faficon.webp">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/adminlte4/plugins/fontawesome-free/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <!-- Bootstrap CSS -->
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
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 300px;
            box-sizing: border-box;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: white;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            color: white;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        form {
            padding: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .button-container1 {
            text-align: right;
        }

        .button-container1 label {
            float: left;
            font-size: 14px;
            margin-right: auto;
        }

        .button-container {
            text-align: center;
        }

        .button-container a {
            /* margin: 0 10px; */
            color: white;
            font-size: 14px;
        }

        .row {
            display: flex;
            justify-content: space-between;
        }

        .col-6 {
            flex: 1;

        }

        .error-message {
            /* color: red;
            font-size: 14px;
            margin-bottom: 15px;
            text-align: center; */
            padding: 15px;
            border-left: 5px solid #dc3545;
            background-color: #f8d7da;
            color: #721c24;
            border-radius: 5px;
            margin-bottom: 10px;
            width: 90%;
        }

        .loginpage-transparent {
            min-height: 100vh;
            background: linear-gradient(to right, rgba(56, 154, 255, 0.71), rgba(144, 0, 149, 0.71)), url("<?= base_url('assets') ?>/image/ss-dewasa.webp") no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
        }

        .logincard-transparent {
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(20px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
            border-radius: 20px;
            padding: 20px 10px 30px 10px;
            color: lightgray;
        }

        .logincard-transparent h1 {
            /* color: white; */
        }

        .logo-container {
            text-align: center;
            margin-top: 0;
        }

        .logo-container {
            /* margin-top: 20px; */
            /* Atur jarak antara teks dan gambar */
        }

        .logo_login {
            width: 50%;
            height: auto;
            margin-bottom: 30px;
        }

        .flex-container {
            display: flex;
            align-items: center;
            width: 100%;
            margin-top: 20px;
        }

        .btn-primary {
            text-decoration: none;
            color: white;
            background-color: #007bff; 
            /* padding: 10px 20px; */
            border-radius: 10px;
            text-align: center;
            display: inline-block;
            width: 50%;
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>

<body class="loginpage-transparent">
    <div class="login-container logincard-transparent">

        <div class="logo-container">
            <h1>Login</h1>
            <!-- <a href="<?= base_url('') ?>">
                <img src="<?= base_url('assets') ?>/image/logo_horizontal.webp" alt="Sekolah Sabat ID"
                    class="logo_login">
            </a> -->
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
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span> <!-- Ikon User -->
                    </div>
                </div>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
            </div>

            <!-- Password Input -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span> <!-- Ikon Lock -->
                    </div>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span id="toggle-password" class="fas fa-eye-slash" style="cursor: pointer"></span> <!-- Ikon Eye -->
                    </div>
                </div>
            </div>

            <!-- Button Container -->
            <div class="button-container1">
                <div class="flex-container">
                    <a href="<?= base_url('') ?>" class="btn btn-primary btn-block"><i class="fas fa-home"></i>&nbsp;​​ Back</a>
                    <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i>&nbsp;​​ Login</button>
                </div>
            </div>
        </form>
    </div>
    
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
    <script>
        document.getElementById('toggle-password').addEventListener('click', function () {
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

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: $(this).serialize(),
            success: function(data){
                infobox.removeAttr('class').text('');
                btnsubmit.removeAttr('disabled').val('Login');
                console.log('login', data);
                
                if(data.status){
                    infobox.addClass('info-box align-items-center justify-content-center bg-gradient-success').text('Login Sukses');
                    window.location.href = data.redirect_url; // Redirect ke dashboard
                } else {
                    if(data.invalid){
                        $.each(data.invalid, function(key, val){
                            $('[name="'+key+'"').parent().addClass('has-error');
                            $('[name="'+key+'"').next().next().text(val);
                            if(val == ''){
                                $('[name="'+key+'"').parent().removeClass('has-error');
                                $('[name="'+key+'"').next().next().text('');
                            }
                        });
                    }
                    if(data.failed){
                        infobox.addClass('info-box align-items-center justify-content-center bg-gradient-danger').text(data.failed);
                        // Tambahkan redirect di sini jika perlu
                        setTimeout(function() {
                            window.location.href = '<?= base_url('admin/login') ?>';
                        }, 3000); // Redirect setelah 3 detik
                    }
                }
            }
        });
    </script>

</body>
</html>