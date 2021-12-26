<?php
session_start();
if (array_key_exists('LoggedIn', $_SESSION) && $_SESSION['LoggedIn'] == true && $_SESSION['isAdmin'] == true) { ?>
    <h1> Dies ist die Adminverwaltung</h1>
    <br>
    <div style=" height: 100%;width: 100%;display: flex;align-items: center;justify-content: center">
        <p>Straße Aktuell:</p>
        <div style="border-color: #5c636a;border-style: solid;">
            <form method="post" action="">
                <input type="hidden" name="change_address"/>
                <div class="form-group">
                    <label class="form-group" for="Street">Straße</label>
                    <input type="text" class="form-control" id="Street" name="Street">
                </div>
                <button type="submit">ändern</button>
            </form>
        </div>
    </div>
    <?php
} else {
    header('Location: login.php');
    $_SESSION['FromURL'] = 'Location: AdminConfig.php';
}
?>