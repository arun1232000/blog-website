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
                        <legend class="text-primary mb-4"><?= __('Update Article') ?></legend>
                        <div class="form-group">
                            <?= $this->Form->label('title', 'Title', ['class' => 'font-weight-bold']) ?>
                            <?= $this->Form->text('title', ['class' => 'form-control mb-3', 'placeholder' => 'Title', 'required']) ?>
                        </div>

                        <div class="form-group">
                            <?= $this->Form->label('body', 'Body', ['class' => 'font-weight-bold']) ?>
                            <?= $this->Form->textarea('body', ['class' => 'form-control mb-3', 'rows' => '5', 'placeholder' => 'Article Body', 'required']) ?>
                        </div>

                     
                    </fieldset>
                    <?= $this->Form->button(__('Update'), ['class' => 'btn btn-primary btn-block mt-3']) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>

