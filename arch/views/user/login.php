<script type="text/javascript">
    $(function() {
        function resize() {
            $('#login-pane').css({
                left: ($(window).width() - $('#login-pane').width()) / 2,
                top: (($(window).height() - $('#login-pane').height()) / 2) - 25
            });
        }

        $(window).resize(function() {
            resize();
        });
        resize();
    });
</script>

<div id="login" class="login-pane<?php echo (is_error_exists()) ? " accessdenied" : '' ?>">
    <div class="title">
        <h2>
            <strong>CYBERTEAM</strong>
            <br>
            LOGIN
        </h2>
    </div>
    <form action="" method="post">
        <div class="row">
            <?php if (!$CI->config->item('use_db')): ?>
                <div style="text-align: center; color: red; font-weight: bold">
                    Database not ready!
                </div>
            <?php endif ?>
            <div class="span-12">
                <input type="text" name="login" value=""  placeholder="<?php echo l('Username / Email') ?>" />
            </div>
            <div class="span-12">
                <input type="password" name="password" value="" placeholder="<?php echo l('Password') ?>" />
            </div>
            <div class="span-12" align="center">
                <input type="hidden" name="continue" value="" />
                <input type="submit" value="Sign In"></input>
            </div>
        </div>
    </form>
</div>