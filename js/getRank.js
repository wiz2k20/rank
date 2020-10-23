function getRank()
{
	$.ajax({
        url: 'r_getdata.php',
        type:'POST', 
        success: function(data)
        {   
        	$('#r_showRank').html(data);  	
        }
    });
}