@extends('component.app')

@section('content')
<div class="container mt-5">
    <h3>Hallo, nama saya {{ $nama }}, berusia {{ $umur }} dan saya berasal dari {{ $lokasi }}.</h3>
    <h3>Saya berkuliah di {{ $univ }} dengan prodi {{ $prodi }}.</h3>
</div>
@endsection