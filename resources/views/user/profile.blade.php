@extends('layout.main')
@section('content')
    <!-- ...................................................featured Products................................................... -->


    <div class="container" style="margin-top: 20px">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                    <img src="/uploads/avatars/{{$user->avatar}}" alt="" style="width:150px; hight:150px;float: left;border-radius: 50%;margin-right: 25px">
                <h2 class="a-size-large a-text-normal"  id="futured"> {{Auth::user()->name}}'s Profile</h2>
                    <form enctype="multipart/form-data" action="/profile" method="POST">
                        <label for="profile">Uptade Profile Image</label>
                        <input type="file" name="avatar">
                        <input type="submit" class="pull-right btn btn-sm btn-primary" style="margin: 5px">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    </form>


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
    </div>
@endsection