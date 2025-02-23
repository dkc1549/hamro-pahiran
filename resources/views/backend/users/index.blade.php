@extends('backend.layouts.main')

@section('title', 'Users')

@section('main-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Users</h4>
        <h1>Users</h1>


        <div class="row">
            <!-- Multiple inputs & addon -->
            <!-- Speech To Text -->
            <div class="col">
                <div class="card mb-4">
                    <h5 class="card-header">Users List</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">S.N</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        @foreach ($users as $user)
                                            
                                        
                                        <td scope="row">{{$loop->iteration}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td scope="row">{{$user->gender}}</td>
                                        <td>{{$user->role}}</td>
                                        <td>
                                            {{$user->contact}}
                                        </td>
                                        <td>
                                            <a name="" id="" class="btn btn-primary" href="{{route('admin.users.edit', $user->id)}}"
                                                role="button">Edit</a>
                                            <form action="{{route('admin.users.destroy', $user->id)}}" method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>

                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
