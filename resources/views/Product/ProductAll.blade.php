@extends("layouts.app")
@section("content")
    <div class="container">
        <a href="{{route("CreateProduct")}}" class="btn btn-primary">create product</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">title</th>
                <th scope="col">product description</th>
                <th scope="col">product date</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach($product as $p)
                <tr>
                    <th scope="row">{{$p->product_title}}</th>
                    <td>{{$p->product_description}}</td>
                    <td>{{$p->product_date}}</td>
                    <td>
                        <form action="{{route("DeleteProduct")}}" method="post">
                            <input name="product_id" type="hidden" value="{{$p->product_id}}" />
                            @method('delete')
                            @csrf
                            <input type="submit" value="delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>

@endsection
