<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afisha</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/back.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>


<div style="padding-bottom: 500px;" class="container-fluid sec2">
   
   

      <header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
               <a href="index.html"><h1>Театр</h1></a>
            </div>

            <nav class="nav">
                <a class="nav__link" href="index.html">Главная</a>
                <a class="nav__link" href="afisha.php">Афиша</a>
                <a class="nav__link" href="bileti.php">Билеты</a>
                <a class="nav__link" href="contacti.php">Контакты</a>
                <a class="nav__link" href="#">О нас</a>
                <a class="nav__link" href="#">Сотрудники</a>
            </nav>
        </div>
    </div>
</header>


        <h1 style="margin-top: 200px;color:black" class="text-center">Афиша</h1>
         <table style="margin-top: 100px; " class="table table-dark">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Название</th>
                <th scope="col">Дата</th>
              </tr>
            </thead>
            <tbody>
            <?php
include('./php/includes/db.php');

$result=mysqli_query($connection,"SELECT * FROM `afisha`");

while(($cat=mysqli_fetch_assoc($result)))
{
  
  echo '<tr>';
  echo '<th scope="row">'. $cat['ID'].'</th>';
  echo '<td>'. $cat['Название']. '</td>';
   echo '<td>'. $cat['Дата']. '</td>';
  echo '</tr>';
  
}
mysqli_close($connection);
?>

            </tbody>
          </table> 
          <br>

    </div>


</body>
</html>