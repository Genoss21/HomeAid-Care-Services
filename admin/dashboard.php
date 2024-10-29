<?php

include 'admin_header.php'

    ?>

<div class="flex flex-row h-screen">
    <!--Left Navbar-->
    <?php include 'sidebar.php' ?>
    <div class="basis-5/6">
        <!--Navbar for the Dashboard-->
        <?php include 'admin_navbar.php' ?>

        <div class="flex-grow flex flex-wrap p-8 space-x-8">
            <button type="button"
                class="dashboard_add_buttons bg-cover bg-[url('../assets/Images/Add-Patient.jpg')] hover:bg-[url('../assets/Images/Add-Patient.gif')] shadow-md">
                <div class="inline-flex absolute top-3 left-2">
                    <svg class="w-5 h-5 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14m-7 7V5" />
                    </svg>
                    <p class="uppercase text-justify">Add Patient</p>
                </div>
            </button>

            <button type="button"
                class="dashboard_add_buttons bg-cover bg-[url('../assets/Images/Add-Doctors.jpg')] hover:bg-[url('../assets/Images/Add-Doctors.gif')] shadow-md">
                <div class="inline-flex absolute top-3 left-2">
                    <svg class="w-5 h-5 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14m-7 7V5" />
                    </svg>
                    <p class="uppercase text-justify">Add Doctor</p>
                </div>
            </button>

            <button type="button"
                class="dashboard_add_buttons bg-cover bg-[url('../assets/Images/Add-Nurse.jpg')] hover:bg-[url('../assets/Images/Add-Nurse.gif')] shadow-md">
                <div class="inline-flex absolute top-3 left-2">
                    <svg class="w-5 h-5 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14m-7 7V5" />
                    </svg>
                    <p class="uppercase text-justify">Add Nurse</p>
                </div>
            </button>
        </div>
    </div>
</div>
<?php include 'admin_footer.php' ?>