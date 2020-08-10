@extends('templates.header')
@extends('templates.footer')

@section('infos')
<div class="container profile-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/profile/modify" method="POST">
                @csrf
                <div class="form-group">
                    <h2>Adataim:</h2>
                    <hr>
                    <span>Vezetéknév: *</span>
                <input class="form-control mb-2" type="text" name="lastname" value="{{Auth::user()->lastname}}">
                    <span>Keresztnév: *</span>
                    <input class="form-control mb-2" type="text" name="firstname" value="{{Auth::user()->firstname}}">
                    <span>E-mail: *</span>
                    <input class="form-control" type="text" name="email" value="{{Auth::user()->email}}">
                    <input class="btn profile-edit-btn" type="submit" value="Változtatások mentése">
                </div>
            </form>
        </div>
    </div>
</div>    
@endsection
