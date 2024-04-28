<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <title>Page Index</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark" id="custom-navbar">
            <div class="container-fluid">
                <div class="navbar-left" id="left-bg">
                    <div class="navbar-title text-center" id="title">
                        <span class="border-bottom border-primary">
                            Office National de l'Électricité et de l'Eau Potable <br>
                            Branche Eau <br>
                            Direction Régionale de Tensift<br>
                            Secteur de Production Marrakech-El kelaa des Sraghna-Rhamna <br>
                            Station de Traitement Rocade
                        </span>
                    </div>
                </div>
                <div class="navbar-right" id="right-bg"></div>
            </div>
        </nav>

        <div class="container mt-5">
            <h2 class="titre">Gestion de documentation de la station Rocade</h2>
        </div>
        <div>
            <div class="action mb-3 text-center">
                <a href="{{route('documents.create')}}" class="btn btn-success">Ajouter un document</a>
                <a href="{{ route('documents.search') }}" class="btn btn-success">Rechercher un document</a>
            </div>
            @if (session('message'))
                <p class="alert alert-success">{{session('message')}}</p>
            @endif
            <form action="{{route('documents.filtrage')}}" method="GET" class="form-inline justify-content-center mb-3">
                <div class="form-group">
                    <label for="ent" class="mr-2">Choisir une entité :</label>
                    <select name="ent" id="ent" class="form-control mr-2">
                        <option value="Tout">Toutes les Entités</option>
                        <option value="RH">RESSOURCES HUMAINES</option>
                        <option value="Laboratoire">LABORATOIRE</option>
                        <option value="service technique et maintenance">SERVICE TECHNIQUE ET MAINTENANCE</option>
                        <option value="Production">PRODUCTION(EXPLOITATION)</option>
                        <option value="SMADA">SMADA</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Filtrer</button>
                </div>
            </form>

            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Référence</th>
                        <th>Version</th>
                        <th>date d'application</th>
                        <th>Nature</th>
                        <th>Intitulé</th>
                        <th>Entité</th>
                        <th>Responsable d'édition</th>
                        <th>Responsable d'archivage</th>
                        <th>Lieu d'archivage</th>
                        <th>Durée d'archivage</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if(Session::has('filteredData'))
                    @php
                    $documents = Session::get('filteredData')
                    @endphp
                    @endif
                    @foreach ($documents as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->Référence}} <a href="{{route('documents.open' , $d->id)}}">ouvrir</a></td>
                            <td>{{$d->Version}}</td>
                            <td>{{$d->dateApp}}</td>
                            <td>{{$d->Nature}}</td>
                            <td>{{$d->Intitulé}}</td>
                            <td>{{$d->Entité}}</td>
                            <td>{{$d->ResponsableEdition}}</td>
                            <td>{{$d->RespArchivage}}</td>
                            <td>{{$d->LieuArchivage}}</td>
                            <td>{{$d->DuréeArchivage}}</td>
                            <td>
                                <a href="{{route('documents.show', $d->id)}}" class="btn btn-primary btn-sm">Plus de détails</a>
                                <a href="{{route('documents.edit', $d->id)}}" class="btn btn-warning btn-sm">Modifier</a>
                                <form action="{{route('documents.destroy', $d->id)}}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce document ?')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

</body>
</html>
