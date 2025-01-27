<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>


<main>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <div>
                <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register for a new account</h2>
            </div>

            <form class="space-y-6" action="/register" method="POST">
                <input type="hidden" name="remember" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Email address">

                            <?php if (isset($errors['email'])) : ?>
                                <p class="text-red-500 text-xm mt-2"><?= $errors['email'] ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="Password">

                            <?php if (isset($errors['password'])) : ?>
                                <p class="text-red-500 text-xm mt-2"><?= $errors['password'] ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div>
                        <div class="mt-2">
                            <button type="submit"
                                class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>

                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            </span>
                        </div>
                    </div>    
                </div>    
            </form>
        </div>
    </div>

</main>
<?php require base_path('views/partials/footer.php'); ?>