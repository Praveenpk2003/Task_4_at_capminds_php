<?php
session_start();

/* SESSION VERIFICATION */
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$theme = $_SESSION['theme'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body.dark { background-color: #000; color: #fff; }
        body.warm { background-color: #ffedd5; }
        body.light { background-color: #f8f9fa; }
    </style>
</head>

<body class="<?php echo $theme; ?>">

<div class="container mt-5">
    <div class="card p-4 shadow">
        <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>

        <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
        <p><strong>Theme:</strong> <?php echo $_SESSION['theme']; ?></p>

        <!-- SESSION DEBUG (Proof) -->
        <pre><?php print_r($_SESSION); ?></pre>

        <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
    </div>
</div>

</body>
</html>
