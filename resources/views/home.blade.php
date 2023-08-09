@extends('layouts.index')
@section('content')
    <h1 class="text-danger">Hello home</h1>

    <div class="d-flex justify-content-center">
        <form action={{ route('tasks.store') }} method="POST" class="w-75">
            @csrf
            <div>
                <label for="title" class="form-label">Title</label>
                <input class="form-control" type="text" name="title" id="title" required>
            </div>
            <div>
                <label for="desc" class="form-label">Description</label>
                <textarea class="form-control" name="desc" id="desc" cols="30" rows="10" required></textarea>
            </div>
            <button class="btn btn-info mt-1" type="submit">Add task</button>
        </form>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Show</th>
                <th scope="col">Update</th>
                <th scope="col">State</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr class={{$task->state === 0 ? "" : "table-success"}}>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->title }}</td>
                    <td>@include('components.show')</td>
                    <td>@include('components.update')</td>
                    <td>
                        @include('components.state')
                    </td>
                    <td>
                        <form action={{route("tasks.destroy" , $task->id)}} method="POST">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger" type="submit">Delete task</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
