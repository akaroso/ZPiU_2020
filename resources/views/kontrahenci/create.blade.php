@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Dodaj kontrahenta</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('kontrahenci.store') }}">
          @csrf
          <div class="form-group">    
              <label for="nazwa_kontrahenta">nazwa_kontrahenta:</label>
              <input type="text" class="form-control" name="nazwa_kontrahenta"/>
          </div>

          <div class="form-group">
              <label for="nip">nip:</label>
              <input type="text" class="form-control" name="nip"/>
          </div>
                                 
          <button type="submit" class="btn btn-primary-outline">Dodaj kontrahenta</button>
      </form>
  </div>
</div>
</div>
@endsection