


<?php
include('connexion.php');
if(isset($_POST['question'])||isset($_POST['bonneRep']))
{
    echo"ok";
}


?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
createQuestionnaire.php
<body>


    <div class="container mt-sm-5 my-1">
        <div class="row">
        <div class="col-3"> </div>
        <h2 class="form-title col-6 ">Créer une question</h2>
        <div class="col-3"> </div>
        </div>
        <div class="signup-content">
                
            <form method="POST" class="register-form" id="createQuestion" action="createQuestionnaire.php">
                
                <div class="form-group">
                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                    <input type="text" name="question" id="question" placeholder="Question" required="true"/>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="text" name="bonneRep" id="bonneRep" placeholder="Bonne réponse" required="true" />
                    </div>
                    <div class="form-group col-6">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="text" name="Rep" id="Rep" placeholder="Réponse 1" required="true" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="text" name="Rep2" id="Rep2" placeholder="Réponse 2" required="true" />
                    </div>
                    <div class="form-group col-6">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="text" name="Rep3" id="Rep3" placeholder="Réponse 3" required="true" />
                    </div>
                </div>
                <!--<div class="form-group form-button">
                    <input type="submit" name="signup" id="signup" class="form-submit" value="Inscrivez-vous" />
                </div> -->
                <div class="d-flex align-items-center pt-3">
                    
                    <div class="ml-auto mr-sm-5"> <input type="submit" name="signup" id="signup" class="btn btn-success" value="Valider" /> </div>
                </div>
            </form>
            
            
        </div>
            
        
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>