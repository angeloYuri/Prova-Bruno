$(document).ready(function(){
   $('#showR').click(function(){
     $('.showRelated').show();
     $('#showR').hide();
   });
   $("#jogos").click(function(){
      ajax('.conteudo', 'conteudo.php?cat=jogos&lang=')
   });
   $("#musica").click(function(){
  		ajax('.conteudo', 'conteudo.php?cat=musica&lang=')
   });
   $("#noticias").click(function(){
      ajax('.conteudo', 'conteudo.php?cat=noticias&lang=')
   });
   $("#filmes").click(function(){
      ajax('.conteudo', 'conteudo.php?cat=filmes&lang=')
   });
   $("#esportes").click(function(){
      ajax('.conteudo', 'conteudo.php?cat=esportes&lang=')
   });
});


function ajax(retorno, urll) {
  var a;
  a = $('.inp').text();
  $.ajax({
    url : urll + a,
    success : function(result) {
      $(retorno).html(result);
    }
   });
}
