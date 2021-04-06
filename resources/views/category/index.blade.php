@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-8">
            @if (Session::has('message'))
              <div class="alert alert-success">
                {{ Session::get('message') }}
              </div>
             @endif
            <div class="card">
                <div class="card-header">{{ __('All Categories') }}

                <div class="card-body">
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if (count($categories)>0)
                      @foreach ($categories as $key=>$category)
                          
                      <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                          <a href="{{ route('category.edit',[$category->id]) }}">
                            <button class="btn btn-outline-success">Edit</button>
                          </a>
                        </td>
                        <td>
        
                          
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $category->id }}">
                                Delete
                              </button>
                            </form>
                        

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  ...
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>

                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                      @else
                      <td>No Category to display</td>
                      @endif
                    </tbody>
                  </table>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

