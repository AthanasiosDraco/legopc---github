@extends('layouts.front')

@section('title')
	Shop - LegoPC
@endsection

@section('content')
	@include('front.card.filterbar')
    <!-- single-product -->
	<div class="container card border-light" id="products_card">
        <div class="card-header py-3"><h5>Products</h5></div>
        @include('front.card.single-product')         
	</div>
  
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){            
            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                getMoreProducts(page)
                
            });
            
            $('#search').on('keyup', function() {
                $value = $(this).val();
                getMoreProducts(1);
            });

            $("#category").on('change', function(){                
                getMoreProducts();
            });

            $("#brand").on('change', function(){                
                getMoreProducts();
            });
        });

        function getMoreProducts(page) {
           
            var search = $('#search').val();
            var selectedCategory = $('#category option:selected').val();
            var selectedBrand = $('#brand option:selected').val();
            
            
            $.ajax({
                type: "GET",
                data: {
                    'search_query':search,
                    'category': selectedCategory,
                    'brand': selectedBrand
                },
                url: "{{ route('shop.get-more-products') }}" + "?page=" + page,
                success:function(data) {
                    $("#products_card").html(data);
                }
            });
        }
    </script>
        


    {{-- <script>
        $(document).ready(function(){
            $("#category").on('change', function(){
                var category = $(this).val();
                $.ajax({
                    url:"{{ url('/shop') }}",
                    type:"GET",
                    data:{'category': category},
                    success:function(data){
                        var products = data.products;
                        var html = '';
                        if(products.length >0){
                            for(let i = 0; i<products.length; i++){
                                html += '<div class="col-xl-3 col-lg-4 col-md-4 col-12">\
                                            <div class="single-product">\
                                                <div class="product-img">\
                                                    <a href="#">\
                                                        <img class="default-img" src="assets/uploads/products/'+products[i]['image']+'">\
                                                    </a>\
                                                    <div class="button-head">\
                                                        <div class="product-action">\
                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="fas fa-eye"></i><span>Quick View</span></a>\
                                                            <a title="Wishlist" href="#"><i class="fas fa-heart "></i><span>Add to Wishlist</span></a>\
                                                            <a title="Compare" href="#"><i class="fas fa-arrow-left"></i><span>Add to Compare</span></a>\
                                                        </div>\
                                                        <div class="product-action-2">\
                                                            <a title="Add to cart" href="#">Add to cart</a>\
                                                        </div>\
                                                    </div>\
                                                </div>\
                                                <div class="product-content">\
                                                    <h3><a href="#">'+products[i]['name']+'</a></h3>\
                                                    <div class="product-price">\
                                                        <span>Php '+products[i]['price']+' </span>\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>'
                            }
                        } else {
                            html += 'No products found'
                        }

                        $("#products_card").html(html);
                    }
                })
            });
        });
    </script> --}}
@endpush