<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
</head>
<body>
<form method="post">
    <label for="Marque">Marque</label>
    <input type="text" id="marque" name="Marque" /><br/>

    <label for="Modéle">Modéle</label>
    <input type="text" id="modele" name="Modele"/><br/>

    <label for="Année">Année</label>
    <input type="text" id="annee" name="Année"/><br/>

    <label for="Couleur">Couleur</label>
    <input type="text" id="couleur" name="Couleur"/><br/>

    <input type="submit" value="Envoyer">
</form>
<div id="result"></div>
<script>
    $(function(){
        $("[type='submit']").click(function(event){
            event.preventDefault();
            $.ajax({
                url: "receptAjax.php",
                type: 'post',
                cache: false,
                data: $('form').serialize(),
                dataType: 'json',
                success: function(result){
                    if(result.code == 'success'){
                        $('#result').html(result);
                        $("[type='text']").val('');
                    }
                    else {
                        $("#result").html("pas success");
                    }
                }
            })
        })
    });
</script>

</body>
</html>