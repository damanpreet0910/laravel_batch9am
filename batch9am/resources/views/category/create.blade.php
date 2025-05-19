@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                @if(Session::get('success'))
                    {{ Session::get('success') }}
                @endif
                <form method="post" action="{{ route('category.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="categoryName" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection