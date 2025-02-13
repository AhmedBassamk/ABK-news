@extends('publicSite.master')
@section('content')

	<!-- Breadcrumb -->
	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="index.html" class="breadcrumb-item f1-s-3 cl9">
					{{ __('Home') }}
				</a>

				<a href="blog-list-01.html" class="breadcrumb-item f1-s-3 cl9">
					{{__('news')}}
				</a>

				<span class="breadcrumb-item f1-s-3 cl9">
                    @isset($news_data)
                    {{ $news_data->title }}
                    @endisset    
                    @isset($article_data)
                    {{ $article_data->title }}
                    @endisset    
                </span>
			</div>

			<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
				<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
				<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
					<i class="zmdi zmdi-search"></i>
				</button>
			</div>
		</div>
	</div>

	<!-- Content -->
	<section class="bg0 p-b-140 p-t-10">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-30">
					<div class="p-r-10 p-r-0-sr991">
						<!-- Blog Detail -->
						<div class="p-b-70">
							<a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
                                @isset($news_data)
                                {{ $news_data->getCategory->name }}
                                @endisset
                                @isset($article_data)
                                {{ $article_data->getUser->name }}
                                @endisset
							</a>

							<h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
                                @isset($news_data)
                                {{ $news_data->title }}
                                @endisset
                                @isset($article_data)
                                {{ $article_data->title }}
                                @endisset
                            </h3>

							<div class="flex-wr-s-s p-b-40">
								<span class="f1-s-3 cl8 m-r-15">
									<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        @isset($news_data)
                                        {{ $news_data->created_at->month }}
                                        @endisset
                                        @isset($article_data)
                                        {{ $article_data->created_at->month }}
                                        @endisset
                                    </a>

									<span class="m-rl-3">-</span>

									<span>
                                        @isset($news_data)
                                        {{ $news_data->created_at->day }}
                                        @endisset
                                        @isset($article_data)
                                        {{ $article_data->created_at->day }}
                                        @endisset
									</span>
								</span>

								<span class="f1-s-3 cl8 m-r-15">
                                    @isset($news_data)
                                    {{"views :". $news_data->views_count}}
                                    @endisset
                                    @isset($article_data)
                                    {{"views :". $article_data->views_count}}
                                    @endisset
								</span>

								<a href="#" class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">
									0 Comment
								</a>
							</div>

							<div class="wrap-pic-max-w p-b-30">
                                @isset($news_data)
								<img src="{{ asset('upload/' . $news_data->image) }}" alt="IMG">
                                @endisset
                                @isset($article_data)
								<img src="{{ asset('upload/' . $article_data->image) }}" alt="IMG">
                                @endisset
                            </div>

							<p class="f1-s-11 cl6 p-b-25">
                                @isset($news_data)
								{{ $news_data->description }}
                                @endisset
                                @isset($article_data)
								{{ $article_data->description }}
                                @endisset
							</p>

							<!-- Tag -->
							<div class="flex-s-s p-t-12 p-b-15">
								<span class="f1-s-12 cl5 m-r-8">
									Tags:
								</span>

								<div class="flex-wr-s-s size-w-0">
									<a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
										Streetstyle
									</a>

									<a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
										Crafts
									</a>
								</div>
							</div>

							<!-- Share -->
							<div class="flex-s-s">
								<span class="f1-s-12 cl5 p-t-1 m-r-15">
									Share:
								</span>

								<div class="flex-wr-s-s size-w-0">
									<a href="#" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-facebook-f m-r-7"></i>
										Facebook
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-twitter m-r-7"></i>
										Twitter
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-google borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-google-plus-g m-r-7"></i>
										Google+
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-pinterest-p m-r-7"></i>
										Pinterest
									</a>
								</div>
							</div>
						</div>

						<!-- Leave a comment -->
						<div>
							<h4 class="f1-l-4 cl3 p-b-12">
								Leave a Comment
							</h4>

							<p class="f1-s-13 cl8 p-b-40">
								Your email address will not be published. Required fields are marked *
							</p>

							<form>
								<textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" name="msg" placeholder="Comment..."></textarea>

								<input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="name" placeholder="Name*">

								<input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="email" placeholder="Email*">

								<input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="website" placeholder="Website">

								<button class="size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10">
									{{ __('Post Comment') }}
								</button>
							</form>
						</div>
					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-md-10 col-lg-4 p-b-30">
					<div class="p-l-10 p-rl-0-sr991 p-t-70">
						<!-- Category -->
						<div class="p-b-60">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									{{ __('Category') }}
								</h3>
							</div>

							<ul class="p-t-35">
								@foreach ($categories as $category)
								@foreach ($category->subCategories as $subCategory)
                                <li class="how-bor3 p-rl-4">
									<a href="{{ route('magcategory' , $subCategory->id) }}" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
										{{ $subCategory->name }}
									</a>
								</li>
                                @endforeach
                                @endforeach
							</ul>
						</div>

		
						<!-- Popular Posts -->
						<div class="p-b-30">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
								
                                    @isset($news_data)
                                    {{__('Popular News')}}
                                    @endisset    
                                    @isset($article_data)
                                    {{__('Popular Article')}}
                                    @endisset
								</h3>
							</div>

							<ul class="p-t-35">
                                @isset($news_data)
                                <li class="flex-wr-sb-s p-b-30">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="{{ asset('upload/' . $news_data->image) }}" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
												{{ $news_data->title }}
											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												{{$news_data->getCategory->name}}
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												{{ $news_data->created_at }}
											</span>
										</span>
									</div>
								</li>
                                @endisset 
                                @isset($article_data)
                                <li class="flex-wr-sb-s p-b-30">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="{{ asset('upload/'.$article_data->image) }}" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
												{{ $article_data->title }}
											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												{{$article_data->getUser->name}}
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												{{ $article_data->created_at }}
											</span>
										</span>
									</div>
								</li>
                                @endisset 
							</ul>
						</div>

						<!-- Tag -->
						<div>
							<div class="how2 how2-cl4 flex-s-c m-b-30">
								<h3 class="f1-m-2 cl3 tab01-title">
									Tags
								</h3>
							</div>

							<div class="flex-wr-s-s m-rl--5">
								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Fashion
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Lifestyle
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Denim
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Streetstyle
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Crafts
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Magazine
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									News
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Blogs
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
    @endsection
