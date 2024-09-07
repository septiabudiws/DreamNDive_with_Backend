@extends('layout.template')

@section('content')
  <!-- Borderless Table -->
  <button type="button" class="btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#animationModal">Tambah
    Kategori</button>
  <div class="card">
    <h5 class="card-header">KATEGORI TABLE</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-borderless">
        <thead>
          <tr>
            <th>Kategori</th>
            <th>Jumlah</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($kategori as $get)
            <tr>
              <td><span class="fw-medium">{{ $get->nama_kategori }}</span></td>
              <td>
                {{ $get->portofolio_count }}
              </td>
              <td>
                <div class="demo-inline-spacing">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#animationModaledit{{ $get->id }}">Edit
                  </button>
                  <!-- Modal Edit Kategori -->
                  <div class="modal fade animate__jackInTheBox" id="animationModaledit{{ $get->id }}" tabindex="-1"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel5">Edit Kategori</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col mb-6 mt-2">
                              <form action="{{ route('edit_action', $get->id) }}" method="POST">
                                @csrf
                                <div class="form-floating form-floating-outline">
                                  <input type="text" id="nameAnimation" value="{{ $get->nama_kategori }}"
                                    name="kategori" class="form-control" placeholder="Masukkan Kategori...">
                                  <label for="nameAnimation">Nama Kategori</label>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                      </form>
                    </div>
                  </div>
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
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
                          Yakin ingin menghapus Kategori <b>{{ $get->nama_kategori }}</b>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary text-white"
                            data-bs-dismiss="modal">Batal</button>
                          <a href="/kategori/hapus/{{ $get->id }}" class="btn btn-danger text-white">Ya! Hapus</a>
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

  <!-- Modal Tambah Kategori -->
  <div class="modal fade animate__jackInTheBox" id="animationModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel5">Tambah Kategori</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col mb-6 mt-2">
              <form action="{{ route('tambah_action') }}" method="POST">
                @csrf
                <div class="form-floating form-floating-outline">
                  <input type="text" id="nameAnimation" name="kategori" class="form-control"
                    placeholder="Masukkan Kategori...">
                  <label for="nameAnimation">Nama Kategori</label>
                </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- CSS untuk animasi jackInTheBox -->
  <style>
    @keyframes jackInTheBox {
      from {
        opacity: 0;
        transform: scale(0.1) rotate(30deg);
        transform-origin: center bottom;
      }

      50% {
        transform: rotate(-10deg);
      }

      70% {
        transform: rotate(3deg);
      }

      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    .animate__jackInTheBox {
      animation-name: jackInTheBox;
      animation-duration: 1s;
      animation-fill-mode: both;
    }
  </style>
  <!--/ Borderless Table -->
@endsection
