@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Edytuj produkt</h1>

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
        <form method="post" action="{{ route('produkty.update', $produkt->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="nazwa_produktu">Nazwa produktu:</label>
                <input type="text" class="form-control" name="nazwa_produktu" value={{ $produkt->nazwa_produktu}} />
            </div>

            <div class="form-group">
                <label for="cena_netto">Cena netto:</label>
                <input type="text" class="form-control" name="cena_netto" value={{ $produkt->cena_netto}} />
            </div>

            <div class="form-group">
                <label for="podatek">Podatek:</label>
                <input type="text" class="form-control" name="podatek" value={{ $produkt->podatek}} />
            </div>
            <div class="form-group">
                <label for="opis">Opis:</label>
                <input type="text" class="form-control" name="opis" value={{ $produkt->opis}} />
            </div>
            <div class="form-group">
                <label for="czy_usluga">Czy usluga:</label>
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
            <button type="submit" class="btn btn-primary">Zapisz</button>
        </form>
    </div>
</div>
@endsection