<?php require_once "../app/views/components/head.php"?>
<body class="flex items-start">
  <div class="hidden popupOverlay fixed inset-0 bg-black/30 z-[2]"></div>
  <div data-role="newProject" class="hidden z-10 w-full max-w-xs mx-auto absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <div class="flex flex-wrap -mx-3">
        <div class="w-full px-3">
          <p class="text-red-500 text-lg mb-4" id="nameError"></p>
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Project Name
          </label>
          <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="projectName"
            type="text"
            placeholder="Project Name"
          />
          <input type="hidden" name="projectId" id="projectId">
          <button id="createProject" class="w-full px-3 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded mt-4">
            Create
          </button>
        </div>
      </div>
    </div>
  </div>
  
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
                <label class="sr-only" for="search">Search</label>

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
      </div>
    </header>
    <div class="w-full px-4 py-8 sm:px-6 lg:px-8">
      <!-- new project -->
      <div>
        <h2 class="text-4xl mb-10">New Project</h2>
        <div class="flex flex-wrap justify-center content-center gap-10">
          <a href="#" class="newProject block w-full border border-gray-500 hover:shadow-lg duration-200 transition-all max-w-[250px] mx-auto md:m-0" data-id="0">
            <div>
              <img src="<?= BASE_URL?>/assets/images/blank.png" alt="">
              <div class="p-4 flex justify-between border-t-2 ">
                <p class="font-bold">Blank Site</p>
                <!-- gift icon fontawesom -->
                <p class="text-gray-400">
                  <i class="fa-solid fa-gift"></i> free
                </p>
              </div>
            </div>
          </a>
          <?php foreach($data['free_templates'] as $template):?>
            <a href="#" class="newProject block w-full border border-gray-500 hover:shadow-lg duration-200 transition-all max-w-[250px] mx-auto md:m-0" data-id="<?= $template['template_id']?>">
              <div class="flex flex-col h-full">
                <img class="h-full" src="<?= BASE_URL?>/assets/images/<?= $template['template_preview']?>" alt="">
                <div class="p-4 flex justify-between border-t-2 ">
                  <p class="font-bold"><?= $template['template_name']?></p>
                  <!-- gift icon fontawesom -->
                  <p class="text-gray-400">
                    <i class="fa-solid fa-gift"></i> <?= $template['template_category']?>
                  </p>
                </div>
              </div>
            </a>
          <?php endforeach;?>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= BASE_URL?>/assets/script/sidebar.js"></script>
  <script>
    const newProject = [...document.querySelectorAll(".newProject")];
    const popupOverlay = document.querySelector('.popupOverlay');
    const createProjectBtn = document.getElementById("createProject");
    const projectInput = document.getElementById("projectName");
    const nameError = document.getElementById("nameError");
    const projectId = document.getElementById('projectId');

    newProject.forEach(project => {
      project.addEventListener("click", function () {
        document.querySelector("[data-role='newProject']").classList.remove("hidden");
        popupOverlay.classList.remove("hidden");
        projectId.value = +this.dataset.id;
      });
    })

    popupOverlay.addEventListener("click", function () {
      document.querySelector("[data-role='newProject']").classList.add("hidden");
      popupOverlay.classList.add("hidden");
    });

    createProjectBtn.addEventListener("click", function () {
      // create project in users folder
      let projectName = projectInput.value;
      let xhr = new XMLHttpRequest();
      if(projectId.value == 0) {
        xhr.open('GET', "<?= BASE_URL?>/api/createProject/" + projectName);
      } else {
        xhr.open('GET', `<?= BASE_URL?>/api/createProject/${projectName}/${projectId.value}`);
      }
      xhr.send();
      xhr.onload = function () {
        if (xhr.status === 200) {
          let res = xhr.responseText;
          if(res == 'empty') {
            nameError.textContent = "Project name cannot be empty";
          } else if(res == 'exist') {
            nameError.textContent = "Project name already exists";
          } else if(res == 'error') {
            nameError.textContent = "something went wrong, please try again";
          } else {
            window.location.href = "<?= BASE_URL?>/pages/editor/" + res;
          }
        } else {
          alert("Error: " + xhr.status);
        }
      };
    });
  </script>
</body>