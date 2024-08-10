<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="includes/header.css">
    <title>Login</title>
</head>
<body>

<?php
include("includes/header.php");


if(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true){
    ?>
    <script type="text/javascript">
    <!--
    location.replace("NotAllowed.php");
    -->


</script>
<?php }
?>

</br>

<form name="login" action="action_login.php" method="POST">
    <table style="width: 50%;" border="0" style= "margin-left:auto;margin-right:auto;"></table>
    

    <tr>
        <td>نام کاربری <span style="color:red;">*</span></td>
<td><input type="text" id="username" name="username"     /></td>
    </tr>

    
    <tr>
        <td>کلمه عبور <span style="color:red;">*</span></td>
        <td><input type="password" id="password" name="password" /></td>
    </tr>


    <tr>
        <td><br /><br /></td>
        <td><input type="submit" value="ورود" /> <input type="reset" value="جدید" />
        </td>
    </tr>

    </table>
    </form>
   
    <?php
    include("includes/footer.php");
    ?>
</body>
</html>