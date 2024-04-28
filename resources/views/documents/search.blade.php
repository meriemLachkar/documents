<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>search page</title>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <h1 class="mb-4">Rechercher un document</h1>
                <form action="{{ route('documents.find') }}" method="POST" class="mb-3">
                    @csrf
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" name="id" id="id" value='<?php echo isset($documents) ? $documents->id: "" ?>'>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Rechercher</button>
                    <button type="reset" class="btn btn-secondary mr-2">Réinitialiser</button>
                    <a href="{{ route('documents.index') }}" class="btn btn-danger">Annuler</a>
                </form>

                @isset($message)
                <div class="alert alert-danger">
                    document introuvable
                </div>
                @endisset

                @isset($documents)
                <h1 class="mb-3">Détails</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Id</th>
                            <td>{{ $documents->id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Référence</th>
                            <td>{{ $documents->Référence }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Version</th>
                            <td>{{ $documents->Version }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Date d'application</th>
                            <td>{{ $documents->dateApp }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nature</th>
                            <td>{{ $documents->Nature }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Intitulé</th>
                            <td>{{ $documents->Intitulé }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Entité</th>
                            <td>{{ $documents->Entité }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Responsable d'édition</th>
                            <td>{{ $documents->ResponsableEdition }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Responsable d'archivage</th>
                            <td>{{ $documents->RespArchivage }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Lieu d'archivage</th>
                            <td>{{ $documents->LieuArchivage }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Durée d'archivage</th>
                            <td>{{ $documents->DuréeArchivage }}</td>
                        </tr>
                    </tbody>
                </table>

                <a href="{{ route('documents.index') }}" class="btn btn-info">Retour à la liste des documents</a>
                @endisset
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
