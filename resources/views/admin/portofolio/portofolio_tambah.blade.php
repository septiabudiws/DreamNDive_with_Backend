@extends('layout.template')

@section('content')
  <!-- Form controls -->
  <div class="card">
    <h5 class="card-header">Tambah Portofolio Baru</h5>
    <form action="{{ route('porto_tambah') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body demo-vertical-spacing demo-only-element">
      <div class="form-floating form-floating-outline mb-6">
        <input type="text" name="judul" class="form-control" id="exampleFormControlInput1"
          placeholder="Masukkan Nama/Judul Portofolio..." />
        <label for="exampleFormControlInput1">Nama Portofolio</label>
      </div>
      <div class="form-floating form-floating-outline mb-3">
        <input type="text" name="client" class="form-control" id="exampleFormControlInput2" placeholder="Masukkan Nama Client..." />
        <label for="exampleFormControlInput1">Nama Client</label>
      </div>
      <div class="form-floating form-floating-outline mb-3">
        <select name="kategori" class="form-select form-control" required>
          <option selected disabled value="">Pilih Kategori ...</option>
          @foreach ($kategori as $get)
            <option value="{{ $get->id }}">- {{ $get->nama_kategori }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-floating form-floating-outline mb-3">
        <input type="text" name="link" class="form-control" id="exampleFormControlInput2" placeholder="Masukkan Link ..." />
        <label for="exampleFormControlInput1">Masukkan Link (Opsional)</label>
      </div>
      <div class="form-floating form-floating-outline mb-3">
        <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
          <div class="product-upload">
            <label for="file-upload" class="file-upload mb-0">
              <span class="d-inline-block wh-110 bg-body-bg rounded-10 position-relative">
                <img id="upload" class="uploaded-image" src="{{ asset('admin') }}/assets/img/upload.png"
                  alt="your image"/>
              </span>
            </label>
            <input id="file-upload" name="foto_project" onchange="readURL(this);" type="file" hidden>
          </div>
        </div>
      </div>
      <div class="form-floating form-floating-outline mb-3">
        <div class=""><label for="editor" class="text-dark form-label fs-5">Deskripsi</label></div>
        <textarea name="deskripsi" class="form-control" id="editor"></textarea>
      </div>
      <div class="border-box">
      <div class="form-floating form-floating-outline mb-3">
        <input type="text" name="quotes" class="form-control" id="exampleFormControlInput2" placeholder="Masukkan Quotes..." />
        <label for="exampleFormControlInput1">Quotes of The Day (Opsional)</label>
      </div>
      <div class="form-floating form-floating-outline mb-3">
        <input type="text" name="author" class="form-control" id="exampleFormControlInput2" placeholder="Oleh Siapa..." />
        <label for="exampleFormControlInput1">Dikarang Oleh (Opsional)</label>
      </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
  </div>

  <style>
    .border-box {
        border: 1px solid #ccc;
        padding: 1rem;
        border-radius: 5px;
    }

    .file-upload img {
      max-width: 100%;
      max-height: 300px;
      /* Sesuaikan dengan tinggi maksimum yang diinginkan */
      object-fit: cover;
      /* Atau 'contain' jika Anda ingin gambar tetap terlihat utuh */
    }
  </style>

  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
  <script>

    ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}"
                }
            })
            .catch(error => {
                console.error(error);
            });

    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#upload').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>
@endsection
