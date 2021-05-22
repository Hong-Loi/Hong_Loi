<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <title>Book Library</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>

	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
	 <header id="tg-header" class="tg-header tg-haslayout">
        @include('template.404error')


        </header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Inner Banner Start
		*************************************-->
		<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-innerbannercontent">
							<h1>Authors</h1>
							<ol class="tg-breadcrumb">
								<li><a href="javascript:void(0);">home</a></li>
								<li><a href="javascript:void(0);">Authors</a></li>
								<li class="tg-active">Authors Title</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					Author Detail Start
			*************************************-->
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


                        @foreach($allAuthor as $value)
	                        <div class="tg-authordetail">

								<figure class="tg-authorimg">
								<a href="./authordetail.blade.php?id={{ $value->id }}" ><img class="img-fluid" src="images/author/{{$value->image}}" alt="image description"></a>
								</figure>
								<div class="tg-authorcontentdetail">
									<div class="tg-sectionhead">
									<a href="./authordetail.blade.php?id={{ $value->id }}" >	<h2><span>{{$value->publishedBooks}} Published Books</span>{{$value->nameAuthor}}</h2></a>
										<ul class="tg-socialicons">
											<li class="tg-facebook"><a href="https://www.facebook.com/profile.php?id=100029050020645"><i class="fa fa-facebook"></i></a></li>
											<li class="tg-twitter"><a href="jhttps://www.facebook.com/profile.php?id=100029050020645"><i class="fa fa-twitter"></i></a></li>
											<li class="tg-linkedin"><a href="https://www.facebook.com/thitbo.chao.10/"><i class="fa fa-linkedin"></i></a></li>
											<li class="tg-googleplus"><a href="https://www.facebook.com/hongloi12123"><i class="fa fa-google-plus"></i></a></li>
											<li class="tg-rss"><a href="https://www.facebook.com/hongloi12123"><i class="fa fa-rss"></i></a></li>
										</ul>
									</div>

									<div class="tg-booksfromauthor">
										<div class="tg-sectionhead">
											<h2>Books of {{$value->nameAuthor}}</h2>
										</div>
                                        @php
                                            $arrBook=$bookOfAuthor->where("idAuthor","=",$value->id)->get();
                                        @endphp
                                        	<div class="row">
                                        @foreach($arrBook as $valueBook)



											<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
												<div class="tg-postbook">
													<figure class="tg-featureimg">
														<div class="tg-bookimg">
															<div class="tg-frontcover"><img src="{{url('images/books')}}/{{$valueBook->image}}" alt="image description"></div>
															<div class="tg-backcover"><img src="{{url('images/books')}}/{{$valueBook->image}}" alt="image description"></div>
														</div>
														<a class="tg-btnaddtowishlist" href="javascript:void(0);">
															<i class="icon-heart"></i>
															<span>add to wishlist</span>
														</a>
													</figure>
													<div class="tg-postbookcontent">
														<ul class="tg-bookscategories">
															<li><a href="../public/category_book.blade.php?idCategory={{$valueBook->idCategory}}">{{$category->where("id","=",$valueBook->idCategory)->first()->nameCategory}}</a></li>
														</ul>
														<div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
														<div class="tg-booktitle">
															<h3><a href="./book_detail.blade.php?idBook={{ $valueBook->idBook }}">{{$valueBook->nameBook}}</a></h3>
														</div>

														<span class="tg-bookwriter">By: <a href="./authordetail.blade.php?id={{ $value->id }}">{{$value->nameAuthor}}</a></span>
														<span class="tg-stars"><span></span></span>
														<span class="tg-bookprice">
															<ins>{{$valueBook->price}}.000VND</ins>
															<del>{{$valueBook->slaePrice}}.000VNd</del>
														</span>
														<a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
															<i class="fa fa-shopping-basket"></i>
															<em>Add To Basket</em>
														</a>
													</div>
												</div>
											</div>
                                        @endforeach
										</div>
									</div>
								</div>
							</div>
                        @endforeach

                <span>{{$allAuthor->links('pagination::bootstrap-4')}}</span>


						</div>
					</div>
				</div>
			</div>
			<!--************************************
					Author Detail End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
            <div class="tg-footerarea">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <ul class="tg-clientservices">
                                <li class="tg-devlivery">
                                    <span class="tg-clientserviceicon"><i class="icon-rocket"></i></span>
                                    <div class="tg-titlesubtitle">
                                        <h3>Fast Delivery</h3>
                                        <p>Shipping Worldwide</p>
                                    </div>
                                </li>
                                <li class="tg-discount">
                                    <span class="tg-clientserviceicon"><i class="icon-tag"></i></span>
                                    <div class="tg-titlesubtitle">
                                        <h3>Open Discount</h3>
                                        <p>Offering Open Discount</p>
                                    </div>
                                </li>
                                <li class="tg-quality">
                                    <span class="tg-clientserviceicon"><i class="icon-leaf"></i></span>
                                    <div class="tg-titlesubtitle">
                                        <h3>Eyes On Quality</h3>
                                        <p>Publishing Quality Work</p>
                                    </div>
                                </li>
                                <li class="tg-support">
                                    <span class="tg-clientserviceicon"><i class="icon-heart"></i></span>
                                    <div class="tg-titlesubtitle">
                                        <h3>24/7 Support</h3>
                                        <p>Serving Every Moments</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tg-threecolumns">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="tg-footercol">
                                    <strong class="tg-logo"><a href="index.blade.php"><img src="images/flogo.png"
                                                alt="image description"></a></strong>
                                    <ul class="tg-contactinfo">
                                        <li>
                                            <i class="icon-apartment"></i>
                                            <address>Suit # 07, Rose world Building, Street # 02, AT246T Manchester
                                            </address>
                                        </li>
                                        <li>
                                            <i class="icon-phone-handset"></i>
                                            <span>
                                                <em>0800 12345 - 678 - 89</em>
                                                <em>+4 1234 - 4567 - 67</em>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="icon-clock"></i>
                                            <span>Serving 7 Days A Week From 9am - 5pm</span>
                                        </li>
                                        <li>
                                            <i class="icon-envelope"></i>
                                            <span>
                                                <em><a href="mailto:goblinslay@gmail.com">goblinslay@gmail.com</a></em>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="tg-socialicons">
                                        <li class="tg-facebook"><a href="https://www.facebook.com/thitbo.chao.10/"><i
                                                    class="fa fa-facebook"></i></a></li>

                                        <li class="tg-googleplus"><a href="https://www.facebook.com/thitbo.chao.10/"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                        <li class="tg-rss"><a href="https://www.facebook.com/thitbo.chao.10/"><i class="fa fa-rss"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="tg-footercol tg-widget tg-widgetnavigation">
                                    <div class="tg-widgettitle">
                                        <h3>Shipping And Help Information</h3>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <ul>

                                            <li><a href="../public/contactus.blade.php">Returns</a></li>
                                            <li><a href="../public/contactus.blade.php">Privacy</a></li>

                                            <li><a href="../public/contactus.blade.php">Contact Us</a></li>


                                        </ul>
                                        <ul>

                                            <li><a href="../public/aboutus.blade.php">Meet Our Team</a></li>

                                            <li><a href="../public/aboutus.blade.php">Join Our Team</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="tg-footercol tg-widget tg-widgettopsellingauthors">
                                    <div class="tg-widgettitle">
                                        <h3>Top Selling Authors</h3>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <ul>
                                            @foreach ($top3Author as $key)


                                                <li>
                                                    <figure><a href="./authordetail.blade.php?id={{ $key->id }}">
                                                    <img
                                                                src="images/author/{{$key->image}}"
                                                                alt="image description"></a></figure>
                                                    <div class="tg-authornamebooks">
                                                        <h4><a href="./authordetail.blade.php?id={{ $key->id }}">{{$key->nameAuthor}}</a></h4>
                                                        <p>{{$key->PublishedBooks}} Published Books</p>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tg-newsletter">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <h4>Signup Newsletter!</h4>
                            <h5>đăng kí ngay hôm nay</h5>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <form class="tg-formtheme tg-formnewsletter">
                                <fieldset>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Enter Your Email ID">
                                    <button type="button"><i class="icon-envelope"></i></button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tg-footerbar">
                <a id="tg-btnbacktotop" class="tg-btnbacktotop" href="javascript:void(0);"><i
                        class="icon-chevron-up"></i></a>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <span class="tg-paymenttype"><img src="images/paymenticon.png"
                                    alt="image description"></span>
                            <span class="tg-copyright">2017 All Rights Reserved By &copy; Book Library</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.vide.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/countTo.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/gmap3.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
