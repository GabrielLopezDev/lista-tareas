<div class="form-group">
	<label>Título</label>
	<input class="form-control" type="text" wire:model="title">
	@error('title')
		<span>{{ $message }}</span>
	@enderror
</div>

<div class="form-group">
	<label>Contenido</label>
	<textarea class="form-control" wire:model="body"></textarea>
	@error('body')
		<span>{{ $message }}</span>
	@enderror
</div>