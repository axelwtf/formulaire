<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>

    <div class="container">
        <form action="treatment.php" method="POST">

            <div class="form-group">
                <label for="nom">Nom: </label>
                <input type="text" name="nom" id="nom" class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="prenom">Prénom: </label>
                <input type="text" name="prenom" id="prenom" class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="pays">Pays: </label>
                <select name="pays" id="pays" class="form-control">
                    <option value="BE">Belgique</option>
                    <option value="IT">Italie</option>
                    <option value="FR">France</option>
                </select>
            </div>
            <div class="form-control my-3">
                <label for="message">Message: </label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-control">
                <input type="submit" value="Envoyer" class="btn btn-primary">
            </div>

        </form>
    </div>
    
    <?php
        if (isset($_GET['error']))
        {
            echo "<div class ='alert alert-danger my-3'>Une erreur est survenue</div> ";
        }
    ?>

</body>

</html>