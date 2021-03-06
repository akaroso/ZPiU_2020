@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Dodaj produkt</h1>
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
              <label for="first_name">Nazwa produktu:</label>
              <input type="text" class="form-control" name="nazwa_produktu"/>
          </div>

          <div class="form-group">
              <label for="last_name">Cena netto:</label>
              <input type="text" class="form-control" name="cena_netto"/>
          </div>

          <div class="form-group">
              <label for="email">Stawka Vat:</label>
              <input type="text" class="form-control" name="stawka_VAT"/>
          </div>
          <div class="form-group">
              <label for="city">Jednostka Miary</label>
              <input type="text" class="form-control" name="jednostka_miary"/>
          </div>
          <div class="form-group">
              <label for="country">Czy usluga:</label>
              <select class="form-control" name="czy_usluga">
              <option>Select Item</option>
              <option value="1" >
             Tak
        </option>
        <option value="0" >
             Nie
        </option>
        </select>
          </div>
          <div class="form-group">
          <label for="country">Producent:</label>
          <select class="form-control" name="producent">
    <option>Select Item</option>
    @foreach ($producenci as $key => $value)
        <option value="{{ $value->id }}" >
            {{ $value->nazwa_producenta }}
        </option>
    @endforeach
</select>
          </div>

          <div class="form-group">
          <label for="country">Kategoria:</label>
          <select class="form-control" name="kategoria">
    <option>Select Item</option>
    @foreach ($kategorie as $key => $value)
        <option value="{{ $value->id }}" >
            {{ $value->nazwa_kategoria }}
        </option>
    @endforeach
</select>
          </div>

          <button type="submit" class="btn btn-primary">Dodaj produkt</button>
      </form>
  </div>
</div>
</div>
@endsection
