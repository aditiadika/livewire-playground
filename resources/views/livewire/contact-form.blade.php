<div>
	<p>Form with loading, live validation</p>
    <form wire:submit.prevent="submitForm">
		<div>
	        @if (session()->has('message'))
	            <div class="alert alert-success">
	                {{ session('message') }}
	            </div>
	        @endif
	    </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Name</label>
	    <input type="text" wire:model="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		@error('name') <span class="error">{{ $message }}</span> @enderror
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Email</label>
	    <input type="email" wire:model="email" class="form-control" id="email">
	    @error('email') <span class="error">{{ $message }}</span> @enderror
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Phone</label>
	    <input type="number" wire:model="phone" class="form-control" id="phone">
	    @error('phone') <span class="error">{{ $message }}</span> @enderror
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Message</label>
	    <input type="text" wire:model="message" class="form-control" id="message">
	    @error('message') <span class="error">{{ $message }}</span> @enderror
	  </div>
	  	<button type="submit" class="btn btn-primary" type="button">
		  <span wire:loading wire:target="submitForm" class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
		  Submit
		</button>
	</form>
</div>
