<?php

include '../includes/header.php'

    ?>

<div class="flex flex-row h-screen">
    <!--Left Navbar-->
    <?php include 'sidebar.php' ?>
    <!--Table-->
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
                                    class="block px-6 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reward</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-6 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Promote</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-6 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate
                                    account</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <a href="#"
                                class="block px-6 py-3 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete
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
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <!--To make the thead stick on the top I used sticky -->
                    <thead
                        class="sticky top-0 z-10 text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-nowrap">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Patient ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Full Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date of Birth
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gender
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Contact Information
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Address
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Doctor Assigned
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nurse Assigned
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Health Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Admission Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Discharge Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Last Visit Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>

                        </tr>
                    </thead>

                    <tbody class="overflow-y-auto">
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 text-center text-nowrap">
                            <!-- Checkbox Column -->
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-2" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                                </div>
                            </td>

                            <!-- Patient ID Column -->
                            <td class="px-6 py-3 text-sm">
                                P001
                            </td>

                            <!-- Name and Image Column -->
                            <td scope="row"
                                class="flex items-center px-6 py-3 text-sm font-medium whitespace-nowrap justify-center">
                                <img class="w-8 h-8 rounded-full" src="../assets/Images/user.jpg" alt="Patient Image">
                                <div class="ps-2">
                                    <div class="">Emily Carter</div>
                                </div>
                            </td>

                            <!-- Date of Birth Column -->
                            <td class="px-6 py-3 text-sm">
                                03-15-1985
                            </td>

                            <!-- Gender Column -->
                            <td class="px-6 py-3 text-sm">
                                Female
                            </td>

                            <!-- Contact Information Column -->
                            <td class="px-6 py-3 text-sm">
                                (123) 456-7890
                            </td>

                            <!-- Address Column -->
                            <td class="px-6 py-3 text-sm">
                                123 Main St, Springfield, IL
                            </td>

                            <!-- Doctor Assigned Column -->
                            <td scope="row" class=" px-6 py-3 font-medium text-sm whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <img class="w-8 h-8 rounded-full" src="../assets/Images/user.jpg"
                                        alt="Patient Image">
                                    <div class="ps-2">
                                        <div class="">Dr. Sarah Johnson</div>
                                    </div>
                                </div>
                            </td>

                            <!-- Nurse Assigned Column -->
                            <td scope="row" class=" px-6 py-3 font-medium text-sm whitespace-nowrap">
                                <div class="flex items-center justify-center">
                                    <img class="w-8 h-8 rounded-full" src="../../public/assets/Images/user.jpg"
                                        alt="Patient Image">
                                    <div class="ps-2">
                                        <div class="">Arah Johnson</div>
                                    </div>
                                </div>
                            </td>

                            <!-- Health Status Column -->
                            <td class="px-6 py-3 text-sm">
                                <div class="flex items-center justify-center">
                                    <div class="h-2 w-2 rounded-full bg-yellow-500 me-1"></div> Stable
                                </div>
                            </td>

                            <!-- Admission Date Column -->
                            <td class="px-6 py-3 text-sm">
                                10-20-2024
                            </td>

                            <!-- Discharge Date Column -->
                            <td class="px-6 py-3 text-sm">
                                N/A
                            </td>

                            <!-- Last Visit Date Column -->
                            <td class="px-6 py-3 text-sm">
                                10-28-2024
                            </td>

                            <!-- Actions Column -->
                            <td class="px-6 py-3 text-sm">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View
                                    Details</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>
<?php include '../includes/footer.php' ?>