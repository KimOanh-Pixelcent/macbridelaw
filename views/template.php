<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <?= $headContent; ?>
    <body class="page <?=$pageType;?> page-template-default color-custom layout-full-width no-content-padding header-classic sticky-header sticky-white subheader-both-center">
        <div id="Wrapper">
            <div id="Header_wrapper" >
                <header id="Header">
                    <div id="Action_bar">
                        <div class="container">
                            <div class="column one">
                                <?= $contactDetails; ?>
                                <?= $socialList;?>
                            </div>
                        </div>
                    </div><div class="header_placeholder"></div>
                    <div id="Top_bar">
                        <div class="container">
                            <div class="column one">
                                <?= $navigation; ?>
                            </div>
                        </div>
                    </div>
                </header>
                <div id="Subheader">
                    <div class="container">
                        <div class="column one">
                            <h1 class="title"><?=$subTitle;?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Content">
                <div class="content_wrapper clearfix">
                    <div class="sections_group">
                        <div class="entry-content" >
                            <?= $pageContent; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?=$footer;?>
        </div>
        <script type="text/javascript" src="js/mfn.menu.js"></script>
        <script type="text/javascript" src="js/jquery.plugins.js"></script>
        <script type="text/javascript" src="js/animations/animations.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>
</html>