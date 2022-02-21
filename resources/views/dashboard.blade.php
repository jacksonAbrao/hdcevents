@extends("layouts.main")

@section("title", "Dashboard")

@section("content")

<div class="container">
    <div class="row justify-content-center d-flex">
        <div class="col-md-10 dashboard-title-container">
            <h1>Meus Eventos</h1>
        </div>
        <div class="col-md-10 dashboard-events-container">
            @if(count($events) > 0)
            @else
            <p>Você ainda não tem eventos, <a href="/events/create">criar evento</a></p>
            @endif
        </div>
    </div>


    @endsection
