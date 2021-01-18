@extends('base')
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
@section('main')

				 

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Cennik</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nazwa</td>
          <td>Cena</td>
          <td>Stawka VAT</td>
          <td>Kategoria</td>
          <td>Producent</td>
          <td>Jednostka miary</td>
          <td>Usługa</td>
          <td colspan = 2>Akcje</td>
        </tr>
    </thead>
    <tbody>
        @foreach($result['products'][1] as $key => $produkt)
        
        <tr>
            <td>{{$produkt->id}}</td>
            <td>{{$produkt->nazwa_produktu}}</td>
            <td>{{$produkt->pivot->cena}}</td>
            <td>{{$produkt->stawka_VAT}}</td>

            @foreach($produkt->kategorias as $kategoria)
            <td>{{$kategoria->nazwa_kategoria}}</td>
            @endforeach

            @foreach($produkt->producents as $producent)
            <td>{{$producent->nazwa_producenta}}</td>
            @endforeach


            <td>{{$produkt->jednostka_miary}}</td>
            <td>
            @if ($produkt->czy_usluga) 
            Tak           
            @else
            Nie
            @endif
            </td>
            <td>
                <a href="{{ route('produkty.edit',$produkt->id)}}" class="btn btn-primary">Edytuj</a>
            </td>
            <td>
                <form action="{{ route('produkty.destroy', $produkt->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Usuń</button>
                </form>
            </td>
        </tr>
        
        @endforeach
    </tbody>
    
  </table>
 
<div>
</div>
@endsection