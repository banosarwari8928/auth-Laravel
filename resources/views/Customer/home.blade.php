<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="w-11/12 max-w-6xl mx-auto mt-4 ">
    <div class="flex flex-col gap-4">
        @if ($users->count()>0)
            
     
        <h1>All Customers</h1>
        <table class="text-center border border-collapse">
            <tr>
                <th class="text-center border-gray-500 border  text-gray-800">ID</th>
                <th class="text-center border-gray-500 border  text-gray-800">Name</th>
                <th class="text-center border-gray-500 border  text-gray-800">Last Name</th>
                <th class="text-center border-gray-500 border  text-gray-800">Email</th>
                <th class="text-center border-gray-500 border  text-gray-800">Gender</th>
            </tr>
            
            @foreach  ( $users as $user)
            <tr>
                <td class="text-center text-gray-800">{{$user->id}}</td>
                <td class="text-center text-gray-800">{{$user->name}}</td>
                <td class="text-center text-gray-800">{{$user->lastName}}</td>
                <td class="text-center text-gray-800">{{$user->email}}</td>
                <td class="text-center text-gray-800">{{$user->gender}}</td>
            </tr>
            
            @endforeach
        </table>
        @else 
        <h1>Could Not Find Any Users</h1>
           @endif
    </div>
</body>
</html>
