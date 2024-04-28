<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <h1 class="text-center mt-5">Détails</h1>
    <table class="table w-50 m-auto">
        <tr>
            <th>Le champ : </th>
            <th>La valeur : </th>
        </tr>
        <tr>
            <td>ID</td>
            <td>{{$documents->id}}</td>
        </tr>

        <tr>
            <td>Référence</td>
            <td>{{$documents->Référence}}</td>
        </tr>

        <tr>
            <td>Version</td>
            <td>{{$documents->Version}}</td>
        </tr>

        <tr>
            <td>Date d'application</td>
            <td>{{$documents->dateApp}}</td>
        </tr>

        <tr>
            <td>Nature</td>
            <td>{{$documents->Nature}}</td>
        </tr>

        <tr>
            <td>Intitulé</td>
            <td>{{$documents->Intitulé}}</td>
        </tr>

        <tr>
            <td>Entité</td>
            <td>{{$documents->Entité}}</td>
        </tr>

        <tr>
            <td>Responsable d'édition</td>
            <td>{{$documents->ResponsableEdition}}</td>
        </tr>

        <tr>
            <td>Responsable d'archivage</td>
            <td>{{$documents->RespArchivage}}</td>
        </tr>

        <tr>
            <td>Lieu d'archivage</td>
            <td>{{$documents->LieuArchivage}}</td>
        </tr>

        <tr>
            <td>Durée d'archivage</td>
            <td>{{$documents->DuréeArchivage}}</td>
        </tr>

        <tr>
            <td colspan="2">
                <a href="{{route('documents.index')}}" class="btn btn-primary">Retour</a>
            </td>
        </tr>
    </table>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
