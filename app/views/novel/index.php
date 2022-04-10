  <main>
  <div class="container mt-5">
    <div class="row">
      <div class="col-6">
        <h3>Daftar Novel</h3>
        <?php foreach ($data['novel'] as $novel) :?>
          <ul>
            <li>Title: <?= $novel['title'] ?></li>
            <li>Status: <?= $novel['status'] ?></li>
            <li>Current chapter: <?= $novel['cur_chapter'] ?></li>
            <li>Link: <?= $novel['link'] ?></li>
          </ul>
        <?php endforeach ?>
      </div>
    </div>
  </div>
  </main>