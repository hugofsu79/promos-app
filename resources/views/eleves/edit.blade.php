    @csrf
    @method('PUT')

    <form action="{{ route('eleves.update', $eleve) }}" method="POST">
        <div class="row">

            <!--input nom-->
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Nom</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="nom"
                    value="{{ $eleve->nom }}">
            </div>

            <!--input réduction-->
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="prenom"
                    value="{{ $eleve->prenom }}">
            </div>

            <!--input date de début-->
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Age</label>
                <input type="date" class="form-control" id="formGroupExampleInput2" name="age"
                    value="{{ $eleve->age }}">
            </div>

        </div>

    </form>
