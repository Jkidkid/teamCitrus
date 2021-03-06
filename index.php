<?php
require_once('php/classes/Login.php');
require_once('php/classes/Top5Teams.php');
$login = new Login();
$toplist = new Top5Teams();
?>

<!DOCTYPE html>
<html lang="sv">
  <head>
    <title>Clue | Hunter</title>
    <link rel="shortcut icon" type="image/png" href="media/img/citrusgames_icon.png" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="media/css/page.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lustria" rel="stylesheet">
  </head>
  <body>
    <header class="light-bg container-fluid navlog">
      <div class="row navs">
        <div class="col-md-6 col-sm-12" id="logocenter">
          <img src="media/img/citrusgames_icon.png" alt="citrus games logo">
        </div>
        <div class="col-md-6 col-sm-12">
          <form method="POST" class="hojd">
            <div>
              <div class="input-group mb-3 formmid">
                <input type="text" class="form-control" placeholder="Användarnamn" name="username">
                <input type="password" class="form-control" placeholder="Lösenord" name="password">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-success" name="login">Logga in</button>
                </div>
              </div>
              <div id="error-msg"><?php echo $login->error_msg; ?></div>
            </div>
          </form>
        </div>
      </div>
    </header>
    <div class="container-fluid home" id="home">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h1>Clue|Hunter</h1>
          <h3>Gör som tusentals andra människor, joina oss gratis! <a href="#reg">Bli medlem</a></h3>
        </div>
      </div>
    </div>
    <section class="container-fluid text-white dark-bg">
      <div class="container h-100 flex-wrap">
        <div class="row align-middle vertical-center h-100">
          <div class="content col-md-12 col-lg-6">
            <h2>Om</h2>
            <p>
              ClueHunter är det nya revolutionerande geolocation-gamet. Bered dig på att uppslukas av hårresande mordgåtor
              i en närmiljö. I detta spel är det du och ditt utredarteam som samlar in ledtrådar för att få tag på mördaren och hans mordvapen.
            </p>
            <p>
              Här gäller det att jobba i team och tänka strategiskt. Vid spelets start kastas ni direkt in i en spännande mordgåta.
              I spelets karta orienterar sig ni i teamet runt för att samla in olika ledtrådar. Vissa ledtrådar förstörs efter en viss tid, så är ni redo att dela upp er?
              Tänk på att en mördare går lös.
              Desto snabbare ni löser mordgåtan desto snabbare klättrar ni på poängtavlan. Tävla mot andra team så vässa era dektektivhjärnor och kasta er in.
            </p>
          </div>
          <div class="img col-md-12 col-lg-6 align-middle">
            <figure>
              <img src="media/img/gameplay.png" alt="Skärmbild av spelet">
            </figure>
          </div>
        </div>
      </div>
    </section>
    <section class="container-fluid text-white light-bg">
      <div class="container h-100">
        <div class="row h-100 vertical-center">
          <div class="col-md-12">
            <h2 class="text-center">Leaderboard</h2>
            <table class="table no-border">
              <tbody>
                <?php $toplist->output_top_5(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <section class="container-fluid text-white dark-bg" id="reg">
      <div class="container h-100">
        <div class="row h-100 vertical-center">
          <div class="col-md-12 text-center">
            <h2>Bli medlem!</h2>
            <form class="register-form" action="php/signup.php" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" name="uid" placeholder="Användarnamn">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="pwd" placeholder="Lösenord">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
              <button type="submit" class="btn btn-success" name="submit">Bli medlem!</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container-fluid footer light-bg text-center text-white">
        <div class="container h-100">
          <div class="row h-100 vertical-center">
            <div class="col-md-6 col-sm-12">
              <h3 class="text-uppercase">Ta del av våra nyhetsbrev</h3>
              <form>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Email">
                  <div class="input-group-append">
                    <button class="btn btn-success" type="button">Prenumerera</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-6 col-sm-12">
              <h3 class="text-uppercase">Följ oss</h3>
              <i class="fa fa-facebook-square" aria-hidden="true"></i>
              <i class="fa fa-twitter-square" aria-hidden="true"></i>
              <i class="fa fa-github-square" aria-hidden="true"></i>
              <i class="fa fa-linkedin-square" aria-hidden="true"></i>
              <i class="fa fa-google-plus-square" aria-hidden="true"></i>
            </div>
            <div class="col-md-12 float-right">
              <a href="#home"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="src/page.js"></script>
  </body>
</html>
