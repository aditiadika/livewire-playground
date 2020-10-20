<div>
    <div class="container">
        <div class="row">
            <div class="flex">
                <input type="text" class="mb-3" wire:model="search">
                <label class="checkbox-inline">
                    <input type="checkbox" wire:model="active">Active?
                </label>
            </div>

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th><button wire:click="sortBy('name')">Name</button></th>
                        <th><button wire:click="sortBy('email')">Email</button></th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->active == true ? 'Active' : "Not Active" }}</td>
                    </tr>
                    @endforeach
                </tbody />
            </table>
        </div>
    </div>
    {{ $users->links() }}

</div>