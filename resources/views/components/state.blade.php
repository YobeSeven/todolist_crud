@if ($task->state === 0)
<form action={{ route('tasks.done', $task->id) }} method="POST">
    @csrf
    @method('PUT')
    {{-- BTN to make the task true --}}
    <button class="btn btn-success" type="submit">Done</button>
</form>
@else
<form action={{ route('tasks.undone', $task->id) }} method="POST">
    @csrf
    @method('PUT')
    {{-- BTN to make the task false --}}
    <button class="btn btn-warning" type="submit">Undone</button>
</form>
@endif