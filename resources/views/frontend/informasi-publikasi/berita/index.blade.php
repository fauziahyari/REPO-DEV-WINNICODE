@extends('frontend.informasi-publikasi.layouts.app')

@section('container')
@php
$title = 'Berita - PT . Winnicode Garuda Teknologi';
@endphp
<section class="background-radial-gradient overflow-hidden">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5" style="font-family: Raleway;">
        <div class="row gx-lg-5 align-items-center mb-5">
            <div class="card shadow-lg border-0">
                <div class="card-body py-5 px-md-5">
                    <section class="miri-ui-kit-section team-members-section">
                        <div class="container mt-3">
                            <div class="card mb-4 mx-auto text-center" style="width: 250px;">
                                <div class="card-body" style="background: linear-gradient(135deg, #ff6ec4, #87d3f8); color: white;">
                                    <h1 class="mb-0">Berita Terbaru</h1>
                                </div>
                            </div>

                            <div class="card">
                                <div class="container mt-3">
                                    <div class="row justify-content-end">
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <input type="text" name="search" id="search" class="form-control" placeholder="Cari Penulis atau Judul" />
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-primary" id="search-button">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mt-4 mb-3">
                                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4" id="berita-container">
                                        @foreach($berita as $data)
                                        <div class="col">
                                            <div class="card h-100 shadow-sm border-0">
                                                @if (!empty($data->gambar))
                                                <a href="/explore/berita/{{ $data->slug }}">
                                                    <img src="{{ asset('images/' . $data->url_gambar) }}" style="max-width: 100%; height: 200px;" alt="{{ $data->judul }}" class="card-img-top">
                                                </a>
                                                @else
                                                <a href="/explore/berita/{{ $data->slug }}">
                                                    <img src="{{ asset('images/' . $data->url_gambar) }}" alt="Default Image" style="max-width: 100%; height: 200px;" class="card-img-top">
                                                </a>
                                                @endif
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ Str::limit($data->judul, 40, '...') }}</h5>
                                                </div>
                                                <div class="card-footer bg-transparent border-0">
                                                    <small class="text-muted">Penulis: {{ $data->penulis }}</small>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                    <!-- Link pagination -->
                                    <div class="d-flex justify-content-center mt-4">
                                        {{ $berita->links('vendor.pagination.bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.beranda.layouts.style')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#search').on('keyup', function() {
            var query = $(this).val();
            $.ajax({
                url: "{{ route('search') }}",
                method: 'GET',
                data: { query: query },
                dataType: 'json',
                success: function(data) {
                    $('#berita-container').html(data.table_data);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            })
        });

        $.widget("custom.autocomplete", $.ui.autocomplete, {
            _renderItem: function(ul, item) {
                return $("<li>")
                    .append($("<div>").html(item.label))
                    .appendTo(ul);
            }
        });

        $('#search').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{ route('autocomplete') }}",
                    data: { query: request.term },
                    success: function(data) {
                        response($.map(data, function(value) {
                            return {
                                label: value,
                                value: value.replace(/<[^>]*>/g, '') // Remove HTML tags for value
                            };
                        }));
                    },
                    error: function(xhr, status, error) {
                        console.error("Autocomplete error: ", status, error);
                    }
                });
            },
            minLength: 1,
            html: true
        });
    });
</script>
@endsection
