@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-4" style="text-align: center; border: 1px solid black";>
            Nom
        </div>
        <div class="col-xs-4" style="text-align: center; border: 1px solid black";>
            Prénom
        </div>
        <div class="col-xs-4" style="text-align: center; border: 1px solid black";>
            Localité
        </div>
    </div>
    <div class="row">
        @foreach ($users as $user)
        <div class="col-xs-4" style="text-align: center; border: 1px solid black";>
            <p>{{$user-> nom}}</p>
        </div>
        <div class="col-xs-4" style="text-align: center; border: 1px solid black";>
            <p>{{$user-> prenom}}</p>
        </div>
        <div class="col-xs-4" style="text-align: center; border: 1px solid black";>
            <p>{{$user-> localite}}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection
