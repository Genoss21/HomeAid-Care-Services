<?php
//include 'config.php';


?>

<!DOCTYPE html>
<html lang="en" class="!scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-inter" id="home">

    <?php include 'navbar.php' ?>
    <!--About section-->
    <div class="!scroll-smooth">

        <section class="lg:max-h mb-16 bg-center bg-cover bg-no-repeat bg-[#505A63]">
            <div class="h-10 border-b-2 mx-24 border-gray-500"></div>
            <div class="flex lg:flex-row flex-col px-5">
                <div class="basis-1/2 h-max-screen max-w-screen-xl p-24">
                    <h1 class="text-6xl tracking-tighter font-semibold text-white">Caring for comfort, building for
                        peace.</h1>
                </div>
                <div class="basis-1/2 h-max-screen max-w-screen-xl p-24 text-white">
                    <div class="flex flex-row pb-10"><svg class="w-6 h-6 mr-5 text-[#098698]  " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M3 4a1 1 0 0 0-.822 1.57L6.632 12l-4.454 6.43A1 1 0 0 0 3 20h13.153a1 1 0 0 0 .822-.43l4.847-7a1 1 0 0 0 0-1.14l-4.847-7a1 1 0 0 0-.822-.43H3Z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="text-lg font-semibold uppercase tracking-tighter"> About HomeAid Care Services</p>
                    </div>
                    <div class="pb-10">
                        <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum aspernatur
                            officia ullam
                            facere debitis voluptatum officiis est reprehenderit ipsum alias? Veniam ducimus enim eos
                            illo odio. Ab sequi repellat amet at porro expedita optio pariatur!</p>
                    </div>
                    <div class="pb-10">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga modi eligendi
                            repellendus veritatis facilis officia, eum ab! Laudantium aliquam maiores numquam hic
                            perspiciatis, repellat accusamus alias cumque facere explicabo itaque totam voluptatibus
                            ipsam.
                            Veniam earum error laudantium? Ducimus explicabo et nemo sed nam voluptatem non!</p>
                    </div>
                    <div class="">
                        <img src="./Images/S1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="h-10 border-b-2 mx-24 border-gray-500"></div>
            <div class="flex lg:flex-row flex-col px-5">
                <div class="basis-1/2 h-max-screen max-w-screen-xl p-24">
                    <h1 class="text-6xl tracking-tighter font-semibold text-white">We care for people, we build for
                        comfort</h1>
                </div>
                <div class="basis-1/2 h-max-screen max-w-screen-xl p-24 text-white">
                    <div class="flex flex-row pb-10"><svg class="w-6 h-6 mr-5 text-[#098698]  " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M3 4a1 1 0 0 0-.822 1.57L6.632 12l-4.454 6.43A1 1 0 0 0 3 20h13.153a1 1 0 0 0 .822-.43l4.847-7a1 1 0 0 0 0-1.14l-4.847-7a1 1 0 0 0-.822-.43H3Z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="text-lg font-semibold uppercase tracking-tighter">
                            why we do what we do </p>
                    </div>
                    <div class="pb-10">
                        <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum aspernatur
                            officia ullam
                            facere debitis voluptatum officiis est reprehenderit ipsum alias? Veniam ducimus enim eos
                            illo odio. Ab sequi repellat amet at porro expedita optio pariatur!</p>
                    </div>
                    <div class="pb-10">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga modi eligendi
                            repellendus veritatis facilis officia, eum ab! Laudantium aliquam maiores numquam hic
                            perspiciatis, repellat accusamus alias cumque facere explicabo itaque totam voluptatibus
                            ipsam.
                            Veniam earum error laudantium? Ducimus explicabo et nemo sed nam voluptatem non!</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include 'contact_us.php' ?>
    <?php include 'footer.php' ?>

    <!--Scripts-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>