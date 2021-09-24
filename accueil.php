<!doctype html>
<html lang="fr">

<head>
  <title>Accueil</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php
  include("connexion.php");
  include("Class/Questionnaire.php");
  try {
    //on récupère tout les questionnaire
    $requete = $db->query("SELECT * FROM `Questionnaire` ");
    $requete->execute();
    $requete->setFetchMode(PDO::FETCH_CLASS, 'Questionnaire');
    $questionnaire = $requete->fetchAll();

    foreach ($questionnaire as $questionnaires) {
  ?>

      <div class="row">
        <div class="col-4 "></div>

        <div class=" col-4card  mt-sm-5 my-1" style="width: 18rem;">
          <div class="card-body  ml-sm-4 pl-sm-5 pt-2">
            <h5 class="card-title"><?php echo $questionnaires->getTitre(); ?></h5>
            <form method="POST" id="faireQuestion" action="">
            <input type="submit" name="faire" id="faireQuestion" class="btn btn-success" value="Faire ce questionnaire" />
            <input type="hidden" name="questionnaire" id="questionnaire" value="<?php echo $questionnaires->getIdQuestionnaire(); ?>" >
            </form>
          </div>
        </div>
      </div>
      <div class="col-4 "></div>

  <?php }
  } catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
  }
  ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>