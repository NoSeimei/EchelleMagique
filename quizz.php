<?php
include('connexion.php');
if(isset($_SESSION['ident2'])&& isset($_SESSION['nom2']) && isset($_SESSION['prenom2'])){
	$_SESSION['ok']="tuesco";
}
else
{
	$_SESSION['ok']="";
}

try {
    $requete1 = $db->query("SELECT * FROM question INNER JOIN reponse ON question.IdQuestion = reponse.IdQuestion WHERE question.IdQuestion = 1");
    $requete1->setFetchMode(PDO::FETCH_CLASS, 'Question');
    $lesQuestion = $requete1->fetchAll();
} catch (Exception $exE) {

    echo $exE;
}

?>

<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Grimpons - Questionnaire</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
        body {
            background: #eee
        }

        #regForm {
            background-color: #ffffff;
            margin: 0px auto;
            font-family: Raleway;
            padding: 40px;
            border-radius: 10px
        }

        #register {
            color: #6A1B9A
        }

        h1 {
            text-align: center
        }

        .tab input:focus {
            border: 1px solid #6a1b9a !important;
            outline: none
        }

        input.invalid {
            border: 1px solid #e03a0666
        }

        .tab {
            display: none
        }

        button {
            background-color: #6A1B9A;
            color: #ffffff;
            border: none;
            border-radius: 50%;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer
        }

        button:hover {
            opacity: 0.8
        }

        button:focus {
            outline: none !important
        }

        #prevBtn {
            background-color: #bbbbbb
        }

        .all-steps {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
            width: 100%;
            display: inline-flex;
            justify-content: center
        }

        .step {
            height: 40px;
            width: 40px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 15px;
            color: #6a1b9a;
            opacity: 0.5
        }

        .step.active {
            opacity: 1
        }

        .step.finish {
            color: #fff;
            background: #6a1b9a;
            opacity: 1
        }

        .all-steps {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px
        }

        .thanks-message {
            display: none
        }
    </style>
</head>

<body oncontextmenu='return false' class='snippet-body'>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <form id="regForm">
                    <h1 id="register">Questionnaire</h1>
                    <div class="all-steps" id="all-steps"> <span class="step"><i class="fa fa-user"></i></span> <span
                            class="step"><i class="fa fa-map-marker"></i></span> <span class="step"><i
                                class="fa fa-shopping-bag"></i></span> <span class="step"><i
                                class="fa fa-car"></i></span> <span class="step"><i class="fa fa-spotify"></i></span>
                        <span class="step"><i class="fa fa-mobile-phone"></i></span> </div>
                        <?php foreach($lesQuestion as $question) { ?>
                    <div class="tab">
                        <h6>Q. Laquelle de ces méthodes n'est pas une méthode traditionnelle ?    </h6>
                        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
                            <p><br></br><input type="radio" name="radio"> <label class="options">Small Business Owner or
                                    Employee
                                    <span class="checkmark"></span>
                                </label></p>
                            <p> <input type="radio" name="radio"> <label class="options">Nonprofit Owner or Employee
                                    <span class="checkmark"></span>
                                </label></p>
                            <p><input type="radio" name="radio"> <label class="options">Journalist or Activist
                                    <span class="checkmark"></span>
                                </label></p>
                            <p><input type="radio" name="radio"> <label class="options">Other <span
                                        class="checkmark"></span>
                                </label></p>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="tab">
                        <h6>Lequel de ces roles scrum existe? </h6>
                        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
                            <p><br></br><input type="radio" name="radio"> <label class="options">Small Business Owner or
                                    Employee
                                    <span class="checkmark"></span>
                                </label></p>
                            <p> <input type="radio" name="radio"> <label class="options">Nonprofit Owner or Employee
                                    <span class="checkmark"></span>
                                </label></p>
                            <p><input type="radio" name="radio"> <label class="options">Journalist or Activist
                                    <span class="checkmark"></span>
                                </label></p>
                            <p><input type="radio" name="radio"> <label class="options">Other <span
                                        class="checkmark"></span>
                                </label></p>
                        </div>
                    </div>
                    <div class="tab">
                        <h6>Comment appelle-t-on les acteur externes d'un projet? </h6>
                        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
                            <p><br></br><input type="radio" name="radio"> <label class="options">Small Business Owner or
                                    Employee
                                    <span class="checkmark"></span>
                                </label></p>
                            <p> <input type="radio" name="radio"> <label class="options">Nonprofit Owner or Employee
                                    <span class="checkmark"></span>
                                </label></p>
                            <p><input type="radio" name="radio"> <label class="options">Journalist or Activist
                                    <span class="checkmark"></span>
                                </label></p>
                            <p><input type="radio" name="radio"> <label class="options">Other <span
                                        class="checkmark"></span>
                                </label></p>
                        </div>
                    </div>
                    <div class="thanks-message text-center" id="text-message"> <img
                            src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                        <h3>QUESTIONNAIRE TERMINÉ !</h3> <span>Merci d'avoir répondu au questionnaire. Voici le nombre
                            de point que vous avez obtenue !</span>
                    </div>
                    <div style="overflow:auto;" id="nextprevious">
                        <div style="float:right;"> <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i
                                    class="fa fa-angle-double-left"></i></button> <button type="button" id="nextBtn"
                                onclick="nextPrev(1)"><i class="fa fa-angle-double-right"></i></button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type='text/javascript'
        src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
    <script
        type='text/javascript'>var currentTab = 0;
            document.addEventListener("DOMContentLoaded", function (event) {


                showTab(currentTab);

            });

            function showTab(n) {
                var x = document.getElementsByClassName("tab");
                x[n].style.display = "block";
                if (n == 0) {
                    document.getElementById("prevBtn").style.display = "none";
                } else {
                    document.getElementById("prevBtn").style.display = "inline";
                }
                if (n == (x.length - 1)) {
                    document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
                } else {
                    document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
                }
                fixStepIndicator(n)
            }

            function nextPrev(n) {
                var x = document.getElementsByClassName("tab");
                if (n == 1 && !validateForm()) return false;
                x[currentTab].style.display = "none";
                currentTab = currentTab + n;
                if (currentTab >= x.length) {

                    document.getElementById("nextprevious").style.display = "none";
                    document.getElementById("all-steps").style.display = "none";
                    document.getElementById("register").style.display = "none";
                    document.getElementById("text-message").style.display = "block";




                }
                showTab(currentTab);
            }

            function validateForm() {
                var x, y, i, valid = true;
                x = document.getElementsByClassName("tab");
                y = x[currentTab].getElementsByTagName("input");
                for (i = 0; i < y.length; i++) { if (y[i].value == "") { y[i].className += " invalid"; valid = false; } } if (valid) { document.getElementsByClassName("step")[currentTab].className += " finish"; } return valid;
            } function fixStepIndicator(n) { var i, x = document.getElementsByClassName("step"); for (i = 0; i < x.length; i++) { x[i].className = x[i].className.replace(" active", ""); } x[n].className += " active"; }</script>
</body>

</html>