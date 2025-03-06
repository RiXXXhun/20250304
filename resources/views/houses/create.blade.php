@extends("houses.layout")

@section("content")

    <div class="row">
        <div class="col-4">
            <form action="{{ route('houses.store') }}" method="POST" >
                @csrf

                <div class="form-group">
                    <label for="">Cím</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Szín</label>
                    <input type="text" name="color" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tulajdonos</label>
                    <select name="user_id" id="" class="form-control">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">
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