<x-layout>
  <!-- Layout wrapper for the page -->

  <!-- Title heading -->
  <h1 class="my-16 text-center text-4xl font-medium text-slate-600">
    Sign in to your account
  </h1>

  <!-- Card container -->
  <x-card class="py-8 px-16">
    <!-- Form for user authentication -->
    <form action="{{ route('auth.store') }}" method="POST">
      @csrf <!-- CSRF protection -->

      <!-- Email input field -->
      <div class="mb-8">
        <x-label for="email" :required="true">E-mail</x-label>
        <x-text-input name="email" />
      </div>

      <!-- Password input field -->
      <div class="mb-8">
        <x-label for="password" :required="true">
          Password
        </x-label>
        <x-text-input name="password" type="password" />
      </div>

      <!-- Checkbox for "Remember Me" option -->
      <div class="mb-8 flex justify-between text-sm font-medium">
        <div>
          <div class="flex items-center space-x-2">
            <input type="checkbox" name="remember"
              class="rounded-sm border border-slate-400">
            <label for="remember">Remember me</label>
          </div>
        </div>
        <div>
          <a href="#" class="text-indigo-600 hover:underline">
            Forget password?
          </a>
        </div>
      </div>

      <!-- Login button -->
      <x-button class="w-full bg-green-50">Login</x-button>
    </form>
  </x-card>
</x-layout>
