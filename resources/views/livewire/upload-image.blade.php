<div>
    <form wire:submit.prevent="submitForm">
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" wire:model="title" class="form-control">
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Content</label>
            <textarea wire:model="content" class="form-control" cols="30" rows="10"></textarea>
            @error('content') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Photo</label>
            <input type="file" wire:model="photo" class="form-control">
            @error('photo') <span class="error">{{ $message }}</span> @enderror
        </div>
        @if ($photo)
            Photo Preview:
            <img src="{{ $photo->temporaryUrl() }}">
        @endif
        <button type="submit" class="btn btn-primary" type="button">
            <span wire:loading wire:target="submitForm" class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
            Submit
        </button>
    </form>
</div>
