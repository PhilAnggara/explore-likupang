<!-- Bootstrap core JavaScript-->
<script src="{{ url('frontend-admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ url('frontend-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- My Script-->
<script src="{{ url('frontend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('frontend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
{{-- <script src="{{ url('frontend/scripts/main.js') }}"></script> --}}

<!-- Core plugin JavaScript-->
<script src="{{ url('frontend-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Custom scripts for all pages-->
<script src="{{ url('frontend-admin/js/admin.min.js') }}"></script>
<!-- Page level plugins -->
{{-- <script src="{{ url('frontend-admin/vendor/chart.js/Chart.min.js') }}"></script> --}}
<!-- Page level custom scripts -->
{{-- <script src="{{ url('frontend-admin/js/demo/chart-area-demo.js') }}"></script> --}}
{{-- <script src="{{ url('frontend-admin/js/demo/chart-pie-demo.js') }}"></script> --}}

<script>
  window.addEventListener( "pageshow", function ( event ) {
    var historyTraversal = event.persisted || ( typeof window.performance != "undefined" && window.performance.navigation.type === 2 );

    if ( historyTraversal ) {
      window.location.reload();
    }
  });

  // if(performance.navigation.type == 2){
  //  location.reload(true);
  // }

  // jQuery( document ).ready(function( $ ) {
  //   $(window).on('popstate', function() {
  //     location.reload(true);
  //   });
  // });
</script>