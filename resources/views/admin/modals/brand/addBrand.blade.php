<!-- Add New Modal -->
<div class="modal fade" id="addNewBrand" tabindex="-1" role="dialog" aria-labelledby="addNewBrandModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="addNewBrandModalLabel">Add New Brand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ url('/admin/insert-brand') }}" method="POST" >
        <div class="modal-body">            
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Brand Name</label>
                    <div>
                        <input type="text" class="form-control" placeholder="Enter new Brand name." name="name" autofocus>                           
                    </div>                    
                </div>                                          
            </div>   
        </div>
        <div class="modal-footer">
        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
        <button type="submit" class="btn bg-gradient-primary" >Add Brand</button>
        </div>
        </form>
    </div>
    </div>
</div>

