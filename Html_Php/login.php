<?php
session_start();
require_once __DIR__ . '/PHP_Process/DB_Connection.php';
$conn = connectToDatabase();


if (array_key_exists('form_send', $_POST)){
    $DB_User = null;
    $DB_Password = null;
    $DB_IsAdmin = null;
    $User = $_POST["User"];
    $Password = $_POST["Password"];
    $stmt = $conn->prepare("Select * From benutzer where `E-Mail` = ?");
    $stmt->bind_param("s", $User);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $DB_User = $row['E-Mail'];
        $DB_Password = $row['Passwort'];
    }
    if($DB_User == $User){
        if($DB_Password == $Password){
            $_SESSION['User'] = $User;
            $_SESSION['LoggedIn'] = true;
            $_SESSION['Password'] =$Password;
            header($_SESSION['FromURL']);
        }
    }

}
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
        <form method="post" action="">
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
