<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LMS Lite | Home</title>
    @vite('resources/css/app.css')

</head>
<body>
    <div class="container">
        <nav class="nav-sticky flex items-center justify-between p-4 xl:px-24 z-30 transition-all duration-700 top-0 left-0 w-full border-transparent">
          <div class="main-menu flex items-center gap-5">
            <h2 class="text-2xl font-playfair font-semibold me-2 sm:me-5">LMS</h2>
            <a href="#course" class="text-md cursor-pointer hover:scale-105 transition-all duration-300">Course</a>
            <a href="#tasks" class="text-md cursor-pointer hover:scale-105 transition-all duration-300">Tasks</a>
          </div>
          {{-- <span
            class="sign-in-btn text-slate-50 font-semibold border-2 border-transparent bg-neutral-950 px-5 py-2 rounded-full hover:bg-transparent hover:border-neutral-950 hover:text-neutral-800 transition-all duration-500 "
            ><a href="#"> Sign In </a></span
          > --}}
        <button type="button" class="flex gap-x-3 py-1 px-3 items-center text-sm rounded-lg transition-all duration-500 hover:ring-2 hover:ring-gray-600 hover:scale-90 md:me-0 focus:ring-2 focus:ring-gray-400 focus:scale-90" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-10 h-10 rounded-full object-cover ring-1 ring-neutral-800" src="https://erinejkt48-profile.vercel.app/img/profile.jpg" alt="user photo">
        <span class="font-semibold text-base hidden sm:inline">Hi, Aldrin's Girlfriend</span>
    </button>
      <!-- Dropdown menu -->
      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
        <div class="px-4 py-3">
          <span class="block font-semibold text-sm text-neutral-900 ">Aldrin's Girlfriend</span>
          <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">aldrinerine@gmail.com</span>
        </div>
        <ul class="py-2" aria-labelledby="user-menu-button">
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-neutral-800 hover:bg-gray-100 ">Dashboard</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-neutral-800 hover:bg-gray-100 ">Settings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-neutral-800 hover:bg-gray-100 ">Sign out</a>
          </li>
        </ul>
      </div>

        </nav>
        <div class="hero-section flex flex-col items-center p-5 mb-20 mt-24 gap-10">
          <h1 class="text-3xl sm:text-4xl lg:text-5xl w-[90%] text-center font-playfair">
            Welcome to Learning Management System
          </h1>

          <form class="max-w-[260px] sm:max-w-sm w-full">
            <label
              for="default-search"
              class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"
              >Search</label
            >
            <div class="relative w-full">
              <div
                class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"
              >
                <svg
                  class="w-6 h-6 text-neutral-800 dark:text-gray-400"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 19 19"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                  />
                </svg>
              </div>
              <input
                type="search"
                id="default-search"
                class="block w-full p-2 ps-12 text-md text-gray-900 border-2 border-neutral-900 rounded-full bg-gray-50 focus:border-0 focus:border-opacity-0 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Search..."
                required
              />
              <!-- <button
                type="submit"
                class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
              >
                Search
              </button> -->
            </div>
            <p class="text-center text-sm sm:text-base mt-3 text-neutral-500">
              You can search course or task
            </p>
          </form>
        </div>

        <section id="course" class="course-section flex flex-col gap-2 p-4 items-center">
            <h2 class="text-2xl font-semibold ">Course</h2>
            <div class="contain mx-2 p-2 max-w-full">
                <ul class="course-option flex overflow-x-auto p-2 items-center gap-2 w-full [&>li]:font-semibold [&>li]:px-3 [&>li]:py-1 [&>li]:text-sm [&>li]:cursor-pointer">
                    <li class="course-active transition-all duration-300 hover:scale-110">All</li>
                    <li class="transition-all duration-300 hover:scale-110">Practice</li>
                    <li class="transition-all duration-300 hover:scale-110">Theory</li>
                    <li class="transition-all duration-300 hover:scale-110">Other</li>
                    <li class="transition-all duration-300 hover:scale-110 flex items-center gap-3 rounded-full ring-2 ring-neutral-900">Year <svg xmlns="http://www.w3.org/2000/svg" height="15" class="self-center rounded-full ring-2 ring-neutral-900" viewBox="0 -960 960 960" width="15"><path d="M480-240 240-480l56-56 144 144v-368h80v368l144-144 56 56-240 240Z"/></svg></li>
                </ul>
            </div>
            <div class="grid grid-flow-row grid-cols-1 sm:grid-cols-2 w-full p-2 gap-2 place-content-center [&>.matkul]:cursor-pointer [&>.matkul>span]:img-style [&>.matkul>span>img]:hover-img [&>.matkul>span>img]:object-cover">
                <div class="matkul flex flex-col items-center">
                    <span>
                        <img src="{{ asset('img/Operating System.jpg') }}" class="w-full" height="200px" alt="">
                    </span>
                    {{-- <div class="kotak "></div> --}}
                    <h2 class="text-lg font-semibold">Operating System</h2>
                </div>
                <div class="matkul flex flex-col items-center">
                    <span>
                        <img src="{{ asset('img/Databse Practicum.jpg') }}" class="w-full"height="200px" alt="">
                    </span>
                    {{-- <div class="kotak "></div> --}}
                    <h2 class="text-lg font-semibold">Database Practicum</h2>
                </div>
                <div class="matkul flex flex-col items-center">
                    <span>
                        <img src="{{ asset('img/Interface Design.jpg') }}" class="w-full" height="200px" alt="">
                    </span>
                    {{-- <div class="kotak "></div> --}}
                    <h2 class="text-lg font-semibold">Interface Design</h2>
                </div>
                <div class="matkul flex flex-col items-center">
                    <span>
                        <img src="{{ asset('img/Linear Algebra.jpg') }}" class="w-full"height="200px" alt="">
                    </span>
                    {{-- <div class="kotak "></div> --}}
                    <h2 class="text-lg font-semibold">Linear Algebra</h2>
                </div>
            </div>
        </section>
        <section id="tasks" class="tasks-section flex flex-col gap-2 p-4 items-center">
            <h2 class="text-2xl font-semibold ">Tasks</h2>
            <div class="mx-2 p-2 max-w-full">
                <div class="date-of-week grid grid-cols-auto grid-rows-3 overflow-x-auto p-2 place-items-center gap-x-4 gap-y-2 w-full [&>span]:font-semibold [&>span]:px-2 [&>span]:py-3 [&>span]:text-base [&>span]:cursor-pointer [&>span]:w-max [&>div.task>label]:cursor-pointer">
                        <span class="date-badge col-start-1 flex flex-col gap-1 items-center justify-center">
                            <p class="month">Apr</p>
                            <h3 class="date font-bold text-2xl">21</h3>
                            <p class="day">Sun</p>
                        </span>
                        <div class="task row-start-2 flex flex-col items-center gap-2 px-1 py-5 w-[75px] bg-orange-100 rounded-3xl text-center">
                            <label for="task-checkbox-1">
                                <input id="task-checkbox-1" type="checkbox" class="w-4 h-4 text-neutral-700 bg-transparent border-2 border-neutral-700 rounded focus:ring-neutral-700" name="" id="" checked disabled>
                                <h3 class="font-semibold text-sm">Linear Algebra</h3>
                                <p class="text-xs">09:00 AM</p>
                            </label>
                        </div>
                        <div class="task row-start-3 flex flex-col items-center gap-2 px-1 py-5 w-[75px] bg-pink-200 rounded-3xl text-center">
                            <label for="task-checkbox-2">
                                <input id="task-checkbox-2" type="checkbox" class="w-4 h-4 text-neutral-700 bg-transparent border-2 border-neutral-700 rounded focus:ring-neutral-700" name="" id="" checked disabled>
                                <h3 class="font-semibold text-sm">Operating System</h3>
                                <p class="text-xs">09:00 AM</p>
                            </label>
                        </div>
                    <span class="date-badge col-start-2 flex flex-col gap-1 items-center justify-center">
                        <p class="month">Apr</p>
                        <h3 class="date font-bold text-2xl">22</h3>
                        <p class="day">Mon</p>
                    </span>
                    <span class="date-badge col-start-3 flex flex-col gap-1 items-center justify-center">
                        <p class="month">Apr</p>
                        <h3 class="date font-bold text-2xl">23</h3>
                        <p class="day">Tue</p>
                    </span>
                    <div class="task col-start-3 row-start-2 flex flex-col items-center gap-2 px-1 py-5 w-[75px] bg-lime-400 rounded-3xl text-center">
                        <label for="task-checkbox-3">
                            <input id="task-checkbox-3" type="checkbox" class="w-4 h-4 text-neutral-700 bg-transparent border-2 border-neutral-700 rounded focus:ring-neutral-700" name="" id="" checked disabled>
                            <h3 class="font-semibold text-sm">Interface Design</h3>
                            <p class="text-xs">09:00 AM</p>
                        </label>
                    </div>
                    <span class="date-badge col-start-4 flex flex-col gap-1 items-center justify-center">
                        <p class="month">Apr</p>
                        <h3 class="date font-bold text-2xl">24</h3>
                        <p class="day">Wed</p>
                    </span>
                    <div class="task col-start-4 row-start-2 flex flex-col items-center gap-2 px-1 py-5 w-[75px] bg-orange-100 rounded-3xl text-center">
                        <label for="task-checkbox-4">
                            <input id="task-checkbox-4" type="checkbox" class="w-4 h-4 text-neutral-700 bg-transparent border-2 border-neutral-700 rounded focus:ring-neutral-700" name="" id="" disabled>
                            <h3 class="font-semibold text-sm">Linear Algebra</h3>
                            <p class="text-xs">09:00 AM</p>
                        </label>
                    </div>
                    <span class="date-badge col-start-5 flex flex-col gap-1 items-center justify-center">
                        <p class="month">Apr</p>
                        <h3 class="date font-bold text-2xl">25</h3>
                        <p class="day">Thu</p>
                    </span>
                    <span class="date-badge col-start-6 flex flex-col gap-1 items-center justify-center">
                        <p class="month">Apr</p>
                        <h3 class="date font-bold text-2xl">26</h3>
                        <p class="day">Fri</p>
                    </span>
                    <div class="task col-start-6 row-start-2 flex flex-col items-center gap-2 px-1 py-5 w-[75px] bg-indigo-500 rounded-3xl text-center">
                        <label for="task-checkbox-5">
                            <input id="task-checkbox-5" type="checkbox" class="w-4 h-4 text-neutral-700 bg-transparent border-2 border-neutral-700 rounded focus:ring-neutral-700" name="" id="" disabled>
                            <h3 class="font-semibold text-sm">Software Engine</h3>
                            <p class="text-xs">09:00 AM</p>
                        </label>
                    </div>
                    <span class="date-badge col-start-7 flex flex-col gap-1 items-center justify-center">
                        <p class="month">Apr</p>
                        <h3 class="date font-bold text-2xl">27</h3>
                        <p class="day">Sat</p>
                    </span>
                </div>
            </div>
        </section>
        <footer class="p-7 text-center">
            <p class="text-base font-semibold">Copyright &copy; <span id="currentYear"></span> LMS Lite. All rights reserved.</p>
        </footer>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
      @vite('resources/js/script.js')
</body>
</html>
