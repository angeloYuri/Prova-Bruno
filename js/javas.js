$(document).ready(function(){
  var a;
   $("#jogos").click(function(){
      ajax('.conteudo', 'conteudo.php?cat=jogos&lang=' + a)
   });
	 $("#musica").click(function(){
			ajax('.conteudo', 'conteudo.php?cat=musica&lang=' + a)
	 });
   $("#noticias").click(function(){
      ajax('.conteudo', 'conteudo.php?cat=noticias&lang=' + a)
   });
   $("#filmes").click(function(){
      ajax('.conteudo', 'conteudo.php?cat=filmes&lang=' + a)
   });
   $("#esportes").click(function(){
      ajax('.conteudo', 'conteudo.php?cat=esportes&lang=' + a)
   });
});


function ajax(retorno, urll) {
  a = $('.inp').text();
  $.ajax({
    url : urll,
    success : function(result) {
      $(retorno).html(result);
    }
   });
}
