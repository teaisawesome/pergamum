@extends('layouts.productindex')

@section('edit')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="" action="post">
                <div class="form-group">
                    <label for="">Cím:</label>
                    <input class="form-control mb-3" type="text" name="title" value="{{ $book->title }}">
                    <label for="">Szerző:</label>
                    <input class="form-control mb-3" type="text" name="title" value="{{ $book->author }}">
                    <label for="">Leírás:</label>
                    <textarea class="form-control mb-3" name="" cols="10" rows="5">{{ $book->description }}</textarea>
                    <label for="">Kiadó:</label>
                    <input class="form-control mb-3" type="text" name="title" value="{{ $book->publisher }}">
                    <label for="">ISBN:</label>
                    <input class="form-control mb-3" type="text" name="title" value="{{ $book->isbn }}">
                    <label for="">Nyelv:</label>
                    <input class="form-control mb-3" type="text" name="title" value="{{ $book->language }}">
                    <label for="">Kiadási év:</label>
                    <input class="form-control mb-3" type="text" name="title" value="{{ $book->release_year }}">
                    <label for="">Könyv borítója:</label>
                    <input class="form-control mb-3" type="text" name="title" value="{{ $book->image }}">
                    <input class="btn product-edit-btn" type="submit" value="Változtatások mentése">
                </div>
            </form>
        </div>
        
    </div>
@endsection 