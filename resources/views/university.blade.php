@extends('layouts.main')

@section('content')
<a href="/" class="btn btn-primary">Back</a>
<div class="profile-section">
    <h1>University Information</h1>
    <div class="card my-4 mx-auto" style="height: 5rem; width: 18rem;">
        <img src="Mikroskil.png" class="card-img-top" alt="Mikroskil">
        <div class="card-body">
            <h5 class="card-title">Location :</h5>
            <p class="card-text">Kampus A : {{ $kampusA }} <br>
                Kampus B : {{ $kampusB }} <br>
                Kampus C :{{ $kampusC }} <br>
                Telepon: {{ $telepon }}</p>
        </div>
    </div>
</div>
@endsection
