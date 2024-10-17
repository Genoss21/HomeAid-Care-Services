<?php
$pages = array();
$pages["index.php"] = "Home";
$pages["services_page.php"] = "Services";
$pages["about_page.php"] = "About";
$pages["contact_us_page.php"] = "Contact";

$activePage = basename($_SERVER['SCRIPT_NAME']);
?>

<!--Navbar-->

<nav class="sticky top-0 bg-white z-50 !scroll-smooth border-b-2">
    <div class="w-full flex flex-wrap items-center justify-between mx-auto lg:px-16 p-3">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="Images\healthcare-hospital-medical-16-svgrepo-com.svg" class="h-9" alt="" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap tracking-tighter text-[#098698]">HomeAid
                Care
                Services</span>
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-slate-900 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">

                <?php foreach ($pages as $url => $title): ?>
                    <li>
                        <a class="<?php echo ($url === $activePage) ? 'nav-button-active' : 'nav-button-not-active'; ?> hover:text-[#098698]"
                            href="<?php echo $url; ?>">
                            <?php echo $title; ?>
                        </a>
                    </li>
                <?php endforeach; ?>

                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-between w-full py-2 px-3 text-slate-900 rounded hover:text-[#098698] md:hover:bg-transparent md:p-0 md:w-auto ">
                        Dropdown
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                        <ul class="py-2 text-sm text-slate-900 " aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="login_page.php" class="dropdown-buttons">Login</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-buttons">Sign up</a>
                            </li>
                        </ul>
                        <!--<div class="py-1">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
                        </div>-->
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>