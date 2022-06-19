<!-- File: src/Template/Articles/view.ctp -->
<h1><?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
<p>Created:<?= $article->created->format('y/m/d') ?></p>
