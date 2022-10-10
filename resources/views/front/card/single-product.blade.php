<div class="row">            
    @foreach ($products as $product)              
        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
            <div class="single-product">
                <div class="product-img">
                    <a href="#">
                        <img class="default-img" src="{{ asset('assets/uploads/products/'.$product->image) }}" alt="#">                                
                    </a>
                    <div class="button-head">
                        <div class="product-action">
                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="fas fa-eye"></i><span>Quick View</span></a>
                            <a title="Wishlist" href="#"><i class="fas fa-heart "></i><span>Add to Wishlist</span></a>
                            <a title="Compare" href="#"><i class="fas fa-arrow-left"></i><span>Add to Compare</span></a>
                        </div>
                        <div class="product-action-2">
                            <a title="Add to cart" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="product-content">
                    <h3><a href="#">{{ $product->name }}</a></h3>
                    <div class="product-price">
                        <span>Php {{ $product->price }}</span>
                    </div>
                </div>
            </div>
        </div>	
    @endforeach
    <div class="row py-4">
        <div class="pagination d-flex justify-content-center">
            {!! $products->links() !!}
        </div>
    </div>          
</div>