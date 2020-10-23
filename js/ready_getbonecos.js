$(document).ready(function(){
    $.ajax({
        url: 'r_getbonecos.php',
        type: 'GET',
        dataType: 'JSON',
        success: function(response){
            var len = response.length;
            for(var i=0; i<len; i++){              
                var nome = response[i].nome;          
                var maisOption = "<option value='" + nome + "'>" + nome + "</option>";                
                $("#r_boneco_sel").append(maisOption);
            }
        }
    });
});