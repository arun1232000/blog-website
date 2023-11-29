<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $users
 */
?>
<div class="container-fluid" style="width:90%">

<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'btn btn-success float-right mb-3']) ?>
    <h3><?= __('Users') ?></h3>

    <?= $this->Form->create(null, ['type' => 'get']); ?>
    <div class="input-group mb-3">
        <?= $this->Form->text('key', ['class' => 'form-control', 'placeholder' => 'Search...']); ?>
        <div class="input-group-append">
            <?= $this->Form->button('Search', ['type' => 'submit', 'class' => 'btn btn-outline-secondary']); ?>
        </div>
    </div>
    <?= $this->Form->end(); ?>

    <div class="table-responsive">
        <?= $this->Form->create(null, ['url' => ['action' => 'deleteAll']]); ?>
        <button class="btn btn-danger mb-3">Delete All</button>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('#') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Username') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Image') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Created') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $this->Form->checkbox('ids[]', ['value' => $user->user_id]); ?></td>
                        <td><?= $this->Number->format($user->user_id) ?></td>
                        <td><?= h($user->username) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= $this->Html->image($user->image, ['style' => 'width: 50px; height: 50px; border-radius: 50%;', 'class' => 'img-thumbnail']) ?></td>
                        <td><?= h($user->created) ?></td>
                        <td><?= h($user->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view ', $user->user_id], ['class' => 'btn btn-info btn-sm ']) ?><br><br>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit ', $user->user_id], ['class' => 'btn btn-warning btn-sm']) ?><br><br>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id), 'class' => 'btn btn-danger btn-sm']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $this->Form->end(); ?>
    </div>

    <div class="paginator mt-3">
        <ul class="pagination justify-content-end">
            <?= $this->Paginator->first('<< ' . __('First'), ['class' => 'page-item']); ?>
            <?= $this->Paginator->prev('< ' . __('Previous'), ['class' => 'page-item']); ?>
            <?= $this->Paginator->numbers(['class' => 'page-item']); ?>
            <?= $this->Paginator->next(__('Next') . ' >', ['class' => 'page-item']); ?>
            <?= $this->Paginator->last(__('Last') . ' >>', ['class' => 'page-item']); ?>
        </ul>
        <p class="text-muted"><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy2nS8ZlLh/EQzq4I6cA3mY4nLq/2I5+W" crossorigin="anonymous"></script>

