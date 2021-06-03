<div wire:poll=updateNotif>
	@forelse ($notifikasi as $notif)
		@php
			$saran = App\Models\Saran::find($notif->data['id_saran']);
		@endphp
		<a class="dropdown-item d-flex align-items-center" href="{{ Route('saran.index') }}">
			<div class="mr-3">
				<img src="https://ui-avatars.com/api/?background=random&bold=true&size=60&name={{ $saran->nama }}" class="rounded-circle float-left" width="40px">
			</div>
			<div>
				<div class="small text-gray-500">
					{{ Carbon\Carbon::parse($saran->created_at)->diffForHumans() }}
				</div>
				{{-- <span class="font-weight-bold">{{ Str::limit($saran->saran, 50) }}</span> --}}
				<span class=""><b class="text-info">{{ $saran->nama }}</b> memberikan saran pada <b>{{ $saran->wisata->nama_wisata }}</b></span>
			</div>
		</a>
	@empty
		<p class="text-center my-5">Belum ada notifikasi</p>
	@endforelse
	@if ( $counter >= 3 )
		<a class="dropdown-item text-center small text-gray-700" href="{{ Route('saran.index') }}">
			Tampilkan Semua ({{ $counter }})
		</a>
	@endif
</div>