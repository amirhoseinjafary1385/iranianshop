<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/header.css">
    <title>*Action_Login_Page*</title>
</head>
<body>
<?php
include("includes/header.php")
?>

<?php

if (isset($_POST['username']) && !empty($_POST['username']) && ($_POST['password']) && !empty($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
}else
    exit("برخی از فیلد ها مقدار دهی نشده است.");

$link = mysqli_connect("localhost", "root", "1234", "shop_db");
if(mysqli_connect_errno())
    exit("خطا با شرح زیر است.:" . mysqli_connect_error());

    $query = "SElECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($link, $query);
        $row = mysqli_fetch_array($result);

        if($row){
            $_SESSION["state_login"] = true;
            $_SESSION["realname"] = $row['realname'];
        
        if($row["type"] == 0){
            $_SESSION["user_type"] = "public";

        ?>
       
        <?php
        }
         
        elseif ($row["type"] ==1) {
            $_SESSION["user_type"] = "admin";
        ?>
            <script type="text/javascript">
            <!--
            location.replace("admin_products.php");
            -->
        </script>
    <?php   
    }
        
         
            echo("<p style='color:green;'><b>{$row['realname']}به فروشگاه ایرانیان خوش آمدید</b></p>");
            }else 
            echo("<p style='color:red;'><b>نام کاربری یا کلمه عبور یافت نشد.</b></p>");
            

    mysqli_close($link);

include("includes/footer.php");
?>


    
</body>
</html>