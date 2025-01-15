<div class="w-full max-w-[85rem] py-12 px-5 sm:px-7 lg:px-10 mx-auto pt-16">
  <div class="flex h-full items-center justify-center">
    <main class="w-full max-w-md mx-auto p-8">
      <div class="bg-white border border-gray-200 rounded-xl shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="p-5 sm:p-8">
          <div class="text-center">
            <h1 class="block text-3xl font-bold text-gray-800 dark:text-white">Sign In</h1>
            <p class="mt-3 text-sm text-gray-600 dark:text-gray-400">
              Don’t have an account yet?
              <a wire:navigate class="text-blue-600 decoration-2 hover:underline font-medium dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/register">
                Sign up here
              </a>
            </p>
          </div>

          <hr class="my-6 border-slate-300">

          <!-- Form -->
          <form wire:submit.prevent='save'>
            <div class="grid gap-y-5">
              <!-- Form Group -->
              <div>
                <label for="email" class="block text-sm mb-2 font-medium dark:text-white">Email address</label>
                <div class="relative">
                  <input type="email" id="email" wire:model="email" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"  aria-describedby="email-error">
                  @error('email')
                  <div class=" absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                    <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>
                  </div>
                  @enderror
                </div>
                @error('email')
                <p class="text-xs text-red-600 mt-2" id="email-error">Please include a valid email address so we can get back to you</p>
                @enderror
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div>
                <div class="flex justify-between items-center">
                  <label for="password" class="block text-sm mb-2 font-medium dark:text-white">Password</label>
                  <a wire:navigate class="text-sm text-blue-600 decoration-2 hover:underline font-medium dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/forgot">Forgot password?</a>
                </div>
                <div class="relative">
                  <input type="password" id="password" wire:model="password" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"  aria-describedby="password-error">
                @error('password')
                  <div class=" absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                    <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>
                  </div>
                  @enderror
                </div>
                @error('password')
                <p class="text-xs text-red-600 mt-2" id="password-error">5+ characters required</p>
                @enderror
              </div>
              <!-- End Form Group -->

              <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 transition duration-200 ease-in-out disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Sign in</button>
            </div>
          </form>
          <!-- End Form -->
        </div>
      </div>
  </div>
</div>
