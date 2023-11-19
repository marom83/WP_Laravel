@extends('layouts.index')
@section('content')
    <h2>Dolgozók listája</h2>

    @if (count($list) === 0)
    <p>Nincs rögzítve egyetlen dolgozó sem.</p>   
    @else
    <table>
        <thead>
            <tr>
                <th>Dolgozó neve</th>
                <th>Dolgozó TAJ száma</th>
                <th>Dolgozó e-mail cím</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td>{{$item->ename}}</td>
                    <td>{{$item->essn}}</td>
                    <td>{{$item->eemail}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
@endsection