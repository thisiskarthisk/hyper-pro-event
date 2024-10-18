@extends('layouts.app', [
    'title' => $title ?? '',
    'bodyClass' => 'authentication-bg',
])

@section('mainContent')

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

@endsection
