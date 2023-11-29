<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */
?>

<div class="row">
    <aside class="col-md-4">
        <div class="card">
            <div class="card-header bg-dark text-light">
                <h5 class="mb-0"><?= __('Actions') ?></h5>
            </div>
            <div class="card-body">
                <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->user_id], ['class' => 'btn btn-primary btn-block mb-2']) ?>
                <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id), 'class' => 'btn btn-danger btn-block mb-2']) ?>
                <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'btn btn-info btn-block mb-2']) ?>
                <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'btn btn-success btn-block']) ?>
            </div>
        </div>
    </aside>

    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-primary text-light">
                <h3 class="mb-0"><?= h($user->username) ?></h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th><?= __('Username') ?></th>
                        <td><?= h($user->username) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Email') ?></th>
                        <td><?= h($user->email) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('User Id') ?></th>
                        <td><?= $this->Number->format($user->user_id) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Created') ?></th>
                        <td><?= h($user->created) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Modified') ?></th>
                        <td><?= h($user->modified) ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
