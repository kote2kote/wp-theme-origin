<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package origin
 */

 //ポストIDからスラッグを取り出してbodyタグのIDに入れる
 $page = get_post( get_the_ID() );
 $slug = $page->post_name;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body id="<?php echo $slug; ?>" <?php body_class(); ?>>

<header class="header">

  <div class="top_nav cm0">
    <div class="section-content row">
      <div class="top_nav__l col cm0 flex">
        <img src="https://placehold.jp/112x13.png" alt="">
        <p>「健康をのせて」 もっと、ずっと。</p>
      </div>
      <div class="top_nav__r col cm0">
        <ul class="menu flex">
          <li class="menu_corp"><a href="#">コーポレートサイト</a></li>
          <li class="menu_contacts"><a href="#">お問い合わせ</a></li>
          <li class="menu_language"><a href="#" class="english">English</a> | <a href="#" class="china">中文</a> </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="middle_menu cm0">
    <div class="section-content row flex">
      <div class="middle_menu__l col cm0"><img src="https://placehold.jp/206x86.png" alt=""></div>
      <div class="middle_menu__m col cm0">
        <ul class="menu_list flex">
          <li class="menu_list__item">
            <img src="https://placehold.jp/68x68.png" alt="">
            <span>メニュー</span>
          </li>
          <li class="menu_list__item">
            <img src="https://placehold.jp/68x68.png" alt="">
            <span>メニュー</span>
          </li>
          <li class="menu_list__item">
            <img src="https://placehold.jp/68x68.png" alt="">
            <span>メニュー</span>
          </li>
          <li class="menu_list__item">
            <img src="https://placehold.jp/68x68.png" alt="">
            <span>メニュー</span>
          </li>
        </ul>
      </div>
      <div class="middle_menu__r col cm0 flex">
        <form action="" class="search">
          <input type="text" placeholder="メニュー検索" class="search_textbox">
        </form>
      </div>
    </div>
  </div>

  <div class="bottom_menu cm0 flex">
    <ul class="menu_list flex">
      <li>メニュー</li>
      <li>メニュー</li>
      <li>メニュー</li>
      <li>メニュー</li>
      <li>メニュー</li>
    </ul>
  </div>
</header>

<section class="hero flex">
<h2 class="heading">メニュー</h2>
</section>

<section class="breadcrumb">
  <div class="section-content">
    <ul class="breadcrumb__menu_list flex">
      <li class="item"><a href="">link</a></li>
      <li class="item"><a href="">link</a></li>
      <li class="item"><a href="">link</a></li>
    </ul>
  </div>
</section>

<section class="food_menu">

  <div class="tab flex">
    <span class="east cm0">関東メニュー</span>
    <span class="west cm0">関西メニュー</span>
  </div>

  <div class="food cm0">
    <div class="section-content">
      <div class="search_menu cm0">
        <h3 class="title cm0">メニュー検索</h3>
        <div class="search_menu__content">
          <ul class="menu_list flex">
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="search_menu allergen cm0">
        <h3 class="title cm0">アレルゲン検索</h3>
        <div class="search_menu__content">
          <ul class="menu_list flex">
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
          </ul>
        </div>
      </div>

      <p class="align-center">※アレルゲン検索機能は『Internet Explorer 8』には対応しておりません。</p>
      <div class="search_btn btn align-center"><button>検索</button></div>
      <div class="search_select align-center">52件が該当しました
        <span class="search_select_box">
        <select name="example">
          <option value="サンプル1">サンプル1</option>
          <option value="サンプル2">サンプル2</option>
          <option value="サンプル3">サンプル3</option>
        </select>
        </span>
      </div>
      <p class="warning">各メニューには栄養成分の数値を「エネルギー / タンパク質 / 脂質 / 炭水化物 / ナトリウム / 食塩相当量」の順で記載をしております。</p>

    </div>
  </div>

</section>

