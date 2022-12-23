

Ajouter tache:
<form action="{{route('todo.store')}}" method="POST">
    @csrf
    <input type="text" placeholder="task" name="title"></br>
    <button class="btn btn-primary">Ajouter</button>
</form>