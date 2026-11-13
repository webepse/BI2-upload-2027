<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js" integrity="sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="traitement.php" method="POST" enctype="multipart/form-data">
            <div class="my-3">
                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" class="form-control">
            </div>
            <div class="my-3">
                <label for="fichier">Fichier</label>
                <input type="file" name="fichier" id="fichier" class="form-control">
            </div>
            <div class="my-3">
                <input type="submit" value="Envoyer" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>