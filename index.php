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
  <link rel="stylesheet" type="text/css" href="codebase/fonts/font_roboto/roboto.css"/>
  <link rel="stylesheet" type="text/css" href="codebase/dhtmlx.css"/>
  <script src="codebase/dhtmlx.js"></script>
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
  <form action="save.php" method="post" id="myForm">

      <?php 
        
        $family = array_map('str_getcsv', file('data/family.csv'))[0];
        $j=1; 
       
        if (($gestor = fopen("data/data.csv","r")) !== FALSE ){
          foreach ($family as $person) {
            echo "<tr><td> $person </td>";
            echo "<input type=\"hidden\" name=\"person$j\" value=\"$person\">";
            // Edit button:
            echo "<td>Comida<br>Cena</td>";

        
            $MealCheck = fgetcsv($gestor,1000,";");
            $DinnerCheck = fgetcsv($gestor,1000,";");
            for ($i=1; $i < 8 ; $i++) {
              $idx=$i+1;
              $disabled="disabled";
              $disabled="";
              echo "<td>
              <input type='checkbox' $disabled value='check' $MealCheck[$idx]ed name=\"$person-checkboxM$i\" id=\"$person-checkboxM$i\" class='css-checkbox' />
              <label for=\"$person-checkboxM$i\" class='css-label'></label>
              <br>
              <input type='checkbox' $disabled value='check' $DinnerCheck[$idx]ed name=\"$person-checkboxD$i\" id=\"$person-checkboxD$i\" class='css-checkbox' />
              <label for=\"$person-checkboxD$i\" class='css-label'></label>
              </td>";
            }
          $j++;
          echo "</tr>";
          }
        }
        ?>
      <input type="submit">
    </tr>
    </form>
  </tbody>
</table>
</body>
</html>
