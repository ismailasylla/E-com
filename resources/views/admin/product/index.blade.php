@extends('admin.layout.admin')


@section('content')


    <h3>Products</h3>


    <table class="table">

        @forelse($products as $product)
        <thead>

          <tr>
            <h4>Product Name:{{$product->name}}</h4>
            <h4>Category::{{count($product->category)?$product->category->name:"N/A"}}</h4>


              <form action="{{route('product.destroy',$product->id)}}" method="post">


                  {{csrf_field()}}
                  {{method_field('DELETE')}}

                  <input type="submit" class="btn btn-danger" value="Delete">



              </form>






              @empty


                  <h3> No Products</h3>


          </tr>
        </thead>

        @endforelse

    </table>




@endsection