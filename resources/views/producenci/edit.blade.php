@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a producent</h1>

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
        <form method="post" action="{{ route('producenci.update', $producent->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="nazwa_producenta">nazwa producenta:</label>
                <input type="text" class="form-control" name="nazwa_producenta" value={{ $producent->nazwa_producenta}} />
            </div>

              
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection