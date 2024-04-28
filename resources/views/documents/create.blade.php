<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center mt-5">Créer un nouveau document</h1>
    <form action="{{route('documents.store')}}" method="POST" enctype='multipart/form-data' style="width: 50%; margin: auto;">
        @csrf
        <div class="form-group">
            <label for="Référence">Référence :</label>
            <input type="text" name="Référence" class="form-control">
        </div>

        <div class="form-group">
            <label for="Version">Version :</label>
            <input type="number" name="Version" class="form-control">
        </div>

        <div class="form-group">
            <label for="dateApp">Date d'application :</label>
            <input type="date" name="dateApp" class="form-control">
        </div>

        <div class="form-group">
            <label for="Nature">Nature :</label>
            <input type="text" name="Nature" class="form-control">
        </div>

        <div class="form-group">
            <label for="Intitulé">Intitulé :</label>
            <input type="text" name="Intitulé" class="form-control">
        </div>

        <div class="form-group">
            <label for="Entité">Entité :</label>
            <input type="text" name="Entité" class="form-control">
        </div>

        <div class="form-group">
            <label for="ResponsableEdition">Responsable de l'édition :</label>
            <input type="text" name="ResponsableEdition" class="form-control">
        </div>

        <div class="form-group">
            <label for="RespArchivage">Responsable de l'archivage:</label>
            <input type="text" name="RespArchivage" class="form-control">
        </div>

        <div class="form-group">
            <label for="LieuArchivage">Lieu de l'archivage :</label>
            <input type="text" name="LieuArchivage" class="form-control">
        </div>

        <div class="form-group">
            <label for="DuréeArchivage">Durée de l'archivage :</label>
            <input type="text" name="DuréeArchivage" class="form-control">
        </div>

        <div class="form-group">
            <label for="pathName">Path :</label>
            <input type="file" name="pathName" class="form-control">
        </div>

        <div class="form-group">
            <input type="submit" value="Ajouter" class="btn btn-success btn-block">
        </div>
    </form>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
