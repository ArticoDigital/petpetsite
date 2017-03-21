<?php get_header(); ?>

    <section class="Advanages">
        <h2>Tus ventajas <span>Por ingresar tu mascota a la comunidad PetPet</span></h2>
        <div class="row center">
            <article class="col-5">
                <h3>Servicios y promociones cerca a ti</h3>
                <img src="<?php bloginfo('template_url') ?>/assets/img/productos cercanos.png" alt="">
            </article>
            <article class="col-5">
                <h3>Cuidados que debes tener con tu mascota</h3>
                <img src="<?php bloginfo('template_url') ?>/assets/img/tips.png" alt="">
            </article>
            <article class="col-5">
                <h3>Adoptar una mascota</h3>
                <img src="<?php bloginfo('template_url') ?>/assets/img/adopcion.png" alt="">
            </article>
            <article class="col-5">
                <h3>Encontrar a tu mascota</h3>
                <img src="<?php bloginfo('template_url') ?>/assets/img/perdida.png" alt="">
            </article>
            <article class="col-5">
                <h3>Ayudar a encontrar mascotas</h3>
                <img src="<?php bloginfo('template_url') ?>/assets/img/comunidad.png" alt="">
            </article>
            <article class="col-5">
                <h3>Buscar pareja a tu mascota</h3>
                <img src="<?php bloginfo('template_url') ?>/assets/img/pareja.png" alt="">
            </article>
        </div>
    </section>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        the_content();
    endwhile;
endif;
?>
<?php get_footer();?>