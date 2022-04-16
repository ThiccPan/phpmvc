  <main>
  <div class="container mt-5">
    <div class="row">

    </div>
    <div class="row">
      <div class="col-6">
        <h3>Daftar Novel</h3>
        <?php foreach ($data['novel'] as $novel) :?>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <?= $novel["title"] ?>
              <a class="badge bg-primary" href="<?= BASEURL . 'Novel/detail/' . $novel['id'];?>">detail</a>
            </li>
          </ul>
          
        <?php endforeach ?>
      </div>
    </div>
  </div>
  </main>