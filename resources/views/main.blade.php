<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>URL Shortener</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <form action="{{ route('link.store') }}" method="post" class="text-center mt-20">
        @csrf
        <label for="url" class="m-2">Enter your URL here:</label><br>
        <input type="text" name="url" id="" class="border-2 border-black rounded m-2" value="{{ old('url') }}"><br>
        <button type="submit" class="rounded-lg bg-blue-400 p-2 m-2">Submit</button>
    </form>

</body>

</html>