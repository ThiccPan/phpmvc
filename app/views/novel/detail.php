<div class="container">
  <h2><?= $data["novel"]["title"]; ?></h2>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">status: <?= $data["novel"]["status"] ?></li>
    <li class="list-group-item">chapter: <?= $data["novel"]["cur_chapter"] ?></li>
    <li class="list-group-item"><a href="<?= $data["novel"]["link"] ?>">Web link</a></li>
  </ul>
</div>