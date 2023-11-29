<div class="jumbotron jumbotron-fluid text-white" style="background-image: url('./img/b.jpg');height:250px; background-size: cover;">
    <div class="container">
        <h1 class="display-4">Welcome to My Blog</h1>
        <p class="lead">Explore the latest articles and stay informed.</p>
    </div>
    <?= "<h4 style='margin-left:40px;margin-top:0px;'>".$cname=$this->request->getparam("controller");"</h4>"?>
    <?= "/" ?>
    <?= $aname=$this->request->getparam("action");?>
        </div>
<div class="container-fluid">

    <div class="row">
        <div class="col-3">
            <h3 style="color: #fff;" class="bg-info text-capitalize p-1">Recent Post</h3>

            <ul class="list-group list-group-flush" style="background:#000;">
                <?php foreach ($articlesList as $key => $articletitle): ?>
                    <li class="list-group-item"><a href=<?= $this->url->build(['controller'=>'blogs','action'=>'view',$key]) ?>> <?= $articletitle; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="col-9">
            <h2>Recently Posted</h2>
            <div class="row">
                <?php foreach($articles as $key => $article): ?>
                    <div class="col-md-4 mb-4" style="height:400px;">
                        <div class="card shadow" style="height:350px;width:350px;">
                            <div class="card-footer text-muted">
                                <?= $article->modified; ?>
                            </div>
                            <a href="<?= $this->Url->build(['controller'=>'blogs','action'=>'view', $article->id]) ?>">
                                <img src="<?= $this->Url->image($article->image, ['fullBase' => true]); ?>" class="card-img-top" alt="Article Image" style="width: 100%;height:150px;">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><?= $article->title; ?></h5>
                                <p class="card-text">
                                    <?= $this->Text->truncate(
                                        $article->body,
                                        50,
                                        [
                                            'ellipsis' => '...',
                                            'exact' => false
                                        ]
                                    ); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <ul class="pagination mt-3">
                <?php
                echo $this->Paginator->prev('<<<', ['class' => 'page-item'], ['class' => 'page-link']);
                echo $this->Paginator->numbers(['class' => 'page-item'], ['class' => 'page-link']);
                echo $this->Paginator->next('>>>', ['class' => 'page-item'], ['class' => 'page-link']);
                ?>
            </ul>
        </div>
    </div>
</div>

    
    
    

 
