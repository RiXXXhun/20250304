@extends("houses.layout")

@section("content")

    <div class="row">
        <div class="col-4">
            @if(isset($house))
                <form action="{{ route('houses.update', ['house' => $house->id]) }}" method="POST" >
            @else
                <form action="{{ route('houses.store') }}" method="POST" >
            @endif     
                @csrf

                <div class="form-group">
                    <label for="">Cím</label>
                    <input type="text" name="address" class="form-control" value="{{ isset($house) ? $house->address : '' }}">
                </div>
                <div class="form-group">
                    <label for="">Szín</label>
                    <input type="text" name="color" class="form-control" value="{{ isset($house) ? $house->color : '' }}">
                </div>
                <div class="form-group">
                    <label for="">Tulajdonos</label>
                    <select name="user_id" id="" class="form-control">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" @if(isset($house) && $house->user_id == $user->id) selected @endif>
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-success mt-3" >
                    Létrehozás
                </button>
            </form>
        </div>
    </div>

@stop