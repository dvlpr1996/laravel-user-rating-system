@include('layouts.header')
@section('title', 'Home')

<body class="mx-auto max-w-7xl">
		<nav class="flex items-center justify-between rounded-lg bg-slate-800 p-4 font-medium text-gray-300">
				<div class="flex items-center gap-2">
						<img src="{{ url('img/logo.png') }}" alt="Laravel User Rating System" class="logo">
						<span class="hidden sm:block">Laravel User Rating System</span>
				</div>

				<div class="flex items-center gap-2">
						@guest
								<a href="{{ route('login.create') }}" class="btn">login</a>
								<a href="{{ route('register.create') }}" class="btn">register</a>
						@endguest

						@auth
								<a href="{{ route('profile.show', auth()->user()->slug) }}" class="btn">
										<i class="ri-user-line mr-1 align-baseline"></i>profile
								</a>

								<a href="{{ route('logout') }}" class="btn">
										<i class="ri-logout-circle-line mr-1 align-baseline"></i>logout
								</a>
						@endauth
				</div>
		</nav>

		<main class="my-24 space-y-16">

				<section class="space-y-5 text-center">
						<h1>Laravel User Rating System</h1>
						<a href="https://github.com/dvlpr1996/dvlpr1996" title="dvlpr1996 github account"
								class="btn mx-auto w-1/6 py-2 px-9">
								<i class="ri-github-fill text-xl"></i>
						</a>
				</section>

				<section class="mx-auto max-w-5xl space-y-10 text-center">
						<h2>description</h2>
						<p class="capitalize">
								this laravel project is a Laravel User Rating System (online discussion site). where user can hold conversations in the form of posted messages and they can get badge based on their xp
						</p>
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
