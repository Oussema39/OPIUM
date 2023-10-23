@extends('layouts.dashboard.tableau-de-bord') @section('title', 'Liste
réservation') @section('content')

<div class="head" style="display: block-flex; align-items: center">
    <h1 style="text-transform: capitalize">Liste Réservation</h1>
    <hr />
    <br />
</div>

<br />
<!-- @if (count($reservations) == 0)
<h4>Pas de reservation pour le moment</h4>
@endif -->
<div class="reservation-list-container">
    <table class="mb-0 table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom Prenom</th>
                <th>Telephone</th>
                <th>Nbr Fille</th>
                <th>Nbr Garcon</th>
                <th>Date</th>
                <th>Event</th>
                <th>Actions</th>
            </tr>
        </thead>
        @if (count($reservations) == 0)
        <tbody>
            <tr>
                <th scope="row">----</th>
                <td>----</td>
                <td>----</td>
                <td>----</td>
                <td>----</td>
                <td>----</td>
                <td>----</td>
            </tr>
        </tbody>
        @endif @if (count($reservations) != 0)
        <tbody>
            @foreach ($reservations as $reservation)
            <tr>
                <th scope="row">{{ $reservation["id"] }}</th>
                <td>{{ $reservation["nom_prenom"] }}</td>
                <td>
                    {{ $reservation["telephone"] }}
                </td>
                <td>
                    {{ $reservation["nbr_fille"] }}
                </td>
                <td>{{ $reservation["nbr_garcon"] }}</td>
                <td class="text-truncate" style="max-width: 150px">
                    {{ $reservation["date"] }}
                </td>
                <td>
                    {{ $reservation["id_evenement"] }}
                </td>
                <td>
                    <!-- <form
                        class="edit-form"
                        action="/reservation/{{ $reservation['id'] }}/modifier"
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
                    </form> -->

                    <form
                        class="delete-form"
                        action="/reservation/{{$reservation->id}}"
                        method="POST"
                    >
                        @csrf @method('DELETE')
                        <button
                            class="btn"
                            style="color: rgb(255, 35, 35); font-size: 1.2rem"
                            data-toggle="tooltip"
                            data-placement="top"
                            title="supprimer"
                        >
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        @endif
    </table>
</div>

<script>
    document.querySelector("a#reservation-list").classList.add("mm-active");
    // const toGrid = () => {
    //     document.querySelector(".reservations-list-container").style.display =
    //         "none";
    //     document.querySelector(".reservations-grid-container").style.display =
    //         "flex";
    // };
    // const toList = () => {
    //     document.querySelector(".reservations-grid-container").style.display =
    //         "none";
    //     document.querySelector(".reservations-list-container").style.display =
    //         "block";
    // };
</script>

@endsection
