@extends("animals.layout")

@section("content")

    <div class="row">
        <div class="col-4">
                <form action="{{ route('animals.store') }}" method="POST" >
                @csrf
                @if(isset($animal))
                <input type="text" name="id" class="form-control" value="{{ $animal->id }}">
                @endif

                <div class="form-group">
                    <label for="">Név</label>
                    <input type="text" name="name" class="form-control" value="{{ isset($animal) ? $animal->name : '' }}">
                </div>
                <div class="form-group">
                    <label for="">Típus</label>
                    <input type="text" name="type" class="form-control" value="{{ isset($animal) ? $animal->type : '' }}">
                </div>
                <div class="form-group">
                    <label for="">Láb szám</label>
                    <input type="text" name="foot_count" class="form-control" value="{{ isset($animal) ? $animal->foot_count : '' }}">
                </div>
                <button type="submit" class="btn btn-success mt-3" >
                    Létrehozás
                </button>
            </form>
        </div>
    </div>

@stop