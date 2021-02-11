<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <!--<link rel="stylesheet" href="css/bootstrap.min.css"> -->
     <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![ endif ] -->
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                  data-target="#main_nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?= anchor('index', "Stéphane Duboze", ['class' => "navbar-brand"]); ?>
        </div>
        <div class="collapse navbar-collapse" id="main_nav">
          <ul class="nav navbar-nav">
            <li><?= anchor('index'  , "Accueil" ); ?></li>
            <li><?= anchor('aPropos', "A propos"); ?></li>
            <li><?= anchor('contact', "Contact" ); ?></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php if($this->auth_user->is_connected) : ?>
              <li><?= anchor('deconnexion', "Déconnexion"); ?></li>
            <?php else: ?>
              <li><?= anchor('connexion', "Connexion"); ?></li>
             <?php endif; ?>
           </ul>
       <?php if($this->auth_user->is_connected) : ?>
         <p class="navbar-text navbar-right">|</p>
         <p class="navbar-text navbar-right">Bienvenue <strong><?= $this->auth_user->username; ?></strong></p>
       <?php endif; ?>
        </div>
      </div>
    </nav>