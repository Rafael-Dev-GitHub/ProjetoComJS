$(document).ready(function(){
    $("#FormCadastro").on('submit',function(event){
        event.preventDefault();
        var Dados=$(this).serialize();
        $.ajax({
            url: 'controller/ControllerCadastro.php',
            type: 'post',
            dataType: 'html',
            data: Dados,
            success:function(Dados){
            $('.Resultado').show().html(Dados);
        }
        })
    })


	/* CONFIRMA ANTES DE APAGAR */
	$('.apagar').on('click', function(event){
		event.preventDefault();
		var Link=$(this).attr('href');
		if (confirm("Confirma apagar o usuário?"))
		{
			window.location.href=Link;
		} else
		{
			return false;
		}
	})

})
