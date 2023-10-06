<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Styles -->
</head>

@csrf

<body>
    <div class="row p-2">
        <div class="col">
            <h1 class="pl-2">Eleves</h1>
        </div>
        <div class="col">
            <h2 class="pl-2">Ajouter</h2>
        </div>
    </div>

    <div class="eleve container pt-5 pb-5 text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Âge</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eleves as $eleve)
                    <tr>
                        <th scope="row">{{ $eleve->id }}</th>
                        <td>{{ $eleve->nom }}</td>
                        <td>{{ $eleve->prenom }}</td>
                        <td>{{ $eleve->age }}</td>
                        <td>
                            <a href="{{ route('eleves.edit', $eleve) }}">
                                <button type="button mx-auto" class="btn btn-outline-info text-dark"
                                    id="button_modif">Modifier</button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('eleves.destroy', $eleve) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <h1 class="p-2">Formateurs</h1>

    <div class="formateur container pt-5 pb-5 text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Âge</th>
                    <th scope="col">Formation enseignée</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formateurs as $formateur)
                    <tr>
                        <th scope="row">{{ $formateur->id }}</th>
                        <td>{{ $formateur->nom }}</td>
                        <td>{{ $formateur->prenom }}</td>
                        <td>{{ $formateur->age }}</td>
                        <td>{{ $formateur->diplome }}</td>
                        <td>
                            <a href="{{ route('eleves.edit', $eleve) }}">
                                <button type="button mx-auto" class="btn btn-outline-info text-dark"
                                    id="button_modif">Modifier</button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('eleves.destroy', $eleve) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">
                                    Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row p-2">
        <div class="col">
            <h1 class="pl-2">Promo</h1>
        </div>
        <div class="col">
            <h2 class="pl-2">Ajouter</h2>
        </div>
    </div>

    <div class="promo container pt-5 pb-5 text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date de début</th>
                    <th scope="col">Date de fin</th>
                    <th scope="col">Nom du diplôme</th>
                    <th scope="col">Nom/prénom élève</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($promos as $promo)
                    <tr>
                        <td>#</td>
                        <td>{{ $promo->date_debut }}</td>
                        <td>{{ $promo->date_fin }}</td>
                        <td>{{ $promo->diplome->nom }}</td>
                        <td></td>
                        <td>
                            <a href="{{ route('promos.edit', $promo) }}">
                                <button type="button mx-auto" class="btn btn-outline-info text-dark"
                                    id="button_modif">Modifier</button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('promos.destroy', $promo) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <h1 class="p-2">Diplôme</h1>

    <div class="diplome container pt-5 pb-5 text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom du diplôme</th>
                    <th scope="col">Formateur</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($diplomes as $diplome)
                    <tr>
                        <td>{{ $diplome->nom }}</td>
                        <td>{{ $diplome->formateur->nom }} {{ $diplome->formateur->prenom }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
