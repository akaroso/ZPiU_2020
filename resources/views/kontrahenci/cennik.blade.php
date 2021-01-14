@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Aktualizuj kontrahenta</h1>

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
                    <td>{{$kontrahent}}</td>
                    <td>{{$kontrahent}}</td>
                    <td>{{$nip}}</td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>


                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
