<!-- JAVASCRIPT -->
<script src="{{asset('nplugins/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('nplugins/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('nplugins/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('nplugins/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('nplugins/assets/libs/node-waves/waves.min.js')}}"></script>

<script src="assets/js/app.js"></script>
<!-- Sweet Alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--Toaster-->
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{asset('custom/js/auth.js')}}"></script>
<script>
    $(document).ready(function() {
        if($('#check').val() == 1){
            $('.alert').alert()
            setTimeout(function() {
                $(".alert").alert('close');
            }, 4000);
        }else{
            $('.alert').alert('close')
        }
    });
</script>
