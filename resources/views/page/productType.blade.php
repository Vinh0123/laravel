@extends('master')

@section('content')

<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="aside-menu">
                        @foreach($type_product as $type)
                            <li><a href="{{ route('loaisanpham', ['id' => $type->id]) }}">{{ $type->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>Sản phẩm</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{ count($product_type) }} sản phẩm thuộc loại này</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach ($product_type as $product)
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="{{ route('chitietsanpham', ['id' => $product->id]) }}">
                                                <img src="/source/image/product/{{$product->image}}" alt="{{ $product->name }}">
                                            </a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{ $product->name }}</p>
                                            <p class="single-item-price">
                                                <span>${{ number_format($product->unit_price, 2) }}</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="#"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{ route('chitietsanpham', ['id' => $product->id]) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Sản phẩm khác</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{ $other_product->count() }} sản phẩm khác</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach ($other_product as $product)
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="{{ route('chitietsanpham', ['id' => $product->id]) }}">
                                                <img src="/source/image/product/{{$product->image}}" alt="{{ $product->name }}">
                                            </a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{ $product->name }}</p>
                                            <p class="single-item-price">
                                                <span>${{ number_format($product->unit_price, 2) }}</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="#"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{ route('chitietsanpham', ['id' => $product->id]) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="space40">&nbsp;</div>
                        
                        <!-- Phân trang -->
                        <div class="row">
                            <div class="col-sm-12">
                                {{ $other_product->appends(request()->query())->links('vendor.pagination.bootstrap-4') }}
                            </div>
                        </div>
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->
        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div>
@endsection