<section class="main_menu">
  <div class="section-content cm0">
    <ul class="main_menu__list row">

      <li class="item col-3 col-4-lg col-6-md col-12-sm">
        <div class="item_content cm0">
          <a href="#" class="link">
            <div class="figure">
              <figure><img src="https://placehold.jp/900x600.png" alt=""></figure>
              <span class="label cm0">new</span>
            </div>
            <div class="line"></div>
            <div class="detail">
              <h4 class="menu_name">粒マスタードハンバーグ弁当</h4>
              <p>
                <span class="kakaku">本体価格 : 741円/1個</span>
                <span class="zeikomi">(税込 : 800円/1個)</span>
                <span class="energy">1210kcal / 45.1g / 56.1g / 124.9g / 1919mg / 4.9g</span>
              </p>
            </div>
          </a>
        </div>
      </li>

      <li class="item col-3 col-4-lg col-6-md col-12-sm">
        <div class="item_content cm0">
          <a href="#" class="link">
            <div class="figure">
              <figure><img src="https://placehold.jp/900x600.png" alt=""></figure>
              <span class="label cm0">new</span>
            </div>
            <div class="line"></div>
            <div class="detail">
              <h4 class="menu_name">粒マスタードハンバーグ弁当</h4>
              <p>
                <span class="kakaku">本体価格 : 741円/1個</span>
                <span class="zeikomi">(税込 : 800円/1個)</span>
                <span class="energy">1210kcal / 45.1g / 56.1g / 124.9g / 1919mg / 4.9g</span>
              </p>
            </div>
          </a>
        </div>
      </li>

      <li class="item col-3 col-4-lg col-6-md col-12-sm">
        <div class="item_content cm0">
          <a href="#" class="link">
            <div class="figure">
              <figure><img src="https://placehold.jp/900x600.png" alt=""></figure>
              <span class="label cm0">new</span>
            </div>
            <div class="line"></div>
            <div class="detail">
              <h4 class="menu_name">粒マスタードハンバーグ弁当</h4>
              <p>
                <span class="kakaku">本体価格 : 741円/1個</span>
                <span class="zeikomi">(税込 : 800円/1個)</span>
                <span class="energy">1210kcal / 45.1g / 56.1g / 124.9g / 1919mg / 4.9g</span>
              </p>
            </div>
          </a>
        </div>
      </li>

      <li class="item col-3 col-4-lg col-6-md col-12-sm">
        <div class="item_content cm0">
          <a href="#" class="link">
            <div class="figure">
              <figure><img src="https://placehold.jp/900x600.png" alt=""></figure>
              <span class="label cm0">new</span>
            </div>
            <div class="line"></div>
            <div class="detail">
              <h4 class="menu_name">粒マスタードハンバーグ弁当</h4>
              <p>
                <span class="kakaku">本体価格 : 741円/1個</span>
                <span class="zeikomi">(税込 : 800円/1個)</span>
                <span class="energy">1210kcal / 45.1g / 56.1g / 124.9g / 1919mg / 4.9g</span>
              </p>
            </div>
          </a>
        </div>
      </li>

      <li class="item col-3 col-4-lg col-6-md col-12-sm">
        <div class="item_content cm0">
          <a href="#" class="link">
            <div class="figure">
              <figure><img src="https://placehold.jp/900x600.png" alt=""></figure>
              <span class="label cm0">new</span>
            </div>
            <div class="line"></div>
            <div class="detail">
              <h4 class="menu_name">粒マスタードハンバーグ弁当</h4>
              <p>
                <span class="kakaku">本体価格 : 741円/1個</span>
                <span class="zeikomi">(税込 : 800円/1個)</span>
                <span class="energy">1210kcal / 45.1g / 56.1g / 124.9g / 1919mg / 4.9g</span>
              </p>
            </div>
          </a>
        </div>
      </li>

      <li class="item col-3 col-4-lg col-6-md col-12-sm">
        <div class="item_content cm0">
          <a href="#" class="link">
            <div class="figure">
              <figure><img src="https://placehold.jp/900x600.png" alt=""></figure>
              <span class="label cm0">new</span>
            </div>
            <div class="line"></div>
            <div class="detail">
              <h4 class="menu_name">粒マスタードハンバーグ弁当</h4>
              <p>
                <span class="kakaku">本体価格 : 741円/1個</span>
                <span class="zeikomi">(税込 : 800円/1個)</span>
                <span class="energy">1210kcal / 45.1g / 56.1g / 124.9g / 1919mg / 4.9g</span>
              </p>
            </div>
          </a>
        </div>
      </li>

      <li class="item col-3 col-4-lg col-6-md col-12-sm">
        <div class="item_content cm0">
          <a href="#" class="link">
            <div class="figure">
              <figure><img src="https://placehold.jp/900x600.png" alt=""></figure>
              <span class="label cm0">new</span>
            </div>
            <div class="line"></div>
            <div class="detail">
              <h4 class="menu_name">粒マスタードハンバーグ弁当</h4>
              <p>
                <span class="kakaku">本体価格 : 741円/1個</span>
                <span class="zeikomi">(税込 : 800円/1個)</span>
                <span class="energy">1210kcal / 45.1g / 56.1g / 124.9g / 1919mg / 4.9g</span>
              </p>
            </div>
          </a>
        </div>
      </li>

    </ul>
  </div>
