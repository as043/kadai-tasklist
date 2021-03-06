@extends('layouts.app')

@section('content')

    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Top Page</h1>
            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    @endif
    </div>
@endsection