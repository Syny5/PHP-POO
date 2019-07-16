<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>POO - Exercice 1</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Exercice 1</h1>
                <p class="lead">Créer une classe character. Faire deux attributs : health et mana. Ils sont tous deux de type INT.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <div class="d-flex justify-content-center">
              <img src="assets/img/DiagramExo1.svg" alt="Diagramme classe character">
            </div>
            <?php
              class character{
                public $health;
                public $mana;
              }
              $character = new Character;
              $character->health = 1500;
              $character->mana = 200;
              var_dump($character);
            ?>
          </main>
      </div>
      <!-- scripts JQuery, Popper, Angular et Bootstrap-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
      <script src="assets/js/main.js"></script>
  </body>
</html>
