<?php
  $inicio = true;
  include 'includes/templates/header.php';
?>
    <main class="contenedor">
      <h1>Mas Sobre Nosotros</h1>
      <div class="iconos-nosotros">
        <div class="icono">
          <img
            src="build/img/icono1.svg"
            alt="Icono seguridad"
            loading="lazy"
          />
          <h3>Seguridad</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi,
            voluptate ut. Sit eos assumenda nam alias vitae aspernatur cum
            mollitia, dicta temporibus molestias omnis, eius possimus cumque
            voluptatibus sapiente enim.
          </p>
        </div>
        <div class="icono">
          <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy" />
          <h3>Precio</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi,
            voluptate ut. Sit eos assumenda nam alias vitae aspernatur cum
            mollitia, dicta temporibus molestias omnis, eius possimus cumque
            voluptatibus sapiente enim.
          </p>
        </div>
        <div class="icono">
          <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy" />
          <h3>A Tiempo</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi,
            voluptate ut. Sit eos assumenda nam alias vitae aspernatur cum
            mollitia, dicta temporibus molestias omnis, eius possimus cumque
            voluptatibus sapiente enim.
          </p>
        </div>
      </div>
    </main>

    <section class="seccion contenedor">
      <h2>Casas y Depas en Venta</h2>

      <div class="contenedor-anuncios">
        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio1.webp" type="image/webp" />
            <source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
            <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio" />
          </picture>
          <div class="contenido-anuncio">
            <h3>Casa de Lujo en el Lago</h3>
            <p>
              Casa en el lago con excelente vista, acabados de lujo a un
              excelente precio
            </p>
            <p class="precio">$3,000,000.00</p>
            <ul class="iconos-caracteristicas">
              <li>
                <img
                  class="icono"
                  src="build/img/icono_wc.svg"
                  alt="icono wc"
                  loading="lazy"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  class="icono"
                  src="build/img/icono_estacionamiento.svg"
                  alt="icono estacionamiento"
                  loading="lazy"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  class="icono"
                  src="build/img/icono_dormitorio.svg"
                  alt="icono habitaciones"
                  loading="lazy"
                />
                <p>4</p>
              </li>
            </ul>

            <a href="anuncio.html" class="boton boton-amarillo-block">
              Ver Propiedad
            </a>
          </div>
          <!-- Contenido anuncio -->
        </div>
        <!-- anuncion -->
        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio2.webp" type="image/webp" />
            <source srcset="build/img/anuncio2.jpg" type="image/jpeg" />
            <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio" />
          </picture>
          <div class="contenido-anuncio">
            <h3>Casa Terminados de Lujo</h3>
            <p>
              Casa en el lago con excelente vista, acabados de lujo a un
              excelente precio
            </p>
            <p class="precio">$3,000,000.00</p>
            <ul class="iconos-caracteristicas">
              <li>
                <img
                  class="icono"
                  src="build/img/icono_wc.svg"
                  alt="icono wc"
                  loading="lazy"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  class="icono"
                  src="build/img/icono_estacionamiento.svg"
                  alt="icono estacionamiento"
                  loading="lazy"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  class="icono"
                  src="build/img/icono_dormitorio.svg"
                  alt="icono habitaciones"
                  loading="lazy"
                />
                <p>4</p>
              </li>
            </ul>

            <a href="anuncio.html" class="boton boton-amarillo-block">
              Ver Propiedad
            </a>
          </div>
          <!-- Contenido anuncio -->
        </div>
        <!-- anuncion -->
        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio3.webp" type="image/webp" />
            <source srcset="build/img/anuncio3.jpg" type="image/jpeg" />
            <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio" />
          </picture>
          <div class="contenido-anuncio">
            <h3>Casa con alberca</h3>
            <p>
              Casa en el lago con excelente vista, acabados de lujo a un
              excelente precio
            </p>
            <p class="precio">$3,000,000.00</p>
            <ul class="iconos-caracteristicas">
              <li>
                <img
                  class="icono"
                  src="build/img/icono_wc.svg"
                  alt="icono wc"
                  loading="lazy"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  class="icono"
                  src="build/img/icono_estacionamiento.svg"
                  alt="icono estacionamiento"
                  loading="lazy"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  class="icono"
                  src="build/img/icono_dormitorio.svg"
                  alt="icono habitaciones"
                  loading="lazy"
                />
                <p>4</p>
              </li>
            </ul>

            <a href="anuncio.html" class="boton boton-amarillo-block">
              Ver Propiedad
            </a>
          </div>
          <!-- Contenido anuncio -->
        </div>
        <!-- anuncion -->
      </div>
      <div class="alinear-derecha">
        <a href="anuncios.html" class="boton-verde-block">Ver Todas</a>
      </div>
    </section>

    <section class="imagen-contacto">
      <h2>Encuentra la casa de tus sueños</h2>
      <p>
        Llena el formulario de contacto y un asesor se pondra en contacto
        contigo a la brevedad
      </p>
      <a href="contacto.html" class="boton-amarillo-inline">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
      <section class="blog">
        <h3>Nuestro Blog</h3>
        <article class="entrada-blog">
          <div class="imagen">
            <picture>
              <source srcset="build/img/blog1.webp" type="image/webp" />
              <source srcset="build/img/blog1.jpg" type="image/jpeg" />
              <img
                src="build/img/blog1.jpg"
                alt="Texto Entrada Blog"
                loading="lazy"
              />
            </picture>
          </div>
          <div class="texto-entrada">
            <a href="entrada.html">
              <h4>Terraza en el techo de tu casa</h4>
              <p class="informacion-meta">
                Escrito el: <span>20/10/2024</span> por: <span>Admin</span>
              </p>
              <p>
                Consejos para construir una terraza en el techo de tu casa con
                los mejores materiales y ahorrando dinero
              </p>
            </a>
          </div>
        </article>
        <article class="entrada-blog">
          <div class="imagen">
            <picture>
              <source srcset="build/img/blog2.webp" type="image/webp" />
              <source srcset="build/img/blog2.jpg" type="image/jpeg" />
              <img
                src="build/img/blog2.jpg"
                alt="Texto Entrada Blog"
                loading="lazy"
              />
            </picture>
          </div>
          <div class="texto-entrada">
            <a href="entrada.html">
              <h4>Guia para la decoracion de tu hogar</h4>
              <p class="informacion-meta">
                Escrito el: <span>20/10/2024</span> por: <span>Admin</span>
              </p>
              <p>
                Maxima el espacio en tu hogar con essta guia, aprende a combinar
                muebles y colores para darle vida a tu espacio
              </p>
            </a>
          </div>
        </article>
      </section>
      <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
          <blockquote>
            El personal se comporto de una excelente forma, muy buena atencion y
            la casa que me ofrecieron cumple con todas mis expectativas
          </blockquote>
          <p>- Ernesto Gtz</p>
        </div>
      </section>
    </div>

    <footer class="footer seccion">
      <div class="contenedor contenerdor-footer">
        <nav class="navegacion">
          <a href="nosotros.html">Nosotros</a>
          <a href="anuncios.html">Anuncios</a>
          <a href="blog.html">Blog</a>
          <a href="contacto.html">Contacto</a>
        </nav>
      </div>
      <p class="copyright">Todos los derechos reservados 2024 &copy;</p>
    </footer>
    <script src="src/js/modernizr.js"></script>
    <script src="build/js/bundle.min.js"></script>
  </body>
</html>