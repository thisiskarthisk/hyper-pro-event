@extends('layouts.app', [
    'title' => $title ?? '',
])

@section('mainContent')

    <div class="wrapper">
        <div class="content-page">
            <div class="container">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

@endsection
