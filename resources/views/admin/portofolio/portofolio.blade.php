@extends('layout.template')

@section('content')
  <a class="btn btn-secondary mb-2" href="/portofolio/tambah">Tambah Portofolio
  </a>
  <div class="card">
    <h5 class="card-header">PORTOFOLIO TABLE</h5>
    <div class="table-responsive text-nowrap m-2">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nama Portofolio</th>
            <th>Client</th>
            <th>Kategori</th>
            <th>Thumbnail</th>
            <th>Video</th>
            <th>Quotes</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($portofolio as $get)
            <tr>
              <td class="w-18"><span class="fw-medium text-wrap text-break">{{ $get->nama_portofolio }}</span></td>
              <td class="w-17"><span class="fw-medium text-wrap text-break">{{ $get->client }}</span></td>
              <td>{{ $get->kategori->nama_kategori }}</td>
              <td>
                <img src="{{ asset('thumbnail/' . $get->foto) }}" width="140" alt="">
              </td>
              <td>
                @if ($get->link != null)
                  <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#youTubeModal"
                    data-theVideo="{{ $get->link }}">Preview</button>

                  <div class="modal fade" id="youTubeModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <iframe id="videoIframe" width="100%" height="350" src="" frameborder="0"
                            allowfullscreen></iframe>
                        </div>
                      </div>
                    </div>
                  </div>
                @else
                  -
                @endif
              </td>
              <td class="w-11">
                @if ($get->quotes != null)
                <span class="fw-medium text-wrap text-break">{{ $get->quotes }} ({{ $get->author }})</span>
                @else
                -
                @endif
              </td>
              <td>
                <div class="demo-inline-spacing d-flex flex-column">
                  <a class="btn btn-secondary" href="/portofolio/edit/{{ $get->id }}">Edit
                  </a>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#modal_del_{{ $get->id }}">Hapus
                  </button>

                  <div class="modal fade" id="modal_del_{{ $get->id }}" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="ri-error-warning-line"></i>
                            Peringatan!</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Yakin ingin menghapus Portofolio <b>{{ $get->nama_kategori }}</b>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary text-white"
                            data-bs-dismiss="modal">Batal</button>
                          <a href="/portofolio/hapus/{{ $get->id }}" class="btn btn-danger text-white">Ya! Hapus</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const youTubeModal = document.getElementById('youTubeModal');

      youTubeModal.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        const videoUrl = button.getAttribute('data-theVideo');
        const iframe = document.getElementById('videoIframe');

        // Set the src of the iframe to the video URL
        iframe.src = videoUrl;
      });

      youTubeModal.addEventListener('hidden.bs.modal', function() {
        const iframe = document.getElementById('videoIframe');

        // Clear the src of the iframe to stop the video when the modal is closed
        iframe.src = '';
      });
    });
  </script>
@endsection
