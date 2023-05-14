@extends('page.layouts.page')
@section('title', 'Sản phẩm mới')
@section('style')
@stop
@section('content')
    <div class="bg0 m-t-23 p-b-140">
        <div class="container">
            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m m-tb-10 m-t-30 m-b-15">
                    <a href="{{ route('page.product') }}">
                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 {{ Request::get('id') == null ? 'how-active1' : '' }}">
                            All Product
                        </button>
                    </a>
                    @if (isset($categories) && count($categories) > 0)
                        @foreach($categories as $key => $category)
                            <a href="{{ route('page.product') }}?id={{ $category->id }}">
                                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 {{ Request::get('id') == $category->id ? 'how-active1' : '' }}" data-filter=".{{ $category->c_slug }}" >
                                    {{ $category->c_name }}
                                </button>
                            </a>
                        @endforeach
                    @endif
                </div>
                <div class="flex-w flex-c-m m-tb-10">
                    <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter show-filter">
                        <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                        <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Lọc giá trị
                    </div>

                    {{--<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">--}}
                    {{--<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>--}}
                    {{--<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>--}}
                    {{--Tìm kiếm--}}
                    {{--</div>--}}
                </div>

                <!-- Search product -->
                <div class="dis-none panel-search w-full p-t-10 p-b-15" style="display: none;">
                    <div class="bor8 dis-flex p-l-15">
                        <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
                    </div>
                </div>
                <!-- Filter -->
                <div class="dis-none panel-filter w-full p-t-10" style="display: none;">
                    <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                        @php $currentUrl = Request::url() @endphp
                        <div class="filter-col1 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Sắp xêp
                            </div>
                            <ul>
                                @foreach($sortBy as $key => $sort)
                                    <li class="p-b-6">
                                        <a href="{{ $currentUrl.'?sort='.$key  }}" class="filter-link stext-106 trans-04">
                                            {{ $sort }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="filter-col1 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Lọc theo giá
                            </div>

                            <ul>
                                @foreach($sortPrice as $key => $price)
                                    <li class="p-b-6">
                                        <a href="{{ $currentUrl.'?sort_price='.$key  }}" class="filter-link stext-106 trans-04">
                                            {{ $price }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row list-product-category">
                @foreach($products as $key => $product)
                    @include('page.common.itemProduct', ['product' => $product])
                @endforeach
            </div>

            @if ($loadMore)
                <div class="flex-c-m flex-w w-full p-t-45">
                    <a href="{{ route('page.product') }}{{ isset($id) ? '?id='.$id : '' }}"
                       numberPage="{{ $numberPage }}"
                       class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04 load-more">
                        Xem thêm
                    </a>
                </div>
            @endif
        </div>
    </div>
@stop
@section('script')
@stop
