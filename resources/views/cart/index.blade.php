@extends('layout.main')

@section('content')

    <div class="row">

        <div class="container" style="padding-top: 17px">


            <h3>Cart Items</h3>


            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>qty</th>
                    <th>size</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cartItems as $cartItem)

                    <tr>

                        <td>{{$cartItem->name}}</td>
                        <td>{{$cartItem->price}}</td>
                        <td width="50px" style= padding:5px>
                            {{$cartItem->qty}}

                            {!! Form::open(['route'=>['cart.update', $cartItem->rowId],'method'=>'PUT']) !!}

                            <input name="qty" type="text" value="{{$cartItem->qty}}" style="width: 40px; " class="form-control">
                            {{--<select name="qty" id="" value="{{$cartItem->qty}}" style="width: 40px; " class="form-control"></select>--}}
                            <input type="submit" class="btn btn-sm btn-info" value="OK" style="margin-top:5px">


                            {!! Form::close() !!}

                        </td>
                        <td>{{$cartItem->options->has('size')?$cartItem->options->size:''}}</td>

                        <td>

                            <form action="{{route('cart.destroy', $cartItem->rowId)}}" method="post">

                                {{csrf_field()}}

                                {{method_field('DELETE')}}
                                <input class="btn btn-danger" type="submit" value="Delete">

                            </form>


                        </td>



                    </tr>

                @endforeach


                <tr>

                    <td></td>
                    <td>
                        <b>

                            Tax: ${{Cart::tax()}}<br>
                            Sub Total : ${{Cart::total()}}<br>
                            Grand Total : </b> ${{Cart::total()}}<br>



                    </td>
                    <td><b>Items: </b>{{Cart::count()}}</td>

                    <td></td>


                </tr>

                </tbody>

            </table>


        </div>


        <hr><button class="btn btn-success" style="padding: 10px; margin-left: 1100px">Checkout</button>





    </div>




    @endsection