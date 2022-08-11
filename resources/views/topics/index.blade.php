@extends('layouts.master')
@section('title', 'topics')
@section('content')

		<body class="master-body debug-screens">
				<main class="my-10 flex gap-3">
						<aside class="hidden space-y-5 md:block md:w-3/12 lg:w-2/12">
								<div class="hr space-y-3">
										<h4>categories</h4>
										<ul class="ml-2 space-y-3">
												<li><a href="#">lorem ipsum</a></li>
												<li><a href="#">lorem ipsum</a></li>
												<li><a href="#">lorem ipsum</a></li>
												<li><a href="#">lorem ipsum</a></li>
												<li><a href="#">lorem ipsum</a></li>
										</ul>
								</div>
								<div class="hr space-y-3">
										<h4>top xp</h4>
										<div class="flex items-center gap-2">
												<img src="https://fakeimg.pl/50x50/ff0000/" alt="" class="h-12 w-12 rounded-full">
												<div class="flex flex-col">
														<a href="#" class="text-base">full name</a>
														<p class="text-sm">456 xp</p>
												</div>
										</div>

										<div class="flex items-center gap-2">
												<img src="https://fakeimg.pl/50x50/ff0000/" alt="" class="h-12 w-12 rounded-full">
												<div class="flex flex-col">
														<a href="#" class="text-base">full name</a>
														<p class="text-sm">456 xp</p>
												</div>
										</div>

										<div class="flex items-center gap-2">
												<img src="https://fakeimg.pl/50x50/ff0000/" alt="" class="h-12 w-12 rounded-full">
												<div class="flex flex-col">
														<a href="#" class="text-base">full name</a>
														<p class="text-sm">456 xp</p>
												</div>
										</div>

										<div class="flex items-center gap-2">
												<img src="https://fakeimg.pl/50x50/ff0000/" alt="" class="h-12 w-12 rounded-full">
												<div class="flex flex-col">
														<a href="#" class="text-base">full name</a>
														<p class="text-sm">456 xp</p>
												</div>
										</div>

										<div class="flex items-center gap-2">
												<img src="https://fakeimg.pl/50x50/ff0000/" alt="" class="h-12 w-12 rounded-full">
												<div class="flex flex-col">
														<a href="#" class="text-base">full name</a>
														<p class="text-sm">456 xp</p>
												</div>
										</div>
								</div>
								<div class="hr space-y-3">
										<h4>top tags</h4>
										<span class="tag">lorem</span>
										<span class="tag">lorem</span>
										<span class="tag">lorem</span>
										<span class="tag">lorem</span>
								</div>
								<div class="space-y-3">
										<h4>statistics</h4>
										<ul class="ml-2 space-y-3">
												<li>count topics 54</li>
												<li>count reply 54</li>
												<li>count best 54</li>
												<li>count user 54</li>
										</ul>
								</div>
						</aside>

						<section class="w-full md:w-9/12 lg:w-10/12">
								<h2>discussion room</h2>
								<span>A place where your questions become answers</span>

								<div class="mt-5 grid grid-cols-12 gap-5">
										<div class="col-span-12 xl:col-span-9">
												<form action="#">
														<div class="flex items-center justify-start">
																<input type="text" class="form-control m-0 py-1 rounded-r-none" name="" placeholder="search your topics">
																<button type="submit" class="btn w-[initial] rounded-l-none">s</button>
														</div>
												</form>
										</div>

										<div class="col-span-12 xl:col-span-3">
												<a href="#" class="btn w-[initial]">new topic</a>
										</div>
								</div>

								<section class="my-5 space-y-3">
										<div class="rounded-lg bg-slate-800 p-4 font-medium text-gray-300">

												<div class="flex items-center justify-between">
														<div class="flex items-center gap-2">
																<img src="https://fakeimg.pl/50x50/ff0000/" alt="" class="h-12 w-12 rounded-full">
																<div class="flex flex-col">
																		<a href="#" class="text-base">full name</a>
																		<p class="text-sm">39 minutes ago by admin</p>
																</div>
														</div>

														<div class="flex gap-2">
																<div class="select-none p-3 text-center">
																		<p class="text-sm">answer</p>
																		<p>5</p>
																</div>
																<div class="select-none p-3 text-center">
																		<p class="text-sm">visit</p>
																		<p>5</p>
																</div>
														</div>
												</div>

												<p class="hr">
														<a href="#">
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, voluptatem ?
														</a>
												</p>

												<div class="mt-5 space-x-3">
														<span class="tag">lorem</span>
														<span class="tag">lorem</span>
														<span class="tag">lorem</span>
														<span class="tag">lorem</span>
												</div>

										</div>
								</section>
						</section>
				</main>
		@endsection
