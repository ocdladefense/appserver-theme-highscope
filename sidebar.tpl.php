<div id="sidenav" class="sidenav">
    <div id="title">LETTER<br/>LINKS</div>

    <?php if(!empty($user)): ?>
    <div class="user">
        <div class="userInfo">
            <i class="fa fa-user userPic"></i>
            <?php echo($user->name); ?></br>
            <?php echo($user->shortUsername); ?>
            <a href="letterlinks/user" style="text-decoration: none; color:#00a8e7"><br/><i class="fa fa-cog" aria-hidden="true"></i>Options</a>
            
        </div>
        
    </div>
    <?php endif; ?>
    <div class="sidebar-links">
        <a href="/my-account">Class List</a>
        <?php if(!empty($user)): ?>
            <a href="/letterlinks/logout">Logout</a>
        <?php else: ?>
            <a href="/letterlinks/login">Login</a>
        <?php endif; ?>
        
        <a href="/letterlinks/content/about"><?php echo(t("menu_about"));?></a>
        <a href="/letterlinks/content/faq"><?php echo(t("menu_faq"));?></a>
        <a href="/letterlinks/content/help"><?php echo(t("menu_help"));?></a>
        <a href="/letterlinks/content/resources"><?php echo(t("menu_resources"));?></a>
        <a href="/letterlinks/content/activities"><?php echo(t("menu_activities"));?></a>
        <button class="dropdown-btn"><i class="fa fa-language"></i>
            <i class="fa fa-caret-down"></i>&nbsp;&nbsp;
        </button>
        <div class="dropdown-container">
            <?php
                echo('<a href="'.$page.'?lang=en">'."en"."</a>");
                echo('<a href="'.$page.'?lang=es">'."es"."</a>");
            ?>
        </div>
    </div>
</div>