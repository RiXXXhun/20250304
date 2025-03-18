@extends("animals.layout")

@section("content")

    <h1>Állatok LISTA</h1>
    <div class="row">
        <div class="col-12">
            <a href="{{ route('animals.createForm') }}" class="btn btn-primary">
                Hozzáadás
            </a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Név</th>
                        <th>Tipus</th>
                        <th>Lábak száma</th>
                        <th>Műveletek</th>
                    </tr>
                </thead>
                <tbody>
                    @if(sizeof($animals) > 0)
                        @foreach($animals as $animal)
                            <tr>
                                <td> {{ $animal->id }} </td>
                                <td> {{ $animal->name }} </td>
                                <td> {{ $animal->type }} </td>
                                <td> {{ $animal->foot_count }} </td>

                                <td class="d-flex" style="gap: 5px;">
                                    <a class="btn btn-warning" href="{{ route('animals.updateForm', ['animal' => $animal->id]) }}">
                                        Módosítás
                                    </a>
                                    <form action="{{ route('animals.delete', ['animal' => $animal->id]) }}" method="POST">
                                        @method("DELETE")
                                        @csrf()
                                        <button class="btn btn-danger" type="submit">
                                            Törlés
                                        </button>
                                    </form>
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