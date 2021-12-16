<?php
session_start();

if (array_key_exists('User', $_POST))
?>
<html>
<head>
    <link href="../css/styles.css" rel="stylesheet"/>
</head>
<body>
<?php include("Templates/nav.php") ?>
<div style=" height: 100%;width: 100%;display: flex;align-items: center;justify-content: center">
    <p>Account login</p>
    <div style="border-color: #5c636a;border-style: solid;">
        <form method="post" action="PHP_Process/process_login.php">
            <input type="hidden" name="form_send"/>
            <div class="form-group">
                <label class="form-group" for="User">Benutzername</label>
                <input type="text" class="form-control" id="User" name="User">
            </div>
            <div class="form-group">
                <label class="control-label" for="Password" >Password</label>
                <input type="password" class="form-control" id="Password" name="Password">
            </div>
            <button type="submit">anmelden</button>
        </form>
    </div>
</div>
<?php include("Templates/footer.php") ?>
</body>
</html>
