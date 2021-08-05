<!Doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Autocomplete jQuery AJAX e PHP MySql</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    ul{
      margin-top: 0px;
      background: #fff;
      color: #000;
    }
    li{
      padding: 12px;
      cursor: pointer;
      color: black;
    }
    li:hover{
      background: #f0f0f0;
    }
</style>
  <body style="background-color: #ebebeb">
    <div class="container" style="margin-top: 50px;">
      <h2 class="text-center">Autocomplete jQuery AJAX e PHP MySql</h2>
      <div class="row">
        <div class="col-md-3"></div>  
        <div class="col-md-6" style="margin-top:20px; margin-bottom:20px;">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Buscar cliente"> 
              <div id="clientelist"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
      $("#nome").on("keyup", function(){
        var nome = $(this).val();
        if (nome !=="") {
          $.ajax({
            url:"buscar.php",
            type:"POST",
            cache:false,
            data:{nome:nome},
            success:function(data){
              $("#clientelist").html(data);
              $("#clientelist").fadeIn();
            }  
          });
        }else{
          $("#clientelist").html("");  
          $("#clientelist").fadeOut();
        }
      });

      // clique no nome de um cliente em particular para preencher a caixa de texto
      $(document).on("click","li", function(){
        $('#nome').val($(this).text());
        $('#clientelist').fadeOut("fast");
      });
  });
</script>