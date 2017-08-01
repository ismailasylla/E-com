@extends('layout.main')


@section('content')

    <!-- ...................................................featured Products................................................... -->

    <div class="row">
        <div class="col-md-12">
            <h3 class="a-size-large a-text-normal" style="margin-left: 630px;" id="futured">Nos&nbsp;Produits</h3>
            <div id="popular-departments-ns_6K3G4J5A06VG80M365RN_2847_" class="a-section a-spacing-none shogun-widget popular-departments aui-desktop">
                <!-- ...................................................featured Products................................................... -->
                <div class="bottom-section">
                    <hr class="a-divider-normal">
                    <div class="seemore">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        @forelse($laptops->chunk(4) as $chunk)
            @foreach($chunk as $laptop)
                <div class="col-md-3">
                    <div class="imageGridRowWrapper" style="margin-left: 30px;">
                        <div class="imageGridRowWrapper-inner">
                            <div class="vertical-warpper">
                                <div class="vertical-warpper-inner">
                                    <div class="quad-packs">
                                        <h4 style="margin-left: 38px;"> {{$laptop->name}} </h4>
                                        <div class="a-row image-row">
                                            <div class="a-column a-span6 leftCol">
                                                <div class="imageWithText">
                                                    <a class="a-link-normal" href="{{route('laptops')}}"><img alt="Accer-Aspire" src="{{url('image', $laptop->image)}}" height="292px" width="292px" id="featured" class="img-responssive"></a>
                                                    <div class="departmentTitle" style="padding: 10px;">
                                                        <p class="list-price text-danger"> Prix:
                                                            <s>300.000 Fcfa</s>
                                                        </p>
                                                        <p class="price"> {{ $laptop->price }}</p>
                                                        <a href="{{route('cart.addItem',$laptop->id)}}" type="button" class="btn btn-success" data-toggle="modal">Ajouter au panier</a>
                                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal-1">Detail Du Produit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        @empty

            <h3> No laptops </h3>

    @endforelse

    <!-- ...................................................featured Products................................................... -->
    </div>



    <!-- Modal -->
    <div>
        <div class="modal fade" id="myModal-1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Détails sur le produit</h4>
                    </div>
                    <div class="modal-body">
                        <a href="">
                            <p>{{$laptop->description}}</p>
                        </a>
                        <h4> {{$laptop->name }} </h4>
                        <div class="a-row image-row">
                            <div class="a-column a-span6 leftCol">
                                <div class="imageWithText">
                                    <a class="a-link-normal" href="{{route('laptops')}}"><img alt="Accer-Aspire" src="{{url('image', $laptop->image)}}" height="292px" width="292px" id="featured" class="img-responsive"></a>
                                    <div class="departmentTitle" style="padding: 10px;">
                                        <p class="list-price text-danger"> Prix:
                                            <s>300.000 Fcfa</s>
                                        </p>
                                        <p class="price">{{$laptop->price}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Ajouter au panier</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermé</button>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection