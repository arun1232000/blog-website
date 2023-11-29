<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<div class="row justify-content-center align-items-center vh-100">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-body">
                <div class="side-nav">
                    <h4 class="heading"><?= __('Actions') ?></h4>
                    <?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $article->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $article->id), 'class' => 'side-nav-item btn btn-danger btn-block mb-3']
                    ) ?>
                    <?= $this->Html->link(__('List Articles'), ['action' => 'index'], ['class' => 'side-nav-item btn btn-secondary btn-block']) ?>
                </div>

                <div class="articles form content mt-4">
                    <?= $this->Form->create($article, ['class' => 'styled-form']) ?>
                    <fieldset>
                        <legend class="text-primary mb-4"><?= __('Edit Article') ?></legend>
                        <?php
                            echo $this->Form->control('title', [
                                'class' => 'form-control mb-3',
                                'placeholder' => 'Title',
                                'label' => false,
                            ]);
                            
                            echo $this->Form->control('body', [
                                'class' => 'form-control mb-3',
                                'rows' => '5',
                                'placeholder' => 'Article Body',
                                'label' => false,
                            ]);
                        ?>
                    </fieldset>
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-block mt-3']) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>

