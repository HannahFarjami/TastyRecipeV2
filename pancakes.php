<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="StyleSheet"
  type="text/css"
  href="resources/css/recipetemplate.css"/>
  <link rel="shortcut icon" href="resources/images/fork.png"/>
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet"> 
  <title>Tasty Recipes | Pancake recipe</title>
</head>

<body>

  <header>
    <?php include "resources/fragments/header.php" ?>
  </header>

  <div class="recipetemplate">
   <h1>Pancakes</h1>
   <div>
    <img src="resources/images/timer.png" alt="timer">
    <p id="tid">15 minutes</p>
    <img src="resources/images/knifefork.png" alt="knifefork">
    <p id="pers">2</p>
  </div>
  <img src="resources/images/pancakes.jpg" alt="Pancakes">
  <br/>
  <div class="content">
  <div id="ingredients">
    <p> Ingredients </p>
    <ul>
      <li>2,5 dl flour</li>
      <li>6 dl milk</li>
      <li>2,5 tsk baking powder</li>
      <li>3 egg</li>
      <li>1 tsp vanilla sugar</li>
      <li>0,5 tsp salt</li>
      <li>2 tbsp butter</li>
    </ul>
  </div>

  <div id="directions">
    <p id="dir"> Directions </p>
    <ol>
      <li> Mix flour, baking powder and salt in a bowl. </li>
      <li> Beat in half of the milk and whisk until smooth. </li>
      <li> Add eggs, vanilla sugar, melted butter and the rest of the milk to the pancake batter.</li>
      <li> Melt a bit of butter in a hot frying pan. </li>
      <li> Pour 1/2 to 1 deciliter pancake into the pan, depending on how thick pancakes you want. </li>
    </ol>
  </div>
</div>
</div>
<footer>
  <?php include "resources/fragments/comments.php" ?>
</footer>



</body>
</html>
