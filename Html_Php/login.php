<html>
<head>
    <link href="../css/styles.css" rel="stylesheet"/>
</head>
<body>
<?php include("Templates/nav.php") ?>
<div style=" height: 100%;width: 100%;display: flex;align-items: center;justify-content: center">
    <div style="border-color: #5c636a;border-style: solid;">
        <form method="post" action="PHP_Process/process_login.php">

            <p>Account login</p>
            <div>Benutzername: <input type="text"></div>
            <div>Password:<input type="password"></div>
            <input type="submit">


        </form>
    </div>
</div>
<?php include("Templates/footer.php") ?>
</body>
</html>
