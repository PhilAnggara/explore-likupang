<div>
	<li class="nav-item dropdown no-arrow mx-1">
		<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-bell fa-fw"></i>
			<!-- Counter - Alerts -->
			@if ($counter != 0)
				<span class="badge badge-danger badge-counter">{{ $counter >= 3 ? '3+' : $counter }}</span>
			@endif
		</a>
		<!-- Dropdown - Alerts -->
		<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
			<h6 class="dropdown-header">
				Notifikasi saran masuk
			</h6>
			@forelse ($notifikasi as $notif)
				@php
					$saran = App\Models\Saran::find($notif->data['id_saran']);
				@endphp
				<a class="dropdown-item d-flex align-items-center" href="{{ Route('saran.index') }}">
					<div class="mr-3">
						<img src="https://ui-avatars.com/api/?background=random&bold=true&size=60&name={{ $saran->user->name }}" class="rounded-circle float-left" width="40px">
					</div>
					<div>
						<div class="small text-gray-500">
							{{ Carbon\Carbon::parse($saran->created_at)->diffForHumans() }}
						</div>
						{{-- <span class="font-weight-bold">{{ Str::limit($saran->saran, 50) }}</span> --}}
						<span class=""><b class="text-info">{{ $saran->user->name }}</b> memberikan saran pada <b>{{ $saran->wisata->nama_wisata }}</b></span>
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
	</li>
</div>