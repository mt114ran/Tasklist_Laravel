@extends('layouts.app')

@section('content')

    <!--ログイン状態の時-->
    @if (Auth::check())
        {{ Auth::user()->name }}

    <!--ログアウト状態の時-->
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Microposts</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection