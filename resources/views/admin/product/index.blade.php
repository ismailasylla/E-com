@extends('admin.layout.admin')


@section('content')


    <h3>Products</h3>


    <table class="table">

        @forelse($products as $product)
        <thead>
          <tr>
            <th>Product Name:{{$product->name}}</th>

              @empty


                  <h3> No Products</h3>


          </tr>
        </thead>

        @endforelse

        {{--<tbody>--}}
          {{--<tr>--}}
            {{--<td>John</td>--}}
            {{--<td>Doe</td>--}}
            {{--<td>john@example.com</td>--}}
          {{--</tr>--}}
          {{--<tr>--}}
            {{--<td>Mary</td>--}}
            {{--<td>Moe</td>--}}
            {{--<td>mary@example.com</td>--}}
          {{--</tr>--}}
          {{--<tr>--}}
            {{--<td>July</td>--}}
            {{--<td>Dooley</td>--}}
            {{--<td>july@example.com</td>--}}
          {{--</tr>--}}
        {{--</tbody>--}}
    </table>




@endsection