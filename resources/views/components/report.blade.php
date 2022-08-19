<div class="space-x-3" x-data="modal" @keydown.escape="close()">
	<a href="#" x-on:click="toggle()">report</a>

	<div class="modal-wrapper" x-show="showModal" style="display: none;">
			<div class="modal-content hidden" x-on:click.away="close()" x-bind:class="{ 'hidden': !showModal }"
					x-bind="transition">
					<div class="hr flex justify-between text-center">
							<h3 class="text-left">report</h3>
							<span class="cursor-pointer" x-on:click="close()">X</span>
					</div>
					<div>
							<form action="{{ route('reports.create') }}">
									@csrf
									<div class="space-y-5">
											<div>
													<input type="radio" name="report[]" id="1" value="spam">
													<label for="1" class="ml-1">it`s spam</label>
											</div>
											<div>
													<input type="radio" name="report[]" id="1" value="hate-speech">
													<label for="1" class="ml-1">hate speech</label>
											</div>
											<div>
													<input type="radio" name="report[]" id="1" value="false-information">
													<label for="1" class="ml-1">false information</label>
											</div>
											<div>
													<input type="radio" name="report[]" id="1" value="violence">
													<label for="1" class="ml-1">violence</label>
											</div>
									</div>
							</form>
					</div>
			</div>
	</div>


</div>