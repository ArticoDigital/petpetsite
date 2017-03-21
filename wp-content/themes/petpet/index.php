<?php get_header(); ?>

    <section class="Advanages">
        <h2>Tus ventajas <span>Por ingresar tu mascota a la comunidad PetPet</span></h2>
        <div class="row center">
            <article class="col-5">
                
                <img src="<?php bloginfo('template_url') ?>/assets/img/productos cercanos.png" alt="">
				<h3>Servicios y promociones cerca a ti</h3>
				<p>En petpet por medio de geolocalización podrás acceder a las promociones o servicios para tu mascota cercanos a ti, veterinarias, clinicas, ventas de accesorios, alimento,  entre otras.</p>
            </article>
            <article class="col-5">
                
                <img src="<?php bloginfo('template_url') ?>/assets/img/tips.png" alt="">
				<h3>Cuidados que debes tener con tu mascota</h3>
				<p>Petpet te dará Tips de cuidado para tu mascota, primeros auxilios, alimentación y cuidado general.</p>
            </article>
            <article class="col-5">
                
                <img src="<?php bloginfo('template_url') ?>/assets/img/adopcion.png" alt="">
				<h3>Adoptar una mascota</h3>
				<p>A través de petpet podrás darle felicidad a una mascota. Encontrar a tu mascota y adoptarla fácilmente a través de las diferentes fundaciones asociadas.</p>
            </article>
            <article class="col-5">
                
                <img src="<?php bloginfo('template_url') ?>/assets/img/perdida.png" alt="">
				<h3>Encontrar a tu mascota</h3>
				<p>Apoyate del club petpet para encontrar a tu mascota perdida o reportar una mascota en la calle.</p>
            </article>
            <article class="col-5">
                
                <img src="<?php bloginfo('template_url') ?>/assets/img/comunidad.png" alt="">
				<h3>Ayudar a encontrar mascotas</h3>
				<p>Ayudarás a otros miembros de la comunidad a encontrar sus mascotas. </p>
            </article>
            <article class="col-5">
                
                <img src="<?php bloginfo('template_url') ?>/assets/img/pareja.png" alt="">
				<h3>Buscar pareja a tu mascota</h3>
				<p>Con petpet podrás encontrar la pareja perfecta para cruzar con tu mascota.</p>
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