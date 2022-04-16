  <main>
  <div class="container mt-5">
    <div class="row">

    </div>
    
    <div class="row">
      <div class="col-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Launch demo modal
        </button>        
      
        <!-- novel list -->
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>