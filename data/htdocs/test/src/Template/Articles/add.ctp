<h1>記事追加</h1>
<?php 
 echo $this->Form->create($article);
 echo $this->Form->control('title');
 echo $this->Form->control('body');
 echo $this->Form->button(__('Save Article'));
 echo $this->Form->end();
 ?>
