  <div class="gallery-container">
    <div class="navigation-arrow prev-arrow">&lt;</div>
    <div class="gallery-slides">
      <?php foreach($attributes["images"] as $image): ?>
      <div class="gallery-slide">
        <img src="<?php echo $image["image"]["url"] ?>" alt="Vertex">
      </div>
      <?php endforeach; ?>
    </div>
    <div class="navigation-arrow next-arrow">&gt;</div>
  </div>