@extends('layouts.dashboard.tableau-de-bord') @section('title', 'Creation
reservation') @section('content')
<h1>Creation d'une réservation</h1>
<hr />
<br /><br />
<form
    autocomplete="off"
    class="needs-validation"
    novalidate
    method="POST"
    action="/reservation"
    enctype="multipart/form-data"
    onsubmit="return this['evenement'].value != 0 && checkPeople()"
>
    @csrf

    <div class="position-relative row form-group">
        <label for="nom_prenom" class="col-sm-2 col-form-label"
            >Nom et Prénom</label
        >
        <div class="col-sm-10">
            <input
                name="nom_prenom"
                placeholder="e.g Flen ben flen"
                type="text"
                class="form-control"
                required
            />
            <div class="invalid-feedback">Veuillez entrer un valide nom</div>
        </div>
    </div>

    <div class="position-relative row form-group">
        <label for="nbr_gar" class="col-sm-2 col-form-label"
            >Nombre de garçon</label
        >
        <div class="col-sm-10">
            <input
                placeholder="minimum 1 si 0 fille"
                min="0"
                name="nbr_gar"
                type="number"
                class="form-control"
                required
            />
            <div class="invalid-feedback">Veuillez entrer un nombre valide</div>
        </div>
    </div>

    <div class="position-relative row form-group">
        <label for="nbr_fille" class="col-sm-2 col-form-label"
            >Nombre de fille</label
        >
        <div class="col-sm-10">
            <input
                placeholder="minimum 1 si 0 garçon"
                min="0"
                name="nbr_fille"
                type="number"
                class="form-control"
                required
            />
            <div class="invalid-feedback">Veuillez entrer un nombre valide</div>
        </div>
    </div>

    <div class="position-relative row form-group">
        <label for="telephone" class="col-sm-2 col-form-label">Telephone</label>
        <div class="col-sm-10">
            <input
                minlength="8"
                name="tel"
                type="tel"
                pattern="[0-9]{2}[0-9]{3}[0-9]{3}"
                class="form-control"
                required
                placeholder="e.g +216 25-830-605"
            />
            <div class="invalid-feedback">Veuillez entrer un numero valide</div>
        </div>
    </div>
    <div class="position-relative row form-group">
        <label for="evenement" class="col-sm-2 col-form-label">Evenement</label>
        <div class="col-sm-10">
            <select onchange="handleSelectChange({{$evenements}})" id="evenements" name="evenement" required class="form-control">
                <option disabled selected value="0">Choisissez une événement</option>
                @if (count($evenements) > 0)
                    @foreach ($evenements as $evenement)
                        <option value="{{ $evenement->id }}">{{ $evenement->nom }}</option>
                    @endforeach
                @endif
            </select>
            <small class="form-text text-muted"
                >Choisissez une événement</small
        >
            <div class="valid-feedback">Veuillez choisissez une événement</div>
        </div>
    </div>
    <div class="position-relative row form-group">
        <label for="date" class="col-sm-2 col-form-label">Date d'événement</label>
        <div class="col-sm-10">
            <input
                name="date"
                type="date"
                class="form-control"
                disabled
            />
        </div>
        <div class="invalid-feedback">Veuillez choisissez une événement</div>
    </div>

    <div class="position-relative row form-check p-0">
        <div class="col-sm-10 offset-sm-2">
            <button class="btn btn-primary">Réserver</button>
        </div>
    </div>
</form>
<button type="button" class="open-modal" data-toggle="modal" data-target="#exampleModal2" style="width : 0; height : 0; opacity : 0">
</button>

<script>

    const handleSelectChange = (events) => {
        const date = events.find( event => event.id == document.querySelector('select#evenements').value )?.date || '' 
        document.querySelector('input[type="date"]').value = date;
    }

    document.querySelector("a#reservation-create").classList.add("mm-active")

    checkPeople = () => {
        const girlsValue = document.querySelector('input[name="nbr_gar"]').value
        const boysValue = document.querySelector('input[name="nbr_fille"]').value
        const boys = boysValue && Number(boysValue)
        const girls = girlsValue && Number(girlsValue)

        if ((!boys && !girls) || (boys+girls < 1)){
            document.querySelector(".open-modal")?.click();
            return false
        }

        return true
    }

</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        "use strict";
        window.addEventListener(
            "load",
            function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName("needs-validation");
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(
                    forms,
                    function (form) {
                        form.addEventListener(
                            "submit",
                            function (event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add("was-validated");
                            },
                            false
                        );
                    }
                );
            },
            false
        );
    })();
</script>

@endsection
