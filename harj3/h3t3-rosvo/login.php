<?php
session_start();

$errmsg = '';
if (isset($_POST['uid']) AND isset($_POST['passwd'])) {
    // Kovakoodatut tunnukset ja salasanat
    $idpass = array ("uid1" => "ara",
                    "uid2" => "janne",
                    "uid3" => "paavo",
                    "passwd1" => "sala",
                    "passwd2" => "sala2",
                    "passwd3" => "sala3");
    if  (($_POST['uid'] === $idpass['uid1'] AND $_POST['passwd'] === $idpass['passwd1']) OR
        ($_POST['uid'] === $idpass['uid2'] AND $_POST['passwd'] === $idpass['passwd2']) OR
        ($_POST['uid'] === $idpass['uid3'] AND $_POST['passwd'] === $idpass['passwd3'])) {
        // Kirjautuminen ok, merkintä sessiotauluun
        $_SESSION['app1_islogged'] = true;
        $_SESSION['uid'] = $_POST['uid']; // Tässä mukavuussyistä, voidaan tulostella yms.
         header("Location: http://" . $_SERVER['HTTP_HOST']
                                    . dirname($_SERVER['PHP_SELF']) . '/'
                                    . "h3t3-rosvo-main.php");
        exit;
    } else {
        $errmsg = '<span style="background: yellow;">Tunnus/Salasana väärin!';
    }
}
?>

<title>Kirjautusmislomake</title>

<?php
if ($errmsg != '') echo $errmsg;
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"
style=color:#000;background-color:#eeeeee>
Tunnus:<br><input type="text" name="uid" size="30"><br>
Salasana:<br><input type="text" name="passwd" size="30"><br>
<input type='submit' name='action' value='Kirjaudu'>
<br>
</form>