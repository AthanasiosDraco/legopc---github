@extends('layouts.admin')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-4">
                <h2>Brands Page</h2>                
            </div>             
            <div class="col-md-4 ml-auto pt-2">
                <button type="button" class="btn btn-dark float-right " data-toggle="modal" data-target="#addNewBrand">
                    <i class="fas fa-plus"></i>  Add New Brand
                </button>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success alert-dismissible col-md-6 col align-self-end">
                <button type="button" class="close btn-xs" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong><i class="icon fas fa-check"></i>Success! </strong>
                {{ session('message') }}
            </div>
        @endif
        @error('name')
            <div class="alert alert-warning alert-dismissible col-md-6 col align-self-end">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong><i class="icon fas fa-exclamation-triangle"></i></strong>Failed! {{ $message }}
            </div>
        @enderror
    </div><!-- /.container-fluid -->   
</section>
<section class="content">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Brands Table</h3>
            </div>            
            <!-- /.card-header -->
            <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th style="">Name</th>
                    <th style="width: 40px">Action</th>                    
                </tr>
                </thead>
                <tbody>
                    @foreach ($brands as $brand)                  
                    <tr>
                        <td>{{ $brand->id }}</td>
                        <td>{{ $brand->name }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" data-toggle="modal" class="btn btn-info rounded" data-target="#editBrand{{ $brand->id }}">                                   
                                <i class="fas fa-edit"></i></a>
                                <a href="/admin/brands/{{ $brand->id }}" class="btn btn-danger rounded">
                                <i class="fas fa-trash"></i></a> 
                                @include('admin.modals.brand.editBrand')
                            </div>                        
                        </td>                        
                    </tr>
                    @endforeach                               
                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
        </div>   
        
        <!-- add new brand collapsed card -->
        <div class="card collapsed-card">
            <div class="card-header border-transparent">
                <h3 class="card-title">Add New Brand</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                    </button>                
                </div>                
            </div>
            <!-- /.card-header -->

            <div class="card-body p-0">
                <form action="/admin/insert-brand" method="POST" >
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Brand Name</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" placeholder="Enter new brand name." name="name">                               
                            </div>
                        </div>                                              
                    </div>
                    <!-- /.card-body -->                    
                    <div class="card-footer">
                        <button type="submit" class="btn bg-gradient-primary">Add Brand</button>
                    </div>                   
                </form>
            </div>            
            <!-- /.card-body -->     
        </div>
        <!-- /.add new brand collapsed card -->        
    </div> <!--/.container-fluid -->
    @include('admin.modals.brand.addBrand')
</section>
@endsection