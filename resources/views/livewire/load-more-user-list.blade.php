<div>
    <div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $index => $data)
                    <tr>
                        <td>{{ $index +1 }}</td>
                        <td>{{ $data->name}}</td>
                        <td>{{ $data->email}}</td>
                        <td>{{ $data->active == true ? 'Active' : 'Not Active' }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
