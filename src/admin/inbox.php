<?php

include '../includes/header.php'


    ?>

<div class="flex flex-row h-screen">
    <!--Left Navbar-->
    <?php include 'sidebar.php' ?>
    <div class="basis-5/6 overflow-hidden">
        <!--Navbar for the Dashboard-->
        <?php include 'admin_navbar.php' ?>
        <!--Table-->


        <div class="relative shadow-md sm:rounded-lg">
            <div
                class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 bg-white dark:bg-gray-900">
                <div class="p-4">
                    <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                        class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                        type="button">
                        <span class="sr-only">Action button</span>
                        Action
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownAction"
                        class="z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownActionButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reward</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Promote</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate
                                    account</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete
                                User</a>
                        </div>
                    </div>
                </div>
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative p-4">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-8 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="table-search-users"
                        class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search for users">
                </div>
            </div>
            <div class="overflow-auto h-[900px]">
                <div class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <!--To make the thead stick on the top I used sticky -->
                    <div
                        class="sticky top-0 z-10 text-sm text-center text-nowrap text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <div class="flex">
                            <div>
                                <button class="text-center justify-center px-6 py-4 hover:bg-slate-500">
                                    Clients
                                </button>
                            </div>
                            <div>
                                <button class="text-center justify-center px-6 py-4 hover:bg-slate-500">
                                    Employees
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-y-auto">
                        <div
                            class="flex odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 text-center text-nowrap">
                            <!-- Checkbox Column -->

                            <div class="flex items-center p-4">
                                <input id="checkbox-table-search-2" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                            </div>


                            <!-- Name and Image Column -->
                            <div class="flex items-center pl-6 pr-24 py-4 text-sm whitespace-nowrap justify-center">
                              
                                <img class="w-8 h-8 rounded-full" src="../../public/assets/Images/user.jpg"
                                    alt="Client Image">

                                <div class="ps-3">
                                    <div class="font-bold">Emily Carter</div>
                                </div>
                            </div>

                            <!-- Action Column -->
                            <div class="flex items-center px-6 py-4 text-sm whitespace-nowrap justify-center">
                                <p class="font-bold">
                                    Fritz jerome Tobes</p>
                                <p class="w-[1010px] truncate">
                                    - Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ut praesentium
                                    impedit dolorem deleniti nostrum doloribus rem dicta, quasi eaque. Alias suscipit
                                    quod dolorum accusamus. Corrupti voluptates id optio suscipit quas. Animi, tenetur.
                                    Ad numquam blanditiis odio deserunt animi porro.
                                </p>
                            </div>
                            <div class="flex items-center px-6 py-4 text-sm whitespace-nowrap justify-center">
                                <p class="font-bold">
                                    6:24 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<?php include '../includes/footer.php' ?>

