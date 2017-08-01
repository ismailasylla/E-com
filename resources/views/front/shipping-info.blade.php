@extends('layout.main')

@section('content')


    <div class="container" style="width: 510px;">

        <div class="row">


            <div class="small-6 small-centered columns">



                <h3>Shipping Info</h3>


                {!! Form::open(['route'=>'address.store','method'=>'post']) !!}


                <div class="form-group">

                    {!! Form::label('address','Address:') !!}
                    {!! Form::text('address', null, ['class'=>'form-control']) !!}

                </div>


                <div class="form-group">

                    {!! Form::label('city','City:') !!}
                    {!! Form::text('city', null, ['class'=>'form-control']) !!}

                </div>



                <div class="form-group">

                    {!! Form::label('state','State:') !!}
                    {!! Form::text('state', null, ['class'=>'form-control']) !!}

                </div>



                <div class="form-group">

                    {!! Form::label('zip','Zip:') !!}
                    {!! Form::text('zip', null, ['class'=>'form-control']) !!}

                </div>


                <div class="form-group">

                    {!! Form::label('country','Country:') !!}
                    {!! Form::text('country', null, ['class'=>'form-control']) !!}

                </div>


                <div class="form-group">

                    {!! Form::label('phone','Phone:') !!}
                    {!! Form::text('phone', null, ['class'=>'form-control']) !!}

                </div>



                <div class="form-group">

                    {!! Form::submit('Proceed to Payment', ['class'=>'btn btn-primary']) !!}

                </div>


                {!! Form::close() !!}

            </div>





        </div>
    </div>

    @endsection