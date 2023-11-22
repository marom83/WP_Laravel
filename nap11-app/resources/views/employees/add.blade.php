@extends('layouts.index')
@section('content')
    <h2>Dolgozó hozzáadása</h2>
    <form action="{{route('dolgozok.letrehoz')}}" method="POST">
        @csrf
        @method('POST')
        <input type="text" placeholder="Dolgozó neve" name="empName"/><br/>
        <input type="text" placeholder="Dolgozó TAJ száma" name="empSsn"/><br/>
        <input type="email" placeholder="Dolgozó email címe" name="empEmail"/><br/>
        <button type="submit">Mentés</button>
    </form>
@endsection
