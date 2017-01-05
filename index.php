<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>CSS Checkbox Demo from CSSCheckbox.com</title>
  <link rel="stylesheet" href="style.css"/>
  <style type="text/css">
    /*this is just to organize the demo checkboxes*/
    label {margin-right:20px;}
  </style>
</head>
<body>

<table dir="ltr" width="850px" border="2" 
      summary="purpose/structure for speech output">
  <!--<caption>
  Here we assign header information to cells by setting the scope attribute.
  </caption>-->
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col"></th>
      <th scope="col">Lunes</th>
      <th scope="col">Martes</th>
      <th scope="col">Miércoles</th>
      <th scope="col">Jueves</th>
      <th scope="col">Viernes</th>
      <th scope="col">Sábado</th>
      <th scope="col">Domingo</th>      
    </tr>
  </thead>
  <!--<tfoot>
    <tr>
      <td>Darth Vader</td>
      <td>Dark</td>
      <td>Sith</td>
    </tr>
  </tfoot>-->
  <tbody>
    <tr>
      <td>Carlos</td>
      <td>Comida<br>Cena</td>

        <?php
          if (($gestor = fopen("data/data.csv","r")) !== FALSE ){
            $j=0; 
            $MealCheck = fgetcsv($gestor,1000,";");
            $DinnerCheck = fgetcsv($gestor,1000,";");
            for ($i=2; $i < 9; $i++) { 

              echo "<td><input type='checkbox' value='check' $MealCheck[$i] name=\"checkboxM$i\" id=\"checkboxM$i\" class='css-checkbox' /><label for=\"checkboxM$i\" class='css-label'></label><br><input type='checkbox' value='check' $DinnerCheck[$i] name=\"checkboxD$i\" id=\"checkboxD$i\" class='css-checkbox' /><label for=\"checkboxD$i\" class='css-label'></label></td>";
            }
          }
        ?>
      
    </tr>
  </tbody>
</table>
</body>
</html>
