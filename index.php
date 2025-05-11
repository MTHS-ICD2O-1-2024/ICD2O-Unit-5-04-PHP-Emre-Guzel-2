<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Museum Discount Age Calculator" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Emre Guzel" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-light_green.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="css/style.css">
  <title>Museum Discount Age Calculator</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="container">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Museum Discount Age Calculator</span>
        </div>
      </header>
      <h3 class="number">Enter in your age</h3>
      <form action="answer.php" method="GET">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="number" name="age" id="age">
          <label class="mdl-textfield__label" for="age">Age</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <br>
        <div id="option" class="dropdown-container">
          <label class="select-day" for="day">Choose day of the week</label>
          <br><br>
          <select id="day" name="day">
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
          </select>
        </div>
        <br>
        <main id="click-me" class="mdl-layout__content">
          <button id="click" type="submit"
            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
            Generate
          </button>
        </main>
      </form>
    </div>
    <br>
    <img class="Calculate" src="images/musem-tokect.jpg" alt="ticket img ">
  </div>
</body>

</html>