<?php require_once "../app/views/components/head.php"?>
<!-- ====== Banner Section Start -->
<body class="min-h-screen">
  <?php require_once "../app/views/components/nav.php"?>
  <div class="relative z-10 overflow-hidden bg-primary pt-[120px] pb-[100px] md:pt-[130px] lg:pt-[160px]">
    <div class="container">
      <div class="-mx-4 flex flex-wrap items-center">
        <div class="w-full px-4">
          <div class="text-center">
            <h1 class="text-4xl font-semibold text-white">404 Page</h1>
          </div>
        </div>
      </div>
    </div>
    <div>
      <span class="absolute top-0 left-0 z-[-1]"> 
        <svg width="495" height="470" viewBox="0 0 495 470" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="55" cy="442" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50" />
          <circle cx="446" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
          <path d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z" stroke="white" stroke-opacity="0.08" stroke-width="12" />
        </svg>
      </span>
      <span class="absolute top-0 right-0 z-[-1]">
        <svg width="493" height="470" viewBox="0 0 493 470" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="462" cy="5" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50" />
          <circle cx="49" cy="470" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
          <path d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z" stroke="white" stroke-opacity="0.06" stroke-width="13" />
        </svg>
      </span>
    </div>
  </div>
  <!-- ====== Banner Section End -->

  <!-- ====== 404 Section Start -->
  <section class="bg-white py-14 lg:py-20">
    <div class="container">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4">
          <div class="wow fadeInUp relative mx-auto max-w-[850px] overflow-hidden rounded-lg bg-white py-20 px-8 text-center shadow-lg sm:px-12 md:px-[60px]" data-wow-delay=".2s">
            <h2 class="mb-8 text-3xl font-bold text-dark sm:text-4xl lg:text-[40px] xl:text-[42px]">404 - We couldn't find that page.</h2>
            <h3 class="mb-8 text-xl font-normal text-dark-700 md:text-2xl">Maybe you can find what you need here?</h3>
            <ul class="flex flex-wrap justify-center">
              <li>
                <a href="<?= BASE_URL?>" class="mx-2 my-1 inline-block rounded-md bg-[#f5f8ff] py-3 px-6 text-base font-medium text-dark hover:bg-primary hover:text-white">Home</a>
              </li>
              <li>
                <a href="<?= BASE_URL?>/auth/login" class="mx-2 my-1 inline-block rounded-md bg-[#f5f8ff] py-3 px-6 text-base font-medium text-dark hover:bg-primary hover:text-white">Sign In</a>
              </li>
              <li>
                <a href="<?= BASE_URL?>/auth/register" class="mx-2 my-1 inline-block rounded-md bg-[#f5f8ff] py-3 px-6 text-base font-medium text-dark hover:bg-primary hover:text-white">Sign Up</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== 404 Section End -->
  <?php require_once "../app/views/components/footer.php"?>
</body>
