<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anda Ingin Keluar?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Tekan tombol <b>Keluar</b> di bawah ini untuk mengakhiri sesi anda.</div>
      <div class="modal-footer">
        <form action="{{ url('logout') }}" method="POST">
          @csrf
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
          <button class="btn btn-danger" type="submit">Keluar</button>
        </form>
      </div>
    </div>
  </div>
</div>