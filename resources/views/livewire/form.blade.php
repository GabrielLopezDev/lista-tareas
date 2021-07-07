<div class="form-group mt-2">
	<label>Título</label>
	<input class="form-control" type="text" wire:model="title">
	@error('title')
		<span>{{ $message }}</span>
	@enderror
</div>

<div class="form-group mt-3">
	<label>Descripción</label>
	<textarea class="form-control" wire:model="body"></textarea>
	@error('body')
		<span>{{ $message }}</span>
	@enderror
</div>