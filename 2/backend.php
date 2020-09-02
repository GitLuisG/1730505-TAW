
    <input type="text" name="articuloID" id="articuloID" placeholder="Ingrese el ID">
    <br>
    <select id="Repeticiones">
        <option selected>Repeticiones</option>
        <?php
        for ($i=1;$i<30;$i++) {
            $n = rand(1,30);
            if ($n<=30) {
                echo "<option value=".$n.">".$n."</option>";
            }
        }
    ?>
    </select>
    <div id='#div'></div>
    <input type="submit" name='Repeticiones' id="Repeticiones" value='Enviar'>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
$(document).ready(function() {
    $("#Repeticiones").change(function() {
        var str = "";
        $("select option:selected").each(function() {
            str += $(this).text() + " ";
        });
        let params = {
            Select: str,
        };
        $.post("rep.php", params, function (d) {
                if (d.autentificado) {
                    
                    for (var i = 0; i < d.num; i++) {
                        $( "#div" ).text($("#articuloID").val());
                    }
                }
        });
    });
});
</script>