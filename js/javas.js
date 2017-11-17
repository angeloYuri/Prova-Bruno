$(document).ready(function(){
   $("#jogos").click(function(){
      ajax('.conteudo', 'conteudo.php?cat=jogos')
   });
	 $("#musica").click(function(){
			ajax('.conteudo', 'conteudo.php?cat=musica')
	 });
   $("#noticias").click(function(){
      ajax('.conteudo', 'conteudo.php?cat=noticias')
   });
   $("#filmes").click(function(){
      ajax('.conteudo', 'conteudo.php?cat=filmes')
   });
   $("#esportes").click(function(){
      ajax('.conteudo', 'conteudo.php?cat=esportes')
   });
});


function ajax(retorno, urll) {
  $.ajax({
    url : urll,
    success : function(result) {
      $(retorno).html(result);
    }
   });
}
