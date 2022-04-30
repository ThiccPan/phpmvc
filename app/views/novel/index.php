  <main>
  <div class="container mt-5">

    <div class="row">
      <div class="col-6">
        <h2 class="mb-lg-4">Daftar Novel</h2>

        <!-- Flash Message -->
        <?php Flasher::sendFlash(); ?>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Add new novel
        </button>        
      
        <!-- novel list -->
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new Novel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <form action="<?= BASEURL; ?>Novel/addNovel" method="post">
          <div class="input-group mb-3">
            <span class="input-group-text" id="title-addon">Title </span>
            <input type="text" class="form-control" aria-label="novel-title" aria-describedby="title-addon" name="title">
          </div>

          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Status</label>
            <select class="form-select" id="status" name="status">
              <option value="Reading">Reading</option>
              <option value="Finished">Finished</option>
              <option value="Dropped">Dropped</option>
            </select>
          </div>

          <div class="input-group mb-3">
            <span class="input-group-text" id="curchap-addon">Current chapter</span>
            <input type="number" class="form-control" aria-label="novel-cur_chapter" aria-describedby="curchap-addon" name="cur_chapter">
          </div>

          <div class="input-group mb-3">
            <span class="input-group-text" id="link-addon">Novel link</span>
            <input type="text" class="form-control" aria-label="novel-link" aria-describedby="link-addon" name="link">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>