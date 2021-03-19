<?php
/**
 * 404 template.
 *
 * @package Neve
 */

get_header(); ?>
<style>
.center {
    text-align: center;
    color: #ff679a;
    max-width: 100%;
}

.bigfont {
    font-size: 150px;
}

.container {
    text-align: center;
    max-width: 1300px;
    margin: 0 auto;
    padding: 0 16px;
    position: relative;
}

.container--narrow {
    max-width: 960px;
}

.page-section {
    padding-top: 1.6rem;
    padding-bottom: 1.6rem;
    @mixin atSmall {
        padding-top: 3.5rem;
        padding-bottom: 3.5rem;
}

</style>

<h1 class="center bigfont">404</h1>
<h3 class="center">Desculpe, mas a página que você está procurando não existe.</h3>
<?php
//do_action( 'neve_do_404s' );
get_footer();
?>