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
    <div class="h-screen w-full text-center flex justify-center items-center ">
       
        <div class="bg-gradient-to-b from-gray-100 to-gray-400 p-4 w-[50%] rounded-md shadow-sm shadow-gray-800">
           @if ($errors->count()>0)
               
           @endif
            @foreach (@errors->all() as $error )
                <div>
                    <h1 class="text-bold text-4xl text-red-600">{{$error}}</h1>
                </div>
            @endforeach
            @endif
             <h1 class="text-center flex justify-center items-center text-simebold text-gray-600">Add Customer</h1>
             @csrf
            <form action="" class="flex flex-col mx-auto my-3  gap-4">
                <input type="text"  class="border border-gray-500" placeholder="name" name="name">
                <input type="text"  class="border border-gray-400" placeholder="Last Name" name="lastNane">
                <input type="email" class="border border-gray-200" placeholder=" email" name="email">
                <select name="gender" id="">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <input type="file" name="img" accept="image/*" name="" id="">
                <button type="submit">Add</button>
            </form>
        </div>
    </div>
</body>
</html>