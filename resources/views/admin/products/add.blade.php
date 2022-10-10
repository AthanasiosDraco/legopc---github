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
          <div class="card card-primary">
            <div class="card-header bg-info">
              <h3 class="card-title">Add Product</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
            </div>              
            <div class="card-body">
              <form action="{{ url('/admin/insert-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Product Name</label>
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="meta_keywords">Keywords</label>
                  <input type="text" name="meta_keywords" class="form-control @error('meta_keywords') is-invalid @enderror" placeholder="*/processor/cpu" value="{{ old('meta_keywords') }}">
                  <small class="form-text text-muted">
                    * meta keywords like cpu/gpu/ryzen
                  </small>
                  @error('meta_keywords')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>                
              <div class="row">
                <div class="form-group col-md-3">
                  <label for="brand">Brand</label>
                  <select name="brand_id" class="form-control @error('brand_id') is-invalid @enderror">
                    <option selected disabled>Select Brand</option>
                    @foreach ($brands as $brand)
                      <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                  </select>
                  @error('brand')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="category">Category</label>
                    <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                      <option selected disabled>Select Category</option>
                      @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                    @error('category')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>                
                <div class="form-group col-md-3">
                  <label for="price">Price</label>
                  <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
                  @error('price')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group col-md-3">
                  <label for="qty">Quantity</label>
                  <input type="number" name="qty" class="form-control @error('qty') is-invalid @enderror" value="{{ old('qty') }}">
                  @error('qty')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="description">Product Description</label>
                <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                @error('description')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="custom-file">
                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                <input type="file" name='image' class="custom-file-input" id="validatedCustomFile" value="{{ old('file') }}">                     
              </div> 
            

              <div class="col-sm-12 pt-3">                   
                <input type="submit" value="Add Product" class="btn btn-success float-right">
              </div>
              
              </form>
            </div>
            
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      
             

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

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script>
  // Code to show the name of the file uploaded
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
</script>
@endsection