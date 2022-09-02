@include('layouts.header')
@section('title', 'Home')

<body class="mx-auto max-w-7xl">
		<nav class="rounded-lg bg-slate-800 p-3 font-medium text-gray-300">
				<div class="flex items-center gap-2">
						<x-app-logo></x-app-logo>
						<span>Laravel User Rating System</span>
				</div>
		</nav>

		<main class="my-24 space-y-16">

				<section class="space-y-8 text-center">
						<h1>Laravel User Rating System</h1>
						<a href="https://github.com/dvlpr1996/laravel-user-rating-system" title="dvlpr1996 github account"
								class="btn mx-auto max-w-max py-2 px-9">
								<i class="fab fa-github text-xl"></i>
								github link
						</a>
				</section>

				<section class="mx-auto max-w-5xl space-y-10 text-center">
						<h2>description</h2>
						<p class="capitalize text-xl leading-9">
							online discussion site is a Laravel User Rating project,
              where user can create conversations or create answer to other topics and get badge based on their xp.
							in this project for Access permissions only use gate just for practicing laravel gates.
						</p>

						<a href="{{ route('topics.index') }}" class="btn mx-auto max-w-max py-3 px-9">
								go to app
						</a>
				</section>

				<section class="space-y-10 text-center">
						<h2>language and tools</h2>
						<div class="flex flex-wrap items-center justify-center gap-3">
								<img src="{{ asset('img/tools/php.jpg') }}" class="tools-img" alt="php" title="php">
								<img src="{{ asset('img/tools/laravel.jpg') }}" class="tools-img" alt="laravel" title="laravel">
								<img src="{{ asset('img/tools/tailwind.png') }}" class="tools-img" alt="tailwind" title="tailwind">
								<img src="{{ asset('img/tools/js.png') }}" class="tools-img" alt="js" title="js">
								<img src="{{ asset('img/tools/css.jpg') }}" class="tools-img" alt="css" title="css">
								<img src="{{ asset('img/tools/html.jpg') }}" class="tools-img" alt="html" title="html5">
						</div>
				</section>
		</main>

		@include('layouts.footer')
