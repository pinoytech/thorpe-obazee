<?php $this->append('header');?>
<meta property="og:title" content="<?php echo $post['Post']['title'];?>"/>
<meta property="og:url" content="<?php echo Router::url(array(
    'controller' => 'posts',
    'action' => 'view',
    'year' => $post['Post']['year'],
    'month' => $post['Post']['month'],
    'day' => $post['Post']['day'],
    'slug' => $post['Post']['slug']
));?>"/>
<?php $this->end();?>
<div class="offset2 span8 margin-bottom body">
    <div class="row">
        <div class="span8">
            <h2><?php echo $post['Post']['title'];?></h2>
            <p class="muted"><?php echo $post['Post']['created'];?></p>
            <?php echo $post['Post']['body'];?>

        </div>
    </div>
</div>
<div class='span2 margin-bottom'>
</div>
<div class="offset2 span8 margin-bottom margin-bottom post-footer">
    <div class="row">
        <div class="span8">
            Comments are disabled. I'd like to hear your thoughts, though! Please send me a tweet via <?php echo $this->Html->link('@obazee', 'http://twitter.com/obazee');?>.
        </div>
    </div>
</div>