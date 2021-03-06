<?php 
    if(!empty($quser)){
        $user = $quser; 
    }else{
        $user = $CI->auth->get_user(); 
    }
?>
<div id="body">
    <div class="container">
        <section class="detail">
            <div class="row">
                <h2 class="title"><?php echo ($article['title']); ?></h2>
                <div class="span-4">
                    <div class="image" style="background:url('<?php echo base_url('data/').'/'.$article['cover'] ?>') center; background-size: cover;"></div>
                    <div class="detail-mov">
                        <!-- <div class="row">
                            <div class="span-12">
                                <div class="row">
                                    <div class="span-4">
                                        <h6>Category</h6>
                                    </div>
                                    <div class="span-8">
                                        <h6><?php echo format_model_param($article['category_id'],'category'); ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="row">
                            <div class="span-12">
                                <div class="row">
                                    <div class="span-4">
                                        <h6>Size</h6>
                                    </div>
                                    <div class="span-8">
                                        <h6><?php echo ($article['size']); ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="row">
                            <div class="span-12">
                                <div class="row">
                                    <div class="span-4">
                                        <h6>Quality</h6>
                                    </div>
                                    <div class="span-8">
                                        <h6><?php echo format_param_short($article['quality'],'quality'); ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="row">
                            <div class="span-12">
                                <div class="row rate">
                                    <div class="span-4">
                                        <h6>Rate</h6>
                                    </div>
                                    <div class="span-8">
                                        <h6><?php echo $article['rate'] ?> Like</h6>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="row">
                            <div class="download">
                                <div class="span-6">
                                    <a class="submit pull-left" href="<?php echo site_url('web/detail_article').'/'.$article['id'].'/'.$offset.'/1'; ?>">Like</a>
                                </div>
                                <div class="span-6">
                                    <a class="submit pull-right" href="<?php echo base_url('data/article/articlenya/').'/'.$article['title'].'.zip' ?>">Download</a>
                                </div>
                            </div>
                        </div> -->
                        <div class="row comment-field">
                            <div class="span-12">
                                <?php foreach ($comment as $com):?>
                                    <div class="row comment-content">
                                        <div class="span-4">
                                            <div class="avatar" style="background: url(<?php echo base_url() ?>data/user/<?php echo format_model_param($com['user_id'],'user','','',array('image')) ?>) center no-repeat; background-size: cover;"></div>
                                        </div>
                                        <div class="span-8">
                                            <div class="username">
                                                <h6>
                                                    <span style="color: #11ACE0;"><?php echo $com['name']; ?></span>
                                                    <!-- <a href="<?php //echo site_url('web/view_user').'/'.format_model_param($com['user_id'],'user','','',array('id'))?>"><?php echo format_model_param($com['user_id'],'user','','',array('username')); ?></a> -->
                                                    Comment
                                                </h6>
                                            </div>
                                            <div class="date">
                                                <span><?php echo $com['created_time']; ?></span>
                                            </div>
                                            <div class="content-com">
                                                <p><?php echo $com['comment']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                                <div clas="row">
                                    <?php echo $this->pagination->new_create_links() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span-8">
                    <div class="row">
                        <div class="span-12">
                            <div class="row">
                                <div class="span-2">
                                    <h6>&nbsp;</h6>
                                </div>
                                <div class="span-10 description">
                                    <p>
                                        <?php echo nl2br($article['description']) ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="span-12">
                            <div class="row">
                                <div class="span-2">
                                    <h6>Trailer</h6>
                                </div>
                                <div class="span-10 trailer">
                                    <?php
                                        $article_code = $article['trailer'];
                                        $youtube = explode("v=", $article_code);
                                    ?>
                                    <?php if(!empty($article['trailer'])) : ?>
                                        <iframe width="530" height="315" src="//www.youtube.com/embed/<?php echo $youtube[1] ?>" frameborder="0" allowfullscreen></iframe>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <?php //if(empty($user['id'])) : ?>
                    <?php //else : ?>
                    <div class="row">
                        <div class="span-12">
                            <div class="row comment">
                                <form action="" method="POST">
                                    <div class="span-2">
                                        <h6>Comment</h6>
                                    </div>
                                    <div class="span-10">
                                        <input type="hidden" name="user_id" value="<?php echo $user['id'] ?>">
                                        <textarea name="comment" id="" cols="30" rows="10"></textarea>
                                        <input type="text" name="name" placeholder="<?php echo l('Your Name') ?>">
                                    </div>
                                    <div class="span-12">
                                        <div class="row">
                                            <input value="Comment" type="submit" class="submit pull-right">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php //endif ?>
                </div>
            </div>
        </section>
    </div>
</div>