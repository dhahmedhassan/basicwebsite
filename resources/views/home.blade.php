@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta cumque perferendis iure officia quidem nostrum minus nemo illo rem harum expedita, rerum saepe ipsa iusto consequatur fugiat accusamus consectetur natus.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar from home view.</p>   
@endsection