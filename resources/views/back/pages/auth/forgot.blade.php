@extends('back.layouts.auth-layout')

@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Forgot password')

@section('content')
<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <a href="/" class="navbar-brand navbar-brand-autodark">
                <img src="/back/static/logo.svg" width="110" height="32" alt="Logo" class="navbar-brand-image">
            </a>
        </div>
        @livewire('author-forgot-form')
        <div class="text-center text-secondary mt-3">
            Forget it? <a href="{{ route('author.login') }}">Send me back</a> to the sign-in screen.
        </div>
    </div>
</div>
@endsection
