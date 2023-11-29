<div class="jumbotron jumbotron-fluid text-white" style="background-image: url('../webroot/img/b.jpg');height:250px; background-size: cover;">
    <div class="container">
        <h1 class="display-4">Welcome to My Blog</h1>
        <p class="lead">Explore the latest articles and stay informed.</p>
    </div>
    <?= "<h4 style='margin-left:40px;margin-top:0px;'>".$cname=$this->request->getparam("controller");"</h4>"?>
    <?= "/" ?>
    <?= $aname=$this->request->getparam("action");?>
        </div>

<div class="container" style="display:flex;justify-content:center;">
<div class="col-md-9 d-flex justify-content-center align-items-center">
    <div class="card border-primary shadow" style="max-width: 800px;">
        <div class="card-header bg-primary text-white text-center">
            <h2 class="mb-0">"<?= h($article->title) ?>"</h2>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <?php
                    if (!empty($article->image)) {
                        echo $this->Html->image($article->image, ['class' => 'img-fluid rounded']);
                    } else {
                        echo '<span class="text-muted d-block text-center my-4">No image available</span>';
                    }
                    ?>
                </div>
            </div>
            <div class="mt-4 text-center">
                <blockquote class="blockquote">
                    <p class="mb-0"><?= $this->Text->autoParagraph(h($article->body)); ?></p>
                </blockquote>
            </div>
        </div>
    </div>
</div>
</div>
