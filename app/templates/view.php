<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <title>Random Quote Generator</title>
   <meta name="description" content="The best Random Quote Generator available on Internet. Get yours today!">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
   <header class="bg-blue-500 text-white text-center py-6">
      <h1 class="text-4xl font-bold">Random Quote Generator</h1>
   </header>

   <main class="flex-grow flex items-center justify-center m-2 mb-3 flex-col">
      <div class="relative max-w-3xl w-full bg-white shadow-lg rounded-lg overflow-hidden">
         <img src="<?= htmlspecialchars($content->getImageUrl(), ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($content->getImageAlt(), ENT_QUOTES, 'UTF-8') ?>" class="w-full h-auto object-cover">
         <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <div class="text-center text-white p-6">
               <p class="text-xl md:text-2xl italic mb-6"><?= htmlspecialchars($content->getQuoteContent(), ENT_QUOTES, 'UTF-8') ?></p>
               <p class="text-sm"><?= htmlspecialchars($content->getQuoteAuthor(), ENT_QUOTES, 'UTF-8') ?></p>
            </div>
         </div>
      </div>
      <div class="mt-6 mb-2">
            <a href="" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-blue-600">
               Get New Quote
            </a>
         </div>
   </main>

   <footer class="bg-gray-200 text-center py-4">
      <p class="text-sm text-gray-600">&copy; 2024 Random Quote Generator</p>
   </footer>
</body>

</html>
