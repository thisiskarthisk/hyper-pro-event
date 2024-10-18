@extends('layouts.auth.unAuthBase', [
    'title' => 'Dashboard',
])

@include('layouts.components.sidebar')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
@endsection
