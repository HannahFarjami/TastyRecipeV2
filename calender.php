 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="UTF-8">
  <link rel="StyleSheet"
  type="text/css"
  href="resources/css/calender.css"/>
  <link rel="shortcut icon" href="resources/images/fork.png"/>
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet"> 
  <title>Tasty Recipes | Calendar</title>
</head>
<body>

  <header>
    <?php include "resources/fragments/header.php" ?>
  </header>
  <div class="calender">
    <div class="month">
      <ul>
        <li class="prev">&#10094;</li>
        <li class="next">&#10095;</li>
        <li>
          November<br>
          <span style="font-size:18px">2017</span>
        </li>
      </ul>
    </div>

    <ul class="weekdays">
      <li>Mo</li>
      <li>Tu</li>
      <li>We</li>
      <li>Th</li>
      <li>Fr</li>
      <li>Sa</li>
      <li>Su</li>
    </ul>

    <ul class="days">
      <li>1</li>
      <li>2</li>
      <li>3</li>
      <li>           
        <a href="meatballrecipe.php">
          <img  class="food" src="resources/images/meatballs.jpg" alt="meatballs"/>
        </a></li>
        <li>5</li>
        <li>6</li>
        <li>7</li>
        <li>8</li>
        <li>9</li>
        <li><span>10</span></li>
        <li>11</li>
        <li>12</li>
        <li>13</li>
        <li>14</li>
        <li>15</li>
        <li>
          <a href="pancakes.php">
            <img  class="food" src="resources/images/pancakes.jpg" alt="pancakes"/>
          </a>
        </li>
        <li>17</li>
        <li>18</li>
        <li>19</li>
        <li>20</li>
        <li>21</li>
        <li>22</li>
        <li>23</li>
        <li>24</li>
        <li>25</li>
        <li>26</li>
        <li>27</li>
        <li>28</li>
        <li>29</li>
        <li>30</li>

      </ul> 
    </div>
  </body>  
  </html>