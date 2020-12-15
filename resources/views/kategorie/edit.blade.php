@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Edytuj kategorie</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('kategorie.update', $kategoria->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="nazwa_kategoria">Nazwa kategori:</label>
                <input type="text" class="form-control" name="nazwa_kategoria" value={{ $kategoria->nazwa_kategoria}} />
            </div>

              
            <button type="submit" class="btn btn-primary">Zapisz</button>
        </form>
    </div>
</div>
@endsection