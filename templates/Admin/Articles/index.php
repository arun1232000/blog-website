<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Article> $articles
 */
?>
<style>
    /* Container styling */
    .articles.index.content {
        
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Heading styling */
    h3 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    /* New Article button styling */
    .button.float-right {
        float: right;
        margin-bottom: 10px; /* Add some spacing between the button and the heading */
    }

    /* Table styling */
    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .actions a {
        margin-right: 10px;
        color: #007bff;
        text-decoration: none;
    }

    .actions a:hover {
        text-decoration: underline;
    }

    /* Pagination styling */
    .paginator {
        margin-top: 20px;
        text-align: center;
    }
</style>

<!-- Include Bootstrap CSS (make sure to adjust the path based on your project structure) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Your existing HTML code follows here -->
<div class="container-fluid" style="width:100%%;">
<div class="articles index content">
    <?= $this->Html->link(__('New Article'), ['action' => 'add'], ['class' => 'btn btn-primary float-right']) ?>
    <h3><?= __('Articles') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>

                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?= $this->Number->format($article->id) ?></td>
                    <td><?= h($article->title) ?></td>
                   
                    <td><?= $this->Html->image($article->image, ['style' => 'width: 70px; height: 70px; ', 'class' => 'img-thumbnail']) ?></td>
                    <td><?= h($article->created) ?></td>
                    <td><?= h($article->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $article->id], ['class' => 'btn btn-info']) ?><br><br>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->id], ['class' => 'btn btn-warning']) ?><br><br>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id), 'class' => 'btn btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['tag' => 'li', 'class' => 'page-item']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['tag' => 'li', 'class' => 'page-item']) ?>
            <?= $this->Paginator->numbers(['tag' => 'li', 'currentClass' => 'page-item active', 'currentTag' => 'span', 'class' => 'page-item']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['tag' => 'li', 'class' => 'page-item']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['tag' => 'li', 'class' => 'page-item']) ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
</div>


