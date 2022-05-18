@extends('layouts.app')

@section('content')
<style>body {
    background: -webkit-linear-gradient(rgba(246, 247, 249, 0.8), rgba(246, 247, 249, 0.8)), url(https://upload.wikimedia.org/wikipedia/commons/8/8c/K2,_Mount_Godwin_Austen,_Chogori,_Savage_Mountain.jpg) no-repeat center center fixed;
    background:  url(https://travel.mqcdn.com/mapquest/travel/wp-content/uploads/2021/01/berth-of-cruise-ship-scaled.jpg) no-repeat center center fixed;
    background-size: cover;
  }</style>
<main class="py-4">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection
