<h1>Danh sách Bài viết</h1>
<ul>
    <?php foreach ($demos as $demo): ?>
        <li>
            <a href="<?= $this->Url->build(['action' => 'view', $demo['id']]) ?>">
                <?= h($demo['title']) ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
