<!-- items/create.blade.php -->

<h1>Create Item</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('items.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ old('title') }}" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" required>{{ old('description') }}</textarea>
    </div>
    <button type="submit">Create</button>
</form>

<a href="{{ route('items.index') }}">Back to Items</a>
