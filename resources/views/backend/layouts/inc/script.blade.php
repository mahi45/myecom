<!-- jQuery -->
{{-- <script src="{{ asset('/assets/backend') }}/js/jquery.min.js"></script> --}}
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="{{ asset('/assets/backend') }}/js/popper.min.js"></script>
<script src="{{ asset('/assets/backend') }}/js/bootstrap.min.js"></script>
<!-- wow animation -->
<script src="{{ asset('/assets/backend') }}/js/animate.js"></script>
<!-- select country -->
<script src="{{ asset('/assets/backend') }}/js/bootstrap-select.js"></script>
<!-- owl carousel -->
<script src="js/owl.carousel.js"></script>
<!-- chart js -->
<script src="{{ asset('/assets/backend') }}/js/Chart.min.js"></script>
<script src="{{ asset('/assets/backend') }}/js/Chart.bundle.min.js"></script>
<script src="{{ asset('/assets/backend') }}/js/utils.js"></script>
<script src="{{ asset('/assets/backend') }}/js/analyser.js"></script>
<!-- nice scrollbar -->
<script src="{{ asset('/assets/backend') }}/js/perfect-scrollbar.min.js"></script>
<script>
    var ps = new PerfectScrollbar('#sidebar');
</script>
<!-- custom js -->
<script src="{{ asset('/assets/backend') }}/js/custom.js"></script>
<script src="{{ asset('/assets/backend') }}/js/chart_custom_style1.js"></script>

<!-- Toastr js -->
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}

<!-- Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.36/dist/sweetalert2.all.min.js"></script>

<!-- DataTables JS -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="http://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.36/dist/sweetalert2.all.min.js"></script>

@stack('admin_script')
