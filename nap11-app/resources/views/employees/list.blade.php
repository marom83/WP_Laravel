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
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td>{{$item->ename}}</td>
                    <td>{{$item->essn}}</td>
                    <td>{{$item->eemail}}</td>
                    <td><form action="{{route('dolgozok.torol', $item->eid)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Törlés</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
@endsection