<?php
session_start();

$username = "";
$theme = "light";

if (isset($_COOKIE['remember_username'])) {
    $username = $_COOKIE['remember_username'];
}

if (isset($_COOKIE['user_theme'])) {
    $theme = $_COOKIE['user_theme'];
}

$errors = $_SESSION['errors'] ?? [];
unset($_SESSION['errors']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body.dark { background-color: #000; color: #fff; }
        body.warm { background-color: #ffedd5; }
        body.light { background-color: #f8f9fa; }
    </style>
</head>

<body class="<?php echo $theme; ?>">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <div class="card p-4 shadow">
                <h3 class="mb-3 text-center">Login</h3>

                <?php foreach ($errors as $error): ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endforeach; ?>

                <form method="POST" action="auth.php">
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control"
                               value="<?php echo htmlspecialchars($username); ?>">
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="form-check mb-3">
                        <input type="checkbox" name="remember" class="form-check-input">
                        <label class="form-check-label">Remember Me</label>
                    </div>

                    <button class="btn btn-primary w-100">Login</button>
                </form>
            </div>

        </div>
    </div>
</div>

</body>
</html>
