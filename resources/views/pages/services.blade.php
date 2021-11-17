@extends("layout.app")

@section("content")
    <h1>This is my new {{$title}} stuff</h1>
    <ul>
    @foreach ($services as $service )
    <li>{{$service}}</li>

        
    @endforeach
    </ul>
@endsection
