@extends('layouts._layout1')
@section('content')
    <div class="container product_section_container">
        <div class="row">
            <div class="col product_section clearfix">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's</a></li>
                    </ul>
                </div>

                <!-- Sidebar -->

                <div class="sidebar">
                    <div class="sidebar_section">
                        <div class="sidebar_title">
                            <h5>Product Category</h5>
                        </div>
                        <ul class="sidebar_categories">
                            <li><a href="#">Men</a></li>
                            <li class="active"><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Women</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">New Arrivals</a></li>
                            <li><a href="#">Collection</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Main Content -->

                <div class="main_content">

                    <!-- Products -->

                    <div class="products_iso">
                        <div class="row">
                            <div class="col">

                                <!-- Product Sorting -->

                                <div class="product_sorting_container product_sorting_container_top">
                                    <ul class="product_sorting">
                                        <li>
                                            <span class="type_sorting_text">Default Sorting</span>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="sorting_type">
                                                <li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default Sorting</span></li>
                                                <li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                                                <li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Product Name</span></li>
                                            </ul>
                                        </li>

                                    </ul>
                                    <div class="pages d-flex flex-row align-items-center">
                                        <div class="page_current">
                                            <span>1</span>
                                            <ul class="page_selection">
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                            </ul>
                                        </div>
                                        <div class="page_total"><span>of</span> 3</div>
                                        <div id="next_page" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                                    </div>

                                </div>
                                <hr>
                                <hr>

                                <div class="container">
                                    <div class="row">

                                        <div class="col-3 ">
                                            <div class="card mb-4 text-center">
                                                <div class="card-header text-center">Audi</div>

                                                <div class="card-body">
                                                    <img src="http://testshop/image/asus_vivo_max.png" alt=""
                                                         class="card-img-top max-h">
                                                    <ul class="list-unstyled">
                                                        <li><b>Категория</b></li>
                                                        <li>Количество страниц</li>
                                                        <li>2</li>
                                                        <li>Издательство</li>
                                                    </ul>
                                                    <hr>
                                                    <h3>$ 6000.00</h3>
                                                </div>
                                                <div class="footer">
                                                    <a href="#" class="btn btn-block btn-primary">Купить</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 ">
                                            <div class="card mb-4 text-center">
                                                <div class="card-header text-center">Yuriy</div>

                                                <div class="card-body">
                                                    <img src="http://testshop/image/samsung_galaxy_tab.png" alt=""
                                                         class="card-img-top max-h">
                                                    <ul class="list-unstyled">
                                                        <li><b>Категория</b></li>
                                                        <li>Количество страниц</li>
                                                        <li>1909</li>
                                                        <li>Издательство</li>
                                                    </ul>
                                                    <hr>
                                                    <h3>$ 6000.00</h3>
                                                </div>
                                                <div class="footer">
                                                    <a href="#" class="btn btn-block btn-primary">Купить</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 ">
                                            <div class="card mb-4 text-center">
                                                <div class="card-header text-center">Yuriy</div>

                                                <div class="card-body">
                                                    <img src="http://testshop/image/samsung_galaxy_tab.png" alt=""
                                                         class="card-img-top max-h">
                                                    <ul class="list-unstyled">
                                                        <li><b>Категория</b></li>
                                                        <li>Количество страниц</li>
                                                        <li>1909</li>
                                                        <li>Издательство</li>
                                                    </ul>
                                                    <hr>
                                                    <h3>$ 6000.00</h3>
                                                </div>
                                                <div class="footer">
                                                    <a href="#" class="btn btn-block btn-primary">Купить</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 ">
                                            <div class="card mb-4 text-center">
                                                <div class="card-header text-center">Yuriy</div>

                                                <div class="card-body">
                                                    <img src="http://testshop/image/samsung_galaxy_tab.png" alt=""
                                                         class="card-img-top max-h">
                                                    <ul class="list-unstyled">
                                                        <li><b>Категория</b></li>
                                                        <li>Количество страниц</li>
                                                        <li>1909</li>
                                                        <li>Издательство</li>
                                                    </ul>
                                                    <hr>
                                                    <h3>$ 6000.00</h3>
                                                </div>
                                                <div class="footer">
                                                    <a href="#" class="btn btn-block btn-primary">Купить</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 ">
                                            <div class="card mb-4 text-center">
                                                <div class="card-header text-center">Yuriy</div>

                                                <div class="card-body">
                                                    <img src="http://testshop/image/samsung_galaxy_tab.png" alt=""
                                                         class="card-img-top max-h">
                                                    <ul class="list-unstyled">
                                                        <li><b>Категория</b></li>
                                                        <li>Количество страниц</li>
                                                        <li>1909</li>
                                                        <li>Издательство</li>
                                                    </ul>
                                                    <hr>
                                                    <h3>$ 6000.00</h3>
                                                </div>
                                                <div class="footer">
                                                    <a href="#" class="btn btn-block btn-primary">Купить</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 ">
                                            <div class="card mb-4 text-center">
                                                <div class="card-header text-center">Yuriy</div>

                                                <div class="card-body">
                                                    <img src="http://testshop/image/samsung_galaxy_tab.png" alt=""
                                                         class="card-img-top max-h">
                                                    <ul class="list-unstyled">
                                                        <li><b>Категория</b></li>
                                                        <li>Количество страниц</li>
                                                        <li>1909</li>
                                                        <li>Издательство</li>
                                                    </ul>
                                                    <hr>
                                                    <h3>$ 6000.00</h3>
                                                </div>
                                                <div class="footer">
                                                    <a href="#" class="btn btn-block btn-primary">Купить</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 ">
                                            <div class="card mb-4 text-center">
                                                <div class="card-header text-center">Yuriy</div>

                                                <div class="card-body">
                                                    <img src="http://testshop/image/samsung_galaxy_tab.png" alt=""
                                                         class="card-img-top max-h">
                                                    <ul class="list-unstyled">
                                                        <li><b>Категория</b></li>
                                                        <li>Количество страниц</li>
                                                        <li>1909</li>
                                                        <li>Издательство</li>
                                                    </ul>
                                                    <hr>
                                                    <h3>$ 6000.00</h3>
                                                </div>
                                                <div class="footer">
                                                    <a href="#" class="btn btn-block btn-primary">Купить</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>



                                <!-- Product Sorting -->

                                <div class="product_sorting_container product_sorting_container_bottom clearfix">

                                    <div class="pages d-flex flex-row align-items-center">
                                        <div class="page_current">
                                            <span>1</span>
                                            <ul class="page_selection">
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                            </ul>
                                        </div>
                                        <div class="page_total"><span>of</span> 3</div>
                                        <div id="next_page_1" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
