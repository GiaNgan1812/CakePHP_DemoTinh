<!DOCTYPE html>
<html>
<head>
    <title>Demo CakePHP</title>
    <?= $this->Html->charset() ?>
    <?= $this->Html->meta('viewport', 'width=device-width, initial-scale=1.0') ?>
    <?= $this->Html->css('style.css') ?>
</head>
<body>
    <header>
        <h1>Demo CakePHP</h1>
    </header>
    <main>
        <?= $this->fetch('content') ?>
    </main>
    <footer>
        <p>&copy; 2024 Demo Application</p>
    </footer>
</body>
</html>
