{{-- @extends('layouts.app')
@section('content')
{{ __('Verify Your Email Address') }}
        @if (session('resent'))
            <div class="bg-red-900" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        @endif
            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }},
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit">{{ __('click here to request another') }}</button>.
        </form>           
@endsection --}}
