@extends("layouts.adminLayout")

@section("page-content")
    <div class="equipment-container">
        <div class="equipment">
            <div class="container">
                <h1>Users</h1>
                <table>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>access</th>
                        <th></th>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->access }}</td>
                            <td>
                            </td>
                        </tr>
                    @endforeach
                    </thead>
                </table>
                <!----------------------------------------------------------------------------------------------------------->
                <h1>Orders</h1>
                <table>
                    <thead>
                    <tr>
                        <th>Order id</th>
                        <th>Car</th>
                        <th>Custom car</th>
                        <th>User</th>
                        <th>price</th>
                        <th></th>
                    </tr>

                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection
