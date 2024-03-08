<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{--        @if(Session::has('cv.download'))--}}
    {{--            <meta http-equiv="refresh" content="5; url=javascript:window.open('www.google.com','_blank');">--}}
    {{--            <script type="text/javascript">window.open('{{ 'http://localhost:8000/' . Session::get('cv.download') }}','_blank');</script>--}}
    {{--        @endif--}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Punk Is Not Dead</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Rubik+Mono+One&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        main: '#000000',
                        magenta: '#EE2424',
                    }
                }
            }
        }
    </script>

</head>

<body {{ $attributes->merge(['class' => 'relative']) }}>
@if (session('error'))
    <div id="error-message" class="text-xl text-white text-center py-2 px-4 bg-red-500 w-fit px-4 py-2 rounded-lg shadow-md absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]">{{ session('error') }}</div>
@endif
{{--  MAIN CONTENT GOES HERE  --}}
{{ $slot }}

@stack('scripts')
</body>
</html>
