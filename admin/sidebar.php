<?php
$userTab = array();
$userTab["admin_acc.php"] = "Admin";
$userTab["employee_acc.php"] = "Employee";
$userTab["visitor_acc.php"] = "Visitors";

$activeuserTab = basename($_SERVER['SCRIPT_NAME']);

$dataTab = array();
$dataTab["patient_tb.php"] = "Patients";
$dataTab["doctor_tb.php"] = "Doctors";
$dataTab["nurse_tb.php"] = "Nurses";

$activedataTab = basename($_SERVER['SCRIPT_NAME']);

$pages = array();
$pages["#"] = "Home";
$pages["#"] = "Services";
$pages["#"] = "About";
$pages["#"] = "Contact";

$activePage = basename($_SERVER['SCRIPT_NAME']);

$pages = array();
$pages["#"] = "Document1";
$pages["#"] = "Document2";
$pages["#"] = "Document3";
$pages["#"] = "Document4";


$activePage = basename($_SERVER['SCRIPT_NAME']);
?>
<div class="basis-1/6 bg-gray-900 text-gray-500 border-r-2">

    <div class="p-3">
        <ul class="flex flex-col space-y-4 pt-1">
            <li>
                <a href="dashboard.php" class="flex items-center p-3 rounded-lg hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-white transition duration-75 group-hover:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6.025A7.5 7.5 0 1 0 17.975 14H10V6.025Z" />
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.5 3c-.169 0-.334.014-.5.025V11h7.975c.011-.166.025-.331.025-.5A7.5 7.5 0 0 0 13.5 3Z" />
                    </svg>
                    <span class="ms-3 group-hover:text-white text-white">Dashboard</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-3 text-base transition duration-75 rounded-lg group hover:bg-gray-700"
                    aria-controls="dropdown-users" data-collapse-toggle="dropdown-users">
                    <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                    </svg>

                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap group-hover:text-white">Users</span>
                    <svg class="w-3 h-3 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor " stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-users" class="hidden py-2 space-y-2">
                    <?php foreach ($userTab as $url => $title): ?>
                        <li>
                            <a class="<?php echo ($url === $activeuserTab) ? 'users_dropdown_active' : 'users_dropdown_not_active'; ?> flex items-center w-full p-3 transition duration-75 rounded-lg pl-11 group hover:bg-gray-700 hover:text-white"
                                href="<?php echo $url; ?>">
                                <?php echo $title; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-3 text-base transition duration-75 rounded-lg group hover:bg-gray-700"
                    aria-controls="dropdown-data" data-collapse-toggle="dropdown-data">
                    <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 6c0 1.657-3.134 3-7 3S5 7.657 5 6m14 0c0-1.657-3.134-3-7-3S5 4.343 5 6m14 0v6M5 6v6m0 0c0 1.657 3.134 3 7 3s7-1.343 7-3M5 12v6c0 1.657 3.134 3 7 3s7-1.343 7-3v-6" />
                    </svg>

                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap group-hover:text-white">Data</span>
                    <svg class="w-3 h-3 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-data" class="hidden py-2 space-y-2">
                    <?php foreach ($dataTab as $url => $title): ?>
                        <li>
                            <a class="<?php echo ($url === $activedataTab) ? 'users_dropdown_active' : 'users_dropdown_not_active'; ?> flex items-center w-full p-3 transition duration-75 rounded-lg pl-11 group hover:bg-gray-700 hover:text-white"
                                href="<?php echo $url; ?>">
                                <?php echo $title; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-3 text-base transition duration-75 rounded-lg group hover:bg-gray-700"
                    aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                    <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023" />
                    </svg>


                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap group-hover:text-white">Pages</span>
                    <svg class="w-3 h-3 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-700">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-700">Contact</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="admin_inbox_page.php" class="flex items-center p-3 rounded-lg hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 16v-5.5A3.5 3.5 0 0 0 7.5 7m3.5 9H4v-5.5A3.5 3.5 0 0 1 7.5 7m3.5 9v4M7.5 7H14m0 0V4h2.5M14 7v3m-3.5 6H20v-6a3 3 0 0 0-3-3m-2 9v4m-8-6.5h1" />
                    </svg>

                    <span class="ms-3 group-hover:text-white">Inbox</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-3 text-base transition duration-75 rounded-lg group hover:bg-gray-700"
                    aria-controls="dropdown-doc" data-collapse-toggle="dropdown-doc">
                    <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4" />
                    </svg>


                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap group-hover:text-white">Documents</span>
                    <svg class="w-3 h-3 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-doc" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-700">Document1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-700">Document2</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-700">Document3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-3 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-700">Document4</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<script src="dropdown.js"></script>