@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam corporis cupiditate debitis, doloribus impedit
        ipsam laudantium molestiae molestias nam non quo quod rerum sit totam ullam velit veritatis vero voluptas!</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection