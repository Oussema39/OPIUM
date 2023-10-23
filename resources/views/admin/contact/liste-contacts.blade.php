@extends('layouts.dashboard.tableau-de-bord') @section('title', 'Liste
contact') @section('content')

<div class="head" style="display: block-flex; align-items: center">
    <h1 style="text-transform: capitalize">Liste Contact</h1>
    <hr />
    <br />
</div>

<br />
<!-- @if (count($contacts) == 0)
<h4>Pas de contact pour le moment</h4>
@endif -->
<div class="contact-list-container">
    <table class="mb-0 table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        @if (count($contacts) == 0)
        <tbody>
            <tr>
                <th scope="row">----</th>
                <td>----</td>
                <td>----</td>
                <td>----</td>
            </tr>
        </tbody>
        @endif @if (count($contacts) != 0)
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <th scope="row">{{ $contact["id"] }}</th>
                <td>{{ $contact["nom"] }}</td>
                <td>
                    {{ $contact["email"] }}
                </td>
                <td class="text-truncate" 
                    style="max-width: 400px; cursor : pointer" 
                    onclick="this.classList.toggle('text-truncate')"  
                    data-toggle="tooltip"
                    data-placement="top"
                    title="click to expand or shrink">
                    {{ $contact["message"] }}
                </td>
                <td>
                    <form
                        class="delete-form"
                        action="/contact/{{$contact->id}}"
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
    document.querySelector("a#contact-list").classList.add("mm-active");
</script>

@endsection
