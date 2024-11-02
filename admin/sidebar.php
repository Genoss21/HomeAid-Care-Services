<?php

$activePage = basename($_SERVER['SCRIPT_NAME']);

$mainButtons = array(
    //array as $key => value
    "dashboard.php" => "Dashboard",
    "users.php" => "Users",
    "data.php" => "Data",
    "pages.php" => "Pages",
    "inbox.php" => "Inbox",
    "document.php" => "Documents",
);

$dropdownItems = array(
    "users.php" => array("admin_acc.php" => "Admin", "employee_acc.php" => "Employee", "client_acc.php" => "Clients"),
    "data.php" => array("patient_tb.php" => "Patients data", "doctor_tb.php" => "Doctors data", "nurse_tb.php" => "Nurses data", "client_tb.php" => "Clients data"),
    "pages.php" => array("../index.php" => "Home", "../services_page.php" => "Services", "../about_page.php" => "About", "../contact_us_page.php" => "Contact Us"),
);


?>
<div class="basis-1/6 bg-gray-900 text-gray-500 border-r-2">

    <div class="p-3">
        <ul class="flex flex-col space-y-4 pt-1">
            <?php foreach ($mainButtons as $url => $title): ?>
                <li class="<?php echo ($url === $activePage) ? 'users_dropdown_active' : 'users_dropdown_not_active'; ?>">
                    <?php if (array_key_exists($url, $dropdownItems)): ?>
                        <button type="button"
                            class="flex items-center w-full p-3 text-base transition duration-75 rounded-lg group hover:bg-gray-700"
                            aria-controls="dropdown-<?php echo $url; ?>" data-collapse-toggle="dropdown-<?php echo $url; ?>">

                            <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                            </svg>

                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap group-hover:text-white">
                                <?php echo $title; ?>
                            </span>
                            <svg class="w-3 h-3 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <ul id="dropdown-<?php echo $url; ?>" class="hidden py-2 space-y-2">
                            <?php foreach ($dropdownItems[$url] as $dropdownUrl => $dropdownTitle): ?>
                                <li
                                    class="<?php echo ($dropdownUrl === $activePage) ? 'users_dropdown_active' : 'users_dropdown_not_active'; ?>">
                                    <a class="flex items-center w-full p-3 transition duration-75 rounded-lg pl-11 group hover:bg-gray-700 hover:text-white"
                                        href="<?php echo $dropdownUrl; ?>">
                                        <?php echo $dropdownTitle; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <a class="flex items-center w-full p-3 transition duration-75 rounded-lg pl-11 group hover:bg-gray-700 hover:text-white"
                            href="<?php echo $url; ?>">
                            <?php echo $title; ?>
                        </a>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<script src="dropdown.js"></script>