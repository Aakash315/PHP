<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>


<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">Go back...</a>
        </p>
        <p>
            <?= htmlspecialchars($note['body']); ?>
        </p>
        
        
        <form class="mt-6" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="inline-flex justify-center rounded-md border border-transparent bg-red-500 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus-ring-2 focus:ring-red-500">Delete</button>
            <!-- text-m text-red-500 -->
        </form>
        
        <footer class="mt-6">
            <a href="/note/edit?id=<?= $note['id'] ?>" 
            class="inline-flex justify-center rounded-md border border-transparent bg-gray-500 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus-ring-2 focus:ring-indigo-500"
            >Edit</a>
        </footer>
    </div>
</main>
<?php require base_path('views/partials/footer.php'); ?>