<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$page ?? 'TODO - Genérico'}}</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css" />

</head>
<body>
    <div class="container">
        <div class="sidebar">
            <img src="/assets/images/logo.png"/>
        </div>
        <div class="content">
            <nav>
                {{$btn ?? null}}

            </nav>
            <main>
                {{$slot}}
            </main>
        </div>
    </div>
</body>
</html>
