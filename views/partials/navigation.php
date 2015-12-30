<?
$homeClass = $selectedTab === 'home' ? 'current_page_item' : '';
$aboutClass = $selectedTab === 'about' ? 'current_page_item' : '';
$offerClass = $selectedTab === 'offer' ? 'current_page_item' : '';
$contactClass = $selectedTab === 'contact' ? 'current_page_item' : '';
?>

<div class="top_bar_left clearfix">
    <div class="logo">
        <a id="logo" href="/" title="MacBride Law">
            <img class="logo-main scale-with-grid" src="images/MBLogo.png" alt=""/>
            <img class="logo-sticky scale-with-grid" src="images/MBLogo.png" alt="" />
        </a>
    </div>
    <div class="menu_wrapper">
        <nav id="menu">
            <ul id="menu-main-menu" class="menu">
                <li class="<?=$homeClass;?>">
                    <a href="/"><span>Home</span></a>
                </li>
                <li class="<?=$aboutClass;?>">
                    <a href="/about"><span>About us</span></a>
                </li>
                <li class="<?=$offerClass;?>">
                    <a href="/what-we-offer"><span>What we offer</span></a>
                </li>
                <li class="<?=$contactClass;?>">
                    <a href="/contact"><span>Contact us</span></a>
                </li>
            </ul>
        </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
    </div>
</div>