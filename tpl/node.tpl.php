<?php
// $Id$

/**
 * @template 主题浏览模板
 */

?>
<h2 class="forum_node_view_title"><?php echo $node->title ?></h2>

<div class="forum_node_view_info">
  <?php echo theme('username', $node)?> 发表于  <?php echo format_date($node->created)?>
  
  <?php if($node->comment_count) : ?>
  <a href="#forum_comment_view" class="forum_node_view_info_comment_count"><?php echo $node->comment_count?> 条回复</a>
  <?php endif ?>
  
  <?php if ($node->is_reply) {?>
  <a href="<?php echo $node->url?>#forum_comment_form" class="forum_node_view_info_comment_count">我要回复</a>
  <?php } else {?>
  <a href="<?php echo $node->url?>#forum_comment_form" class="forum_node_view_info_comment_count login_msg">我要回复</a>
  <?php }?>
  
</div>

<div class="forum_node_view_body"><?php echo $node->body ?></div>

<div class="forum_node_view_links">

<?php if($node->top_url) : ?>
<a class="confirm" href="<?php echo $node->top_url?>">
  <?php if($node->top) { echo '取消置顶'; } else { echo '置顶';} ?>
</a>
<?php endif?>

<?php if($node->essence_url) : ?>
<a class="confirm" href="<?php echo $node->essence_url?>">
  <?php if($node->essence) { echo '取消精华'; } else { echo '精华';} ?>
</a>
<?php endif?>

<?php if($node->update_url) : ?>
<a href="<?php echo $node->update_url?>">编辑</a>
<?php endif?>

<?php if($node->delete_url) : ?>
<a href="<?php echo $node->delete_url?>" class="confirm">删除</a>
<?php endif?>

</div>

<div id="forum_comment_view"><?php echo $node->comment->view // 所有评论?></div>

<div id="forum_comment_pager"><?php echo $node->comment->pager // 评论翻页?></div>

<div id="forum_comment_form">
  <h2 class="forum_comment_form_title">参与讨论</h2>
  <?php echo $node->comment->form // 评论表单?>
</div>