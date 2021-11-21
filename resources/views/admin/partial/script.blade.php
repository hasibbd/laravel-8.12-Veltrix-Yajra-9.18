<!-- JAVASCRIPT -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('nplugins/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('nplugins/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('nplugins/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('nplugins/assets/libs/node-waves/waves.min.js')}}"></script>

<!-- Required datatable js -->
<script src="{{asset('nplugins/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('nplugins/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{asset('nplugins/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('nplugins/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('nplugins/assets/libs/jszip/jszip.min.js')}}"></script>
<script src="{{asset('nplugins/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('nplugins/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('nplugins/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('nplugins/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('nplugins/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{asset('nplugins/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('nplugins/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{asset('nplugins/assets/js/pages/datatables.init.js')}}"></script>

<script src="{{asset('nplugins/assets/js/app.js')}}"></script>
<script>
    $(function () {
        $("#user_list").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('list.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

    })
</script>
