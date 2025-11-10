<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Add Anime</title>
</head>

<body class="bg-gray-900 min-h-screen flex items-center justify-center">
  <div class="w-full max-w-md bg-gray-800 p-6 rounded-xl shadow-lg">
    <h1 class="text-2xl font-bold text-white mb-6 text-center">Add New Anime</h1>
    <form action="../controller/CRUD/create.php" method="POST" class="space-y-4">

      <!-- Title -->
      <div>
        <label class="block text-gray-300 mb-1">Title</label>
        <input 
          type="text" 
          name="title"
          placeholder="Enter anime title"
          class="w-full p-2 bg-gray-700 text-white rounded-md border border-gray-600 focus:ring-2 focus:ring-blue-500"
        >
      </div>

      <!-- Image URL -->
      <div>
        <label class="block text-gray-300 mb-1">Image URL</label>
        <input 
          type="text" 
          name="image" 
          placeholder="https://example.com/image.jpg"
          class="w-full p-2 bg-gray-700 text-white rounded-md border border-gray-600 focus:ring-2 focus:ring-blue-500"
        >
      </div>

      <!-- Synopsis -->
      <div>
        <label class="block text-gray-300 mb-1">Synopsis</label>
        <textarea 
          name="synopsis" 
          placeholder="Enter synopsis..."
          class="w-full p-2 bg-gray-700 text-white rounded-md border border-gray-600 focus:ring-2 focus:ring-blue-500 h-24"
        ></textarea>
      </div>

      <!-- Genre -->
      <div>
        <label class="block text-gray-300 mb-1">Genre</label>
        <input 
          type="text" 
          name="genre"
          placeholder="Action, Comedy, Adventure..."
          class="w-full p-2 bg-gray-700 text-white rounded-md border border-gray-600 focus:ring-2 focus:ring-blue-500"
        >
      </div>

      <!-- Date -->
      <div>
        <label class="block text-gray-300 mb-1">Release Date</label>
        <input 
          type="date" 
          name="date"
          class="w-full p-2 bg-gray-700 text-white rounded-md border border-gray-600 focus:ring-2 focus:ring-blue-500"
        >
      </div>

      <!-- Rating -->
      <div>
        <label class="block text-gray-300 mb-1">Rating</label>
        <input 
          type="number" 
          name="rating"
          step="0.1"
          min="0"
          max="10"
          placeholder="8.5"
          class="w-full p-2 bg-gray-700 text-white rounded-md border border-gray-600 focus:ring-2 focus:ring-blue-500"
        >
      </div>

      <!-- Submit Button -->
      <button 
        type="submit"
        name="submit"
        class="w-full bg-blue-600 hover:bg-blue-700 text-white p-2 rounded-md font-semibold transition"
      >
        Save Anime
      </button>

    </form>
  </div>

</body>
</html>
