@extends('layouts.admin')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        
        @if (session('message'))
            <div class="alert alert-success alert-dismissible col-md-6 col align-self-end">
                <button type="button" class="close btn-xs" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong><i class="icon fas fa-check"></i>Success! </strong>
                {{ session('message') }}
            </div>
        @endif
        
    </div><!-- /.container-fluid -->   
</section>
<section class="content">
     <div class="container-fluid">
      
        <div class="col-md-12">
          <div class="card table-responsive">
            <div class="card-header">
              <h3 class="card-title">Products Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Category</th>
                    <th style="width: 10%">Image</th>
                    <th>Price</th>
                    <th style="width: 10px">Qty</th>
                    <th style="height: 10px">Description</th>
                    <th>Keywords</th>                  
                    <th style="width: 20px">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($products as $product)                    
                    <tr>
                      <td>{{ $product->id }}</td>
                      <td>{{ $product->name }}</td>
                      <td>{{ $product->brand->name }}</td>                      
                      <td>{{ $product->category->name }}</td>
                      <td>
                        <img src="{{ asset('assets/uploads/products/'.$product->image) }}" class="img-thumbnail" alt="">
                     
                      </td>
                      <td>{{ $product->price }}</td>
                      <td>{{ $product->qty }}</td>
                      <td>{{ $product->description }}</td>
                      <td>{{ $product->meta_keywords }}</td>
                      <td>
                        <div class="btn-group">
                          <a href="/admin/products/{{ $product->id }}/edit" class="btn btn-info rounded">                                   
                          <i class="fas fa-edit"></i></a>
                          <a href="/admin/products/{{ $product->id }}" class="btn btn-danger rounded">
                          <i class="fas fa-trash"></i></a>                         
                      </div>  
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              
            </div>
          </div>
          <!-- /.card -->            
        </div>
          <!-- /.col -->         

    </div> <!--/.container-fluid -->
    
</section>
<script>
  // Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
  </script>
@endsection