<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Welcome</title>
</head>
<body>
<div class="bg-shape"></div>
<div class="bg-shape"></div>

<div class="container" style="text-align: center; padding: 100px;">
    <h1>Welcome</h1>
    <p>The Marketing Campaigns Management Tool</p>
    <a href="{{ route('login') }}" class="btn btn-primary">Login as Admin</a>
    <br><br>
    <a href="http://localhost:8088/campaigns/christmas?country=ES">Try Christmas ES landing</a><br>
    <a href="http://localhost:8088/campaigns/christmas">Try Christmas for all countries landing</a><br>
    <a href="http://localhost:8088/campaigns/black-friday?country=US">Try Black Friday US landing</a><br>
        <a href="http://localhost:8088/campaigns/black-friday">Try not exists Black Friday for all countries landing</a>


</div>

<footer style="position: fixed; bottom: 0; width: 100%; text-align: center; padding: 10px; background-color: #f8f9fa; border-top: 1px solid #dee2e6;">
    &copy; {{ date('Y') }} Marketing Campaigns Management Tool. Ihor Kupenko.
</body>
</html>
