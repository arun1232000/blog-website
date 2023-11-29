<?php
$cname = $this->request->getParam('controller');
$aname = $this->request->getParam('action');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="./">My Blog</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?= $aname === 'home' ? 'bg-warning' : '' ?>">
                    <a class="nav-link" href="./">Home</a>
                </li>
                <li class="nav-item <?= $aname === 'about' ? 'bg-warning' : '' ?>">
                    <a class="nav-link" href="<?= $this->url->build(['controller' => 'blogs', 'action' => 'about']) ?>">About</a>
                </li>
                <li class="nav-item <?= $aname === 'contact' ? 'bg-warning' : '' ?>">
                    <a class="nav-link" href="<?= $this->url->build(['controller' => 'blogs', 'action' => 'contact']) ?>">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
