<?php
/**
 * The main template file
 * @link 
 *
 * @package WordPress
 * @subpackage 
 * @since 
 */

get_header();?>

<!-- <?php

//loop

while( have_posts() ) : the_post(); ?> -->

<body>

  <div class="container">
    <div class="row ct_mainTitles">
      <h1 class="ct_contactUs ct_mainTitle subtitle">Contactanos</h1>
    </div>

    <div class="row mt-5 ct_content hm_boder-radius-section" >
      <div class="row">
          <!-- Contact us Title -->

          <div class="ct_containerHeader">
            <h1 class="ct_elements ct_title title">Contactanos</h1>
          </div>

      </div>

      <div class="row">
        <!-- info -->
        <div class="ct_containerText">
          <p>Envíanos un correo electrónico desde el siguiente formulario, utilícelo si tiene un problema con pagos en la página o si desea información adicional sobre algunos de nuestros productos</p>
        </div>
      </div>
    </div>

    <div class="ct_formContainer hm_boder-radius-section" >
      <form class="container ct_form">
        <div class="form-row">
            <div class="form-group row-md-6">
                <label for="inputName">Tu nombre</label>
                <input type="email" class="form-control" id="inputName" placeholder="Escribe tu nombre">
            </div>
            <div class="form-group row-md-6">
                <label for="inputEmail">Correo</label>
                <input type="text" class="form-control" id="inputEmail" placeholder="Escribe tu correo">
            </div>
          <div class="form-row">
              <label for="inputMessage">Mensaje</label>
            <input type="text" class="form-control" id="inputMessage" placeholder="Agrega tu mensaje...">
          </div>

          <div class="text-center">
                <button type="submit" class="btn button-send">Enviar</button>
          </div>
        </div>
      </form> 
    </div>

  </div>

    <?php endwhile; ?>
</body>
<?php
  get_footer();
?>