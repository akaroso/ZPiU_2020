@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Przypisz cene</h1>
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
      <form method="post" action="{{route('kontrahenci.saveforcustromer')}}">
      @method('PATCH') 
          @csrf
          <div class="form-group">
          <label for="country">Kontrahent:</label>
          <select class="form-control" name="id">
    <option>Select Item</option>
    @foreach ($kontrahenci as $key => $value)
        <option value="{{ $value->id }}" > 
            {{ $value->nazwa_kontrahenta }} 
        </option>
    @endforeach    
</select>
          </div> 

          <div class="form-group">
          <label for="country">Produkt:</label>
          <select class="form-control" name="produkt_id">
    <option>Select Item</option>
    @foreach ($produkty as $key => $value)
        <option value="{{ $value->id }}" > 
            {{ $value->nazwa_produktu}}      ({{$value->cena_netto }}$)
        </option>
    @endforeach    
</select>
          </div> 

          <div class="form-group">
              <label for="country">Cena:</label>
              <input type="text" class="form-control" name="cena"/>
          </div>
                                 
          <button type="submit" class="btn btn-primary">Przypisz cene</button>
      </form>
  </div>
</div>
</div>
@endsection