@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Aktualizuj kontrahenta</h1>

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
        <form method="post" action="{{ route('kontrahenci.update', $kontrahent->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="nazwa_kontrahenta">nazwa kontrahenta:</label>
                <input type="text" class="form-control" name="nazwa_kontrahenta" value= {{ $kontrahent -> nazwa_kontrahenta }} />
            </div>

            <div class="form-group">
                <label for="nip">nip:</label>
                <input type="text" class="form-control" name="nip" value= {{ $kontrahent->nip }} />
            </div>
           
            <button type="submit" class="btn btn-primary">Aktualizuj</button>
        </form>
    </div>
</div>
@endsection