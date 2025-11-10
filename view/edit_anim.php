<?php  
include'../core/connect.php';
include'../core/error.php';
if (isset($_GET['id_anime'])) {
    $id = $_GET['id_anime'];

    $sql = "SELECT * FROM anime WHERE id_anime = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "No anime found with ID = $id";
        exit;
    }
} else {
    echo "No 'id_anime' found in URL. Example: edit_anim.php?id_anime=3";
    exit;
}
?>
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
    <h1 class="text-2xl font-bold text-white mb-6 text-center">Edit Anime</h1>
    <form action="../controller/CRUD/update.php" method="POST" class="space-y-4">
           <!-- Id --> 
          <div>
        <label class="block text-gray-300 mb-1">ID</label>
        <input 
          type="text" 
          name="id_anime"
          placeholder=""
          disabled
          value="<?php echo $data['id_anime'];?>"
          class="w-full p-2 bg-gray-700  text-white rounded-md border border-gray-600 focus:ring-2 focus:ring-blue-500"
        >
      </div>
      <!-- Title -->
      <div>
        <label class="block text-gray-300 mb-1">Title</label>
        <input 
          type="text" 
          name="title"
           value="<?php echo $data['title'];?>"
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
           value="<?php echo $data['image'];?>"
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
           value=""
          class="w-full p-2 bg-gray-700 text-white rounded-md border border-gray-600 focus:ring-2 focus:ring-blue-500 h-24"
          
        ><?php echo $data['synopsis'];?></textarea>
      </div>

      <!-- Genre -->
      <div>
        <label class="block text-gray-300 mb-1">Genre</label>
        <input 
          type="text" 
          name="genre"
          placeholder="Action, Comedy, Adventure..."
          value="<?php echo $data['genre'];?>"
          class="w-full p-2 bg-gray-700 text-white rounded-md border border-gray-600 focus:ring-2 focus:ring-blue-500"
        >
      </div>

      <!-- Date -->
      <div>
        <label class="block text-gray-300 mb-1">Release Date</label>
        <input 
          type="date" 
          name="date"
           value="<?php echo $data['date'];?>"
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
           value="<?php echo $data['rating'];?>"
          class="w-full p-2 bg-gray-700 text-white rounded-md border border-gray-600 focus:ring-2 focus:ring-blue-500"
        >
      </div>

      <!-- Submit Button -->
      <button 
        type="submit"
        name="update"
        class="w-full bg-blue-600 hover:bg-blue-700 text-white p-2 rounded-md font-semibold transition"
      >
        Save Anime
      </button>

    </form>
  </div>

</body>
</html>
