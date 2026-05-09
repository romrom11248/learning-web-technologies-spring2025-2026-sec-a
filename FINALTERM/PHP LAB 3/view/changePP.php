<?php
session_start();
if (!isset($_COOKIE['status'])) {
  header('location: login.php');
  exit;
}
?>


<div class="content">
  <fieldset>
    <legend>
      <h1>Change Profile Picture</h1>
    </legend>
    <br>
    <?php
    if (isset($_SESSION['user']['picture'])) {
      ?>
      <img src="../<?php echo $_SESSION['user']['picture'] ?>" width="100" height="100"><br><br>
      <?php
    } else {
      ?>
      <span style="font-size:60px;">&#128100;</span><br><br>
      <?php
    }
    ?>



    <form method="post" action="../file/upload.php" enctype="multipart/form-data">
      Image: <input type="file" name="myfile">
      <br><br>
      <input type="submit" name="submit" value="Upload">
    </form>

  </fieldset>
</div>