                            <!-- Modal -->
                            <div class="modal fade" id="cvModal" tabindex="-1" role="dialog" aria-labelledby="cvModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="cvModalLabel">CV {{ $peserta->nama_lengkap }}</h5>
                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">

                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            @if ($peserta->cv ?? false)
                                            @if (pathinfo($peserta->cv, PATHINFO_EXTENSION) === 'pdf')
                                            <?php
                                            // Konversi PDF menjadi base64
                                            $pdfData = base64_encode(Storage::disk('public')->get($peserta->cv));
                                            ?>
                                            <iframe id="pdfViewer" src="data:application/pdf;base64,{{ $pdfData }}" width="100%" height="500px" frameborder="0"></iframe>
                                            @else
                                            <img src="{{ asset('storage/' . $peserta->cv) }}" class="img-fluid" alt="{{ basename($peserta->cv) }}">
                                            @endif
                                            @else
                                            <p>Data tidak tersedia untuk ditampilkan.</p>
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <a href="{{ asset('storage/' . $peserta->cv) }}" class="btn btn-primary" download="cv {{ $peserta->nama_lengkap }}">Download</a>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>