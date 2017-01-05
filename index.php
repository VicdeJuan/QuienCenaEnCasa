<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>Organización Tejón</title>
  <link rel="stylesheet" href="style.css"/>
  <link rel="stylesheet" href="main.css"/>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <meta name="description" content="">
        <!-- 
        Rectangle Template 
        http://www.templatemo.com/preview/templatemo_439_rectangle
      -->
</head>
<body>


        
<form action="save.php" method="post" id="myForm">
<table dir="ltr" width="850px" border="2" 
      summary="purpose/structure for speech output">
  <!--<caption>
  Here we assign header information to cells by setting the scope attribute.
  </caption>-->
  <thead>
    <tr>
      <th class="title" scope="col">Name</th>
      <th class="title" scope="col"></th>
      <th class="title" scope="col">Lunes</th>
      <th class="title" scope="col">Martes</th>
      <th class="title" scope="col">Miércoles</th>
      <th class="title" scope="col">Jueves</th>
      <th class="title" scope="col">Viernes</th>
      <th class="title" scope="col">Sábado</th>
      <th class="title" scope="col">Domingo</th>      
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

      <?php 
        
        $family = array_map('str_getcsv', file('data/family.csv'))[0];
        $j=1; 
       
        if (($gestor = fopen("data/data.csv","r")) !== FALSE ){
          foreach ($family as $person) {
            echo "<tr><td class='title'> $person </td>";
            echo "<input type=\"hidden\" name=\"person$j\" value=\"$person\">";
            // Edit button:
            echo "<td class='subtype'>Comida<br>Cena</td>";

        
            $MealCheck = fgetcsv($gestor,1000,";");
            $DinnerCheck = fgetcsv($gestor,1000,";");
            for ($i=1; $i < 8 ; $i++) {
              $idx=$i+1;
              $disabled="disabled";
              $disabled="";
              echo "<td class='butts'>
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
    </tr>
  </tbody>
</table>
      <div class="submit"> <input type="submit" class="action-button shadow animate green" name="Avisar!" value="Avisar!"></div>
    </form>
</body>
  
</html>
