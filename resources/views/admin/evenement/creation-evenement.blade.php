@extends('layouts.dashboard.tableau-de-bord') @section('title', 'Creation
evenement') @section('content')
<!-- <form method="POST" action="/evenement" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right"></label>

            <div class="col-md-6">
                <h1>Ajout d'événement</h1>
            </div>

        </div>
        <div class="form-group row">
            <label for="nom" class="col-md-4 col-form-label text-md-right">Nom de l'événement</label>

            <div class="col-md-6">
                <input placeholder="E.G Hackathon" id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" />

                @error('nom')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="photo" class="col-md-4 col-form-label text-md-right">Photo</label>

            <div class="col-md-6">
                <input id="photo" accept="image/png, image/gif, image/jpeg" type="file" class="@error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" />

                @error('photo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-md-4 col-form-label text-md-right">Date événement</label>

            <div class="col-md-6">
                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" />

                @error('date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="heure" class="col-md-4 col-form-label text-md-right">Heure de l'événement</label>

            <div class="col-md-6">
                <input id="heure" 
                    type="time" 
                    class="form-control @error('heure') is-invalid @enderror"
                    name="heure" value="{{ old('heure') }}"
                />
                @error('heure')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
            <div class="col-md-6">
                <textarea 
                    id="description" 
                    rows="3" 
                    class="form-control @error('description') is-invalid @enderror" 
                    name="description" value="{{ old('description') }}" 
                    ></textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="submit" class="col-md-4 col-form-label text-md-right"></label>

            <div class="col-md-6">
                <input id="submit" type="submit" class="btn btn-primary" value="Soumettre">
            </div>
        </div>
    </form> -->
<h1>Creation d'événement</h1>
<hr />
<br /><br />

<form
    autocomplete="off"
    class="needs-validation"
    novalidate
    method="POST"
    action="/evenement"
    enctype="multipart/form-data"
    onsubmit="return checkDate()"
>
    @csrf
    <div class="position-relative row form-group">
        <label for="nom" class="col-sm-2 col-form-label"
            >Nom de l'événement</label
        >
        <div class="col-sm-10">
            <input
                name="nom"
                placeholder="e.g A.L.A cancert"
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
                required
            />
            <div class="invalid-feedback">Veuillez entrer une photo valide</div>
            <small class="form-text text-muted"
                >Choisissez des photos avec des bonnes qualités</small
            >
        </div>
    </div>
    <div class="position-relative row form-group">
        <label for="date" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
            <input id="event-date" name="date" type="date" class="form-control" required />
            <div class="invalid-feedback">Veuillez entrer un valid date</div>
        </div>
    </div>
    <div class="position-relative row form-group">
        <label for="heure" class="col-sm-2 col-form-label">Heure</label>
        <div class="col-sm-10">
            <input name="heure" type="time" class="form-control" required />
            <div class="invalid-feedback">Veuillez entrer un valid heure</div>
        </div>
    </div>

    <div class="position-relative row form-group">
        <label for="description" class="col-sm-2 col-form-label"
            >Description</label
        >
        <div class="col-sm-10">
            <textarea
                placeholder="Décrire l'événement de manière attrayante"
                name="description"
                class="form-control"
            ></textarea>
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
    document.querySelector("a#evenement-create").classList.add("mm-active");
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
    // console.log(document.querySelector('#event-date').mi)
    // document.querySelector('input[type="date"]').min = "2021-11-1"
    // document.querySelector('input[type="date"]').max = "2023-11-1"
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
