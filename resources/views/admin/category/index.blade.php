@extends('admin.layout.admin')



@section('content')


    <div class="navbar">

        <a class="navbar-brand" href="" >Categories => </a>


        <ul class="nav navbar-nav">

           @if(!empty($categories))
               @forelse($categories as $category)

            <li>

                <a href="{{route('category.show',$category->id)}}">{{$category->name}}</a>

            </li>
               @empty
               <li>No Data</li>
               @endforelse
               @endif

        </ul>


        <a class="btn btn-primary" data-toggle="modal" href="#modal-id">Add Category</a>
        <div class="modal fade" id="modal-id">
            <div class="modal-dialog" role="document">

                {!! Form::open(['route' => 'category.store','method'=>'post']) !!}

                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Category</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                            <div class="form-group">

                                    {!! Form::label('name','Name:') !!}
                                    {!! Form::text('name', null, array('class' => 'form-control')) !!}

                            </div>

                    </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                </div>


                {!! Form::close() !!}




            </div>
        </div>

                {{--products section--}}



        @if(!empty($products))
        <section>
            <h3>Products</h3>

            <table class="table">
                <thead>
                  <tr>
                    <th>Products</th>
                  </tr>
                </thead>
                <tbody>

                @forelse($products as $product)
                  <tr>
                    <td>{{$product->name}}</td>

                  </tr>
                  @empty

                  <tr>
                    <td>Mary</td>

                  </tr>
                    @endforelse

                </tbody>
            </table>



        </section>
        @endif


    </div>
    @endsection