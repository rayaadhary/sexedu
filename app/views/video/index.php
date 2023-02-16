<!-- about -->
<div class="about">
  <div class="container_width">
    <div class="row">
      <?php
      foreach ($data['video'] as $y) {
      ?>
        <div class="col-md-6 mb-3">
          <iframe width="500" height="400" src="https://www.youtube.com/embed/<?= $y["id"]["videoId"] ?>" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</div>