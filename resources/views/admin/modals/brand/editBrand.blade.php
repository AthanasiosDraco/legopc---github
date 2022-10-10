<!-- Edit Modal -->
<form action="/admin/brands/{{ $brand->id }}" method="post"> 
    @csrf
    @method('PUT')
    <div class="modal fade" id="editBrand{{ $brand->id }}" tabindex="-1" role="dialog" aria-labelledby="editbrandModalLabel" aria-hidden="true">    
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editbrandModalLabel">Edit brand details.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                   
                </div>                 
                <div class="modal-body">  
                    <div class="card-body">
                        <div class="form-group">
                            <label>brand Name</label>
                            <div>
                                <input type="text" class="form-control" name="name" value="{{ $brand->name }}">                
                            </div>
                        </div>                                          
                    </div> 
                </div>
                <div class="modal-footer">
                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                <button type="submit" class="btn btn-primary"> <i class="fas fa-save"></i> Save changes</button>
                
                </div>
            </div>
        </div>
    </div>
</form>
