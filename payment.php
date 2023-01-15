<?php
include('menu.php');
?>

<?php
$name = "";
$number = "";
$guest = "";
$island = "";
$checkbox = false;
if(!empty($_GET["name"])){
  $name = $_GET["name"];
}
if(!empty($_GET["number"])){
  $number = $_GET["number"];
}

?>
<div class="wrapper_payment">
  <div class="block-card">
  <div class="background-card"></div>
    <div class="card">
      <div class="imags-card">
        <img class="img-card img-1" src="./img/Итуруп.jpg" alt="img" style="width: 400px; height:200px;">
        <img class="img-card img-2" src="./img/Симушир.jpg" alt="img" style="width: 400px; height:200px;">
        <img class="img-card img-3" src="./img/Шикотан.jpg" alt="img" style="width: 400px; height:200px;">
      </div>
      <h2 class="heading-card">Выбери место и поехали</h2>
      <form action="finish.php" class="ticket-form">
        <h4 class="heading-name heading__margin">Ваше имя.</h4>
        <input type="text" name="name" required class="name text__width">
        <h4 class="heading-number heading__margin">Укажите телофн для связи.</h4>
        <input type="number" name="number" value="number" required class="number text__width">
        <h4 class="heading-value heading__margin">Количество гостей</h4>
        <select class="select-card text__width" name="guest" id="select-card">
          <option value="1">1 Человек</option>
          <option value="2">2 Человека</option>
          <option value="3">3 Человека</option>
          <option value="4">4 Человека</option>
        </select>
        <h4 class="heading-island  heading__margin">Выбери место</h4>
        <select name="island" id="island" name="island" class="text__width">
          <option class="island-1" value="iturup">Итуруп</option>
          <option class="island-2" value="simushir">Симушир</option>
          <option class="island-3" value="shicotan">Шикотан</option>
        </select>
        <details class="agreement">
          <summary class="agreement-heading">Разрешение</summary>
          <p class="agreement-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur laudantium
            tempore
            distinctio sunt officia pariatur sint rem sequi nostrum, est labore quod placeat inventore, unde natus
            dolorem molestiae aspernatur autem!</p>
          <input type="checkbox" name="checkbox" required class="checkbox-agreement">
        </details>
        <input type="submit" name="btn" value="Отправить">
      </form>
    </div>
  </div>
</div>
<script src="main.js"></script>
</body>
</html>