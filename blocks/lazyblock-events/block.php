<?php foreach($attributes['events'] as $event): ?>

<div class="event" style="border: 2px solid #000; background-color: #f1f1f1; padding:5px; margin: 10px; width 100%;">
  <h2><?php echo $event["name"] ?></h2>
  <h3><?php echo $event["artist"] ?></h3>
  <p><?php echo $event["description"] ?></p>
  <img src="https://media.istockphoto.com/id/1396637933/photo/dj-mixing-outdoor-at-party-event-entertainment-concept-soft-focus-on-hand.jpg?s=612x612&w=0&k=20&c=p1s9BL-9fn5gQK1CW9fxFuaf8-jm1aiVSMVA8ABtFSY=" alt="<?php echo $event["name"] ?>">
  <h5><?php echo $event["genre"] ?></h5>
  <p><?php echo $event["age"] ?><p>
  <small><?php echo $event["date"] ?></small>
  <div><a href="<?php echo $event["tickets"] ?>" target="_blank" style="display: inline-block; padding: 10px 20px; background-color: #333; color: #fff; text-decoration: none; border-radius: 4px;">Køb billetter her!</a></div>
</div>

<?php endforeach; ?>