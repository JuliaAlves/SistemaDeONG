<!DOCTYPE html>
<html>
<?php require_once 'menu.inc.php' ?>
<div class="wrapper row2">
  <div id="container" class="clear">
    <div class="slide-container">
      <img src="../images/Home1.jpg" class="slide"></img>
      <img src="../images/Home4.jpg" class="slide"></img>
      <img src="../images/Home1.jpg" class="slide"></img>
      <img src="../images/Home4.jpg" class="slide"></img>
    </div>
    <script type="text/javascript">
        var index = 0;
        passarImagem();

        function passarImagem(){
            var i;
            var x = document.getElementsByClassName("slide");
            for (i = 0; i < x.length; i++)
                x[i].style.display = "none";  
         index++;

            if (index > x.length) 
          index = 1; 

                x[index-1].style.display = "block";

            setTimeout(passarImagem, 4000); 
    }
    </script>
    <section id="shout">
      <h1>Amigos do Bem</h1>
      <p>Amigos do Bem foi criada por Júlia Arruda e Larissa de Sena para o projeto de Prática Profissional com o intuito de simular uma ONG usando o conteúdo aprendido no segundo semestre de 2016.
</p>
    </section>
    <div id="content">
      <section>
        <article>
          <h2>Sobre nós</h2>
          <p>Liderados por Júlia Arruda e Larissa de Sena, a iniciativa "Amigos do Bem" que leva às famílias do sertão nordestino roupas, alimentos, brinquedos, entre outras coisas, tornou-se um trabalho de transformação, com inúmeros projetos </p>
                    <img src="../images/quemsomos.jpg" class="img1">
          <p>educacionais e sustentáveis que hoje oferece auxílio à vida de milhares de pessoas.
          Todos os dias chegam doações dos mais diversos lugares do Brasil. As equipes de voluntários... </p>
          <footer class="more"><a href="sobre.php">Leia Mais &raquo;</a></footer>
        </article>
      </section>
     
  </div>
</div>

<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2016 - Todos os direitos reservados - <a href="home.php">Amigos do Bem</a></p>
  </footer>
</div>
</body>
</html>
