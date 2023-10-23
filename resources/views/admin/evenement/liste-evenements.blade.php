@extends('layouts.dashboard.tableau-de-bord') @section('title', 'Liste
événements') @section('content')

<div class="head" style="display: block-flex; align-items: center">
    <h1>Liste évènements</h1>
    <hr />
    <br />
    <div class="text-right">
        <div
            role="group"
            class="btn-group-sm btn-group btn-group-toggle"
            data-toggle="buttons"
        >
            <label
                onclick="toGrid()"
                class="btn btn-outline-primary p-2 btn-transition"
            >
                <input
                    type="radio"
                    name="options"
                    id="option1"
                    autocomplete="off"
                />
                Grid
            </label>
            <label
                onclick="toList()"
                class="btn btn-outline-primary p-2 btn-transition focus active"
            >
                <input
                    type="radio"
                    name="options"
                    id="option2"
                    autocomplete="off"
                />
                List
            </label>
        </div>
    </div>
</div>

<br />
<div
    class="evenements-grid-container flex-wrap"
    style="gap: 1.5rem; display: none"
>
    @foreach ($evenements as $evenement)
    <div
        class="card mt-2"
        style="width: 20rem; transition: opacity 0.5s"
        id="{{ $evenement->id }}"
    >
        <img
            class="card-img-top"
            src="{{ 'storage/imgs/'.$evenement['photo'] }}"
            alt="evenement photo"
            style="max-height: 15rem; object-fit: cover"
        />
        <div class="card-body">
            <h5 class="card-title mb-2 font-weight-bold">
                {{ $evenement["nom"] }}
            </h5>
            <p class="card-text text-muted text-truncate">
                {{ $evenement["description"] }}
            </p>
            <div
                class="actions"
                style="
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                "
            >
                <a href="/evenement" style="opacity : 0; width : 0; height : 0" disabled>Explorer plus</a>
                <div
                    class="action-icon-buttons"
                    style="display: flex; gap: 1rem"
                >
                    <form
                        class="edit-form"
                        action="/evenement/{{ $evenement['id'] }}/modifier"
                        method="GET"
                    >
                        <button
                            type="submit"
                            class="modifier"
                            style="
                                outline: none;
                                border: none;
                                background-color: white;
                                width: 1.2rem;
                                aspect-ratio: 1/1;
                                background-image: url('../storage/assets/svgs/edit.svg');
                                background-size: contain;
                                background-repeat: no-repeat;
                                background-position: center;
                                color: red;
                                cursor: pointer;
                                padding-right: 0.8rem;
                            "
                            data-toggle="tooltip"
                            data-placement="left"
                            title="modifier"
                        ></button>
                    </form>
                    <form
                        class="delete-form"
                        action="/evenement/{{$evenement->id}}"
                        method="POST"
                    >
                        @csrf @method('DELETE')
                        <div
                            onclick="document.querySelector('.delete-form').submit();"
                            class="delete"
                            style="
                                width: 1.2rem;
                                aspect-ratio: 1/1;
                                background-image: url('../storage/assets/svgs/trash.svg');
                                background-size: contain;
                                background-repeat: no-repeat;
                                background-position: center;
                                color: red;
                                cursor: pointer;
                            "
                            data-toggle="tooltip"
                            data-placement="left"
                            title="supprimer"
                        ></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach @if (count($evenements) == 0)
    <h4>Pas d'événements pour le moment</h4>
    @endif
</div>
<div class="evenements-list-container">
    <table class="mb-0 table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Photo</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        @if (count($evenements) == 0)
        <tbody>
            <tr>
                <th scope="row">----</th>
                <td>----</td>
                <td>----</td>
                <td>----</td>
                <td>----</td>
                <td>----</td>
            </tr>
        </tbody>
        @endif @if (count($evenements) != 0)
        <tbody>
            @foreach ($evenements as $evenement)
            <tr>
                <th scope="row">{{ $evenement["id"] }}</th>
                <td>{{ $evenement["nom"] }}</td>
                <td class="text-truncate" style="max-width: 150px">
                    {{ $evenement["photo"] }}
                </td>
                <td>
                    {{ $evenement["date"] }}
                </td>
                <td>{{ $evenement["heure"] }} H</td>
                <td class="text-truncate" style="max-width: 150px">
                    {{ $evenement["description"] }}
                </td>
                <td class="d-flex align-items-center">
                    <form
                        class="edit-form"
                        action="/evenement/{{ $evenement['id'] }}/modifier"
                        method="GET"
                    >
                        <button
                            class="btn"
                            style="color: rgb(194, 194, 194); font-size: 1.2rem"
                            data-toggle="tooltip"
                            data-placement="top"
                            title="modifier"
                        >
                            <i class="fas fa-edit"></i>
                        </button>
                    </form>
                    <!-- <button
                        onclick="document.querySelector('.edit-form').submit()"
                        class="btn"
                        style="color: rgb(194, 194, 194); font-size: 1.2rem"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="modifier"
                    >
                        <i class="fas fa-edit"></i>
                        <form
                            class="edit-form d-none"
                            action="/evenement/{{ $evenement['id'] }}/modifier"
                            method="GET"
                        ></form>
                    </button> -->

                    <form
                        class="delete-form"
                        action="/evenement/{{$evenement->id}}"
                        method="POST"
                    >
                        @csrf @method('DELETE')

                        <button
                            onclick="document.querySelector('.delete-form').submit()"
                            class="btn"
                            style="color: rgb(255, 35, 35); font-size: 1.2rem"
                            data-toggle="tooltip"
                            data-placement="top"
                            title="supprimer"
                        >
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                    <!-- <button
                        onclick="document.querySelector('.delete-form').submit()"
                        class="btn"
                        style="color: rgb(255, 35, 35); font-size: 1.2rem"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="supprimer"
                    >
                        <i class="fas fa-trash"></i>
                        <form
                            class="delete-form d-none"
                            action="/evenement/{{$evenement->id}}"
                            method="POST"
                        >
                            @csrf @method('DELETE')
                        </form>
                    </button> -->
                </td>
            </tr>
            @endforeach
        </tbody>
        @endif
    </table>
</div>

<script>
    document.querySelector("a#evenement-list").classList.add("mm-active");
    const toGrid = () => {
        document.querySelector(".evenements-list-container").style.display =
            "none";
        document.querySelector(".evenements-grid-container").style.display =
            "flex";
    };
    const toList = () => {
        document.querySelector(".evenements-grid-container").style.display =
            "none";
        document.querySelector(".evenements-list-container").style.display =
            "block";
    };
</script>

@endsection
