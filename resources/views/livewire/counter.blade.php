<div wire:poll=updateNotif>
	@if ($counter != 0)
		<span class="badge badge-danger badge-counter">{{ $counter >= 3 ? '3+' : $counter }}</span>
	@endif
</div>