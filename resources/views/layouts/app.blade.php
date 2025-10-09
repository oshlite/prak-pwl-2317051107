<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Laravel App' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* SpongeBob-inspired theme (colors & playful shapes, no copyrighted images) */
        body.spongebob-bg {
            background: radial-gradient(circle at 10% 10%, rgba(255,255,255,0.12) 1px, transparent 1px),
                        radial-gradient(circle at 90% 90%, rgba(255,255,255,0.08) 1px, transparent 1px),
                        linear-gradient(180deg,#aee9ff 0%, #87CEEB 100%);
            background-size: 40px 40px, 60px 60px, auto;
            font-family: 'Comic Sans MS', 'Trebuchet MS', Helvetica, Arial, sans-serif;
            color: #0b2540;
            min-height: 100vh;
        }

        .spongebob-header {
            background: #FFD400; /* Sponge-like yellow */
            color: #003366;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
        }

        .spongebob-footer {
            background: #003366;
            color: #FFD400;
        }

        .table-sb thead tr{
            background: #F7C948; /* warm yellow */
            color: #002a4e;
        }

        .btn-sb {
            background: #004e98; /* nautical blue */
            color: #FFD400;
        }

        .card-sb {
            border-radius: 1rem;
            box-shadow: 0 8px 30px rgba(2,48,71,0.08);
        }
    </style>
</head>
<body class="spongebob-bg">
    @include('layouts.navbar')
    <div class="container mx-auto px-4 py-6">
        @yield('content')
    </div>
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>
