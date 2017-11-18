<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="StyleSheet"
  type="text/css"
  href="resources/css/comments.css"/>
</head>
<body>
  <div class="comments">

      <?php 
      if(isset($_SESSION['user'])){
        
        echo "<form action='#' method='post'>
        <textarea name='message' placeholder='Add your comment here'></textarea><br>
      <input type='submit' value='Submit Your Comment'></form>";
      }
      else{
      echo "<p> YOU NEED TO BE LOOGED IN TO COMMENT!</p>";
      }
    ?>
    <div>
      <?php
      $recipe = $_SERVER['REQUEST_URI'];

      $con = mysqli_connect("localhost","root","") or die(mysqli_error());
      mysqli_select_db($con, "first_db") or die("Cannot connect to database");

      $query = mysqli_query($con,"SELECT * from comments WHERE recipe = '$recipe'");
      $exists = mysqli_num_rows($query);
      echo "<br><p id='number'>Number of comments: ".$exists."</p>";
      if($exists > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
          echo "<div class ='cmts'><p id='name'>" . $row['username'] . "</p>";
          echo "<p id='comment'>" . $row['comment'] . "</p>";
          if(isset($_SESSION['user']) && $_SESSION['user'] == $row['username']) {
            echo "<form action='#'method='post'>
            <input type = 'hidden' name='id' value='".$row['id']."'>
            <button type='submit' class='deletebtn'>Delete Comment</button>
            </form>";
          }
          echo "</div>";
        }
      }
      ?>
    </div>
  </div>
</body>
</html>


<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $con = mysqli_connect("localhost","root","") or die(mysqli_error());
  mysqli_select_db($con, "first_db") or die("Cannot connect to database");
  
  if(isset($_POST['id'])){
    $id = $_POST['id'];
    mysqli_query($con, "DELETE FROM comments WHERE id='$id'");
    header("location: .".$_SERVER['PHP_SELF']);
  }
  else{
    $username = $_SESSION['user'];
    $message = $_POST['message'];
    $recipe = $_SERVER['REQUEST_URI'];
    mysqli_query($con, "INSERT INTO comments (comment,username,recipe) VALUES ('$message','$username', '$recipe')");
    header("location: .".$_SERVER['PHP_SELF']);
  }
}
?>