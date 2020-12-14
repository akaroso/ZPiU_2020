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
    <h1 class="display-3">Kontrahenci</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nazwa kontrahenta</td>
          <td>Nip</td>
        </tr>
    </thead>
    <tbody>
        @foreach($kontrahenci as $kontrahent)
        <tr>
            <td>{{$kontrahent->id}}</td>
            <td>{{$kontrahent->nazwa_kontrahenta}}</td>
            <td>{{$kontrahent->nip}}</td>
            <td>
                <a href="{{ route('kontrahenci.edit',$kontrahent->id)}}" class="btn btn-primary">Edytuj</a>
            </td>
            <td>
                <form action="{{ route('kontrahenci.destroy', $kontrahent->id)}}" method="post">
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