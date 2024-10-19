<?php
//include 'config.php';


?>

<?php include 'header.php' ?>
<?php include 'navbar.php' ?>
<!--About section-->
<div class="!scroll-smooth">

    <section class="lg:max-h mb-16 bg-center bg-cover bg-no-repeat bg-gray-900">
        <div class="h-10 border-b-2 mx-24 border-gray-500"></div>
        <div class="flex lg:flex-row flex-col px-5">
            <div class="basis-1/2 h-max-screen max-w-screen-xl p-24">
                <img src="./Images/group-therapy-animate.svg" alt="">
            </div>
            <div class="basis-1/2 h-max-screen max-w-screen-xl p-24">
                <!--Contact Us -->
                <div class="mb-10 !scroll-smooth">
                    <section class="bg-gray-900">
                        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-white ">
                                Contact Us
                            </h2>
                            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500  sm:text-xl">
                                Got a technical issue? Want to send feedback about a beta feature?
                                Need details about our Business plan? Let us know.
                            </p>
                            <form action="#" class="space-y-8">
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-white ">Your
                                        email</label>
                                    <input type="email" id="email"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                        placeholder="name@flowbite.com" required />
                                </div>
                                <div>
                                    <label for="subject"
                                        class="block mb-2 text-sm font-medium text-white ">Subject</label>
                                    <input type="text" id="subject"
                                        class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500"
                                        placeholder="Let us know how we can help you" required />
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="message" class="block mb-2 text-sm font-medium text-white ">Your
                                        message</label>
                                    <textarea id="message" rows="6"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                                        placeholder="Leave a comment..."></textarea>
                                </div>
                                <button type="submit"
                                    class="py-3 px-5 text-sm font-medium text-center text-white bg-[#098698] rounded-lg bg-primary-700 sm:w-fit transition ease-in-out duration-300 hover:-translate-y-1 lg:hover:scale-110 hover:scale-105">
                                    Send message
                                </button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php' ?>