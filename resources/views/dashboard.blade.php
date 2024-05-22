<head>
    @vite('resources/css/app.css')
    <title>{{$title}}</title>
</head>

<body>

<div class="px-12 py-12 text-4xl text-center bg-orange-100">Dashboard</div>

<div class="px-12 py-12 text-4xl text-center bg-orange-100">
    @foreach($results as $result)
       <h1>{{$result->name}}</h1>
        <h1>{{$result->phone}}</h1>
    @endforeach
</div>

</body>
