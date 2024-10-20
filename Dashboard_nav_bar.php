<?php


?>

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
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-slate-900 rounded-lg md:hidden hover:text-[#098698] focus:outline-none focus:ring-2 focus:ring-gray-200"
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
                    <li class="my-auto justify-center">
                        <a class="<?php echo ($url === $activePage) ? 'nav-button-active' : 'nav-button-not-active'; ?> hover:text-[#098698]"
                            href="<?php echo $url; ?>">
                            <?php echo $title; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
                <li>
                    <button type="button"
                        class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 "
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg"
                            alt="user photo">
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44"
                        id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 ">Bonnie Green</span>
                            <span class="block text-sm  text-gray-500 truncate">name@flowbite.com</span>
                        </div>
                        <ul class="py-2 text-slate-900" aria-labelledby="user-menu-button">
                            <li>
                                <a href="#" class="profile_dropdown_buttons ">Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="profile_dropdown_buttons">Settings</a>
                            </li>
                            <li>
                                <a href="#" class="profile_dropdown_buttons">Earnings</a>
                            </li>
                            <li>
                                <a href="#" class="profile_dropdown_buttons">Sign
                                    out</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>