@extends("layouts.app")
@section("content")
    <div class="container">
        <a href="{{route("CreateCategory")}}" class="btn btn-primary">create product</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">category name</th>


            </tr>
            </thead>
            <tbody>
            @foreach($categors as $c)
                <tr>
                    <th scope="row">{{$c->categorie_title}}</th>


                </tr>
            @endforeach


            </tbody>
        </table>
    </div>

@endsection
