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
            <li><a href="#">Présentation</a></li>
            <li><a href="#">Pépinière</a></li>
            <li><a href="#">Centre de ressources</a></li>
            <li><a href="#">Télécentre</a></li>
            <li><a href="#">Media</a></li>
            <li><a href="#">Agenda</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <section id="features">
        <article class="feature">
            <img src="http://polen-mende.com/images/pep8.png" alt="">

            <div class="feature-desc">
                <h2><a href="#">Pépinière d'entreprises</a></h2>
                <p>Hébergement des entreprises innovantes du département</p>
                <a href="#">Infos >></a>
            </div>
        </article>
        <article class="feature">
            <img src="http://polen-mende.com/images/tic8.png" alt="">
            <div class="feature-desc">
                <h2><a href="#">Centre de ressources TIC</a></h2>
                <p>Un espace dédié aux nouvelles technologies pour les entreprises</p>
                <a href="#">Infos >></a>
            </div>
        </article>
        <article class="feature">
            <img src="http://polen-mende.com/images/tele8.png" alt="">
            <div class="feature-desc">
                <h2><a href="#">Le télécentre SoLozère</a></h2>
                <p>Un équipement au services des télétravailleurs</p>
                <a href="#">Infos >></a>
            </div>
        </article>
    </section>
    <section id="actu">
        <section>
            <h2>Actus entreprises innovantes</h2>
            <article>
                <img src="http://polen-mende.com/wp-content/uploads/2016/10/codivores-250x120.jpg" alt="">
                <p>CODIVORES : une agence web coopérative hébergée à POLeN</p>
            </article>
            <article>
                <img src="http://polen-mende.com/wp-content/uploads/2016/04/3-2-250x120.jpg" alt="">
                <p>AGT, Lozère Développement et la communauté de communes "Coeur de Lozère" lancent BLOOM'UP pour promouvoir l'innovation dans le numérique en lozère</p>
            </article>
            <article>
                <p>Le lycée Emile PEYTAVIN a organise des "joutes informatiques" à POLeN</p>
            </article>
        </section>

        <section>
            <h2>Actus usages des tic en entreprise</h2>
            <article>
                <img src="http://polen-mende.com/wp-content/uploads/2016/04/3d-250x120.jpg" alt="">
                <p>25 professionnels échangent sur la 3d à POLeN</p>
            </article>
            <article>
                <img src="http://polen-mende.com/wp-content/uploads/2016/03/debbuging-250x120.jpg" alt="">
                <p>Debugging the Gender Gap</p>
            </article>
            <article>
                <img src="http://polen-mende.com/wp-content/uploads/2016/03/numeriquest-250x120.jpg" alt="">
                <p>Réflexion autour des enjeux du e-tourisme en Lozère</p>
            </article>
        </section>

        <section>
            <h2>Actus télétravail</h2>
            <article>
                <img src="http://polen-mende.com/wp-content/uploads/2016/04/sdbx-250x120.jpg" alt="">
                <p>Solozère a participé à la semaine digitale de Bordeaux pour préparer les rendez-vous numériques de l’année</p>
            </article>
            <article>
                <img src="http://polen-mende.com/wp-content/uploads/2016/04/stl-250x120.jpg" alt="">
                <p>Le réseau Solozère lance semaine des lieux de travail partagés du 6 au 10 juin 2016</p>
            </article>
            <article>
                <img src="http://polen-mende.com/wp-content/uploads/2016/04/softplace-250x120.jpg" alt="">
                <p>Une journée d’ateliers sur les lieux de travail partagés à POLeN – Mende</p>
            </article>
        </section>
    </section>
</main>
<?php
get_footer();
?>
