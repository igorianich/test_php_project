<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
<div class="flex justify-center">
    <h1 class="text-2xl font-bold mb-4">Edit Item</h1>
</div>

<div class="flex justify-center">
    <form action="{{ route('items.update', $item->id) }}" method="POST" class="w-full max-w-md bg-white shadow-md rounded-lg overflow-hidden">
        @csrf
        @method('PUT')
        <div class="flex items-center py-2 px-4">
            <label for="title" class="w-24 font-bold">Title:</label>
            <input type="text" name="title" id="title" class="w-full ml-2 py-1 px-2 rounded border" value="{{ old('title', $item->title) }}" required>
        </div>
        <div class="flex items-center py-2 px-4">
            <label for="description" class="w-24 font-bold">Description:</label>
            <textarea name="description" id="description" rows="4" class="w-full ml-2 py-1 px-2 rounded border" required>{{ old('description', $item->description) }}</textarea>
        </div>
        @if ($errors->any())
            <div class="flex justify-center mt-4">
                <div class="bg-red-500 text-white font-bold py-2 px-4 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <div class="flex justify-center mt-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Update
            </button>
        </div>
    </form>
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
