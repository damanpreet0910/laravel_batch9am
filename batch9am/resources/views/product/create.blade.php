@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                @if(Session::get('success'))
                    {{ Session::get('success') }}
                @endif
                <p class="text-center display-5">Add Product</p>
                <form method="post" action="{{ route('product.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Category</label>
                        <select name="categoryId" class="form-control" required>
                            <option value="" selected disabled>Select Category</option>
                            @foreach ($category as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->categoryName }}</option>                            
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" name="productName" class="form-control" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection