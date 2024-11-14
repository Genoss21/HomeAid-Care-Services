<?php

$activePage = basename($_SERVER['SCRIPT_NAME']);

// Map each dropdown item URL to its main dropdown key for active state handling.
$dropdownMappings = [
    'admin_acc.php' => 'users.php',
    'employee_acc.php' => 'users.php',
    'client_acc.php' => 'users.php',
    'patient_tb.php' => 'data.php',
    'doctor_tb.php' => 'data.php',
    'nurse_tb.php' => 'data.php',
    'client_tb.php' => 'data.php',
    '../../index.php' => 'pages.php',
    '../../public/components/services_page.php' => 'pages.php',
    '../../public/components/about_page.php' => 'pages.php',
    '../../public/components/contact_us_page.php' => 'pages.php',
];

// Determine the active dropdown based on the current page.
$activeDropdown = $dropdownMappings[$activePage] ?? null;

$mainButtons = [
    //array as $key => value
    'dashboard.php' => [
        'title' => 'Dashboard',
        'svg' => '<svg class="w-6 h-6 -ml-8 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path d="M13.5 2c-.178 0-.356.013-.492.022l-.074.005a1 1 0 0 0-.934.998V11a1 1 0 0 0 1 1h7.975a1 1 0 0 0 .998-.934l.005-.074A7.04 7.04 0 0 0 22 10.5 8.5 8.5 0 0 0 13.5 2Z"/>
  <path d="M11 6.025a1 1 0 0 0-1.065-.998 8.5 8.5 0 1 0 9.038 9.039A1 1 0 0 0 17.975 13H11V6.025Z"/>
</svg>
'
    ],
    'users.php' => [
        'title' => 'Users',
        'svg' => '<svg class="w-6 h-6 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
</svg>
'
    ],
    'data.php' => [
        'title' => 'Data',
        'svg' => '<svg class="w-6 h-6 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path d="M12 7.205c4.418 0 8-1.165 8-2.602C20 3.165 16.418 2 12 2S4 3.165 4 4.603c0 1.437 3.582 2.602 8 2.602ZM12 22c4.963 0 8-1.686 8-2.603v-4.404c-.052.032-.112.06-.165.09a7.75 7.75 0 0 1-.745.387c-.193.088-.394.173-.6.253-.063.024-.124.05-.189.073a18.934 18.934 0 0 1-6.3.998c-2.135.027-4.26-.31-6.3-.998-.065-.024-.126-.05-.189-.073a10.143 10.143 0 0 1-.852-.373 7.75 7.75 0 0 1-.493-.267c-.053-.03-.113-.058-.165-.09v4.404C4 20.315 7.037 22 12 22Zm7.09-13.928a9.91 9.91 0 0 1-.6.253c-.063.025-.124.05-.189.074a18.935 18.935 0 0 1-6.3.998c-2.135.027-4.26-.31-6.3-.998-.065-.024-.126-.05-.189-.074a10.163 10.163 0 0 1-.852-.372 7.816 7.816 0 0 1-.493-.268c-.055-.03-.115-.058-.167-.09V12c0 .917 3.037 2.603 8 2.603s8-1.686 8-2.603V7.596c-.052.031-.112.059-.165.09a7.816 7.816 0 0 1-.745.386Z"/>
</svg>
'
    ],
    'pages.php' => [
        'title' => 'Pages',
        'svg' => '<svg class="w-6 h-6 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z" clip-rule="evenodd"/>
</svg>
'
    ],
    'inbox.php' => [
        'title' => 'Inbox',
        'svg' => '<svg class="w-6 h-6 -ml-8 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path d="M17 6h-2V5h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2h-.541A5.965 5.965 0 0 1 14 10v4a1 1 0 1 1-2 0v-4c0-2.206-1.794-4-4-4-.075 0-.148.012-.22.028C7.686 6.022 7.596 6 7.5 6A4.505 4.505 0 0 0 3 10.5V16a1 1 0 0 0 1 1h7v3a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-3h5a1 1 0 0 0 1-1v-6c0-2.206-1.794-4-4-4Zm-9 8.5H7a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2Z"/>
</svg>
'
    ],
    'document.php' => [
        'title' => 'Documents',
        'svg' => '<svg class="w-6 h-6 -ml-8 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd"/>
</svg>
'
    ],

];

$dropdownItems = array(
    "users.php" => array("admin_acc.php" => "Admins Account", "employee_acc.php" => "Employees Account", "client_acc.php" => "Clients Account"),
    "data.php" => array("patient_tb.php" => "Patients data", "doctor_tb.php" => "Doctors data", "nurse_tb.php" => "Nurses data", "client_tb.php" => "Clients data"),
    "pages.php" => array("../../public/index.php" => "Home", "../../public/components/services_page.php" => "Services", "../../public/components/about_page.php" => "About", "../../public/components/contact_us_page.php" => "Contact Us"),
);

// Initialize the active tab title
$activeTabTitle = 'Dashboard';

// Check if the active page is in the main buttons
if (isset($mainButtons[$activePage])) {
    $activeTabTitle = $mainButtons[$activePage]['title'];
} else {
    // Check if the active page is in any dropdown
    foreach ($dropdownItems as $parentPage => $items) {
        if (isset($items[$activePage])) {
            $activeTabTitle = $items[$activePage];
            break;
        }
    }
}

?>
<div class="basis-1/6 bg-gray-900 text-gray-500 border-r-2 overflow-hidden">
    <div class="p-3">
        <ul class="flex flex-col space-y-4 pt-1">
            <?php foreach ($mainButtons as $url => $button): ?>
                <li
                    class="<?php echo ($url === $activeDropdown) ? 'users_dropdown_active' : 'users_dropdown_not_active'; ?>">
                    <?php if (array_key_exists($url, $dropdownItems)): ?>
                        <button type="button"
                            class="flex items-center w-full p-3 text-base transition duration-75 rounded-lg group hover:bg-gray-700 hover:text-white"
                            aria-controls="dropdown-<?php echo $url; ?>" data-collapse-toggle="dropdown-<?php echo $url; ?>">
                            <?php echo $button['svg']; ?>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap group-hover:text-white">
                                <?php echo $button['title']; ?>
                            </span>
                            <svg class="w-3 h-3 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <ul id="dropdown-<?php echo $url; ?>"
                            class="<?php echo ($url === $activeDropdown) ? 'block' : 'hidden'; ?> py-2 space-y-2">
                            <?php foreach ($dropdownItems[$url] as $dropdownUrl => $dropdownTitle): ?>
                                <li
                                    class="<?php echo ($dropdownUrl === $activePage) ? 'users_dropdown_active' : 'users_dropdown_not_active'; ?>">
                                    <a class="flex items-center w-full p-3 transition duration-75 rounded-lg pl-11 group hover:bg-gray-700 hover:text-white"
                                        href="<?php echo $dropdownUrl; ?>"><?php echo $dropdownTitle; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <a class="flex items-center w-full p-3 transition duration-75 rounded-lg pl-11 group <?php echo ($url === $activePage) ? 'bg-gray-700 text-white' : ''; ?> hover:bg-gray-700 hover:text-white"
                            href="<?php echo $url; ?>">
                            <?php echo $button['svg']; ?>
                            <span class="ms-3 group-hover:text-white"><?php echo $button['title']; ?></span>
                        </a>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>


<script src="dropdown.js"></script>