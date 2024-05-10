<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full h-screen p-3 mb-2 bg-secondary flex justify-center items-center">
        <div class="p-3 mb-2 bg-success w-96 h-max flex flex-col rounded-lg">
            <div class="flex justify-center">
                <img src="{{ $logo }}" alt="logo" width="150" class="rounded-full mt-6">
            </div>
            <div class="text-center mt-6">
                SELAMAT DATANG DI ADMIN SCHOOL GALLERY SMKN 2 BANJARMASIN
            </div>
            <div>
                <form action="" method="post" class="flex flex-col p-3 gap-3">
                    @csrf
                    <input class="border rounded-xl text-center p-2 " type="text" name="username" id="username" placeholder="Username...">
                    <input class="border rounded-xl text-center p-2 " type="password" name="password" id="password" placeholder="Password...">
                    <div class="flex">
                        <button type="submit" class="bg-blue-500 p-2 w-24 text-white font-medium rounded-lg py-2.5 px-7">Login</button>
                    </div>
                    <span class="text-sm">Belum Punya Akun? <a href="/registration" style="color: rgb(103, 241, 241)">Buat Akun Disini !</a></span>
                </form>
            </div>
        </div>
    </div>
</body>
</html>