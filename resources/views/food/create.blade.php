@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">{{ __('Add new food') }}</div>

              <div class="card-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" name="description" class="form-control">
                </div>

                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="number" name="name" class="form-control">
                </div>

                <div class="form-group">
                  <label for="name">Category</label>
                  <select name="category" class="form-control">
                    <option value="">Select Category</option>
                    @foreach (App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="text" name="image" class="form-control">
                </div>
                
                <div class="form-group">
                  <button class="btn btn-outline-primary" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
