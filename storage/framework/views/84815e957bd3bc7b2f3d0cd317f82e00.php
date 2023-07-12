<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($post->title); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <style>
        .img-height {
            height: 60vh;
            /* This value could be adjusted according to your needs */
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <span class="font-semibold text-xl tracking-tight">Blog Site</span>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
                <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200  mr-4">
                    Home
                </a>
                <a href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 mr-4">
                    About
                </a>

                <a href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 mr-4">
                    Blog
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200">
                    Contact
                </a>
            </div>
        </div>
    </nav>

    <!-- Blog Post Detail -->
    <div class="flex flex-col items-center p-6">
        <div class="w-full">
            <div class="rounded overflow-hidden m-6">
                <img class="w-full img-height" src=" <?php echo e($post->image_url); ?>" alt="Blog post image">
            </div>
            <div class="w-full px-6 py-4">
                <h2 class="font-bold text-xl mb-2"><?php echo e($post->title); ?></h2>
                <p class="text-gray-700 text-base">
                    <?php echo e($post->content); ?>

                </p>
            </div>
        </div>
    </div>

    <!-- Comment Form -->
    

    <!-- Comment Form -->
    <div class="flex flex-col items-center p-6">
        <div class="w-full">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
                action="/blogposts/<?php echo e($post->id); ?>/comments" method="POST">
                <!-- Add CSRF token for Laravel -->
                <?php echo csrf_field(); ?>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
                        Comment
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="content" name="content" placeholder="Your comment" rows="3"></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Add Comment
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Comments List -->
    <div class="flex flex-col items-center p-6">
        <div class="w-full">
            <h2 class="font-bold text-xl mb-2">Comments:</h2>
            <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="border p-4 mb-4">
                    <p class="text-gray-700 text-base">
                        <?php echo e($comment->content); ?>

                    </p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

</body>
<script></script>



</html>
<?php /**PATH C:\xamppeighttwo\htdocs\laravel\assignmentmodule19t\resources\views/detailspost.blade.php ENDPATH**/ ?>