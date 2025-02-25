<?php
/**
 * Template Name: Template acceuil
 */

get_header();
?>


    <main id="acceuil">

        <!-- Image pleine largeur -->
        <section id="pci_banner">
            <img src="<?= get_stylesheet_directory_uri() . "/images/pci_banner.jpg" ?>" alt="Bannière">
        </section>

        <!-- Domaine d'activités -->
        <section class="section">
            <h2>Domaine d'activités</h2>
            <div class="image">
                <img src="https://exemple.com/domaine.jpg" alt="Domaine d'activités">
            </div>
            <div class="text">
                <p>Nous intervenons dans plusieurs secteurs, notamment...</p>
            </div>
        </section>

        <!-- Nos missions -->
        <section class="section">
            <h2>Nos missions</h2>
            <div class="image">
                <img src="https://exemple.com/missions.jpg" alt="Nos missions">
            </div>
            <div class="text">
                <p>Notre objectif est de...</p>
            </div>
        </section>

        <!-- Nos valeurs -->
        <section class="section">
            <h2>Nos valeurs</h2>
            <div class="image">
                <img src="https://exemple.com/valeurs.jpg" alt="Nos valeurs">
            </div>
            <div class="text">
                <p>Nous croyons en...</p>
            </div>
        </section>

    </main>


<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
