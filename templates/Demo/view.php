<h1><?= h($post['title']) ?></h1>
<p><?= h($post['content']) ?></p>
<a href="<?= $this->Url->build(['action' => 'index']) ?>" class="button">Quay lại danh sách bài viết</a>
