@extends("layouts.app")
@section("content")
    <div class="container">
        <form action="{{route("CreateCategoryPost")}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1"> title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="title"name="categorie_title">

            </div>


            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
    </div>

@endsection
