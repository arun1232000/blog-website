<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */
?>

<div class="row">
    <aside class="col-md-4">
        <div class="card shadow-lg">
            <div class="card-body" style="display: flex; flex-direction: column; width: 300px; background-color: #f8f9fa; border-radius: 8px; padding: 15px;">
                <h4 class="card-title"><?= __('Actions') ?></h4>
                <?= $this->Form->postLink(
                    __('Delete'),
                    ['action' => 'delete', $user->user_id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id), 'class' => 'btn btn-danger btn-sm mb-2']
                ) ?>
                <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'btn btn-secondary btn-sm']) ?>
            </div>
        </div>
    </aside>
    <div class="col-md-8">
        <div class="card shadow-lg">
            <div class="card-body" style="background-color: #fff; border-radius: 8px; padding: 20px;">
                <h4 class="card-title text-primary"><?= __('Edit User') ?></h4>
                <?= $this->Form->create($user, ['class' => 'needs-validation', 'novalidate']) ?>
                <fieldset>
                    <div class="form-group">
                        <?= $this->Form->label('username', 'Username', ['class' => 'control-label text-primary']) ?>
                        <?= $this->Form->text('username', ['class' => 'form-control', 'required']) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->label('email', 'Email', ['class' => 'control-label text-primary']) ?>
                        <?= $this->Form->email('email', ['class' => 'form-control', 'required']) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->label('password', 'Password', ['class' => 'control-label text-primary']) ?>
                        <?= $this->Form->password('password', ['class' => 'form-control', 'required']) ?>
                    </div>
                </fieldset>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

