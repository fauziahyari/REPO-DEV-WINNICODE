<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<div class="input-group">
    <input type="text" name="search" id="search" class="form-control" placeholder="Cari Penulis atau Judul" />
    <div class="input-group-append">
        <button type="button" class="btn btn-outline-primary" id="search-button">Search</button>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#search').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{ route('autocomplete') }}",
                    data: {
                        query: request.term
                    },
                    success: function(data) {
                        response(data.map(item => {
                            if (item.type === 'penulis' && item.verified) {
                                return {
                                    label: item.label + ' <img src="{{ asset('
                                    mazer / images / verified.png ') }}" style="width: 1em; height: 1em;" title="Terverifikasi">',
                                    value: item.label
                                };
                            } else {
                                return {
                                    label: item.label,
                                    value: item.label
                                };
                            }
                        }));
                    },
                    error: function(xhr, status, error) {
                        console.error("Autocomplete error: ", status, error);
                    }
                });
            },
            minLength: 1,
            html: true // Allow HTML content
        }).data("ui-autocomplete")._renderItem = function(ul, item) {
            return $("<li>")
                .append("<div>" + item.label + "</div>")
                .appendTo(ul);
        };

        $('#search-button').on('click', function() {
            var query = $('#search').val();
            $.ajax({
                url: "{{ route('search.live') }}",
                method: 'GET',
                data: {
                    query: query
                },
                dataType: 'json',
                success: function(data) {
                    $('tbody').html(data.table_data);
                },
                error: function(xhr, status, error) {
                    console.error("Search error: ", xhr.responseText);
                }
            });
        });
    });
</script>