<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Laravel Primi Passi</title>
</head>
<body>
    {{-- HEADER --}}
    <header class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="{{ route('homepage') }}">Home</a>
                    <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover px-4" href="{{ route('chi_sono') }}">Chi Sono</a>
                    <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="{{ route('progetti') }}">Progetti<a>
                    <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover px-4" href="{{ route('blog') }}">Blog</a>
                    <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="{{ route('contatti') }}">Contatti<a>
                </div>
            </div>
        </div>
    </header>
    {{-- MAIN --}}
    <main>
        <div class="container py-4">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="fw-bold fs-1">Questo è quello che sono:</p>
                    <p class="text-danger fs-3">{{ $nome }} {{ $cognome }}</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>