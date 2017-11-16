$(document).ready(function(){
   $("#jogos").click(function(){
      ajax('.conteudo', 'conteudo.php?cat=jogos')
   });
	 $("#musica").click(function(){
			ajax('.conteudo', 'conteudo.php?cat=musica')
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
