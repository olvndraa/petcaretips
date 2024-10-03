<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    
</head>
<body>
    <h1>Search Results for "{{ $query }}"</h1>
    
    @foreach($results as $key => $content)
        @if(!empty($content))
            <h2>{{ ucfirst(str_replace('.blade.php', '', $key)) }}</h2>
            <div>
                <pre>{{ $content }}</pre>
            </div>
        @endif
    @endforeach

    <a href="{{ url('/search') }}">Back to Search</a>
</body>
</html>
