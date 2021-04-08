<?php
session_start();
$_SESSION['org_id'] = 1;
$_SESSION['user_id'] = 2;
?>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <div class="container">
            <h1>Profile</h1>
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

            <form method="post" action="process.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="User Name" class="form-control" autocomplete="off">
                </div>
                <button type="submit" name="action" value="name" class="btn btn-primary">Save</button>
                <hr>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" name="email" value="email@address.com" class="form-control" autocomplete="off">
                </div>
                <button type="submit" name="action" value="email" class="btn btn-primary">Save</button>
                <hr>

                <div class="form-group">
                    <label for="password1">Password</label>
                    <input type="password" name="password1" value="" class="form-control" autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="password2">Repeat Password</label>
                    <input type="password" name="password2" value="" class="form-control" autocomplete="new-password">
                </div>
                <button type="submit" name="action" value="password" class="btn btn-primary">Save</button>
            </form>
        </div>
    </main>
</body>
</html>

<?php
unset($_SESSION['error']);
unset($_SESSION['success']);