</section>

<footer class="footer">
  <div class="section-content">
    <div class="group_logo flex cm0">
      <img class="logo" src="https://placehold.jp/90x90.png" alt="">
      <img class="logo" src="https://placehold.jp/90x90.png" alt="">
      <img class="logo" src="https://placehold.jp/90x90.png" alt="">
      <img class="logo" src="https://placehold.jp/90x90.png" alt="">
      <img class="logo" src="https://placehold.jp/90x90.png" alt="">
      <img class="logo" src="https://placehold.jp/90x90.png" alt="">
    </div>
    <div class="aeon flex cm0">
      <a href="#" class="aeon_logo"><img src="https://placehold.jp/90x29.png" alt=""></a>
      <span class="to_customer"><a href="#">グループお客さまサイトへ</a></span>
      <span class="to_groupsite"><a href="#">グループ情報サイトへ </a></span>
      <a href="#" class="tree_logo"><img src="https://placehold.jp/270x58.png" alt=""></a>
    </div>
    <div class="copyright cm0">
      <ul class="copyright__links flex">
        <li><a href="#">プライバシーポリシー</a></li>
        <li><a href="#">サイトマップ</a></li>
        <li><a href="#">従業員ログイン</a></li>
      </ul>
      <div class="copyright__footer flex">
        <span class="copyright__text">Copyright © ORIGIN TOSHU Co.,Ltd.All rights reserved.</span>
        <a href="#" class="origin_toshu_logo"><img src="https://placehold.jp/360x40.png" alt=""></a>
      </div>
    </div>
  </div>
</footer>

<?php
          // wp_nav_menu( array(

          //   'theme_location'	=> 'common_header',//function.phpで設定したやつ
          //   'container'			=> 'div',
          //   'container_class'	=> 'header_menu',
          //   'menu_class'		=> 'menu__ul flex'

          // ) );
?>

        <!--
        出力される内容

        <div class="header_menu">
          <ul id="menu-head_navi" class="menu__ul flex">
            <li id="menu-item-2135" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2112 current_page_item menu-item-2135"><a href="http://10.0.0.7:5000/">Index</a></li>
            <li id="menu-item-2134" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2134"><a href="http://10.0.0.7:5000/home/">Home</a></li>
            <li id="menu-item-2133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2133"><a href="http://10.0.0.7:5000/services/">Services</a></li>
            <li id="menu-item-2136" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-has-children menu-item-2136"><a href="/">About<span class="fas fa-angle-down toggle_icon"></span></a>
              <ul class="sub-menu">
                <li id="menu-item-2131" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2131"><a href="http://10.0.0.7:5000/about-us/">About us</a></li>
                <li id="menu-item-2130" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2130"><a href="http://10.0.0.7:5000/about-me/">About me</a></li>
              </ul>
            </li>
            <li id="menu-item-2128" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2128"><a href="http://10.0.0.7:5000/test/">Test</a></li>
            <li id="menu-item-2129" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2129"><a href="http://10.0.0.7:5000/check-css/">Check CSS</a></li>
            <li id="menu-item-2132" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2132"><a href="http://10.0.0.7:5000/contacts/">Contacts</a></li>
            <li id="menu-item-2139" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2139"><a href="http://10.0.0.7:5000/blogs/">Blog</a></li>
          </ul>
        </div> -->