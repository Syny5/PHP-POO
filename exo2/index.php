<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>POO - Exercice 2</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Exercice 2</h1>
                <p class="lead">Créer les deux méthodes magiques construct et destruct dans la classe character.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <div class="d-flex justify-content-center">
              <img src="assets/img/DiagramExo2.svg" alt="Diagramme classe character">
            </div>
            <?php
              class character{
                public $_health;
                public $_mana;
                public function __construct($health, $mana){
                  $this->_health = $health;
                  $this->_mana = $mana;
                }
                public function __destruct(){
                  $this->_health = null;
                  $this->_mana = null;
                  echo "Je suis mort";
                }
              }
              $character = new Character(5000,800);
              $character->__destruct();
              var_dump($character);
              $character2 = new Character(12,980);
              var_dump($character2);
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
