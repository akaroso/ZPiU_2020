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
  


    @foreach($kontrahenci as $kontrahent)
    <table class="table table-striped">
<tbody>
        <tr>
            <td>{{$kontrahent->id}}</td>
            <td>{{$kontrahent->nazwa_kontrahenta}}</td>
            <td>{{$kontrahent->nip}}</td>
            <a href="{{ route('cennik.show',$kontrahent->nip)}}" class="btn btn-primary">Edytuj</a>

            @endforeach       
            </tbody>
            </table>
<div>
</div>
@endsection
