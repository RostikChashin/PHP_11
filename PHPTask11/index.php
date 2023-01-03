<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <?php 
    $a1 = 0;
    $b1 = 0;
    $a2 = 0;
    $b2 = 1;
    $a3 = 1;
    $b3 = 0;
    $a4 = 1;
    $b4 = 1

    ?>
    <table>
      <tr>
        <th>A</th>
        <th>B</th>
        <th>!A</th>
        <th>A || B</th>
        <th>A && B</th>
        <th>A xor B</th>
      </tr>
    
      <tr>
        <td>0</td>
        <td>0</td>
        <td><?php echo var_export(!$a1)  ?></td>
        <td><?php echo var_export($a1 || $b1)  ?></td>
        <td><?php echo var_export($a1 && $b1)  ?></td>
        <td><?php echo var_export($a1 xor $b1)  ?></td>
      </tr>
      <tr>
        <td>0</td>
        <td>1</td>
        <td><?php echo var_export(!$a2)  ?></td>
        <td><?php echo var_export($a2 || $b2)  ?></td>
        <td><?php echo var_export($a2 && $b2)  ?></td>
        <td><?php echo var_export($a2 xor $b2)  ?></td>
      </tr>
      <tr>
        <td>1</td>
        <td>0</td>
        <td><?php echo var_export(!$a3) ?></td>
        <td><?php echo var_export($a3|| $b3)  ?></td>
        <td><?php echo var_export($a3 && $b3)  ?></td>
        <td><?php echo var_export($a3 xor $b3)  ?></td>
      </tr>
      <tr>
        <td>1</td>
        <td>1</td>
        <td><?php echo var_export(!$a4) ?></td>
        <td><?php echo var_export($a4 || $b4)  ?></td>
        <td><?php echo var_export($a4 && $b4)  ?></td>
        <td><?php echo var_export($a4 xor $b4)  ?></td>
      </tr>
      
    </table>
  </body>
</html>
