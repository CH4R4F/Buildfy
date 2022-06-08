<?php require_once "../app/views/components/head.php"?>
<body>
  <!-- ====== Navbar Section Start -->
  <?php require_once "../app/views/components/nav.php"?>
  <!-- ====== Navbar Section End -->

  <!-- ====== Hero Section Start -->
  <div id="home" class="relative bg-primary pt-[100px] mb-[300px]">
    <div class="container">
      <div class="-mx-4 flex flex-wrap items-center">
        <div class="w-full px-4">
          <div class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center" data-wow-delay=".2s">
            <h1 class="mb-8 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug md:text-[55px] md:leading-snug">Build Your Unique Online Presence</h1>
            <p class="mx-auto mb-10 max-w-[900px] text-base text-[#e4e4e4] sm:text-lg sm:leading-relaxed md:text-xl md:leading-relaxed">Discover the platform that gives you the freedom to create, design, manage and develop your web presence exactly the way you want.</p>
            <ul class="mb-10 flex flex-wrap items-center justify-center">
              <li>
                <a href="<?= BASE_URL?>/login" class="inline-flex items-center justify-center rounded-lg bg-white py-4 px-6 text-center text-base font-medium text-dark transition duration-300 ease-in-out hover:text-primary hover:shadow-lg sm:px-10">Get Started</a>
              </li>
              <li>
                <a href="#about" class="flex items-center py-4 px-6 text-base font-medium text-white transition duration-300 ease-in-out hover:opacity-70 sm:px-10">
                  Learn More
                  <span class="pl-2">
                    <svg width="20" height="8" viewBox="0 0 20 8" class="fill-current">
                      <path d="M19.2188 2.90632L17.0625 0.343819C16.875 0.125069 16.5312 0.0938193 16.2812 0.281319C16.0625 0.468819 16.0312 0.812569 16.2188 1.06257L18.25 3.46882H0.9375C0.625 3.46882 0.375 3.71882 0.375 4.03132C0.375 4.34382 0.625 4.59382 0.9375 4.59382H18.25L16.2188 7.00007C16.0312 7.21882 16.0625 7.56257 16.2812 7.78132C16.375 7.87507 16.5 7.90632 16.625 7.90632C16.7812 7.90632 16.9375 7.84382 17.0312 7.71882L19.1875 5.15632C19.75 4.46882 19.75 3.53132 19.2188 2.90632Z" />
                    </svg>
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="w-full px-4 max-h-64">
          <div class="wow fadeInUp relative z-10 mx-auto max-w-[845px]" data-wow-delay=".25s">
            <div class=" relative">
              <img src="<?= BASE_URL?>/assets/images/editor.jpg" alt="hero" class=" mx-auto max-w-full rounded-xl drop-shadow-2xl" />
            </div>
            <div class="absolute -bottom-6 -left-14 z-[-1]">
              <svg width="134" height="106" viewBox="0 0 134 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)" fill="#3056D3" />
                <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)" fill="#3056D3" />
                <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)" fill="#3056D3" />
                <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)" fill="#3056D3" />
                <circle cx="60.3333" cy="104" r="1.66667" transform="rotate(-90 60.3333 104)" fill="#3056D3" />
                <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)" fill="#3056D3" />
                <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)" fill="#3056D3" />
                <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)" fill="#3056D3" />
                <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)" fill="#3056D3" />
                <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)" fill="#3056D3" />
                <circle cx="1.66667" cy="89.3333" r="1.66667" transform="rotate(-90 1.66667 89.3333)" fill="#3056D3" />
                <circle cx="16.3333" cy="89.3333" r="1.66667" transform="rotate(-90 16.3333 89.3333)" fill="#3056D3" />
                <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)" fill="#3056D3" />
                <circle cx="45.6667" cy="89.3333" r="1.66667" transform="rotate(-90 45.6667 89.3333)" fill="#3056D3" />
                <circle cx="60.3333" cy="89.3338" r="1.66667" transform="rotate(-90 60.3333 89.3338)" fill="#3056D3" />
                <circle cx="88.6667" cy="89.3338" r="1.66667" transform="rotate(-90 88.6667 89.3338)" fill="#3056D3" />
                <circle cx="117.667" cy="89.3338" r="1.66667" transform="rotate(-90 117.667 89.3338)" fill="#3056D3" />
                <circle cx="74.6667" cy="89.3338" r="1.66667" transform="rotate(-90 74.6667 89.3338)" fill="#3056D3" />
                <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)" fill="#3056D3" />
                <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)" fill="#3056D3" />
                <circle cx="1.66667" cy="74.6673" r="1.66667" transform="rotate(-90 1.66667 74.6673)" fill="#3056D3" />
                <circle cx="1.66667" cy="31.0003" r="1.66667" transform="rotate(-90 1.66667 31.0003)" fill="#3056D3" />
                <circle cx="16.3333" cy="74.6668" r="1.66667" transform="rotate(-90 16.3333 74.6668)" fill="#3056D3" />
                <circle cx="16.3333" cy="31.0003" r="1.66667" transform="rotate(-90 16.3333 31.0003)" fill="#3056D3" />
                <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)" fill="#3056D3" />
                <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)" fill="#3056D3" />
                <circle cx="45.6667" cy="74.6668" r="1.66667" transform="rotate(-90 45.6667 74.6668)" fill="#3056D3" />
                <circle cx="45.6667" cy="31.0003" r="1.66667" transform="rotate(-90 45.6667 31.0003)" fill="#3056D3" />
                <circle cx="60.3333" cy="74.6668" r="1.66667" transform="rotate(-90 60.3333 74.6668)" fill="#3056D3" />
                <circle cx="60.3333" cy="31.0001" r="1.66667" transform="rotate(-90 60.3333 31.0001)" fill="#3056D3" />
                <circle cx="88.6667" cy="74.6668" r="1.66667" transform="rotate(-90 88.6667 74.6668)" fill="#3056D3" />
                <circle cx="88.6667" cy="31.0001" r="1.66667" transform="rotate(-90 88.6667 31.0001)" fill="#3056D3" />
                <circle cx="117.667" cy="74.6668" r="1.66667" transform="rotate(-90 117.667 74.6668)" fill="#3056D3" />
                <circle cx="117.667" cy="31.0001" r="1.66667" transform="rotate(-90 117.667 31.0001)" fill="#3056D3" />
                <circle cx="74.6667" cy="74.6668" r="1.66667" transform="rotate(-90 74.6667 74.6668)" fill="#3056D3" />
                <circle cx="74.6667" cy="31.0001" r="1.66667" transform="rotate(-90 74.6667 31.0001)" fill="#3056D3" />
                <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)" fill="#3056D3" />
                <circle cx="103" cy="31.0001" r="1.66667" transform="rotate(-90 103 31.0001)" fill="#3056D3" />
                <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)" fill="#3056D3" />
                <circle cx="132" cy="31.0001" r="1.66667" transform="rotate(-90 132 31.0001)" fill="#3056D3" />
                <circle cx="1.66667" cy="60.0003" r="1.66667" transform="rotate(-90 1.66667 60.0003)" fill="#3056D3" />
                <circle cx="1.66667" cy="16.3336" r="1.66667" transform="rotate(-90 1.66667 16.3336)" fill="#3056D3" />
                <circle cx="16.3333" cy="60.0003" r="1.66667" transform="rotate(-90 16.3333 60.0003)" fill="#3056D3" />
                <circle cx="16.3333" cy="16.3336" r="1.66667" transform="rotate(-90 16.3333 16.3336)" fill="#3056D3" />
                <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)" fill="#3056D3" />
                <circle cx="31" cy="16.3336" r="1.66667" transform="rotate(-90 31 16.3336)" fill="#3056D3" />
                <circle cx="45.6667" cy="60.0003" r="1.66667" transform="rotate(-90 45.6667 60.0003)" fill="#3056D3" />
                <circle cx="45.6667" cy="16.3336" r="1.66667" transform="rotate(-90 45.6667 16.3336)" fill="#3056D3" />
                <circle cx="60.3333" cy="60.0003" r="1.66667" transform="rotate(-90 60.3333 60.0003)" fill="#3056D3" />
                <circle cx="60.3333" cy="16.3336" r="1.66667" transform="rotate(-90 60.3333 16.3336)" fill="#3056D3" />
                <circle cx="88.6667" cy="60.0003" r="1.66667" transform="rotate(-90 88.6667 60.0003)" fill="#3056D3" />
                <circle cx="88.6667" cy="16.3336" r="1.66667" transform="rotate(-90 88.6667 16.3336)" fill="#3056D3" />
                <circle cx="117.667" cy="60.0003" r="1.66667" transform="rotate(-90 117.667 60.0003)" fill="#3056D3" />
                <circle cx="117.667" cy="16.3336" r="1.66667" transform="rotate(-90 117.667 16.3336)" fill="#3056D3" />
                <circle cx="74.6667" cy="60.0003" r="1.66667" transform="rotate(-90 74.6667 60.0003)" fill="#3056D3" />
                <circle cx="74.6667" cy="16.3336" r="1.66667" transform="rotate(-90 74.6667 16.3336)" fill="#3056D3" />
                <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)" fill="#3056D3" />
                <circle cx="103" cy="16.3336" r="1.66667" transform="rotate(-90 103 16.3336)" fill="#3056D3" />
                <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)" fill="#3056D3" />
                <circle cx="132" cy="16.3336" r="1.66667" transform="rotate(-90 132 16.3336)" fill="#3056D3" />
                <circle cx="1.66667" cy="45.3336" r="1.66667" transform="rotate(-90 1.66667 45.3336)" fill="#3056D3" />
                <circle cx="1.66667" cy="1.66683" r="1.66667" transform="rotate(-90 1.66667 1.66683)" fill="#3056D3" />
                <circle cx="16.3333" cy="45.3336" r="1.66667" transform="rotate(-90 16.3333 45.3336)" fill="#3056D3" />
                <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(-90 16.3333 1.66683)" fill="#3056D3" />
                <circle cx="31" cy="45.3336" r="1.66667" transform="rotate(-90 31 45.3336)" fill="#3056D3" />
                <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)" fill="#3056D3" />
                <circle cx="45.6667" cy="45.3336" r="1.66667" transform="rotate(-90 45.6667 45.3336)" fill="#3056D3" />
                <circle cx="45.6667" cy="1.66683" r="1.66667" transform="rotate(-90 45.6667 1.66683)" fill="#3056D3" />
                <circle cx="60.3333" cy="45.3338" r="1.66667" transform="rotate(-90 60.3333 45.3338)" fill="#3056D3" />
                <circle cx="60.3333" cy="1.66707" r="1.66667" transform="rotate(-90 60.3333 1.66707)" fill="#3056D3" />
                <circle cx="88.6667" cy="45.3338" r="1.66667" transform="rotate(-90 88.6667 45.3338)" fill="#3056D3" />
                <circle cx="88.6667" cy="1.66707" r="1.66667" transform="rotate(-90 88.6667 1.66707)" fill="#3056D3" />
                <circle cx="117.667" cy="45.3338" r="1.66667" transform="rotate(-90 117.667 45.3338)" fill="#3056D3" />
                <circle cx="117.667" cy="1.66707" r="1.66667" transform="rotate(-90 117.667 1.66707)" fill="#3056D3" />
                <circle cx="74.6667" cy="45.3338" r="1.66667" transform="rotate(-90 74.6667 45.3338)" fill="#3056D3" />
                <circle cx="74.6667" cy="1.66707" r="1.66667" transform="rotate(-90 74.6667 1.66707)" fill="#3056D3" />
                <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)" fill="#3056D3" />
                <circle cx="103" cy="1.66707" r="1.66667" transform="rotate(-90 103 1.66707)" fill="#3056D3" />
                <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)" fill="#3056D3" />
                <circle cx="132" cy="1.66707" r="1.66667" transform="rotate(-90 132 1.66707)" fill="#3056D3" />
              </svg>
            </div>
            <div class="absolute -top-6 -right-6 z-[-1]">
              <svg width="134" height="106" viewBox="0 0 134 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)" fill="white" />
                <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)" fill="white" />
                <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)" fill="white" />
                <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)" fill="white" />
                <circle cx="60.3333" cy="104" r="1.66667" transform="rotate(-90 60.3333 104)" fill="white" />
                <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)" fill="white" />
                <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)" fill="white" />
                <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)" fill="white" />
                <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)" fill="white" />
                <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)" fill="white" />
                <circle cx="1.66667" cy="89.3333" r="1.66667" transform="rotate(-90 1.66667 89.3333)" fill="white" />
                <circle cx="16.3333" cy="89.3333" r="1.66667" transform="rotate(-90 16.3333 89.3333)" fill="white" />
                <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)" fill="white" />
                <circle cx="45.6667" cy="89.3333" r="1.66667" transform="rotate(-90 45.6667 89.3333)" fill="white" />
                <circle cx="60.3333" cy="89.3338" r="1.66667" transform="rotate(-90 60.3333 89.3338)" fill="white" />
                <circle cx="88.6667" cy="89.3338" r="1.66667" transform="rotate(-90 88.6667 89.3338)" fill="white" />
                <circle cx="117.667" cy="89.3338" r="1.66667" transform="rotate(-90 117.667 89.3338)" fill="white" />
                <circle cx="74.6667" cy="89.3338" r="1.66667" transform="rotate(-90 74.6667 89.3338)" fill="white" />
                <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)" fill="white" />
                <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)" fill="white" />
                <circle cx="1.66667" cy="74.6673" r="1.66667" transform="rotate(-90 1.66667 74.6673)" fill="white" />
                <circle cx="1.66667" cy="31.0003" r="1.66667" transform="rotate(-90 1.66667 31.0003)" fill="white" />
                <circle cx="16.3333" cy="74.6668" r="1.66667" transform="rotate(-90 16.3333 74.6668)" fill="white" />
                <circle cx="16.3333" cy="31.0003" r="1.66667" transform="rotate(-90 16.3333 31.0003)" fill="white" />
                <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)" fill="white" />
                <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)" fill="white" />
                <circle cx="45.6667" cy="74.6668" r="1.66667" transform="rotate(-90 45.6667 74.6668)" fill="white" />
                <circle cx="45.6667" cy="31.0003" r="1.66667" transform="rotate(-90 45.6667 31.0003)" fill="white" />
                <circle cx="60.3333" cy="74.6668" r="1.66667" transform="rotate(-90 60.3333 74.6668)" fill="white" />
                <circle cx="60.3333" cy="31.0001" r="1.66667" transform="rotate(-90 60.3333 31.0001)" fill="white" />
                <circle cx="88.6667" cy="74.6668" r="1.66667" transform="rotate(-90 88.6667 74.6668)" fill="white" />
                <circle cx="88.6667" cy="31.0001" r="1.66667" transform="rotate(-90 88.6667 31.0001)" fill="white" />
                <circle cx="117.667" cy="74.6668" r="1.66667" transform="rotate(-90 117.667 74.6668)" fill="white" />
                <circle cx="117.667" cy="31.0001" r="1.66667" transform="rotate(-90 117.667 31.0001)" fill="white" />
                <circle cx="74.6667" cy="74.6668" r="1.66667" transform="rotate(-90 74.6667 74.6668)" fill="white" />
                <circle cx="74.6667" cy="31.0001" r="1.66667" transform="rotate(-90 74.6667 31.0001)" fill="white" />
                <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)" fill="white" />
                <circle cx="103" cy="31.0001" r="1.66667" transform="rotate(-90 103 31.0001)" fill="white" />
                <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)" fill="white" />
                <circle cx="132" cy="31.0001" r="1.66667" transform="rotate(-90 132 31.0001)" fill="white" />
                <circle cx="1.66667" cy="60.0003" r="1.66667" transform="rotate(-90 1.66667 60.0003)" fill="white" />
                <circle cx="1.66667" cy="16.3336" r="1.66667" transform="rotate(-90 1.66667 16.3336)" fill="white" />
                <circle cx="16.3333" cy="60.0003" r="1.66667" transform="rotate(-90 16.3333 60.0003)" fill="white" />
                <circle cx="16.3333" cy="16.3336" r="1.66667" transform="rotate(-90 16.3333 16.3336)" fill="white" />
                <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)" fill="white" />
                <circle cx="31" cy="16.3336" r="1.66667" transform="rotate(-90 31 16.3336)" fill="white" />
                <circle cx="45.6667" cy="60.0003" r="1.66667" transform="rotate(-90 45.6667 60.0003)" fill="white" />
                <circle cx="45.6667" cy="16.3336" r="1.66667" transform="rotate(-90 45.6667 16.3336)" fill="white" />
                <circle cx="60.3333" cy="60.0003" r="1.66667" transform="rotate(-90 60.3333 60.0003)" fill="white" />
                <circle cx="60.3333" cy="16.3336" r="1.66667" transform="rotate(-90 60.3333 16.3336)" fill="white" />
                <circle cx="88.6667" cy="60.0003" r="1.66667" transform="rotate(-90 88.6667 60.0003)" fill="white" />
                <circle cx="88.6667" cy="16.3336" r="1.66667" transform="rotate(-90 88.6667 16.3336)" fill="white" />
                <circle cx="117.667" cy="60.0003" r="1.66667" transform="rotate(-90 117.667 60.0003)" fill="white" />
                <circle cx="117.667" cy="16.3336" r="1.66667" transform="rotate(-90 117.667 16.3336)" fill="white" />
                <circle cx="74.6667" cy="60.0003" r="1.66667" transform="rotate(-90 74.6667 60.0003)" fill="white" />
                <circle cx="74.6667" cy="16.3336" r="1.66667" transform="rotate(-90 74.6667 16.3336)" fill="white" />
                <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)" fill="white" />
                <circle cx="103" cy="16.3336" r="1.66667" transform="rotate(-90 103 16.3336)" fill="white" />
                <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)" fill="white" />
                <circle cx="132" cy="16.3336" r="1.66667" transform="rotate(-90 132 16.3336)" fill="white" />
                <circle cx="1.66667" cy="45.3336" r="1.66667" transform="rotate(-90 1.66667 45.3336)" fill="white" />
                <circle cx="1.66667" cy="1.66683" r="1.66667" transform="rotate(-90 1.66667 1.66683)" fill="white" />
                <circle cx="16.3333" cy="45.3336" r="1.66667" transform="rotate(-90 16.3333 45.3336)" fill="white" />
                <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(-90 16.3333 1.66683)" fill="white" />
                <circle cx="31" cy="45.3336" r="1.66667" transform="rotate(-90 31 45.3336)" fill="white" />
                <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)" fill="white" />
                <circle cx="45.6667" cy="45.3336" r="1.66667" transform="rotate(-90 45.6667 45.3336)" fill="white" />
                <circle cx="45.6667" cy="1.66683" r="1.66667" transform="rotate(-90 45.6667 1.66683)" fill="white" />
                <circle cx="60.3333" cy="45.3338" r="1.66667" transform="rotate(-90 60.3333 45.3338)" fill="white" />
                <circle cx="60.3333" cy="1.66707" r="1.66667" transform="rotate(-90 60.3333 1.66707)" fill="white" />
                <circle cx="88.6667" cy="45.3338" r="1.66667" transform="rotate(-90 88.6667 45.3338)" fill="white" />
                <circle cx="88.6667" cy="1.66707" r="1.66667" transform="rotate(-90 88.6667 1.66707)" fill="white" />
                <circle cx="117.667" cy="45.3338" r="1.66667" transform="rotate(-90 117.667 45.3338)" fill="white" />
                <circle cx="117.667" cy="1.66707" r="1.66667" transform="rotate(-90 117.667 1.66707)" fill="white" />
                <circle cx="74.6667" cy="45.3338" r="1.66667" transform="rotate(-90 74.6667 45.3338)" fill="white" />
                <circle cx="74.6667" cy="1.66707" r="1.66667" transform="rotate(-90 74.6667 1.66707)" fill="white" />
                <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)" fill="white" />
                <circle cx="103" cy="1.66707" r="1.66667" transform="rotate(-90 103 1.66707)" fill="white" />
                <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)" fill="white" />
                <circle cx="132" cy="1.66707" r="1.66667" transform="rotate(-90 132 1.66707)" fill="white" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ====== Hero Section End -->

  <!-- ====== Features Section Start -->
  <section id="about" class="pt-20 pb-8 lg:pt-[120px] lg:pb-[70px]">
    <div class="container">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4">
          <div class="mb-12 max-w-[620px] lg:mb-20">
            <span class="mb-2 block text-lg font-semibold text-primary"> Features </span>
            <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[42px]">Main Features Of Buildfy</h2>
            <p class="text-lg leading-relaxed text-body-color sm:text-xl sm:leading-relaxed">Customize your online presence with our features that will take your website to the next level</p>
          </div>
        </div>
      </div>
      <div class="-mx-4 flex justify-center flex-wrap">
        <div class="w-full px-4 lg:w-1/3 max-w-[350px]">
          <div class="wow fadeInUp group mb-12 bg-white" data-wow-delay=".15s">
            <div class="relative z-10 mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-primary">
              <span class="absolute top-0 left-0 z-[-1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-2xl bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
              <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M29.5312 21.6562L28.6563 21.1641L29.6953 20.5625C30.7344 19.9062 31.3359 18.8125 31.2812 17.6094C31.2266 16.4063 30.625 15.3125 29.5312 14.7109L27.8906 13.7813L29.6406 12.6875C30.6797 12.0313 31.2812 10.9375 31.2266 9.73438C31.1719 8.53125 30.5703 7.4375 29.4766 6.83594L19.25 1.09375C18.2109 0.492187 16.9531 0.546875 15.9141 1.09375L5.41406 7.21875C4.375 7.82031 3.71875 8.91406 3.71875 10.1172C3.71875 11.3203 4.375 12.4141 5.41406 13.0156L7.10938 14L5.41406 14.9844C4.375 15.5859 3.71875 16.6797 3.71875 17.8828C3.71875 19.0859 4.32031 20.1797 5.41406 20.7812L6.39844 21.3281L5.46875 21.875C4.42969 22.4766 3.77344 23.5703 3.77344 24.7734C3.77344 25.9766 4.375 27.0703 5.46875 27.6719L15.9141 33.6875C16.4609 34.0156 17.0078 34.125 17.6094 34.125C18.2109 34.125 18.8125 33.9609 19.3594 33.6328L29.6953 27.2891C30.7344 26.6328 31.3359 25.5391 31.2812 24.3359C31.2266 23.2969 30.625 22.2031 29.5312 21.6562ZM5.63281 10.1172C5.63281 9.57031 5.90625 9.13281 6.34375 8.85938L16.8438 2.78906C17.0625 2.67969 17.3359 2.57031 17.5547 2.57031C17.7734 2.57031 18.0469 2.625 18.2656 2.73437L28.5469 8.47656C28.9844 8.75 29.2578 9.1875 29.3125 9.73438C29.3125 10.2812 29.0391 10.7188 28.6016 10.9922L18.3203 17.3906C17.8828 17.6641 17.2812 17.6641 16.8438 17.3906L6.39844 11.375C5.90625 11.1562 5.63281 10.6641 5.63281 10.1172ZM5.63281 17.9375C5.63281 17.3906 5.90625 16.9531 6.34375 16.6797L9.02344 15.1484L15.8594 19.0859C16.4062 19.4141 16.9531 19.5234 17.5547 19.5234C18.1562 19.5234 18.7578 19.3594 19.3047 19.0312L26.0312 14.875L28.6016 16.2969C29.0391 16.5703 29.3125 17.0078 29.3672 17.5547C29.3672 18.1016 29.0938 18.5391 28.6563 18.8125L18.3203 25.2656C17.8828 25.5391 17.2812 25.5391 16.8438 25.2656L6.39844 19.25C5.90625 18.9766 5.63281 18.4844 5.63281 17.9375ZM28.6563 25.8125L18.3203 32.2109C17.8828 32.4844 17.2812 32.4844 16.8438 32.2109L6.39844 26.1953C5.96094 25.9219 5.6875 25.4844 5.6875 24.9375C5.6875 24.3906 5.96094 23.9531 6.39844 23.6797L8.3125 22.5859L15.8594 26.9609C16.4062 27.2891 16.9531 27.3984 17.5547 27.3984C18.1562 27.3984 18.7578 27.2344 19.3047 26.9062L26.7969 22.2578L28.6563 23.2969C29.0938 23.5703 29.3672 24.0078 29.4219 24.5547C29.3672 25.0469 29.0938 25.5391 28.6563 25.8125Z"
                  fill="white"
                />
              </svg>
            </div>
            <h4 class="mb-3 text-xl font-bold text-dark">Free Templates</h4>
            <p class="mb-8 text-body-color lg:mb-11">Buildfy provides a lot of customized, responsive, and free templates to use for basic blan.</p>
            <a href="javascript:void(0)" class="text-base font-medium text-body-color hover:text-primary"> Learn More </a>
          </div>
        </div>
        <div class="w-full px-4 lg:w-1/3 max-w-[350px]">
          <div class="wow fadeInUp group mb-12 bg-white" data-wow-delay=".2s">
            <div class="relative z-10 mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-primary">
              <span class="absolute top-0 left-0 z-[-1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-2xl bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
              <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.7734 14.3281H3.82813C2.07813 14.3281 0.65625 12.9062 0.65625 11.1562V4.21094C0.65625 2.46094 2.07813 1.03906 3.82813 1.03906H10.7734C12.5234 1.03906 13.9453 2.46094 13.9453 4.21094V11.1562C13.9453 12.9062 12.5234 14.3281 10.7734 14.3281ZM3.82813 2.95312C3.17188 2.95312 2.57031 3.5 2.57031 4.21094V11.1562C2.57031 11.8125 3.11719 12.4141 3.82813 12.4141H10.7734C11.4297 12.4141 12.0313 11.8672 12.0313 11.1562V4.21094C12.0313 3.55469 11.4844 2.95312 10.7734 2.95312H3.82813Z" fill="white" />
                <path d="M31.1719 14.3281H24.2266C22.4766 14.3281 21.0547 12.9062 21.0547 11.1562V4.21094C21.0547 2.46094 22.4766 1.03906 24.2266 1.03906H31.1719C32.9219 1.03906 34.3438 2.46094 34.3438 4.21094V11.1562C34.3438 12.9062 32.9219 14.3281 31.1719 14.3281ZM24.2266 2.95312C23.5703 2.95312 22.9688 3.5 22.9688 4.21094V11.1562C22.9688 11.8125 23.5156 12.4141 24.2266 12.4141H31.1719C31.8281 12.4141 32.4297 11.8672 32.4297 11.1562V4.21094C32.4297 3.55469 31.8828 2.95312 31.1719 2.95312H24.2266Z" fill="white" />
                <path d="M10.7734 33.9609H3.82813C2.07813 33.9609 0.65625 32.5391 0.65625 30.7891V23.8438C0.65625 22.0938 2.07813 20.6719 3.82813 20.6719H10.7734C12.5234 20.6719 13.9453 22.0938 13.9453 23.8438V30.7891C13.9453 32.5391 12.5234 33.9609 10.7734 33.9609ZM3.82813 22.5859C3.17188 22.5859 2.57031 23.1328 2.57031 23.8438V30.7891C2.57031 31.4453 3.11719 32.0469 3.82813 32.0469H10.7734C11.4297 32.0469 12.0313 31.5 12.0313 30.7891V23.8438C12.0313 23.1875 11.4844 22.5859 10.7734 22.5859H3.82813Z" fill="white" />
                <path d="M31.1719 33.9609H24.2266C22.4766 33.9609 21.0547 32.5391 21.0547 30.7891V23.8438C21.0547 22.0938 22.4766 20.6719 24.2266 20.6719H31.1719C32.9219 20.6719 34.3438 22.0938 34.3438 23.8438V30.7891C34.3438 32.5391 32.9219 33.9609 31.1719 33.9609ZM24.2266 22.5859C23.5703 22.5859 22.9688 23.1328 22.9688 23.8438V30.7891C22.9688 31.4453 23.5156 32.0469 24.2266 32.0469H31.1719C31.8281 32.0469 32.4297 31.5 32.4297 30.7891V23.8438C32.4297 23.1875 31.8828 22.5859 31.1719 22.5859H24.2266Z" fill="white" />
              </svg>
            </div>
            <h4 class="mb-3 text-xl font-bold text-dark">Easy To Use</h4>
            <p class="mb-8 text-body-color lg:mb-11">Buildfy provides many styled components to use so your website becomes a collection of blocks</p>
            <a href="javascript:void(0)" class="text-base font-medium text-body-color hover:text-primary"> Learn More </a>
          </div>
        </div>
        <div class="w-full px-4 lg:w-1/3 max-w-[350px]">
          <div class="wow fadeInUp group mb-12 bg-white" data-wow-delay=".25s">
            <div class="relative z-10 mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-primary">
              <span class="absolute top-0 left-0 z-[-1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-2xl bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
              <svg width="35" height="35" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M49.8062 23.3187L43.875 17.3875C43.3063 16.8187 42.4125 16.8187 41.8438 17.3875C41.275 17.9562 41.275 18.85 41.8438 19.4187L46.9625 24.6187H27.4625V4.87498L32.5812 10.075C33.15 10.6437 34.0437 10.6437 34.6125 10.075C35.1812 9.50623 35.1812 8.61248 34.6125 8.04373L28.6812 2.11248C27.95 1.38123 26.975 0.974976 26 0.974976C24.9438 0.974976 24.05 1.38123 23.3188 2.11248L17.3875 8.04373C16.8187 8.61248 16.8187 9.50623 17.3875 10.075C17.6312 10.3187 18.0375 10.4812 18.3625 10.4812C18.6875 10.4812 19.0937 10.3187 19.3375 10.075L24.6187 4.87498V24.5375H4.95625L10.075 19.3375C10.6437 18.7687 10.6437 17.875 10.075 17.3062C9.50625 16.7375 8.6125 16.7375 8.04375 17.3062L2.1125 23.2375C0.65 24.7 0.65 27.1375 2.1125 28.6L8.04375 34.5312C8.2875 34.775 8.69375 34.9375 9.01875 34.9375C9.34375 34.9375 9.75 34.775 9.99375 34.5312C10.5625 33.9625 10.5625 33.0687 9.99375 32.5L4.79375 27.3H24.4563V47.125L19.2563 41.925C18.6875 41.3562 17.7938 41.3562 17.225 41.925C16.6563 42.4937 16.6563 43.3875 17.225 43.9562L23.1562 49.8875C23.8875 50.6187 24.8625 51.025 25.8375 51.025C26.8937 51.025 27.7875 50.6187 28.5187 49.8875L34.45 43.9562C35.0188 43.3875 35.0188 42.4937 34.45 41.925C33.8813 41.3562 32.9875 41.3562 32.4188 41.925L27.4625 47.125V27.3812H47.0438L41.8438 32.5812C41.275 33.15 41.275 34.0437 41.8438 34.6125C42.0875 34.8562 42.4938 35.0187 42.8188 35.0187C43.1438 35.0187 43.55 34.8562 43.7938 34.6125L49.725 28.6812C51.2688 27.2187 51.2687 24.7812 49.8062 23.3187Z"
                  fill="white"
                />
              </svg>
            </div>
            <h4 class="mb-3 text-xl font-bold text-dark">Responsive Layouts</h4>
            <p class="mb-8 text-body-color lg:mb-11">With Buildfy you can handle all screen sizes and make your websites looks cool on all devices</p>
            <a href="javascript:void(0)" class="text-base font-medium text-body-color hover:text-primary"> Learn More </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Features Section End -->

  <!-- ====== Pricing Section Start -->
  <section id="pricing" class="relative z-20 overflow-hidden bg-white pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
    <div class="container">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4">
          <div class=" mb-[60px] max-w-[620px] lg:mb-20">
            <span class="mb-2 block text-lg font-semibold text-primary"> Pricing</span>
            <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]">Our Pricing Plan</h2>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap items-center justify-center">
        <div class="w-full md:w-1/2 lg:w-1/3">
          <div class="wow fadeInUp relative z-10 mb-10 overflow-hidden rounded-xl border border-primary border-opacity-20 bg-white py-10 px-8 text-center shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-12" data-wow-delay=".15s">
            <span class="mb-2 block text-base font-medium uppercase text-dark"> STARTING FROM </span>
            <h2 class="mb-9 text-[28px] font-semibold text-primary">FREE</h2>

            <div class="mb-10">
              <p class="mb-1 text-base font-medium leading-loose text-body-color">1 User</p>
              <p class="mb-1 text-base font-medium leading-loose text-body-color">1 Website</p>
              <p class="mb-1 text-base font-medium leading-loose text-body-color">Limited Website Components</p>
              <p class="mb-1 text-base font-medium leading-loose text-body-color">Limited Templates</p>
            </div>
            <div class="w-full">
              <a href="<?= BASE_URL?>/login" class="inline-block rounded-full border border-[#D4DEFF] bg-transparent py-4 px-11 text-center text-base font-medium text-primary transition duration-300 ease-in-out hover:border-primary hover:bg-primary hover:text-white">Get Started</a>
            </div>
            <span class="absolute left-0 bottom-0 z-[-1] block h-14 w-14 rounded-tr-full bg-primary"> </span>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3">
          <div class="wow fadeInUp relative z-10 mb-10 overflow-hidden rounded-xl bg-primary bg-gradient-to-b from-primary to-[#179BEE] py-10 px-8 text-center shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-12" data-wow-delay=".1s">
            <span class="mb-5 inline-block rounded-full border border-white bg-white py-2 px-6 text-base font-semibold uppercase text-primary"> POPULAR </span>
            <span class="mb-2 block text-base font-medium uppercase text-white"> STARTING FROM </span>
            <h2 class="mb-9 text-[28px] font-semibold text-white">$ 29.99/mo</h2>

            <div class="mb-10">
              <p class="mb-1 text-base font-medium leading-loose text-white">3 Users</p>
              <p class="mb-1 text-base font-medium leading-loose text-white">10 Websites</p>
              <p class="mb-1 text-base font-medium leading-loose text-white">All UI components</p>
              <p class="mb-1 text-base font-medium leading-loose text-white">Unlimited Templates</p>
              <p class="mb-1 text-base font-medium leading-loose text-white">dynamic and interactive features</p>
              <p class="mb-1 text-base font-medium leading-loose text-white">24 / 7 technical support</p>
            </div>
            <div class="w-full">
              <a href="javascript:void(0)" class="inline-block rounded-full border border-white bg-white py-4 px-11 text-center text-base font-medium text-dark transition duration-300 ease-in-out hover:border-dark hover:bg-dark hover:text-white"> Purchase Now </a>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3">
          <div
            class="wow fadeInUp relative z-10 mb-10 overflow-hidden rounded-xl border border-primary border-opacity-20 bg-white py-10 px-8 text-center shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-12"
            data-wow-delay=".15s
              "
          >
            <span class="mb-2 block text-base font-medium uppercase text-dark"> STARTING FROM </span>
            <h2 class="mb-9 text-[28px] font-semibold text-primary">$ 99.99/mo</h2>

            <div class="mb-10">
              <p class="mb-1 text-base font-medium leading-loose text-body-color">
                This plan provides full access to all features of buildfy and tech support etc..
                if you are planning to use buildfy on your own way then let’s talk about it
              </p>
            </div>
            <div class="w-full">
              <a href="javascript:void(0)" class="inline-block rounded-full border border-[#D4DEFF] bg-transparent py-4 px-11 text-center text-base font-medium text-primary transition duration-300 ease-in-out hover:border-primary hover:bg-primary hover:text-white"> Purchase Now </a>
            </div>

            <span class="absolute right-0 top-0 z-[-1] block h-14 w-14 rounded-bl-full bg-secondary"> </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Pricing Section End -->

  <!-- ====== Testimonials Start ====== -->
  <section id="testimonials" class="pt-20 md:pt-[120px]">
    <div class="container px-4">
      <div class="flex flex-wrap">
        <div class="mx-4 w-full">
          <div class="mb-[60px] max-w-[620px] lg:mb-20">
            <span class="mb-2 block text-lg font-semibold text-primary"> Testimonials </span>
            <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[42px]">What our Client Say</h2>
          </div>  
        </div>
      </div>

      <div class="flex flex-wrap">
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
          <div
            class="ud-single-testimonial wow fadeInUp mb-12 bg-white p-8 shadow-testimonial"
            data-wow-delay=".1s">
            <div class="ud-testimonial-ratings mb-3 flex items-center">
              <span class="mr-1 text-[#fbb040]">
                <svg width="18" height="16" viewBox="0 0 18 16" class="fill-current">
                  <path d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z" />
                </svg>
              </span>
              <span class="mr-1 text-[#fbb040]">
                <svg width="18" height="16" viewBox="0 0 18 16" class="fill-current">
                  <path d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z" />
                </svg>
              </span>
              <span class="mr-1 text-[#fbb040]">
                <svg width="18" height="16" viewBox="0 0 18 16" class="fill-current">
                  <path d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z" />
                </svg>
              </span>
              <span class="mr-1 text-[#fbb040]">
                <svg width="18" height="16" viewBox="0 0 18 16" class="fill-current">
                  <path d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z" />
                </svg>
              </span>
              <span class="mr-1 text-[#fbb040]">
                <svg width="18" height="16" viewBox="0 0 18 16" class="fill-current">
                  <path d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z" />
                </svg>
              </span>
            </div>
            <div class="ud-testimonial-content mb-6">
              <p class="text-base tracking-wide text-body-color">“Our members are so impressed. It's intuitive. It's clean. It's distraction free. If you're building a community.</p>
            </div>
            <div class="ud-testimonial-info flex items-center">
              <div class="ud-testimonial-image mr-5 h-[50px] w-[50px] overflow-hidden rounded-full">
                <img src="assets/images/maheer.jpg" alt="author" />
              </div>
              <div class="ud-testimonial-meta">
                <h4 class="text-sm font-semibold">Maheer Nour-Eddin</h4>
                <p class="text-xs text-[#969696]">Founder @camel</p>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
          <div
            class="ud-single-testimonial wow fadeInUp mb-12 bg-white p-8 shadow-testimonial"
            data-wow-delay=".15s
              "
          >
            <div class="ud-testimonial-ratings mb-3 flex items-center">
              <span class="mr-1 text-[#fbb040]">
                <svg width="18" height="16" viewBox="0 0 18 16" class="fill-current">
                  <path d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z" />
                </svg>
              </span>
              <span class="mr-1 text-[#fbb040]">
                <svg width="18" height="16" viewBox="0 0 18 16" class="fill-current">
                  <path d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z" />
                </svg>
              </span>
              <span class="mr-1 text-[#fbb040]">
                <svg width="18" height="16" viewBox="0 0 18 16" class="fill-current">
                  <path d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z" />
                </svg>
              </span>
              <span class="mr-1 text-[#fbb040]">
                <svg width="18" height="16" viewBox="0 0 18 16" class="fill-current">
                  <path d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z" />
                </svg>
              </span>
              <span class="mr-1 text-[#fbb040]">
                <svg width="18" height="16" viewBox="0 0 18 16" class="fill-current">
                  <path d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z" />
                </svg>
              </span>
            </div>
            <div class="ud-testimonial-content mb-6">
              <p class="text-base tracking-wide text-body-color">“Our members are so impressed. It's intuitive. It's clean. It's distraction free. If you're building a community.</p>
            </div>
            <div class="ud-testimonial-info flex items-center">
              <div class="ud-testimonial-image mr-5 h-[50px] w-[50px] overflow-hidden rounded-full">
                <img src="assets/images/bader.jpg" alt="author" />
              </div>
              <div class="ud-testimonial-meta">
                <h4 class="text-sm font-semibold">Bader Abourial</h4>
                <p class="text-xs text-[#969696]">Software Engineer @capgemini</p>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
          <div
            class="ud-single-testimonial wow fadeInUp mb-12 bg-white p-8 shadow-testimonial"
            data-wow-delay=".2s
              "
          >
            <div class="ud-testimonial-ratings mb-3 flex items-center">
              <span class="mr-1 text-[#fbb040]">
                <svg width="18" height="16" viewBox="0 0 18 16" class="fill-current">
                  <path d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z" />
                </svg>
              </span>
              <span class="mr-1 text-[#fbb040]">
                <svg width="18" height="16" viewBox="0 0 18 16" class="fill-current">
                  <path d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z" />
                </svg>
              </span>
              <span class="mr-1 text-[#fbb040]">
                <svg width="18" height="16" viewBox="0 0 18 16" class="fill-current">
                  <path d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z" />
                </svg>
              </span>
              <span class="mr-1 text-[#fbb040]">
                <svg width="18" height="16" viewBox="0 0 18 16" class="fill-current">
                  <path d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z" />
                </svg>
              </span>
              <span class="mr-1 text-[#fbb040]">
                <svg width="18" height="16" viewBox="0 0 18 16" class="fill-current">
                  <path d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z" />
                </svg>
              </span>
            </div>
            <div class="ud-testimonial-content mb-6">
              <p class="text-base tracking-wide text-body-color">“Our members are so impressed. It's intuitive. It's clean. It's distraction free. If you're building a community.</p>
            </div>
            <div class="ud-testimonial-info flex items-center">
              <div class="ud-testimonial-image mr-5 h-[50px] w-[50px] overflow-hidden rounded-full">
                <img src="assets/images/maryem.jpg" alt="author" />
              </div>
              <div class="ud-testimonial-meta">
                <h4 class="text-sm font-semibold">Elhajouji Meryem</h4>
                <p class="text-xs text-[#969696]">Software Developer @netlify</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap">
        <div class="mx-4 w-full">
          <div class="wow fadeInUp" data-wow-delay=".2s">
            <div class="ud-title mb-8">
              <h6 class="relative inline-flex items-center text-xs font-normal text-body-color">
                Some Of Our Clients
                <span class="ml-4 inline-block h-[1px] w-8 bg-[#afb2b5]"></span>
              </h6>
            </div>
            <div class="ud-brands-logo flex flex-wrap items-center">
              <div class="ud-single-logo mr-10 mb-5 max-w-[140px]">
                <a href="https://simplon.co/" target="_blank" rel="nofollow noopner">
                  <img src="assets/images/simplon.png" alt="simplon" class="grayscale duration-300 hover:filter-none" />
                </a>
              </div>
              <div class="ud-single-logo mr-10 mb-5 max-w-[140px]">
                <a href="https://ocpgroup.ma" target="_blank" rel="nofollow noopner">
                  <img src="assets/images/ocp.png" alt="ocp group" class="grayscale duration-300 hover:filter-none" />
                </a>
              </div>
              <div class="ud-single-logo mr-10 mb-5 max-w-[140px]">
                <a href="https://www.capgemini.com/" target="_blank" rel="nofollow noopner">
                  <img src="assets/images/capgemini.png" alt="capgemini " class="grayscale duration-300 hover:filter-none" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Testimonials End ====== -->

<?php require_once "../app/views/components/footer.php"?>

  <!-- ====== All Scripts -->

  <script src="assets/script/index.js"></script>
  <script>
    // ==== for menu scroll
    const pageLink = document.querySelectorAll(".ud-menu-scroll");

    pageLink.forEach((elem) => {
      elem.addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector(elem.getAttribute("href")).scrollIntoView({
          behavior: "smooth",
          offsetTop: 1 - 60,
        });
      });
    });
    
    // section menu active
    // function onScroll(event) {
    //   const sections = document.querySelectorAll(".ud-menu-scroll");
    //   const scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

    //   for (let i = 0; i < sections.length; i++) {
    //     const currLink = sections[i];
    //     const val = currLink.getAttribute("href");
    //     const refElement = document.querySelector(val);
    //     const scrollTopMinus = scrollPos + 73;
    //     if (refElement.offsetTop <= scrollTopMinus && refElement.offsetTop + refElement.offsetHeight > scrollTopMinus) {
    //       document.querySelector(".ud-menu-scroll").classList.remove("active");
    //       currLink.classList.add("active");
    //     } else {
    //       currLink.classList.remove("active");
    //     }
    //   }
    // }

    // window.document.addEventListener("scroll", onScroll);
  </script>
</body>
