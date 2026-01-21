<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="w-full bg-stone-300 ">
        <div> 
            <h1>Add Product</h1>
            @csrf
            <form class="flex flex-col md:w-8/12 lg:7/12 w-full p-4" method="POST" enctype="multipart/form-data" action="{{ "pro/create" }}">
            <input type="text" placeholder="proName" name="proname" class="border focus:outline-0 focus:border-blue-400 ring-sky-600 rounded-sm p-4 w-full  ">
            <input type="number" placeholder="price" name="price" class="border focus:outline-0 focus:border-blue-400 ring-sky-600 rounded-sm p-4 w-full  ">
            <input type="number" placeholder="quantity" name="quantity" class="border focus:outline-0 focus:border-blue-400 ring-sky-600 rounded-sm p-4 w-full  ">
            <input type="text" placeholder="Made in " name="made_in" class="border focus:outline-0 focus:border-blue-400 ring-sky-600 rounded-sm p-4 w-full  ">
            <input type="file" accept="image/*" name="image" class="border focus:outline-0 focus:border-blue-400 ring-sky-600 rounded-sm p-4 w-full  ">
            <textarea name="details" id="" class="border focus:outline-0 focus:border-blue-400 ring-sky-600 rounded-sm p-4 w-full  " cols="30" rows="10" placeholder="descibtion "> </textarea>
            <button type="submit" class="px-4 py-2 bg-orange-300 text-white ">Add</button>
        </form>
        </div>
    </div>
</body>
</html>
