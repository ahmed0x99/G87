<?php

require_once "./partials/header.php";


$id = $_GET['id'];
$title = $_GET['title'];
$description = $_GET['description'];


// var_dump($id , $title , $description);die;




?>


<section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Edit Task</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Please Update Task</p>
    </div>
    <form action="../backend/update-task.php?id=<?php echo $id ?>" method="post">
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-5/6">
          <div class="relative">
            <label for="name" class="leading-7 text-sm text-gray-600">Title</label>
            <input type="text" id="name" name="title" value="<?php echo $title ?>" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label for="message" class="leading-7 text-sm text-gray-600">Description</label>
            <textarea id="message" name="description"  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">
<?php echo $description ?>
            </textarea>
          </div>
        </div>
        <div class="p-2 w-full">
          <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Edit</button>
        </div>
        </div>
      </div>
    </div>
  </div>
  </form>
</section>