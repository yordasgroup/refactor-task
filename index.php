<?php
session_start();
$_SESSION['org_id'] = 1;
$_SESSION['user_id'] = 2;
?>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">
            <h1>Index</h1>
            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success" role="alert">
                    <?= $_SESSION['success'] ?>
                </div>
            <?php endif ?>
            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_SESSION['error'] ?>
                </div>
            <?php endif ?>
            <p><a href="profile.php">Edit Profile</a></p>
        </div>
    </main>
</body>

</html>
<?php
unset($_SESSION['error']);
unset($_SESSION['success']);
