<?php

// definisco la classe User

  class User
  {

    public $nome;
    public $cognome;
    private $codiceFiscale;

    // Costruttore parametrizzato
    function __construct($nome,$cognome,$codiceFiscale)
    {
      $this->nome = $nome;
      $this->cognome = $cognome;
      $this->codiceFiscale = $codiceFiscale;
    }

    // Funzione per ritornare il codice fiscale che essendo privato ha bisogno di un metodo per essere acceduto
    public function getCodiceFiscale(){ return $this->codiceFiscale;}


    // Funzioni per modificare i valori degli attributi nome e cognome
    public function setNome($nome){$this->nome = $nome;}
    public function setnCognome($cognome){$this->cognome = $cognome;}


    // Funzione unica per cambiare il nome ed il cognome che utilizza i metodi di modifica dichiarati sorpa
    public function cambiaNomeCognome($nome,$cognome){
      $this->setNome($nome);
      $this->setnCognome($cognome);
    }

  }


  $matteo = new User("matteo","vollero","vhg96lleou12ghf839");

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="credenzia">

      <h1>NOME</h1>
      <?php echo $matteo->nome ; ?>

      <h1>COGNOME</h1>
      <?php echo $matteo->cognome ; ?>

      <h1>CODICE FISCALE</h1>
      <?php echo $matteo->getCodiceFiscale(); ?>

      <?php $matteo->cambiaNomeCognome("Marco","casagrande"); ?>

      <h1>------------------------------------------------------- CAMBIO DEL NOME -------------------------------------------------------</h1>

      <h1>NOME</h1>
      <?php echo $matteo->nome ; ?>

      <h1>COGNOME</h1>
      <?php echo $matteo->cognome ; ?>

      <h1>CODICE FISCALE</h1>
      <?php echo $matteo->getCodiceFiscale(); ?>

    </div>
  </body>
</html>
