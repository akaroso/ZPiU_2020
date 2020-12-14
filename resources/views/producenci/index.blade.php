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
    <h1 class="display-3">Producenci</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nazwa producenta</td>
          <td colspan = 2>Akcje</td>
        </tr>
    </thead>
    <tbody>
        @foreach($producenci as $producent)
        <tr>
            <td>{{$producent->id}}</td>
            <td>{{$producent->nazwa_producenta}}</td>
            <td>
                <a href="{{ route('producenci.edit',$producent->id)}}" class="btn btn-primary">Edytuj</a>
            </td>
            <td>
                <form action="{{ route('producenci.destroy', $producent->id)}}" method="post">
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