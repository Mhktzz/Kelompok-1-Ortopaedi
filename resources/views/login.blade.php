<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @vite('resources/css/app.css')


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-[#FFC107]">

    <div class="flex min-h-screen text-gray-900">
        <div class="flex flex-1 max-w-screen-xl m-0 bg-white shadow sm:m-10 sm:rounded-lg">

            <div class="flex-1 hidden lg:flex">
                <div class="flex items-center justify-center w-full h-full">
                    <img src="/img/register.jpg" alt="Register" class="object-contain w-full h-full" />
                </div>
            </div>


            <div class="p-6 lg:w-1/2 xl:w-5/12 sm:p-12">

                <div class="mb-6">
                    <img src="/img/rsop_logo.png" class="w-20 mx-auto" />
                </div>


                @if ($errors->any())
                    <div class="p-3 mb-4 text-white bg-red-600 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                @if (session('success'))
                    <div class="p-3 mb-4 text-white bg-green-600 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('register.process') }}">
                    @csrf

                    <h2 class="mb-3 text-lg font-semibold text-gray-700">Select Your Role</h2>

                    <div class="flex gap-4">


                        <label
                            class="flex flex-col items-center justify-center w-32 h-24 transition bg-gray-200 cursor-pointer role-box rounded-xl hover:bg-gray-300">
                            <i class="text-3xl text-gray-700 fa-solid fa-user-doctor"></i>
                            <input type="radio" name="role" value="dokter" class="hidden role-radio">
                            <span class="mt-1 text-sm font-medium">Doctor</span>
                        </label>

                        <label
                            class="flex flex-col items-center justify-center w-32 h-24 transition bg-gray-200 cursor-pointer role-box rounded-xl hover:bg-gray-300">
                            <i class="text-3xl text-gray-700 fa-solid fa-user-nurse"></i>
                            <input type="radio" name="role" value="perawat" class="hidden role-radio">
                            <span class="mt-1 text-sm font-medium">Nurse</span>
                        </label>


                        <label
                            class="flex flex-col items-center justify-center w-32 h-24 transition bg-gray-200 cursor-pointer role-box rounded-xl hover:bg-gray-300">
                            <i class="text-3xl text-gray-700 fa-solid fa-user-gear"></i>
                            <input type="radio" name="role" value="admin" class="hidden role-radio">
                            <span class="mt-1 text-sm font-medium">Admin</span>
                        </label>

                    </div>


                    <label class="block mt-6 text-sm font-semibold text-gray-700">Name</label>
                    <input name="nama" required
                        class="w-full px-4 py-3 mb-3 bg-gray-100 border border-gray-300 rounded-lg" type="text"
                        placeholder="Enter your name" />


                    <label class="block mb-1 text-sm font-semibold text-gray-700">Password</label>
                    <input name="password" required
                        class="w-full px-4 py-3 mb-3 bg-gray-100 border border-gray-300 rounded-lg" type="password"
                        placeholder="Enter your password" />



                    <button type="submit"
                        class="flex items-center justify-center w-full py-4 mt-4 font-semibold text-white bg-indigo-600 rounded-lg hover:bg-indigo-700">
                        Sign Up
                    </button>
                </form>

                <p class="mt-6 text-sm text-center text-gray-600">
                    Already have an account?
                    <a href="{{ route('register') }}" class="font-semibold text-indigo-600 hover:underline">
                        Register
                    </a>
                </p>

            </div>
        </div>
    </div>


    <script>
        const radios = document.querySelectorAll(".role-radio");
        const boxes = document.querySelectorAll(".role-box");

        radios.forEach((radio, index) => {
            radio.addEventListener("change", () => {

                boxes.forEach(box => box.classList.remove("ring-4", "ring-indigo-500"));

                boxes[index].classList.add("ring-4", "ring-indigo-500");

                if (radio.value === "dokter") {
                    document.getElementById("spesialisasiField").classList.remove("hidden");
                } else {
                    document.getElementById("spesialisasiField").classList.add("hidden");
                }
            });
        });
    </script>

</body>

</html>
