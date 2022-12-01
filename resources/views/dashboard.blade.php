@extends('base')
@section('title')
RMS | dashboard
@endsection
@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-3 ">
            <div class="list-group">
                <a href="#" data-toggle="tab" class="bg-dark list-group-item list-group-item-action active">Home</a>
                <a href="#" data-toggle="tab" class="bg-dark list-group-item list-group-item-action active">
                    <div class="card bg-dark">
                        <div class="card-header">
                            <p class="">Add Category</p>
                            <div class="card-body">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="cat_name">Category</label>
                                        <input type="text" class="form-control" name="category_name" autocomplete="off" required>
                                        @error('category_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input type="submit" name="submit" class="btn btn-success">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" data-toggle="tab" class="bg-dark list-group-item list-group-item-action active ">Manage Item</a>
                <a href="#" data-toggle="tab" class=" bg-dark list-group-item list-group-item-action active ">Menu Ingredients</a>
              </div>
        </div>
        <div  class="col-lg-8 bg-light border rounded">
         <h4 class="text-light py-2 text-center bg-secondary border rounded ">Admin Dashboard</h4>
         <hr />
        
    </div>
</div>
@endsection
