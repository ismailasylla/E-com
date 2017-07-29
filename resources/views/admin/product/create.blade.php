@extends('admin.layout.admin')


@section('content')


    <h3>Add Products</h3>


    <div class="row" class="title_create_admin">
        {!! Form::open(['route' => 'product.store', 'method' =>'post', 'files'=> true])!!}

                            <div class="form-group">

                                {!! Form::label('name','Name:') !!}
                                {!! Form::text('name', null, ['class'=>'form-control']) !!}

                            </div>


                            <div class="form-group">

                                {!! Form::label('description','Description:') !!}
                                {!! Form::text('description', null, ['class'=>'form-control']) !!}

                            </div>




                            <div class="form-group">

                                {!! Form::label('price','Price:') !!}
                                {!! Form::text('price', null, ['class'=>'form-control']) !!}

                            </div>



                            <div class="form-group">

                                {!! Form::label('category_id','Categories:') !!}
                                {!! Form::select('category_id',[1=>'Laptop','Phone','Mouse','Pc'], null, ['class'=>'form-control','placeholder'=>'Select Category']) !!}

                            </div>



                            <div class="form-group">

                                {!! Form::label('size','Size:') !!}
                                {!! Form::select('size',['size'=> '13 inches','15 inches'], null, ['class'=>'form-control']) !!}

                            </div>


                            <div class="form-group">

                                {!! Form::label('image','Image:') !!}
                                {!! Form::file('image',['class'=>'form-control']) !!}

                            </div>


                            <div class="form-group">

                                {!! Form::submit('Create Product', ['class'=>'btn btn-primary']) !!}

                            </div>


        {!! Form::close() !!}

    </div>



    @endsection