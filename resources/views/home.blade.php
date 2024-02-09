<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container py-4">
        <div class="row">
            <div class="col-12 text-center">
                <p class="fw-bold fs-1">{{ $welcome }}</p>
                <p class="text-danger fs-3">{{ $winner }}</p>
            </div>
        </div>
    </div>
</body>

</html>