@extends('layouts.productindex')

@section('create')
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Új könyv felvitele</h1><hr>
        </div>
        <div class="col-md-8">
        <form method="post" action="/products/createbook" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="">Cím:</label>
                    <input class="form-control mb-3" type="text" name="title" required>
                    <label for="">Szerző:</label>
                    <input class="form-control mb-3" type="text" name="author" required>
                    <label for="">Leírás:</label>
                    <textarea class="form-control mb-3" name="description" cols="10" rows="5" required></textarea>
                    <label for="">Téma:</label>
                    <input class="form-control mb-3" type="text" name="theme" required>
                    <label for="">Kiadó:</label>
                    <input class="form-control mb-3" type="text" name="publisher" required>
                    <label for="">ISBN:</label>
                    <input class="form-control mb-3" type="text" name="isbn" required>
                    <label for="">Nyelv:</label>
                    <input class="form-control mb-3" type="text" name="language" required>
                    <label for="">Kiadási év:</label>
                    <input class="form-control mb-3" type="text" name="release_year" required>
                    <label for="">Könyv borítója:</label>
                    <input class="d-block mb-3 create-file-input" type="file" name="image" required>                          
                    <input class="btn product-create-btn" type="submit" value="Mentés">
                </div>
            </form>
        </div>
        
    </div>
@endsection 