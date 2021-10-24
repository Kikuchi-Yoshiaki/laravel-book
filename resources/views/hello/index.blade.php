<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>いんでっくす</title>
        <style>
            th { background-color: red; padding: 10px; }
            td { background-color: #EEE; padding: 10px; }
        </style>
    </head>
    
    <body>
        <h1>はろ〜/いんでっくす</h1>
        <p>{!! $msg !!}</p>
        
        <ul>
            @foreach ($data as $item)
            <li>{!! $item !!}</li>
            @endforeach
        </ul>
        
        
    </body>
</html>