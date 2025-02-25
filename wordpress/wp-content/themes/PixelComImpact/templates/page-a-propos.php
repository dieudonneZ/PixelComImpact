<?php
/**
 * Template Name: Template à propos
 */

get_header();
?>

    <main id="apropos">

        <h1>À propos de PixelCom Impact</h1>
        <?php
/*        echo do_shortcode('[banniere-titre titre="À propos de BricoTips" src="http://localhost/bricotips/wp-content/uploads/2022/11/14684085.webp"]');
        */?>

        <section id="quisuisje">
            <h2>Qui sommes-nous&nbsp;?</h2>
            <div class="text">
                <p>Pixelcom Impact est une agence de communication digitale spécialisée dans la
                    création de contenu, la gestion de réseaux sociaux, et le développement de
                    stratégies de marque. Fondée sur des valeurs d'innovation et d'excellence, Pixelcom
                    Impact s'engage à transformer les idées en stratégies puissantes et adaptées aux
                    besoins de ses clients, pour générer un impact mesurable et durable. Notre équipe
                    dynamique de professionnels passionnés apporte une expertise pointue et un
                    accompagnement personnalisé, afin d'assurer à chaque marque une présence
                    digitale forte et engageante.</p>
            </div>
            <div class="image">
                <img src="<?= get_stylesheet_directory_uri() . "/images/autor.jpg" ?>">
            </div>
        </section>
    </main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
