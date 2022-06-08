<div class="ud-header flex w-full items-center bg-white">
    <div class="container">
      <div class="relative -mx-4 flex items-center justify-between">
        <div class="w-60 max-w-full px-4">
          <a href="<?= BASE_URL?>" class="navbar-logo block w-full">
            <img src="<?= BASE_URL?>/assets/images/logo.png" alt="logo" class="header-logo w-full" style="max-width: 100px" />
          </a>
        </div>
        <nav id="navbarCollapse" class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:bg-transparent lg:py-0 lg:px-4 lg:shadow-none xl:px-6">
          <ul class="blcok lg:flex">
            <li class="group relative">
              <a href="#home" class="ud-menu-scroll flex py-2 text-base text-dark lg:inline-flex lg:group-hover:opacity-70"> Home </a>
            </li>
            <li class="group relative">
              <a href="#about" class="ud-menu-scroll flex py-2 text-base text-dark lg:inline-flex lg:px-4 lg:group-hover:opacity-70 xl:ml-12"> About </a>
            </li>
            <li class="group relative">
              <a href="#pricing" class="ud-menu-scroll flex py-2 text-base text-dark lg:inline-flex lg:px-4 lg:group-hover:opacity-70 xl:ml-12"> Pricing </a>
            </li>
          </ul>
        </nav>
        <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
          <a href="<?= BASE_URL?>/auth/login" class="loginBtn py-3 px-7 text-base font-medium text-primary hover:opacity-70"> Sign In </a>
          <a href="<?= BASE_URL?>/auth/register" class="signUpBtn rounded-md bg-primary py-3 px-6 text-base font-medium text-white duration-300 ease-in-out hover:bg-opacity-100 "> Sign Up </a>
        </div>

      </div>
    </div>
  </div>