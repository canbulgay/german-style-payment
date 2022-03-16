<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
        <div class="w-full md:w-96 md:max-w-full mx-auto mt-24">
            <div class="p-6 border-2 border-indigo-300 sm:rounded-md">
              <form method="POST" action="{{route('register.store')}}">
                @csrf
                <label class="block mb-6">
                    <span class="text-gray-700">Name</span>
                    <input
                      name="name"
                      type="text"
                      class="
                        block
                        w-full
                        mt-1
                        border-gray-300
                        rounded-md
                        shadow-sm
                        focus:border-indigo-300
                        focus:ring
                        focus:ring-indigo-200
                        focus:ring-opacity-50
                      "
                      required
                    />
                  </label>
                  @error('name')
                  <p class="text-red-500 text-xs mt-2">
                      {{$message}}
                  </p>
                  @enderror
                  <label class="block mb-6">
                    <span class="text-gray-700">Company</span>
                    <input
                      name="company"
                      type="text"
                      class="
                        block
                        w-full
                        mt-1
                        border-gray-300
                        rounded-md
                        shadow-sm
                        focus:border-indigo-300
                        focus:ring
                        focus:ring-indigo-200
                        focus:ring-opacity-50
                      "
                      required
                    />
                  </label>
                  @error('company')
                  <p class="text-red-500 text-xs mt-2">
                      {{$message}}
                  </p>
                  @enderror
                </label>
                <label class="block mb-6">
                  <span class="text-gray-700">Street Adress</span>
                  <input
                    name="street_adress"
                    type="text"
                    class="
                      block
                      w-full
                      mt-1
                      border-gray-300
                      rounded-md
                      shadow-sm
                      focus:border-indigo-300
                      focus:ring
                      focus:ring-indigo-200
                      focus:ring-opacity-50
                    "
                    required
                  />
                </label>
                @error('street_adress')
                <p class="text-red-500 text-xs mt-2">
                    {{$message}}
                </p>
                @enderror
                <label class="block mb-6">
                    <span class="text-gray-700">City</span>
                    <input
                      name="city"
                      type="text"
                      class="
                        block
                        w-full
                        mt-1
                        border-gray-300
                        rounded-md
                        shadow-sm
                        focus:border-indigo-300
                        focus:ring
                        focus:ring-indigo-200
                        focus:ring-opacity-50
                      "
                      required
                    />
                  </label>
                  @error('city')
                  <p class="text-red-500 text-xs mt-2">
                      {{$message}}
                  </p>
                  @enderror
                  <label class="block mb-6">
                    <span class="text-gray-700">Country</span>
                    <input
                      name="country"
                      type="text"
                      class="
                        block
                        w-full
                        mt-1
                        border-gray-300
                        rounded-md
                        shadow-sm
                        focus:border-indigo-300
                        focus:ring
                        focus:ring-indigo-200
                        focus:ring-opacity-50
                      "
                      required
                    />
                  </label>
                  @error('country')
                  <p class="text-red-500 text-xs mt-2">
                      {{$message}}
                  </p>
                  @enderror
                  <label class="block mb-6">
                    <span class="text-gray-700">Zip</span>
                    <input
                      name="zip"
                      type="text"
                      class="
                        block
                        w-full
                        mt-1
                        border-gray-300
                        rounded-md
                        shadow-sm
                        focus:border-indigo-300
                        focus:ring
                        focus:ring-indigo-200
                        focus:ring-opacity-50
                      "
                      required
                    />
                  </label>
                  @error('zip')
                  <p class="text-red-500 text-xs mt-2">
                      {{$message}}
                  </p>
                  @enderror
                  <label class="block mb-6">
                    <span class="text-gray-700">Phone</span>
                    <input
                      name="phone"
                      type="text"
                      class="
                        block
                        w-full
                        mt-1
                        border-gray-300
                        rounded-md
                        shadow-sm
                        focus:border-indigo-300
                        focus:ring
                        focus:ring-indigo-200
                        focus:ring-opacity-50
                      "
                      required
                    />
                  </label>
                  @error('phone')
                  <p class="text-red-500 text-xs mt-2">
                      {{$message}}
                  </p>
                  @enderror
                <label class="block mb-6">
                  <span class="text-gray-700">Email address</span>
                  <input
                    name="email"
                    type="email"
                    class="
                      block
                      w-full
                      mt-1
                      border-gray-300
                      rounded-md
                      shadow-sm
                      focus:border-indigo-300
                      focus:ring
                      focus:ring-indigo-200
                      focus:ring-opacity-50
                    "
                    placeholder="joe.bloggs@example.com"
                    required
                  />
                </label>
                @error('email')
                <p class="text-red-500 text-xs mt-2">
                    {{$message}}
                </p>
                @enderror
                <label class="block mb-6">
                  <span class="text-gray-700">Password</span>
                  <input
                    name="password"
                    type="password"
                    class="
                      block
                      w-full
                      mt-1
                      border-gray-300
                      rounded-md
                      shadow-sm
                      focus:border-indigo-300
                      focus:ring
                      focus:ring-indigo-200
                      focus:ring-opacity-50
                    "
                    minlength="6"
                    required
                  />
                </label>
                @error('password')
                <p class="text-red-500 text-xs mt-2">
                    {{$message}}
                </p>
                @enderror
                <label class="block mb-6">
                    <span class="text-gray-700">Password (Confirm)</span>
                    <input
                      name="password_confirmation"
                      type="password"
                      class="
                        block
                        w-full
                        mt-1
                        border-gray-300
                        rounded-md
                        shadow-sm
                        focus:border-indigo-300
                        focus:ring
                        focus:ring-indigo-200
                        focus:ring-opacity-50
                      "
                      minlength="6"
                      required
                    />
                  </label>
                  @error('password_confirmation')
                  <p class="text-red-500 text-xs mt-2">
                      {{$message}}
                  </p>
                  @enderror
                <div class="mb-3 flex justify-center">
                  <button
                    type="submit"
                    class="
                      h-10
                      px-5
                      text-indigo-100
                      bg-indigo-700
                      rounded-lg
                      transition-colors
                      duration-150
                      focus:shadow-outline
                      hover:bg-indigo-800
                    "
                  >
                    Sign Up
                  </button>
                </div>
                <div class="mb-3 text-center">
                    <h1 class="text-2xl">Do you already have an account? <a href="/login" class="text-indigo-700 text-bold">Sign In !</a></h1>
                </div>
                </div>
              </form>
            </div>
          </div>
</body>
</html>