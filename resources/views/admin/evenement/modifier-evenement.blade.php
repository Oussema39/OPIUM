@extends('layouts.dashboard.tableau-de-bord') @section('title', 'Modifier
evenement') @section('content')

<h1>Modification d'événement</h1>
<hr />
<br /><br />

<form
    autocomplete="off"
    class="needs-validation"
    novalidate
    method="POST"
    action="/evenement/{{ $evenement->id }}"
    enctype="multipart/form-data"
    onsubmit="return checkDate()"
>
    @csrf @method('PUT')
    <div class="position-relative row form-group">
        <label for="nom" class="col-sm-2 col-form-label"
            >Nom de l'événement</label
        >
        <div class="col-sm-10">
            <input
                value="{{$evenement->nom}}"
                name="nom"
                placeholder="e.g Tomorrowland"
                type="text"
                class="form-control"
                required
            />
            <div class="invalid-feedback">Veuillez entrer un valid nom</div>
        </div>
    </div>
    <div class="position-relative row form-group">
        <label for="photo" class="col-sm-2 col-form-label">Photo</label>
        <div class="col-sm-10">
            <input
                name="photo"
                id="exampleFile"
                type="file"
                class="form-control-file"
                accept="image/png, image/gif, image/jpeg"
            />
            <small class="form-text text-muted"
                >Choisissez des photos avec des bonnes qualités</small
            >
        </div>
    </div>
    <div class="position-relative row form-group">
        <label for="date" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
            <input
                name="date"
                type="date"
                class="form-control"
                required
                value="{{$evenement->date}}"
                id="event-date"
            />
            <div class="invalid-feedback">Veuillez entrer un valid date</div>
        </div>
    </div>
    <div class="position-relative row form-group">
        <label for="heure" class="col-sm-2 col-form-label">Heure</label>
        <div class="col-sm-10">
            <input
                name="heure"
                type="time"
                class="form-control"
                required
                value="{{$evenement->heure}}"
            />
            <div class="invalid-feedback">Veuillez entrer un valid heure</div>
        </div>
    </div>

    <div class="position-relative row form-group">
        <label for="description" class="col-sm-2 col-form-label"
            >Description</label
        >
        <div class="col-sm-10">
            <textarea
                name="description"
                class="form-control"
                placeholder="Décrire l'événement de manière attrayante"
                >{{ $evenement->description }}</textarea
            >
        </div>
    </div>

    <div class="position-relative row form-check p-0">
        <div class="col-sm-10 offset-sm-2">
            <button class="btn btn-primary">Soumettre</button>
        </div>
    </div>
</form>

<button type="button" class="open-modal" data-toggle="modal" data-target="#exampleModal" style="width : 0; height : 0; opacity : 0">
</button>

<script>
    checkDate = () => {
        const dateValue = document.querySelector('#event-date').value 
        console.log(dateValue && new Date(dateValue).getTime() >= new Date().getTime())
        if (!dateValue)
            return false
        if(new Date(dateValue).getTime() >= new Date().getTime())
            return true
        else{
            document.querySelector(".open-modal")?.click();
            return false
        }

    }
</script>

<script>
    document.querySelector("a#create").classList.add("mm-active");
    
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
