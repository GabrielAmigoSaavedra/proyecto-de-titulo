<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php $this->load->view("componentes/jQuery_view");?>

    <title>Document</title>
</head>
<body>

<form   action="<?= base_url("PruebaIngreso_controller/ingresarUsuario");?>"
        method="POST"
        id="formPrueba">
    <input type="text" name="ingresarUsuario" >
    <input type="submit" >
</form>

    <script>

        $("#formPrueba").submit(function (ev) {
            ev.preventDefault();

	
	
	        $.ajax({
	        	url: "<?= base_url("PruebaIngreso_controller/ingresarUsuario");?>",
	        	type: "post",
            
	        	data: $(this).serialize(),
            
	        	success: function (err) 
                {
	        		var json = JSON.parse(err);
	        		//console.log(json);
                
	        		alert(json);
	        		//window.location.replace(json.url);
	        	},
	        	statusCode: 
                {
	        		400: function (xhr) {
	        			var json = JSON.parse(xhr.responseText);
                    
                    
	        			console.log(json);
                    
	        		},
                
                
	        	},
	        });
	
	});

    </script>
</body>
</html>