@extends("layouts.app")
@section("content")
    <div class="container">
        <form action="{{route("CrateProductPost")}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">product title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="title"name="product_title">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">description</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="description"name="product_description">
            </div>


            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
    </div>

@endsection
