{{-- @auth --}}
		<nav class="flex items-center justify-between rounded-lg bg-slate-800 p-4 font-medium text-gray-300">
				<div class="space-x-3">
					<a href="{{ route('profile.index') }}" class="hover:text-white">profile</a>
						<a href="{{ route('topics.index') }}" class="hover:text-white">home</a>
				</div>
				<div x-data="dropdown" x-on:click.away="away()" class="relative">
						<button x-on:click="toggle()" class="hover:text-white">
								user name
								<i class="ri-arrow-down-s-fill align-middle"></i>
						</button>
						<div x-show="open" x-transition.duration.500ms
								class="border-1 absolute top-8 right-0 z-20 hidden min-w-[170px] space-y-3 rounded-lg border-slate-600 bg-slate-800 p-2"
								x-bind:class="{ 'hidden': !open }">

								<a href="#" class="m-2 block text-left hover:text-white">
										<i class="ri-user-fill mr-1 align-middle"></i>
										profile
								</a>

								<a href="#" class="m-2 block text-left hover:text-white">
										<i class="ri-lock-fill mr-1 align-middle"></i>
										Lock Screen
								</a>

								<hr>

								<a href="{{ route('logout') }}" class="m-2 block text-left hover:text-white">
										<i class="ri-logout-circle-line mr-1 align-middle"></i>
										Logout
								</a>

						</div>
				</div>
		</nav>
{{-- @endauth --}}
