@extends('layout.main')

@section('content')

    <div class="row">

        <div class="container" style="margin-top: 17px; padding: 5px" >


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
                            {{--{{$cartItem->qty}}--}}

                            {!! Form::open(['route'=>['cart.update', $cartItem->rowId],'method'=>'PUT']) !!}

                            <input name="qty" type="text" value="{{$cartItem->qty}}" style="width: 40px; margin-top: 3px " class="form-control">
                            {{--<select name="qty" id="" value="{{$cartItem->qty}}" style="width: 40px; " class="form-control"></select>--}}





                        </td>


                        {{--<div>  {!! Form::select(['size'=>['13'=>'13inches', '15'=>'15 inches'], $cartItem->options->has('size') ]) !!}--}}



                        {{--{!! Form::close() !!} </div>--}}


                        {{--<td> <div>{!!  Form::select('size', ['small'=>'small','medium'=>'medium'], $cartItem->options->has('size')?$cartItem->options->size:'' !!}</div></td>--}}




                        <td>

                            {!! Form::select('size', ['13'=>'13 inches','15'=>'15 inches']  , $cartItem->options->has('size')?$cartItem->options->size:'' ,['class'=>'form-control','placeholder'=>'Select size']) !!}

                        </td>

                        <td>

                            <input type="submit" class="btn  btn-info" value="OK" style="float: left; margin-right: 5px" >


                            {!! Form::close() !!}

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
                    <td></td>


                </tr>

                </tbody>

            </table>


        </div>

<td>
    <a href="{{url('/checkout')}}"> <hr><button class="btn btn-success" style=" margin-left: 1140px;margin-top: -220px ">Checkout</button></a>

</td>






    </div>




    @endsection