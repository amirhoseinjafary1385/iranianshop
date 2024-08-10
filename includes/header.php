<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header Iranian SHop </title>
  <link rel="stylesheet" href="header.css">
  <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
         

<?php
session_start();
?>


<style type= "text/css">
  <!--
  .set_style_link{
    text-decoration:none;
    font-weight: bold;
  }
-->
</style>

<nav class="divTable">
<ul class="divTableRow" style="text-align: center;">

<li class="divTableCell"><a class="set_style_link" href="index.php">صفحه اصلی </a></li>
<li class="divTableCell"><a class="set_style_link" href="register.php">عضویت در سایت </a></li>
<li class="divTableCell"><a href="admin_products.php" class="set_style_link">مدیریت محصولات</a></li>
<li class="divTableCell"><a href="#" class="set_style_link">سفارشات محصولات</a></li>
<?php
if(isset($_SESSION["state_login"])&& $_SESSION["state_login"] === true)
{
  ?>
  <li class="divTableCell"><a  href="logout.php" class="set_style_link">خروج از سایت
  <?php echo("({$_SESSION["realname"]})")?></a></li>
  <?php
}
else
{
  ?>
  <li class="divTableCell"><a class="set_style_link" href="login.php">ورود در سایت </a></li>
  <?php
}
?>
  <li class="divTableCell"><a class="set_style_link" href="#">درباره ما</a></li>
  <li class="divTableCell"><a class="set_style_link" href="contact.php">ارتباط با ما</a></li>

  <?php
  if(isset($_SESSION["state_login"]) && $_SESSION["state_login"] ===true && $_SESSION["user_type"] == "admin")
  {
?>
    
    
   
    
    <?php
  }
  ?>
</ul>
</nav>


<section class="divTable">
        <section class="divTableRow">
          <aside class="divTableCell" style="width:25%;" >بخش امکانات سایت</aside>
      
</body>
</html>