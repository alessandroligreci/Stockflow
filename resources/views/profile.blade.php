@extends('layouts.app')

@section('content')
    <head>
    <center>
        <div class="row">
            <div>
                <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                <h2>{{ Auth::user()->name }}</h2>
                <p>{{ Auth::user()->email }}</p>
                <p>Seguiti</p>
                <p>Segue</p>
                <p><a class="btn btn-secondary" href="#" role="button">Follow &raquo;</a></p>
            </div>
        </div>
    </center>

    </head>




@endsection
