@extends('layout.template')

@section('content')
  <!-- Form controls -->
  <div class="card">
    <h5 class="card-header fs-xlarge">Service</h5>
    <form action="{{ route('service_edit', $service->id) }}" method="POST">
        @csrf
        <div class="card-body demo-vertical-spacing demo-only-element">
      <div class="form-floating form-floating-outline mb-6">
        <input type="text" name="title" value="{{ $service->title }}" class="form-control" id="exampleFormControlInput1"
          placeholder="Masukkan Title..." />
        <label for="exampleFormControlInput1">Title</label>
      </div>
      <div class="form-floating form-floating-outline mb-3">
        <div class=""><label for="editor" class="text-dark form-label fs-5">Deskripsi</label></div>
        <textarea name="deskripsi" class="form-control" id="editor">{{ old('deskripsi') ?? $service->deskripsi }}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
  </div>
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
  </script>
@endsection
