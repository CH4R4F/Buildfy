<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="<?= BASE_URL?>/assets/script/grapes.js"></script>
  <script src="<?= BASE_URL?>/assets/script/grapes-tailwind.js"></script>
  <!-- <script src="<?= BASE_URL?>/assets/script/grapes-bootstrap.js"></script> -->
  <!-- <script src="https://unpkg.com/grapesjs-tailwind"></script> -->
  <script src="<?= BASE_URL?>/assets/script/grapes-export-plugin.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= BASE_URL?>/assets/css/grapes.css">
  <link rel="stylesheet" href="<?= BASE_URL?>/assets/css/style.css">
  <title><?= $data['title']?></title>
</head>
<body>
  <div class="size-alert fixed inset-0 flex justify-center items-center bg-black/90 z-[60] hidden">
    <div class="max-w-xs text-center select-none space-y-3">
      <!-- warning icon -->
      <i class="fas fa-exclamation-triangle text-orange-500 text-7xl"></i>
      <h3 class="text-xl text-white">
        Oops, we are sorry but you need a bigger screen to view this page and its content.
      </h3>
    </div>
  </div>
  <main class="w-full">
    <aside class="fixed left-0 z-50 space-y-4 w-[300px] shadow-md border-r border-gray-600 h-screen overflow-auto">
      <header class="text-center p-4 border-b border-gray-300 select-none mb-4">
        <!-- logo -->
        <span class="font-bold text-center text-2xl">
          <?= strtoupper($data['name'])?>
        </span>
        <sup>
          created by Buildfy
        </sup>
      </header>
      <!-- <div class="px-4">
        <button class="hover:bg-gray-200 duration-200 transition-all py-2 px-8 border border-gray-400 rounded-md flex w-full justify-center">
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
          </svg>
          Create Page
        </button>
      </div>
      <div class="overflow-auto h-40 px-4">
        <ul>
          <li class="flex justify-between cursor-pointer bg-gray-500/25 p-4">
            Home
            <div class="flex ga-4">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" clip-rule="evenodd"></path>
              </svg>
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
              </svg>
            </div>          
          </li>
        </ul>
      </div> -->
      <!-- config tabs container -->
      <div class="w-full flex">
        <!-- blocks -->
        <button id="blocks" class="tab-btn cursor-pointer flex-1 p-2 bg-gray-200">
          <i class="fa-solid fa-cubes"></i>
        </button>
        <!-- layers -->
        <button id="layers" class="tab-btn cursor-pointer flex-1 p-2">
          <i class="fa-solid fa-layer-group"></i>
        </button>
        <!-- styles -->
        <button id="styles" class="tab-btn cursor-pointer flex-1 p-2">
          <i class="fa-solid fa-palette"></i>
        </button>
        <!-- settings -->
        <button id="settings" class="tab-btn cursor-pointer flex-1 p-2">
          <i class="fa-solid fa-cog"></i>
        </button>
      </div>
      <!-- tabs content -->
      <div class="!mt-0">
        <!-- blocks content -->
        <div class="tab-content" id="blocks-content" data-tab="blocks"></div>
        <!-- layers content -->
        <div class="tab-content" id="layers-content" data-tab="layers"></div>
        <!-- styles content -->
        <div class="tab-content" id="styles-content" data-tab="styles"></div>
        <!-- settings content -->
        <div class="tab-content" id="settings-content" data-tab="settings"></div>
      </div>
    </aside>
    <div class="flex-1 relative">
      <nav class="w-[calc(100%-300px)] border-b border-gray-300 ml-[300px] flex justify-between fixed top-0 z-30 h-10">
        <div id="devices"></div>
        <div id="actions"></div>
      </nav>
      <div id="editor" class="w-[calc(100%-300px)] pl-[300px] pt-10"></div>
    </div>
  </main>
  <script>
    const editor = grapesjs.init({
    container: "#editor",
    height: "100vh",
    fromElement: true,
    
    storageManager: {
      type: 'remote',
      fromElement: false,
      urlStore: 'http://localhost/buildfy/api/saveProject/<?= $_SESSION['project_name']?>',
      urlLoad: 'http://localhost/buildfy/api/loadProject/<?= $_SESSION['project_name']?>',
      autosave: false,
      autoload: true,
      stepsBeforeSave: 1,
      contentTypeJson: true,
      storeComponents: true,
      storeStyles: true,
      storeHtml: true,
      storeCss: true,
      headers: {
        'Content-Type': 'application/json'
      }
    },
    // storageManager: {
    //   type: 'remote',
    //   stepsBeforeSave: 1,
    //   autosave: true,         // Store data automatically
    //   autoload: true,
    //   urlStore: 'http://localhost/buildfy/api/saveProject/<?= $_SESSION['project_name']?>',
    //   urlLoad: 'http://localhost/buildfy/api/loadProject/<?= $_SESSION['project_name']?>',
    //   params: { page_id: 11111 },
    //   contentTypeJson: true,
    //     storeComponents: true,
    //   storeStyles: true,
    //   storeHtml: true,
    //   storeCss: true,
    //   headers: {
    //     'Content-Type': 'application/json'
    //   }
    // },
    plugins: [, "grapesjs-plugin-export", "grapesjs-tailwind"],
    pluginsOpts: {
      "grapesjs-plugin-export": {},
      "grapesjs-tailwind": {},
      // "grapesjs-blocks-bootstrap4": {}
    },
    blockManager: {
      appendTo: "#blocks-content",
    },
    layerManager: {
      appendTo: "#layers-content",
    },
    styleManager: {
      appendTo: "#styles-content",
    },
    traitManager: {
      appendTo: "#settings-content",
    },
    selectorManager: {
      appendTo: "#styles-content",
    },
    panels: {
      defaults: [
        {
          id: "basic-actions",
          el: "#actions",
          buttons: [
            {
              id: "visibility",
              active: true,
              label: "<i class='fa-solid fa-eye'></i>",
              command: "sw-visibility",
            },
            {
              id: "save",
              label: "<i class='fa-solid fa-save'></i>",
              command: "save-project",
            },
            {
              id: "cmd-clear",
              label: "<i class='fa-solid fa-trash'></i>",
              command: "cmd-clear",
            },
            {
              id: "undo",
              label: "<i class='fa-solid fa-undo'></i>",
              command: "undo",
            },
            {
              id: "redo",
              label: "<i class='fa-solid fa-redo'></i>",
              command: "redo",
            },
            {
              id: "view-code",
              label: "<i class='fa-solid fa-code'></i>",
              command: "export-template",
              context: "export-template",
            },
            //   id: "show-json",
            //   label: "<i class='fa-solid fa-code'></i>",
            //   context: "show-json",
            //   command(editor) {
            //     editor.Modal.setTitle("Your Project Data In JSON")
            //       .setContent(
            //         `
            //           <textarea readonly style='width: 100%; height: 250px'>
            //               ${JSON.stringify(editor.getComponents())}
            //           </textarea>
            //         `
            //       )
            //       .open();
            //   },
            // },
          ],
        },
        {
          id: "panel-devices",
          el: "#devices",
          buttons: [
            {
              id: "device-desktop",
              label: "<i class='fa-solid fa-desktop'></i>",
              command: "set-device-desktop",
              active: true,
              togglable: false,
            },
            {
              id: "device-tablet",
              label: "<i class='fa-solid fa-tablet'></i>",
              command: "set-device-tablet",
              togglable: false,
              togglable: false,
            },
            {
              id: "device-mobile",
              label: '<i class="fa-solid fa-mobile"></i>',
              command: "set-device-mobile",
              togglable: false,
            },
          ],
        },
      ],
    },
    deviceManager: {
      devices: [
        {
          name: "Desktop",
          width: "",
        },
        {
          name: "Tablet",
          width: "720px",
          widthMedia: "768px",
        },
        {
          name: "Mobile",
          width: "320px",
          widthMedia: "480px",
        },
      ],
    },
  });
  </script>
  <script src="<?= BASE_URL?>/assets/script/editor.js"></script>
  <script>
    
  </script>
</body>
</html>