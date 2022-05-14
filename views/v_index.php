
<main>
  <div>
    <a class="btn btn-outline btn-warning" href="index.php?c=add">Add article</a>
    <a class="btn btn-outline btn-info" href="index.php?view=table">View as table</a>
    <hr>
  </div>
  <div class="row">
    <? foreach($articles as $key => $value ): ?>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" width="75px" height="150px" src="<?= $value['imageUrl']?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?= $value['title'] ?></h5>
          <p class="card-text">
            <?= $value['content'] ?>
          </p>
          <p class="card-text">
            <?= $value['dt_add'] ?> ;
            <?= $value['catTitle'] ?>
          </p>

          <a href="index.php?c=edit&id=<?= $value['id_article']?>" class="btn btn-primary">Edit</a>
          <a href="index.php?c=article&id=<?= $value['id_article'] ?>" href="#" class="btn btn-success">More</a>
        </div>
      </div>
    <? endforeach; ?>
  </div>
</main>
