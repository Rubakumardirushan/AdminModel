<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="container mx-auto p-8">
    <div class="w-full max-w-4xl mx-auto bg-white rounded-lg shadow-md">
        <div class="p-6">
            <h1 class="text-2xl font-bold mb-6">Admin List</h1>
            
           
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-gray-200">ID</th>
                        <th class="py-2 px-4 bg-gray-200">Name</th>
                        <th class="py-2 px-4 bg-gray-200">Email</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admin as $admin)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $admin->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $admin->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $admin->email }}</td>
                     
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
