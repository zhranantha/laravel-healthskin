<main>
  <!-- Bagian utama konten dengan background putih -->
  <div class="w-full h-screen bg-blue-200 flex items-center">
  <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
      <!-- Text Section -->
      <div>
        <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">
          Natural Beauty, Perfect Skin with <span class="text-blue-600">Health</span><span class="text-green-500">Skin</span>
        </h1>
        <p class="mt-3 text-lg text-gray-800 dark:text-gray-400">
          Explore a wide variety of skincare products to rejuvenate your skin, including face creams, serums, and more.
        </p>

        <!-- Buttons -->
        <div class="mt-7 grid gap-3 w-full sm:inline-flex">
          <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/register">
            Get started
            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m9 18 6-6-6-6" />
            </svg>
          </a>
        </div>
      </div>

      <!-- Image Section -->
      <div class="flex justify-center">
        <img src="/assets/model.png" alt="Model Skincare" class="w-full max-w-lg rounded-lg shadow-lg" />
      </div>
    </div>
  </div>
</div>

  <!-- Section tambahan dengan background terpisah -->
  <section class="py-20">
  <div class="max-w-xl mx-auto">
    <div class="text-center">
      <div class="relative flex flex-col items-center">
        <h1 class="text-5xl font-bold dark:text-white-600">Browse Popular <span class="text-blue-500">Skincare Brands</span></h1>
        <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
          <div class="flex-1 h-2 bg-blue-200"></div>
          <div class="flex-1 h-2 bg-blue-400"></div>
          <div class="flex-1 h-2 bg-blue-600"></div>
        </div>
      </div>
      <p class="mb-12 text-base text-center text-gray-500">
        Explore the best skincare brands in Indonesia to achieve healthy and glowing skin.
      </p>
    </div>
  </div>

  <div class="justify-center max-w-6xl px-4 py-4 mx-auto lg:py-0">
  <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2">

  @foreach ($brands as $brand)
    <!-- Skintific -->
    <div class="bg-white rounded-lg shadow-md dark:bg-gray-800" wire:key="{{ $brand->id }}">
    <a href="#" class="">
  <img src="{{ url('storage', $brand->image) }}" alt="{{ $brand->name }}" class="object-contain w-full h-32 rounded-t-lg">
    </a>
      <div class="p-5 text-center">
        <a href="" class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300">{{$brand->name}}</a>
      </div>
    </div>
    @endforeach

  </div>
</div>
    </div>
  </div>
</section>
<!-- category -->
<div class="bg-blue-200 py-20">
  <div class="max-w-xl mx-auto">
    <div class="text-center">
      <div class="relative flex flex-col items-center">
        <h1 class="text-5xl font-bold dark:text-gray-200"> Browse <span class="text-blue-500"> Skincare
          </span> </h1>
        <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
          <div class="flex-1 h-2 bg-blue-200">
          </div>
          <div class="flex-1 h-2 bg-blue-400">
          </div>
          <div class="flex-1 h-2 bg-blue-600">
          </div>
        </div>
      </div>
      <p class="mb-12 text-base text-center text-gray-500">
        Explore skincare products that suit your needs. From sunscreen to body care, we’ve got it all!
      </p>
    </div>
  </div>

  <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-6">

      <!-- Sunscreen -->
      @foreach ($categories as $category)
               <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#" wire:key="{{ $category->id}}">
                  <div class="p-4 md:p-5">
                    <div class="flex justify-between items-center">
                      <div class="flex items-center">
                        <img class="h-[2.375rem] w-[2.375rem] rounded-full" src="{{ url('storage', $category->image) }}" alt="{{ $category->name }}">
                        <div class="ms-3">
                          <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                          {{ $category->name }}
                          </h3>
                        </div>
                      </div>
                      <div class="ps-3">
                        <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="m9 18 6-6-6-6" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </a>
      @endforeach
      

    </div>
  </div>
</div>

    </div>
  </div>
</div>

</main>
