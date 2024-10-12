<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun | {{ auth()->user()->name }}</title>

    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/css/main/app.css">

    <link rel="icon" href="{{ asset('winnicode/images/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/css/pages/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/css/pages/datatables.css">
    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/extensions/toastify-js/src/toastify.css" />
    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/extensions/sweetalert2/sweetalert2.min.css" />
    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/css/shared/iconly.css" />
    @stack('css')
</head>

<body>
    <div id="app">
        @include('backend.layouts.data.sidebar')
        <div id="main" class='layout-navbar'>
            @include('backend.layouts.data.navbar')
            <div id="main-content">
                <div class="page-heading">
                    @include('backend.layouts.data.breadcrumbs')
                    <section class="section">
                        @yield('content')
                    </section>
                </div>
                @include('backend.layouts.data.footer')
            </div>
        </div>
    </div>
    <script src="{{ asset('mazer') }}/assets/js/bootstrap.js"></script>
    <script src="{{ asset('mazer') }}/assets/js/app.js"></script>

    <script src="{{ asset('mazer') }}/assets/extensions/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="{{ asset('mazer') }}/assets/js/pages/datatables.js"></script>
    <script src="{{ asset('mazer') }}/assets/extensions/toastify-js/src/toastify.js"></script>
    <script src="{{ asset('mazer') }}/assets/js/pages/toastify.js"></script>
    <script src="{{ asset('mazer') }}/assets/extensions/sweetalert2/sweetalert2.min.js"></script>
    <script>
        // Function to show confirmation alert and submit delete request when confirmed
        function hapus(id) {
            Swal.fire({
                title: "{{ __('Hapus Data?') }}",
                text: "{{ __('Apakah Yakin Menghapus Data ini') }}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: "{{ __('Hapus') }}",
                cancelButtonText: "{{ __('Batal') }}",
            }).then((result) => {
                if (result.isConfirmed) {
                    // Form submission will be triggered when the user presses "Yes"
                    document.getElementById('form-delete-' + id).submit();
                }
            });
        }

        // Listening for click on delete button and calling hapus function
        document.querySelectorAll('.show_confirm').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault(); // Preventing default button action
                hapus(this.getAttribute('data-id'));
            });
        });
    </script>
    <!-- jQuery (diperlukan untuk beberapa fitur Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>