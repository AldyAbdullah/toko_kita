<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Toko Kita</title>
    <link rel="icon" type="image" href="asset/logo.png">

    <!-- Custom fonts & styles -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body { 
            background-color: #2d2d2d; 
            color: #f1f1f1; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
        }
        .login-container {
            display: flex;
            background-color: #3a3a3a;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            width: 100%;
        }
        .login-logo {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #222;
            padding: 20px;
        }
        .login-logo img {
            max-width: 80%;
        }
        .login-form {
            width: 50%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .login-form h2 {
            text-align: left;
            margin-bottom: 20px;
        }
        .form-control {
            background-color: #4a4a4a;
            border: 1px solid #666;
            color: #fff;
            border-radius: 10px;
            padding: 12px;
        }
        .form-control::placeholder {
            color: #bbb;
        }
        .btn-primary {
            background-color: #007bff;
            border-radius: 10px;
            font-weight: bold;
            padding: 12px;
            transition: 0.3s;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
                text-align: center;
            }
            .login-logo {
                width: 100%;
            }
            .login-form {
                width: 100%;
            }
            .login-form h2 {
                text-align: center;
            }
        }
    </style>
</head>
<body>
   <div class="login-container">
    <!-- Logo -->
    <div class="login-logo">
        <img src="asset/logo.png" alt="Logo">
    </div>

    <!-- Form Login -->
    <div class="login-form">
        <div class="text-center">
            <h2><strong>Toko Kita</strong></h2>
            <p>Belanja hemat dan aman di Toko Kita</p>
        </div>
        <form class="user" method="post" action="login.php"> 
            <div class="form-group">
                <input type="text" class="form-control form-control-user" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
        </form>
    </div>
</div>


    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
