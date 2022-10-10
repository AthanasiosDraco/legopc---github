<div class="navbar-nav sticky-top navbar-light bg-light">
    <div class="container-fluid">       
        <ul class="nav nav-pills justify-content-center" role="tablist">
            <li class="nav-item">                
                <select id="category" name="category" class="form-control bg-transparent text-black" style="width: 150px">
                    <option value="">All Category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </li>
            <li class="nav-item">                
                <select id="brand" name="brand" class="form-control bg-transparent text-black">
                    <option value="">All Brands</option>
                    @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </li>  
            <li class="nav-item">
                <button type="button" class="btn btn-light bg-transparent" data-bs-toggle="offcanvas" href="#moreFilter" role="button" aria-controls="moreFilter">
                   More Filter <i class="fas fa-filter"></i></a>
                </button>
            </li>
            <li class="nav-item">                
                <a class="btn btn-light bg-transparent" data-bs-toggle="collapse" href="#search-bar" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-search"></i>
                </a>                					
            </li>                     
        </ul>
    </div>
    <div class="row pb-2">
        <div class="collapse justify-content-center" id="search-bar">
            <input class="form-control form-control-sm" type="text" placeholder="Search" id="search">
        </div>
    </div>
</div>

    
</div>

{{-- Offcanvas --}}
<div class="offcanvas offcanvas-start" tabindex="-1" id="moreFilter" aria-labelledby="moreFilterLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">More Filter</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <fieldset class="form-group">
            <legend class="mt-4">Radio buttons</legend>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
              <label class="form-check-label" for="optionsRadios1">
                Option one is this and that—be sure to include why it's great
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              <label class="form-check-label" for="optionsRadios2">
                Option two can be something else and selecting it will deselect option one
              </label>
            </div>
            <div class="form-check disabled">
              <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
              <label class="form-check-label" for="optionsRadios3">
                Option three is disabled
              </label>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <legend class="mt-4">Checkboxes</legend>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Default checkbox
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
              <label class="form-check-label" for="flexCheckChecked">
                Checked checkbox
              </label>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <legend class="mt-4">Switches</legend>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
              <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
            </div>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
              <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <legend class="mt-4">Ranges</legend>
              <label for="customRange1" class="form-label">Example range</label>
              <input type="range" class="form-range" id="customRange1">
              <label for="disabledRange" class="form-label">Disabled range</label>
              <input type="range" class="form-range" id="disabledRange" disabled="">
              <label for="customRange3" class="form-label">Example range</label>
              <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>