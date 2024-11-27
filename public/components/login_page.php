<?php
//include 'config.php';


?>

<?php include '../../src/includes/header.php' ?>
<?php include 'navbar.php' ?>
<div class="min-h-screen flex items-center justify-center bg-gray-700 bg-blend-multiply py-12 px-4 sm:px-6 lg:px-8 bg-no-repeat bg-cover relative"
    style="
        background-image: url('../../public/assets/images/BG2.jpg');
      ">
    <div class="grid grid-cols-2 w-full h-full">
        <div class="justify-center p-16">
            <div class="max-w-screen-xl">

                <h1 class="mb-16 text-4xl tracking-tighter leading-none text-white md:text-5xl lg:text-5xl">
                    Welcome to HomeAid Care Services
                </h1>
                <p class="mb-5 lg:pr-30 text-sm text-gray-300 lg:text-base">
                    We’re delighted to have you here. Whether you’re looking for reliable homecare services or
                    expert advice, our team is dedicated to providing compassionate, professional care tailored to
                    your unique needs. Let us help you feel at home!
                </p>
                <img class="h-[450px] mx-auto" src="../../public/assets/images/login-animate.svg" alt="">

            </div>
        </div>
        <div class="p-16 z-10 w-full">
            <div class="max-w-md w-full space-y-8 mx-auto p-10 bg-white rounded-xl">
                <div class="text-center">
                    <h2 class="mt-6 text-3xl font-bold text-gray-900">Welcome back!</h2>
                    <p class="mt-2 text-sm text-gray-600">
                        Please login in to your account
                    </p>
                </div>

                <form class="mt-8 space-y-6" action="#" method="POST">
                    <input type="hidden" name="remember" value="true" />
                    <div class="relative">
                        <!--<div class="absolute right-0 mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg> 
                            </div>-->
                        <label class="text-sm font-bold text-gray-700 tracking-wide">Email</label>
                        <input
                            class="w-full text-base py-2 border-b border-gray-300 focus:outline-none focus:border-teal-400"
                            type="" placeholder="username@gmail.com" value="username@gmail.com" />
                    </div>
                    <div class="mt-8 content-center">
                        <label class="text-sm font-bold text-gray-700 tracking-wide">
                            Password
                        </label>
                        <input
                            class="w-full content-center text-base py-2 border-b border-gray-300 focus:outline-none focus:border-teal-400"
                            type="" placeholder="Enter your password" value="*****" />
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember_me" type="checkbox"
                                class="h-4 w-4 bg-[#098698] focus:ring-indigo-400 border-gray-300 rounded" />
                            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                                Remember me
                            </label>
                        </div>
                        <div class="text-sm">
                            <a href="#" class="font-medium text-[#098698] hover:text-teal-400">
                                Forgot your password?
                            </a>
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center bg-[#098698] text-gray-100 p-4 rounded-xl tracking-wide font-semibold focus:outline-none focus:shadow-outline hover:bg-teal-400 shadow-lg cursor-pointer transition ease-in duration-300">
                            Login
                        </button>
                    </div>
                    <p class="flex flex-col items-center justify-center mt-10 text-center text-md text-gray-500">
                        <span>Don't have an account?</span>
                        <a href="../../public/components/sign_up_page.php"
                            class="text-[#098698] hover:text-teal-400 no-underline hover:underline cursor-pointer transition ease-in duration-300">Sign
                            up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include '../../src/includes/footer.php' ?>