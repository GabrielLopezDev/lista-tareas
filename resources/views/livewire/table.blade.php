<h2 class="mt-3">Listado de Tareas</h2>

<table class="table table-light">
	<thead>
		<tr>
			<th>ID</th>
			<th>Título</th>
			<th>Descripción</th>
			<th colspan="2">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		@foreach($tasks as $task)
			<tr>
				<td>{{ $task->id }}</td>
				<td>{{ $task->title }}</td>
				<td>{{ $task->body }}</td>
				<td>
					<button wire:click="edit({{ $task->id }})" class="btn btn-sm btn-primary">
						Editar
					</button>
				</td>
				<td>
					<button wire:click="destroy({{ $task->id }})" class="btn btn-sm btn-danger">
						Eliminar
					</button>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

{{ $tasks->links() }}