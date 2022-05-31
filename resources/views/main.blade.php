<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link href="/dist/output.css" rel="stylesheet">
    <title>Movie Tracker</title>
  </head>
  <body class="relative h-screen no-scrollbar scrollbar-hidden">
    <nav class="sticky top-0 bg-gray-800 overflow-x-hidden ">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
          <div class="relative flex items-center justify-between h-16 ">
            <div class="flex items-center px-2 lg:px-0">
              <div class="flex-shrink-0">
                <div class="block lg:hidden text-white font-bold items-center ">Movie <span class="text-red-500">App</span></div>
                <div class="hidden lg:block lg:text-2xl text-white font-bold items-center">Movie <span class="text-red-500">App</span></div>
              </div>
              <div class="hidden lg:block lg:ml-6">
                <div class="flex space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Watch List</a>
                  <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Movies</a>
                  <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">TV Series</a>
                  <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Watch History</a>
                </div>
              </div>
            </div>
            <div class="flex-1 flex justify-center px-2 lg:ml-6 lg:justify-end space-x-2">
              <div class="max-w-lg w-full lg:max-w-xs">
                <label for="search" class="sr-only">Search</label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <!-- Heroicon name: solid/search -->
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                  </div>
                  <input id="search" name="search" class="block w-full pl-10 pr-3 py-2 border border-transparent rounded-md leading-5 bg-gray-700 text-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white focus:border-white focus:ring-white focus:text-gray-900 sm:text-sm" placeholder="Search" type="search">
                </div>

              </div>
              <button class="p-2 flex justify-center items-center h-10 w-10 bg-red-500 rounded-md">
                <svg fill="currentColor" class="z-0 text-gray-300 h-full w-full" viewBox="0 0 16 16">
                    <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
                 </svg>
            </button>
            </div>
          </div>
        </div>
    </nav>
        <!-- movie card -->
        <section class="grid grid-row-2 bg-white h-full overflow-y-auto overflow-x-hidden">
            <div class="grid grid-cols-3 p-2">
                <!-- card 1 -->
                <div class="flex flex-col h-5/6 w-5/6 space-y-1">
                    <img class="w-full flex-shrink-0 rounded-xl flex-grow-0" src="/public/poster/d549ed7bf195ecda815ad5d89a71eab1.png"/>
                    <div class="text-md font-semibold">Jurassic Park</div>
                    <div class="text-xs text-gray-600">1993</div>
                    <button class="p-1 text-black flex justify-center items-center text-sm border-2 border-red-500 rounded-md">
                        <svg width="16" height="16" fill="currentColor" class="mr-1" viewBox="0 0 16 16">
                            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                          </svg>
                        WATCH
                    </button>
                </div>
                <!-- card 2 -->
                <div class="flex flex-col h-5/6 w-5/6 space-y-1">
                    <img class="w-full flex-shrink-0 rounded-xl flex-grow-0" src="/public/poster/d549ed7bf195ecda815ad5d89a71eab1.png"/>
                    <div class="text-md font-semibold">Jurassic Park</div>
                    <div class="text-xs text-gray-600">1993</div>
                    <button class="p-1 text-white flex justify-center items-center text-sm border-2 bg-red-500 border-red-500 rounded-md">
                        <svg width="16" height="16" fill="currentColor" class="mr-1" viewBox="0 0 16 16">
                            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                          </svg>
                        WATCHED
                    </button>
                </div>
                <!-- card 3 -->
                <div class="flex flex-col h-5/6 w-5/6 space-y-1">
                    <img class="w-full flex-shrink-0 rounded-xl flex-grow-0" src="/public/poster/d549ed7bf195ecda815ad5d89a71eab1.png"/>
                    <div class="text-md font-semibold">Jurassic Park</div>
                    <div class="text-xs text-gray-600">1993</div>
                    <button class="p-1 text-black flex justify-center items-center text-sm border-2 border-red-500 rounded-md">
                        <svg width="16" height="16" fill="currentColor" class="mr-1" viewBox="0 0 16 16">
                            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                          </svg>
                        WATCH
                    </button>
                </div>
                 <!-- card 4 -->
                 <div class="flex flex-col h-5/6 w-5/6 space-y-1">
                    <img class="w-full flex-shrink-0 rounded-xl flex-grow-0" src="/public/poster/d549ed7bf195ecda815ad5d89a71eab1.png"/>
                    <div class="text-md font-semibold">Jurassic Park</div>
                    <div class="text-xs text-gray-600">1993</div>
                    <button class="p-1 text-black flex justify-center items-center text-sm border-2 border-red-500 rounded-md">
                        <svg width="16" height="16" fill="currentColor" class="mr-1" viewBox="0 0 16 16">
                            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                          </svg>
                        WATCH
                    </button>
                </div>
                 <!-- card 5 -->
                 <div class="flex flex-col h-5/6 w-5/6 m-5m-5 space-y-1">
                    <img class="w-full flex-shrink-0 rounded-xl flex-grow-0" src="/public/poster/d549ed7bf195ecda815ad5d89a71eab1.png"/>
                    <div class="text-md font-semibold">Jurassic Park</div>
                    <div class="text-xs text-gray-600">1993</div>
                    <button class="p-1 text-black flex justify-center items-center text-sm border-2 border-red-500 rounded-md">
                        <svg width="16" height="16" fill="currentColor" class="mr-1" viewBox="0 0 16 16">
                            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                          </svg>
                        WATCH
                    </button>
                </div>
            </div>
        </section>
        <!-- end of movie card -->

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="md:hidden sticky bottom-0 w-full bg-red-500">
          <div class="p-3 flex justify-between max-w-5xl mx-auto">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-red-700 text-white block px-3 py-2 rounded-md text-base font-medium">Watch List</a>
            <a href="#" class="text-white hover:bg-red-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Movies</a>
            <a href="#" class="text-white hover:bg-red-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">TV Series</a>
            <a href="#" class="text-white hover:bg-red-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Watch History</a>
          </div>
        </div>



  </body>
</html>
