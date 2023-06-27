<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Item</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
<div class="flex justify-center">
    <h1 class="text-2xl font-bold mb-4">Create Item</h1>
</div>

<div class="flex justify-center">
    <form action="{{ route('items.store') }}" method="POST" class="w-full max-w-md bg-white shadow-md rounded-lg overflow-hidden">
        @csrf
        <div class="flex items-center py-2 px-4">
            <label for="title" class="w-24 font-bold">Title:</label>
            <input type="text" name="title" id="title" class="w-full ml-2 py-1 px-2 rounded border" required>
        </div>
        <div class="flex items-center py-2 px-4">
            <label for="description" class="w-24 font-bold">Description:</label>
            <textarea name="description" id="description" rows="4" class="w-full ml-2 py-1 px-2 rounded border" required></textarea>
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
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Create
            </button>
        </div>
    </form>
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
