<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PDF</title>

</head>
<body>
<h1>{!! $report->title !!}</h1>

@if(!$report->getMedia('images/')->isEmpty())
    @foreach($report->getMedia('images/') as $key => $image)
        <img src="{!! $image->getFullUrl() !!}">
        <p>{!! $comments[$key] !!}</p>
    @endforeach

@endif
</body>
</html>
