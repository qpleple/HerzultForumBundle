<?php $view->extend('ForumBundle::layout.php') ?>
<?php $view['slots']->set('title', 'ForumBundle, a simple Symfony2 forum') ?>
<div class="forum forum_index">
    <ul class="crumbs">
        <li>Forum</li>
    </ul>
    <div class="main topics">
        <h2>All topics</h2>
        <?php echo $view['actions']->render('ForumBundle:Topic:list', array(), array('query' => array('page' => $page))) ?>
    </div>
    <div class="side categories">
        <h2>Categories</h2>
        <?php echo $view['actions']->render('ForumBundle:Category:list') ?>
    </div>
</div>
