@extends('layouts.main')
 
@section('content')
    <a href="/" class="btn btn-primary">Back</a>
     <iv clss="profile-section">
        <h1>Profile</h1>
        <div class="card my-4 mx-auto" style="height: 5rem; width: 16rem;">
            <img src="Deni.jpg" class="card-img-top" alt={{ $nama }}>
            <div class="card-body">
                <h5 class="card-title">Personal Info :</h5>
               <p class="card-text">Nama : {{ $nama }} <br>
                    Domisili : {{ $domisili }} <br>
                    Jurusan :{{ $jurusan }} <br>
                   Kelas: {{ $kelas }}</p>
                <a href="/university" class="btn btn-primary">Informasi Universitas</a>
            </div>
        </div>

    </div>
    @endsection
    