@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a produkt</h1>
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
      <form method="post" action="{{ route('produkty.store') }}">
          @csrf
          <div class="form-group">    
              <label for="first_name">nazwa_produktu:</label>
              <input type="text" class="form-control" name="nazwa_produktu"/>
          </div>

          <div class="form-group">
              <label for="last_name">cena_netto:</label>
              <input type="text" class="form-control" name="cena_netto"/>
          </div>

          <div class="form-group">
              <label for="email">podatek:</label>
              <input type="text" class="form-control" name="podatek"/>
          </div>
          <div class="form-group">
              <label for="city">opis:</label>
              <input type="text" class="form-control" name="opis"/>
          </div>
          <div class="form-group">
              <label for="country">czy_usluga:</label>
              <input type="text" class="form-control" name="czy_usluga"/>
          </div>                                 
          <button type="submit" class="btn btn-primary-outline">Add produkt</button>
      </form>
  </div>
</div>
</div>
@endsection