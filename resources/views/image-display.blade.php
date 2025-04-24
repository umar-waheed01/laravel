<div>
    <h1>Display Images</h1>
    @foreach($images as $image)
        <div>
            <img src="{{ url('storage/' . $image->path) }}" alt="Image" style="max-width: 200px; max-height: 200px;">
            <p>{{ $image }}</p>
        </div>
     @endforeach    
</div>
