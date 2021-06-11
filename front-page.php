  <?php get_header(); ?>
  <main>
      <div class="flex flex-wrap justify-center bg-blue-300 hover:bg-purple-600">
            <img src="<?php echo get_template_directory_uri() ?>/assets\img\foto.jpg" alt="foto" width="250" height="300" class="shadow rounded-full max-w-full h-auto align-middle border-none">
      </div>
      <div class="text-center ">
            <span class="text-xl font-semibold inline-block py-1 px-2 uppercase rounded-full text-purple-600 bg-purple-200 uppercase last:mr-0 mr-1">
                Soy Estudiante del Instituto Tecnológico Quito
                LLEVO YA EN EL SEXTO NIVEL DE ANÁLISIS EN SISTEMAS
                AQUI! DEJO UN POCO En RESTROSPECTIVA DE LAS HERRAMIENTAS QUE EH USADO A LO LARGO DE LA CARRERA
                <p>Vamos a por mas!</p>
            </span>
      </div>
      <table class="table-fixed">
    <thead>
      <tr>
        <th class="w-1/2 ...">Programas</th>
        <th class="w-1/4 ...">Experiencia</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><img src="<?php echo get_template_directory_uri() ?>/assets\img\logo1.png" alt="logo" width="100" height="100"> </td>
        <td><P>Diseño con base de Datos de manera local</P></td>
        
      </tr>
      <tr class="bg-blue-200">
        <td><img src="<?php echo get_template_directory_uri() ?>/assets\img\logo2.png" alt="logo" width="100" height="100"></td>
        <td>Diseño con base de Datos de manera local</td>
      </tr>
      <tr>
        <td><img src="<?php echo get_template_directory_uri() ?>/assets\img\logo3.png" alt="logo" width="100" height="100"></td>
        <td>Programas Varios</td>
      </tr>
      <tr class="bg-gray-200">
        <td><img src="<?php echo get_template_directory_uri() ?>/assets\img\logo4.png" alt="logo" width="100" height="100"></td>
        <td>Proximamente</td>
      </tr>
    </tbody>
  </table>
  </main>
  <?php get_footer(); ?>