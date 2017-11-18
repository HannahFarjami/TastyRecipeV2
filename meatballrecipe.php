<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="StyleSheet"
  type="text/css"
  href="resources/css/recipetemplate.css"/>
  <link rel="shortcut icon" href="resources/images/fork.png"/>
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet"> 
  <title>Tasty Recipes | Meatballs Recipe</title>
</head>

<body>

  <header>
    <?php include "resources/fragments/header.php" ?>
  </header>

  <div class="recipetemplate">
   <h1>Swedish Meatballs</h1>
   <div>
    <img src="resources/images/timer.png" alt="timer">
    <p id="tid">40 minutes</p>
    <img src="resources/images/knifefork.png" alt="knifefork">
    <p id="pers">4</p>
  </div>
  <img src="resources/images/meatballs.jpg" alt="Meatballs">
  <br/>
  <div class="content">
  <div id="ingredients">
    <p> Ingredients </p>
    <ul>
      <li>1 dl breadcrumbs</li>
      <li>1,5 dl milk</li>
      <li>500 g minced beef</li>
      <li>1 egg</li>
      <li>1 tbsp mustard</li>
      <li>salt and pepper</li>
      <li>butter, for frying</li>
    </ul>
  </div>
  
  <div id="directions">
    <p id="dir"> Directions </p>
    <ol>
      <li> Soak breadcrumbs in milk in a small bowl for 10 minutes. </li>
      <li> Mix the minced beef together with the other ingredients in a large bowl. </li>
      <li> Add the soaked bread crumbs to the mixture. </li>
      <li> Shape into meatballs. </li>
      <li> Heat the butter in a large skillet, and fry the Meatballs until they are completely done. </li>
    </ol>
  </div>
</div>
</div>
<footer>
  <?php include "resources/fragments/comments.php" ?>
</footer>

</body>
</html>
