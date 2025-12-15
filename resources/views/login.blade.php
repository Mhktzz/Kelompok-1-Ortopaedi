<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @vite('resources/css/app.css')


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-[#519D9E]">

    <div class="flex min-h-screen text-gray-900">
        <div class="flex flex-1 max-w-screen-xl m-0 bg-[#F3F5F6] shadow sm:m-10 sm:rounded-lg">

            <div class="flex-1 hidden lg:flex">
                <div class="flex items-center justify-center w-full h-full">
                    <img src="/img/login.jpg" alt="Register" class="object-contain w-full h-full" />
                </div>
            </div>


            <div class="p-6 lg:w-1/2 xl:w-5/12 sm:p-12">

                <div class="mb-6">
                    <img src="/img/victorylogo.png" class="w-20 mx-auto" />
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
                <h2 class="mt-10 mb-3 text-lg font-semibold text-gray-700">Please login to enter the system</h2>
                <form method="POST" action="{{ route('login.process') }}">
                    @csrf

                    {{-- EMAIL --}}
                    <label class="block mt-8 text-sm font-semibold text-gray-700">Email</label>
                    <input type="email" name="email" required
                        class="w-full px-4 py-3 mb-3 bg-gray-100 border border-gray-300 rounded-lg"
                        placeholder="Enter your email" />

                    {{-- PASSWORD --}}
                    <label class="block mb-1 text-sm font-semibold text-gray-700">Password</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-3 mb-3 bg-gray-100 border border-gray-300 rounded-lg"
                        placeholder="Enter your password" />

                    {{-- REMEMBER ME --}}
                    <div class="flex items-center justify-between mt-2 mb-4">
                        <label class="flex items-center gap-2 text-sm text-gray-700">
                            <input type="checkbox" name="remember"
                                class="w-4 h-4 text-indigo-600 border-gray-300 rounded" />
                            Remember Me
                        </label>

                        <span class="text-sm text-gray-500">Forgot Password?</span>
                    </div>

                    {{-- BUTTON --}}
                    <button type="submit"
                        class="flex items-center justify-center w-full py-4 mt-8 font-semibold text-white bg-indigo-600 rounded-lg hover:bg-indigo-700">
                        Login
                    </button>
                </form>



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
