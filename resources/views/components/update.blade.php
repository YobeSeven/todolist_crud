<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateTask{{$task->id}}">
    Update Task
</button>

<!-- Modal -->
<div class="modal fade" id="updateTask{{$task->id}}" tabindex="-1" aria-labelledby="updateTask{{$task->id}}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateTask{{$task->id}}Label">Update : {{$task->title}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action={{route("tasks.update" , $task->id)}} method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" value={{ old('title' , $task->title)}} required>
                    </div>
                    <div>
                        <label for="desc">Description</label>
                        <textarea name="desc" id="desc" cols="30" rows="10" required>{{ old('desc' , $task->desc)}}</textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Update task</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
