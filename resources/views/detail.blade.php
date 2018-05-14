@extends('layouts.app')

@section('content')
    
<p>{{ Auth::user()->email }}</p>
@endsection
