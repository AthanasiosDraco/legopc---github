@extends('layouts.admin')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>Categories Page</h2>                
            </div>             
            <div class="col-sm-6 pt-2">
                <button type="button" class="btn btn-dark float-right" data-toggle="modal" data-target="#addNewCategory">
                    <i class="fas fa-plus"></i>  Add New Category
                </button>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success alert-dismissible col-md-6">
                <button type="button" class="close btn-xs" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong><i class="icon fas fa-check"></i>Success! </strong>
                {{ session('message') }}
            </div>
        @endif
        @error('name')
            <div class="alert alert-warning alert-dismissible">
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
            <h3 class="card-title">Categories Table</h3>
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
                    @foreach ($categories as $category)                  
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" data-toggle="modal" class="btn btn-info rounded" data-target="#editcategory{{ $category->id }}">                                   
                                <i class="fas fa-edit"></i></a>
                                <form method="POST" action="/admin/categories/{{ $category->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger rounded"><i class="fas fa-trash"></i></button>                                    
                                </form>
                                @include('admin.modals.category.editCategory')
                            </div>                        
                        </td>                        
                    </tr>
                    @endforeach                               
                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
        </div>   
        
        <!-- add new category collapsed card -->
        <div class="card collapsed-card">
            <div class="card-header border-transparent">
                <h3 class="card-title">Add New Category</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                    </button>                
                </div>
                
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                

                <form action="/admin/insert-category" method="POST" >
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Category Name</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" placeholder="Enter new category name." name="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                              
                    </div>
                    <!-- /.card-body -->
                    
                    <div class="card-footer">
                        <button type="submit" class="btn bg-gradient-primary">Add Category</button>
                    </div>                   
                </form>
            </div>
            
            <!-- /.card-body -->
            <!--
            <div class="card-footer clearfix">
            <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
            </div>
             /.card-footer -->
        </div>
        <!-- /.add new category collapsed card -->
        
    </div> <!--/.container-fluid -->

    @include('admin.modals.category.addCategory')

</section>
@endsection