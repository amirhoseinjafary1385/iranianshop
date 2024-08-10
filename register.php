
<?php
include("includes/header.php");

if(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true){
    ?>
    <script type="text/javascript">
    <!--
    //location.replace("index.php");
    location.replace("NotAllowed.php");
    -->


</script>
<?php }
?>

 
<link rel="stylesheet" href="includes/header.css">

<script type = "text/javascript">  
<!--
    function check_empty() 
    {
      var username = ";
      username = document.getElemantryById("username").value;
      if(username ==")
        alert('وارد کردن نام کاربری الزامی است.');
      else
      {


        var r = confrim("از صحت اطلاعات وارد شده اطمینان دارید؟");
        if(r == true){
          document.register.submit();
        }
      }
    }
    
-->
</script>


<br />

<form name="register" action="action_register.php" method="POST">

    <table style="width: 50%;" border ="0" style="margin-left:auto; margin-right:auto;">
    
    <tr>
        <td style="width: 40%;">نام واقعی<span style="color:red;">*</span></td>
        <td style="width: 70%;"><input type="text" id="realname" name="realname" /></td>

    </tr>

    <tr>
        <td >نام کاربری<span style="color:red;">*</span></td>
        <td ><input type="text" style="text-align: left;" id="username" name="username" /></td>

    </tr>



    
    <tr>
        <td>کلمه عبور<span style="color: red;">*</span></td>
        <td><input type="password" style="text-align: left;" id="password" name="password"/></td>
        <td></td>
    </tr>

    <tr>
        <td>کلمه عبور تکرار <span style="color: red;">*</span></td>
        <td><input type="password" style="text-align: left;" id="repassword" name="repassword"/></td>
        <td></td>
    </tr>


    
    <tr>
        <td>پست الکترونیکی<span style="color: red;">*</span></td>
        <td><input type="text" style="text-align: left;" id="email" name="email"/></td>
        <td></td>
    </tr>

    <tr>
        <td><br /><br /></td>
    <td>

        <input type="submit" value="ثبت نام" onclick="check_empty();"/>
        &nbsp;&nbsp;&nbsp;

        <input type="reset" value="جدید"/>

    </td>
</table>



<?php
include("includes/footer.php");
?>
  