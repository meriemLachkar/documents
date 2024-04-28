<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Modifier le document : {{$documents->id}}</h1>
        <form action="{{route('documents.update', $documents->id)}}" method="POST" class="mt-4" enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Référence">Référence</label>
                <input type="text" name="Référence" value="{{$documents->Référence}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="Version">Version</label>
                <input type="number" name="Version" value="{{$documents->Version}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="dateApp">Date d'application :</label>
                <input type="date" name="dateApp" value="{{$documents->dateApp}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="Nature">Nature</label>
                <input type="text" name="Nature" value="{{$documents->Nature}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="Intitulé">Intitulé</label>
                <input type="text" name="Intitulé" value="{{$documents->Intitulé}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="Entité">Entité</label>
                <input type="text" name="Entité" value="{{$documents->Entité}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="ResponsableEdition">Responsable d'édition</label>
                <input type="text" name="ResponsableEdition" value="{{$documents->ResponsableEdition}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="RespArchivage">Responsable d'archivage</label>
                <input type="text" name="RespArchivage" value="{{$documents->RespArchivage}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="LieuArchivage">Lieu d'archivage</label>
                <input type="text" name="LieuArchivage" value="{{$documents->LieuArchivage}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="DuréeArchivage">Durée d'archivage</label>
                <input type="text" name="DuréeArchivage" value="{{$documents->DuréeArchivage}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="pathName">Path :</label>
                <input type="file" name="pathName" class="form-control">
            </div>

            <div class="form-group">
                <input type="submit" value="Modifier" class="btn btn-success">
                <a href="{{route('documents.index')}}" class="btn btn-primary">Retour</a>
            </div>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
