<?php
    
    include_once '../modele/addmachin.php';
   
?>
<html>
<head>
<title>CRUD</title>
<link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../public/styles.css">
<script src="../public/crudEvent.js"></script>

</head>
<body>

    <div class="row">

        <div class="form-container">
            <form method="POST">
                <div class="form-group">
                    <div class="row">
                        <label>Nom du QCM</label> <input type="text"
                            name="title" id="nom_qcm" class="form-control"
                            required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label>Question</label> <input type="text"
                            name="question" id="intitule_question" class="form-control"
                            required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                    <label class="form-check-label" for="check">Réponse 1 (cochez si la réponse est correcte)</label>
                        <textarea class="form-control" id="intitule_reponse"
                            name="reponse" required></textarea>
                            <input type="checkbox" class="form-check-input" id="valid">
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                    <label class="form-check-label" for="check">Réponse 2 (cochez si la réponse est correcte)</label>
                        <textarea class="form-control" id="intitule_reponse"
                            name="reponse" required></textarea>
                            <input type="checkbox" class="form-check-input" id="valid">
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                    <label class="form-check-label" for="check">Réponse 3 (cochez si la réponse est correcte)</label>
                        <textarea class="form-control" id="intitule_reponse"
                            name="reponse" required></textarea>
                            <input type="checkbox" class="form-check-input" id="valid">
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                    <label class="form-check-label" for="check">Réponse 4 (cochez si la réponse est correcte)</label>
                        <textarea class="form-control" id="intitule_reponse"
                            name="reponse" required></textarea>
                            <input type="checkbox" class="form-check-input" id="valid">
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <button class="btn btn-primary" name="add">Soumettre</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

</body>
</html>