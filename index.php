<?php 
session_start();
if(!$_SESSION["usuario"]["login"]){
  header("Location: login.php");
}
?>
<?php include("templates/header.php")  ?>


<div class="custom-container mt25">
  <h1 class="texto-centrado">Principal</h1>
</div>


<?php include("templates/footer.php")  ?>