<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <form action="{{ route('search') }}" method="GET">
        <input type="text" name="query" placeholder="Search..." required>
        <button type="submit">Search</button>
    </form>
</body>
</html>
