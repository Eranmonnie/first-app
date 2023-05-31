<x-layout>
   <main class="max-w-lg mx-auto mt-20 bg-gray-100 p-6 rounded-xl border border-gray-200">

    <h1 class="text-center font-bold text-xl">

        Register

    </h1>

    <form method="POST" action="/signup"class="mt-10" >
        @csrf

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700"

                for="username"
            >
                Username

            </label>

            <input class="border border-grey-400 p-2 w-full"
                    type = "text"
                    name = "username"
                    id = "username"
                    value = "{{old('username')}}"
                    required  
            >
            @error('username')
            <p class="text-red-500 text-xs mt-1">
                {{$message}}
            </p>
            @enderror
        </div>

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700"

                for="name"
            >
                Name

            </label>

            <input class="border border-grey-400 p-2 w-full"
                    type = "text"
                    name = "name"
                    id = "name"
                    value = "{{old('name')}}"
                    required  
            >
            @error('name')
            <p class="text-red-500 text-xs mt-1">
                {{$message}}
            </p>
            @enderror
        </div>
        
        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700"

                for="email"
            >
                Email

            </label>

            <input class="border border-grey-400 p-2 w-full"
                    type = "email"
                    name = "email"
                    id = "email"
                    value = "{{old('email')}}"
                    required  
            >
            @error('email')
            <p class="text-red-500 text-xs mt-1">
                {{$message}}
            </p>
            @enderror
        </div>


        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700"

                for="password"
            >
                Password

            </label>

            <input class="border border-grey-400 p-2 w-full"
                    type = "password"
                    name = "password"
                    id = "username"
                    value = "{{old('password')}}"
                    required  
            >
            @error('password')
            <p class="text-red-500 text-xs mt-1">
                {{$message}}
            </p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                Submit

            </button>
        </div>
        
    </form>
   </main>
</x-layout>