<?php require_once "../app/views/components/head.php"?>
<body class="flex items-start">
  <div class="overlay md:fixed md:inset-0 md:bg-black/30 md:z-[2] hidden"></div>
  <?php require_once "../app/views/components/sidebar.php"?>
  <div class="w-full md:pl-40">
    <header>
      <div class="w-full px-4 py-8 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between gap-4 md:justify-end">
          <div id="burger" class="md:hidden cursor-pointer text-3xl">
            <i class="fa-solid fa-bars pointer-events-none"></i>
          </div>
          <div class="flex">
            <div class="flex items-center gap-4"> 
              <div class="relative hidden md:block">
                <label class="sr-only" for="search"> Search </label>

                <input class="w-full h-10 pl-4 pr-10 text-sm bg-white border-none rounded-full shadow-sm sm:w-56" id="search" type="search" placeholder="Search website..." />

                <button class="absolute p-2 text-gray-600 transition -translate-y-1/2 rounded-full hover:text-gray-700 bg-gray-50 top-1/2 right-1" type="button" aria-label="Submit Search">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                  </svg>
                </button>
              </div>

              <a href="" class="block p-2.5 text-gray-600 bg-white rounded-full hover:text-gray-700 shrink-0 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
              </a>
            </div>

            <span aria-hidden="true" class="block w-px h-6 bg-gray-200 rounded-full"></span>

            <a href="" class="block shrink-0">
              <img class="object-cover w-10 h-10 rounded-full" src="https://www.hyperui.dev/photos/man-4.jpeg" alt="Simon Lewis" />
            </a>
          </div>
        </div>

        <div class="mt-8">
          <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">Welcome Back, <?= $_SESSION['user_data']['user_name']?></h1>
        </div>
      </div>
    </header>
    <div class="py-10 px-2">
      <?php if(isset($data['userPages']) && $data['userPages']):?>
        <div class="flex px-10 py-4 space-x-4">
          <?php foreach($data['userPages'] as $page):?>
            <div class="w-20">
              <a href="<?= BASE_URL?>/pages/editor/<?= $page['page_name']?>">
                <div class="rounded-md overflow-hidden">
                  <img src="<?= BASE_URL?>/assets/images/lorem.jpg">
                </div>
                <div class="text-center">
                  <p class="text-sm text-gray-600"><?= $page['page_name']?></p>
                </div>
              </a>
            </div>
          <?php endforeach;?>
          <a href="<?= BASE_URL?>/pages/new" class="w-20 h-20 flex justify-center items-center bg-primary rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </a>
        </div>
      <?php else:?>
      <div class="mx-auto w-full max-w-[700px] bg-gray-300 text-center px-20 py-10">
        <h2 class="text-2xl">
          Start building in buildfy
        </h2>
        <p class="mb-10">
        Bring your ideas to life — we can't wait to see what you've got!
        </p>
        <a href="<?= BASE_URL?>/pages/new" class="bg-primary text-white px-8 py-4">
          New Site
        </a>
      </div>

      <?php endif?>
    </div>
  </div>
  <script src="<?= BASE_URL?>/assets/script/sidebar.js"></script>
</body>
