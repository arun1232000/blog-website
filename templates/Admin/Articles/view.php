<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<div class="row">
    <div class="col-md-3">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id], ['class' => 'btn btn-primary btn-block mb-3']) ?>
            <?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id), 'class' => 'btn btn-danger btn-block mb-3']) ?>
            <?= $this->Html->link(__('List Articles'), ['action' => 'index'], ['class' => 'btn btn-secondary btn-block mb-3']) ?>
            <?= $this->Html->link(__('New Article'), ['action' => 'add'], ['class' => 'btn btn-success btn-block']) ?>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2><?= h($article->title) ?></h2>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-3"><?= __('Title') ?></dt>
                    <dd class="col-sm-9"><?= h($article->title) ?></dd>
                    <dt class="col-sm-3"><?= __('Image') ?></dt>
                    <dd class="col-sm-9">
                        <?php
                            if (!empty($article->image)) {
                                echo $this->Html->image($article->image, ['class' => 'img-fluid rounded']);
                            } else {
                                echo 'No image available';
                            }
                        ?>
                    </dd>
                    <dt class="col-sm-3"><?= __('Id') ?></dt>
                    <dd class="col-sm-9"><?= $this->Number->format($article->id) ?></dd>
                    <dt class="col-sm-3"><?= __('Created') ?></dt>
                    <dd class="col-sm-9"><?= h($article->created) ?></dd>
                    <dt class="col-sm-3"><?= __('Modified') ?></dt>
                    <dd class="col-sm-9"><?= h($article->modified) ?></dd>
                </dl>
                <div class="text">
                    <strong><?= __('Body') ?></strong>
                    <blockquote class="blockquote">
                        <p class="mb-0"><?= $this->Text->autoParagraph(h($article->body)); ?></p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>

