<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parameter</title>
</head>
<body>
    {{-- <h2>This my data {{ $data }}</h2>
    <h2>This my data {{ $data2 }}</h2> --}}

{{-- <h2>This my data {{ $name }}</h2>
    <h2>This my data {{ $email }}</h2> --}}

{{-- 
<h2>This my data {{ $obj->name }}</h2>
    <h2>This my data {{ $obj->email }}</h2> --}}

    @foreach ($data as $item)
        <p>{{ $item }}</p>
        @if ($item=='ali')
            <p>Welcome Ali</p>
        @endif
    @endforeach

    @forelse ($data1 as $item )
    <p>{{ $item }}</p>
    @empty
        <p>No item</p>
    @endforelse

</body>
</html>