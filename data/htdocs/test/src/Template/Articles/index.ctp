<h1>ブログ記事</h1>
<?= $this->Html->link('記事追加',['action' => 'add']) ?>
<table>
    <tr>
        <th>Id</th>
        <th>タイトル</th>
        <th>作成日時</th>
        <th>編集</th>
    </tr>
    <?php foreach ($articles as $article) : ?>
        <tr>
            <td><?= $article->id ?></td>
            <td>
                <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
            </td>
            <td>
                <?= $article->created->format('y/m/d'); ?>
            </td>
            <td>
                <?= $this->Form->postLink(
                    '削除　',
                    ['action' => 'delete', $article->id],
                    ['confirm' => '本当に削除しますか?'])
                ?>
                <?= $this->Html->link('編集', ['action' => 'edit', $article->id]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
