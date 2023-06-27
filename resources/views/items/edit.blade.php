<h1>Edit Item</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('items.update', $item) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ old('title', $item->title) }}" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" required>{{ old('description', $item->description) }}</textarea>
    </div>
    <button type="submit">Update</button>
</form>

<a href="{{ route('items.index') }}">Back to Items</a>
