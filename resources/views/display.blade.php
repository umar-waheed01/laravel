<div>
    <h1>Display Images</h1>
    {{-- <div class="row">
        @foreach ($display as $image)
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $image) }}" alt="Image" class="img-fluid">
            </div>
        @endforeach --}}

        <img src="{{ asset('storage/' . $display) }}" style="width: 100%; height: 100;" alt="Image">

</div>
