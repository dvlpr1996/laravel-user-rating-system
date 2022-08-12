@include('layouts.header')
@section('title', 'Home')

<body class="mx-auto max-w-7xl">
		<nav class="rounded-lg bg-slate-800 p-4 font-medium text-gray-300">
				<div class="flex items-center gap-2">
						<img src="{{ url('img/logo.png') }}" alt="logo" class="logo">
						<span class="hidden sm:block">Laravel User Rating System</span>
				</div>
		</nav>

		<main class="my-24 space-y-16">

				<section class="space-y-5 text-center">
						<h1>Laravel User Rating System</h1>
						<a href="https://github.com/dvlpr1996/laravel-user-rating-system" title="dvlpr1996 github account"
								class="btn mx-auto w-1/6 py-2 px-9">
								<i class="ri-github-fill text-xl"></i>
						</a>
				</section>

				<section class="mx-auto max-w-5xl space-y-10 text-center">
						<h2>description</h2>
						<p class="capitalize">
								this laravel project is a Laravel User Rating System (online discussion site). where user can hold conversations in the form of posted messages and they can get badge based on their xp
						</p>

						<a href="{{ route('topics.index') }}"
								class="btn mx-auto w-1/6 py-2 px-9">
								go to app
						</a>
				</section>

				<section class="space-y-10 text-center">
						<h2>language and tools</h2>
						<div class="flex flex-wrap items-center justify-center gap-3">
								<img src="php.jpg" class="tools-img" alt="..." title="php">
								<img src="laravel.jpg" class="tools-img" alt="..." title="laravel">
								<img src="tailwind.png" class="tools-img" alt="..." title="tailwind">
								<img src="js.png" class="tools-img" alt="..." title="js">
								<img src="css.jpg" class="tools-img" alt="..." title="css">
								<img src="html.jpg" class="tools-img" alt="..." title="html5">
						</div>
				</section>
		</main>

		@include('layouts.footer')
