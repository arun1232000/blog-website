<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */
?>

<div class="row justify-content-center" >
    <div class="col-md-6">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-light">
                <h3 class="mb-0"><?= __('Add User') ?></h3>
            </div>
            <div class="card-body">
                <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'btn btn-info btn-sm mb-3']) ?>

                <?= $this->Form->create($user, ['type' => 'file', 'class' => 'needs-validation', 'novalidate']) ?>
                <fieldset>
                    <div class="form-group">
                        <?= $this->Form->label('username', 'Username', ['class' => 'control-label']) ?>
                        <?= $this->Form->text('username', ['class' => 'form-control', 'required']) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->label('email', 'Email', ['class' => 'control-label']) ?>
                        <?= $this->Form->email('email', ['class' => 'form-control', 'required']) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->label('password', 'Password', ['class' => 'control-label']) ?>
                        <?= $this->Form->password('password', ['class' => 'form-control', 'required']) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->label('image_file', 'Image File', ['class' => 'control-label']) ?>
                        <div class="custom-file">
                            <?= $this->Form->file('image_file', ['class' => 'custom-file-input', 'required', 'id' => 'customFile']) ?>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    
                </fieldset>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-block mt-3']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
