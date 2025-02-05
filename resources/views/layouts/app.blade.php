
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>
            @if (isset($title) && !empty($title))
                {{ $title }} | 
            @endif
            {{ config('app.name', 'ProEvents') }}
        </title>

        @include('layouts.components.styles')
    </head>

    <body class="loading {{ $bodyClass ?? '' }}" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        @yield('mainContent')

        <!-- Scripts -->
        @include('layouts.components.scripts')

        <script src="{{ mix('js/app.js') }}"></script>
    </body>

</html>
