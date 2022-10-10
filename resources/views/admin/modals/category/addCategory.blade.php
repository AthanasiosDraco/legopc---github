<!-- Add New Modal -->
<div class="modal fade" id="addNewCategory" tabindex="-1" role="dialog" aria-labelledby="addNewCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="addNewCategoryModalLabel">Add New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ url('/admin/insert-category') }}" method="POST" >
        <div class="modal-body">            
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Category Name</label>
                    <div>
                        <input type="text" class="form-control" placeholder="Enter new category name." name="name" autofocus>                           
                    </div>                    
                </div>                                          
            </div>   
        </div>
        <div class="modal-footer">
        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
        <button type="submit" class="btn bg-gradient-primary" >Add Category</button>
        </div>
        </form>
    </div>
    </div>
</div>

