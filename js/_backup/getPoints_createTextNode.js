function getPoints()
{
	$.ajax({
        url: 'r_getpoints.php',
        type:'GET', 
        dataType: 'JSON',
        success: function(resp)
        {   
            console.log(resp);

            jQuery.each(resp, function(i, val) {
            // here you can do your magic

            //$("#TESTE201").text(val.pts_don + ' PL');

            
            $("#c_Team_nick").html('Donovan');
            $("#c_Team_pts").text(val.pts_don + ' PL');
            $("#c_Team_lut").text(val.lut_don);
            $("#c_Team_vit").text(val.vit_don);
            $("#c_Team_der").text(val.der_don);

            //$("#c_Team_pts").append(document.createTextNode(val.pts_don + ' PL'));
            //$("#c_Team_lut").append(document.createTextNode(val.lut_don));
            //$("#c_Team_vit").append(document.createTextNode(val.vit_don));
            //$("#c_Team_der").append(document.createTextNode(val.der_don));

            var auxA_don = val.vit_don/val.lut_don;    
            var finalA_don = auxA_don * 100;  
            var fixedA_don = finalA_don.toFixed(2);    
            $("#c_Team_apr").html(fixedA_don + ' %');

            // --

            $("#c_Team_nick2").html('Drop');

            $("#c_Team_pts2").text(val.pts_drop + ' PL');
            $("#c_Team_lut2").text(val.lut_drop);
            $("#c_Team_vit2").text(val.vit_drop);
            $("#c_Team_der2").text(val.der_drop);

            //$("#c_Team_pts2").append(document.createTextNode(val.pts_drop + ' PL'));
            //$("#c_Team_lut2").append(document.createTextNode(val.lut_drop));
            //$("#c_Team_vit2").append(document.createTextNode(val.vit_drop));
            //$("#c_Team_der2").append(document.createTextNode(val.der_drop));

            var auxA_drop = val.vit_drop/val.lut_drop;    
            var finalA_drop = auxA_drop * 100;  
            var fixedA_drop = finalA_drop.toFixed(2); 
            $("#c_Team_apr2").html(fixedA_drop + ' %');

            //$("#r_showPoints5").html('SOLO: ' + val.pts_don); >> DON'T WORK

            });

        }
    });
}