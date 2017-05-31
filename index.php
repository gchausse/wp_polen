<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage themename
 */

$features = get_posts(array(
    'category' => 2,
    'order' => 'ASC'
));
$companiesNews = get_posts(array(
    'category' => 3,
    'order' => 'ASC'
));
$ticNews = get_posts(array(
    'category' => 4,
    'order' => 'ASC'
));
$teleworkNews = get_posts(array(
    'category' => 5,
    'order' => 'ASC'
));
get_header();
?>
<main>
    <section id="banner">
        <img src="http://polen-mende.com/wp-content/uploads/2013/05/polen.jpg" alt="" class="slider-img">
        <img src="http://polen-mende.com/wp-content/uploads/2013/02/cropped-cropped-cropped-polen21.png" alt="" class="site-img">
        <img src="http://polen-mende.com/images/bandeau-blanc.png" alt="" class="slider-layer">
    </section>
    <nav id="main-nav">
        <ul>
            <li><a href="#">Présentation</a>
                <ul>
                    <li><a href="#">le parc technologique</a></li>
                    <li><a href="#">equipement</a></li>
                    <li><a href="#">equipe</a></li>
                    <li><a href="#">L'animations et les partenaires</a></li>
                </ul>
            </li>
            <li><a href="#">Pépinière</a>
                <ul>
                    <li><a href="#">l'accompagnement</a></li>
                    <li><a href="#">locaux proposé aux entreprises</a></li>
                    <li><a href="#">L’offre de services de POLeN</a></li>
                    <li><a href="#">Les entreprises hébergées à POLeN</a></li>
                    <li><a href="#">Actus entreprises innovantes</a></li>
                </ul>
            </li>
            <li><a href="#">Centre de ressources</a>
                <ul>
                    <li><a href="#">Les services du centre de ressources</a></li>
                    <li><a href="#">Club e-commerce48</a></li>
                    <li><a href="#">Journée e-tourisme 2013</a></li>
                    <li><a href="#">Actus TIC en entreprise</a></li>
                </ul>
            </li>
            <li><a href="#">Télécentre</a>
                <ul>
                    <li><a href="#">Le Réseau SoLozère</a></li>
                    <li><a href="#">Télécentre de POLeN</a></li>
                    <li><a href="#">Actus télétravail</a></li>
                </ul>
            </li>
            <li><a href="#">Media</a>
                <ul>
                    <li><a href="#">Archives du sIte</a></li>
                    <li><a href="#">Visite virtuelle</a></li>
                    <li><a href="#">Photographies</a></li>
                    <li><a href="#">Webcam</a></li>
                </ul>
            </li>
            <li><a href="#">Agenda</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <section id="features">
        <?php foreach($features as $feature) { ?>
            <article class="feature">
                <?php echo get_the_post_thumbnail($feature); ?>
                <div class="feature-desc">
                    <h2><a href="#"><?php echo $feature->post_title; ?></a></h2>
                    <p><?php echo $feature->post_excerpt; ?></p>
                    <a href="#">Infos >></a>
                </div>
            </article>
        <?php } ?>
    </section>
    <section id="news">
        <section>
            <h2>Actus entreprises innovantes</h2>
            <?php foreach($companiesNews as $new) {?>
                <article>
                    <?php echo get_the_post_thumbnail($new); ?>
                    <p><?php echo $new->post_title; ?></p>
                </article>
            <?php } ?>
        </section>

        <section>
            <h2>Actus usages des tic en entreprise</h2>
            <?php foreach($ticNews as $new) { ?>
                <article>
                    <?php echo get_the_post_thumbnail($new); ?>
                    <p><?php echo $new->post_title; ?></p>
                </article>
            <?php } ?>
        </section>

        <section>
            <h2>Actus télétravail</h2>
            <?php foreach($teleworkNews as $new) { ?>
                <article>
                    <?php echo get_the_post_thumbnail($new); ?>
                    <p><?php echo $new->post_title; ?></p>
                </article>
            <?php } ?>
        </section>
    </section>
</main>
<?php
get_footer();
?>
