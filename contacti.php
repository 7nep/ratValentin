<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacti</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/back.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/8889c0a3c3.js"></script>
</head>
<body>

<div class="container-fluid sec2">
   
     <div class="blur"> 

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


        <h1 style="margin-top: 200px;color:black" class="text-center">Контакты</h1>
         <table style="margin-top: 100px; " class="table table-dark">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">phone number</th>
              </tr>
            </thead>
            <tbody>
            <?php
include('./php/includes/db.php');

$result=mysqli_query($connection,"SELECT * FROM `kontakti`");

while(($cat=mysqli_fetch_assoc($result)))
{
  
  echo '<tr>';
  echo '<th scope="row">'. $cat['ID'].'</th>';
  echo '<td>'. $cat['Name']. '</td>';
  echo '<td>'. $cat['phone number']. '</td>';
  echo '</tr>';
  
}
mysqli_close($connection);
?>




            </tbody>
          </table> 
          


        




    </div>
</div>





</body>
</html>