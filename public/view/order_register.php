<h1 class="text-center">Faça seu pedido :)</h1>
<br>
<br>
<div class="container d-flex justify-content-start" id="panel-pedidos">
    <div class="container">
        <div class="row">
            <div class="form-group">
                <label for="tipo-produto">Qual é o tipo do produto?</label>
                <select name="tipo-produto" id="tipo-produto" class="form-control form-control-sm 
                ">
                </select>
            </div>
            <button class="btn" id="adiciona"><span data-feather="plus"></span>Adicionar Produto</button>
        </div>
        <div class="container" id="produtos">
            
        </div>
    </div>
    
    
</div>
<script>
$(document).ready(function(){
    const domTipoProduto =  $("#tipo-produto");
    var types            = new Object();
    var products         = new Object();
    const panelPedidos = $("#panel-pedidos");
    
    
    /* colocando os tipos na tela */    
    function setTypes(object){
        $(object).each(function(indice, elemento){
            
            $(domTipoProduto).append(
                $("<option />")
                    .val(elemento.id_categoria)
                    .text(elemento.nome_categoria)    
            );

        })
    }
    /* buscando os tipos de produto no banco */
    function getType(){
        $.ajax({
            method: "get",
            url: "https://hamburgueriadsin.herokuapp.com/controllers/?control_page=product_api",
            data: {getTypes:true},
            dataType: "json"
        }).done(function(result){
            types = result;
            setTypes(result);
        });
    }
    
    getType();
    

    
});
</script>


