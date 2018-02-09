<?php
require_once('classes/CreateGroup.php');

$group = new CreateGroup();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link rel="stylesheet" href="css/usernav.css">
</head>
<body>
  <div>
    <div class="content">
        <nav class="upper-nav">
          <button><i class="fas fa-users"></i>Mina grupper</button>  
            <button><i class="fas fa-user icon"></i>Inbjudningar</button>
            <button><i class="fas fa-users"></i>Skapa grupp</button>    
          </nav>
      <div id="content-container">
        <div id="holder-group">
       <div id="group-info">
         <h4>Citrus</h4>
       <table id="group-table">
  <tr>
    <td>Elin</td>
    <td class="right-td">Admin</td>
  </tr>
  <tr>
    <td>Simon</td>
    <td class="right-td">medlem</td>
  </tr>
  <tr>
    <td>Micke</td>
    <td class="right-td">inväntar svar</td>
  </tr>
</table>
       </div>
       <div id="search-users-container">
          <h4>Skicka gruppinbjudan</h4>
          
          <div id="search-container">
            <form>
              <input type="text" name="" id="search-input" placeholder="Sök spelare">
              <button id="search-button">Sök</button>
            </form>
          </div>
          <div id="search-list">
          <table id="search-list-table">
  <tr>
    <td>Elin</td>
    <td class="right-td"><button class="send-invite">Skicka</button></td>
  </tr>
  <tr>
    <td>Simon</td>
    <td class="right-td"><button class="send-invite">Skicka</button></td>
  </tr>
  <tr>
    <td>Micke</td>
    <td class="right-td"><button class="send-invite">Skicka</button></td>
  </tr>
</table>
          </div>
       </div>
       </div>
      </div>
    </div>

      <nav class="nav">
        <button><i class="fas fa-user icon"></i>Profil</button>
        <button><i class="fas fa-users"></i>Grupper</button>
        <button><i class="fas fa-trophy"></i>Topplista</button>
        <button><i class="fas fa-play"></i>Start</button>
      </nav>

  </div>
</body>
</html>
