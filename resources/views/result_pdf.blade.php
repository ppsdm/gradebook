<html>
    <head><title>Report</title></head>
    <body>
        <ol>
            @foreach ($uraianNonBase as $item)
                <li style="font-size: 24px;">{{$item}}</li>
            @endforeach
        </ol>
    </body>
</html>