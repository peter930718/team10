<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <style>

        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-buttons {
            display: flex;
            gap: 15px;
        }

        .nav-buttons .dropdown {
            position: relative;
        }

        .nav-buttons button {
            background-color: #444;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
        }

        .nav-buttons button:hover {
            background-color: #555;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            z-index: 1;
            margin-top: 5px;
            min-width: 150px;
            border-radius: 4px;
            overflow: hidden;
        }

        .dropdown-content a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: black;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>



</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endif
        </div>
    @endif

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <img src={{ URL::asset('images/sdg14_banner.png') }} width="100%"/>
        </div>
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-2 md:grid-cols-1">
                <div class="p-6">
                    @include('header')
                </div>
                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                    @yield('sdg_theme')
                </div>
                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                    @yield('sdg_contents')
                </div>
            </div>
        </div>

        @include('footer')
    </div>
</div>
</body>
</html>
