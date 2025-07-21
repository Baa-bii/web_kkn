@vite(['resources/css/app.css','resources/js/app.js'])
<nav class="bg-white border-gray-200" style="background: linear-gradient(to right,#127a3d, #64f1da);">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="/assets/logo.png" class="h-12" alt="Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Desa Pranten</span>
        </a>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700">
                <li>
                    <a href="/" class="block py-2 px-3 text-gray-900 rounded md:hover:bg-transparent md:hover:text-pink-500 md:p-0 dark:text-white md:dark:hover:text-green-200  dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                </li>
                <li>
                    <a href="/ourproduct" class="block py-2 px-3 text-gray-900 rounded md:hover:bg-transparent md:hover:text-pink-500 md:p-0 dark:text-white md:dark:hover:text-green-200  dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Our Product</a>
                </li>
                <li>
                    <a href="/createyourown" class="block py-2 px-3 text-gray-900 rounded md:hover:bg-transparent md:hover:text-pink-500 md:p-0 dark:text-white md:dark:hover:text-green-200 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Create Your Own</a>
                </li>
            </ul>
        </div>
    </div>
</nav>