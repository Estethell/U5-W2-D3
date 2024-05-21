@extends('includes.base')
@extends('includes.nav')

@section('title', 'Libreria - Lista di libri')

@section('content')
    <h1>Lista di libri disponibili</h1>
    

    @if ($libri->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Author</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Updated_at</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libri as $libro)
                    <tr>
                        <th scope="row">{{ $libro->id }}</th>
                        <td><a href="{{ route('dettaglio', ['id' => $libro]) }}">{{ $libro->title }}</a></td>
                        <td>{{ $libro->price }}</td>
                        <td>{{ $libro->author }}</td>
                        <td>{{ $libro->created_at }}</td>
                        <td>{{ $libro->updated_at }}</td>
                        <td>
                            <form action="{{ route('delete', ['id' => $libro]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $libri->links() }}
    @else
        <h2>Nessun libro trovato</h2>
    @endif
@endsection