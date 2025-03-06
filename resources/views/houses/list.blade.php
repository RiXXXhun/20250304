@extends("houses.layout")

@section("content")

    <h1>HÁZAK LISTA</h1>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cím</th>
                        <th>Szín</th>
                        <th>Tulajdonos</th>
                        <th>Műveletek</th>
                    </tr>
                </thead>
                <tbody>
                    @if(sizeof($houses) > 0)
                        @foreach($houses as $house)
                            <tr>
                                <td> {{ $house->id }} </td>
                                <td> {{ $house->address }} </td>
                                <td> {{ $house->color }} </td>
                                <td> {{ $house->user->name }} </td>
                                <td>
                                    <button class="btn btn-primary">
                                        Módosítás
                                    </button>
                                    <button class="btn btn-danger">
                                        Törlés
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                    <tr>
                        <td colspan="5">
                            <h1 class="text-center">Nem található adat</h1>
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop