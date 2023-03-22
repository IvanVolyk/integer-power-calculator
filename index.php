<head>
  <meta charset="UTF-8">
  <title>Калькулятор</title>
  <style>
    * {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: "Roboto", sans-serif;
  font-size: 16px;
  line-height: 1.5;
  color: #333;
  background-color: #f5f5f5;
  padding: 100px 100px;
}

h3 {
  margin-top: 20px;
  margin-bottom: 10px;
  font-size: 24px;
  font-weight: 500;
  color: #333;
}

form {
  display: block;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  border-radius: 5px;
  margin: 20px;
}

form input[type="text"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  font-size: 16px;
  color: #333;
  border: none;
  border-bottom: 2px solid #ccc;
  background-color: transparent;
}

form button[type="submit"] {
  padding: 10px 20px;
  background-color: #4285f4;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

form button[type="submit"]:hover {
  background-color: #3367d6;
}

.result {
  margin: 20px;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  border-radius: 5px;
}

  </style>
</head>
<body>
  <h3>Калькулятор возводит число <b>k</b> в целую положительную степень <i>n</i></h3>

<form method="post" autocomplete="off">
  Введите число <b>k</b>: <input type="text" name="k" value="<?php echo isset($_POST['k']) ? $_POST['k'] : ''; ?>">
  <br>
  <br>
  Введите степень <i>n</i>: <input type="text" name="n" value="<?php echo isset($_POST['n']) ? $_POST['n'] : ''; ?>">
  <br>
  <br>
  <button type="submit">Отправить</button>
  <button type="button" onclick="resetForm()">Очистить форму</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $k = (int) $_POST["k"];
  $n = (int) $_POST["n"];

  if ($k <= 0 || $n <= 0) {
    echo "Ошибка: числа должны быть положительными";
  } else {
    echo "Вы ввесли следующие данные: " . "<p><b>$k</b>" . "<sup><i>$n</i></sup></p>";

    if ($n == 0) {
      echo "Итого: 1";
    } else if ($n == 1) {
      echo "Итого: $k";
    } else {
      $result = pow($k, $n);
      echo "Итого: $result";
    }
  }
}
?>

<script>
  
  function resetForm() {

  var form = document.querySelector("form");

  var elements = form.elements;

  for (var i = 0; i < elements.length; i++) {
    var element = elements[i];

    if (element.tagName.toLowerCase() == "input" || element.tagName.toLowerCase() == "textarea") {
      element.value = "";
    } else if (element.tagName.toLowerCase() == "select") {
      element.selectedIndex = -1;
    }
  }
}

</script>
</body>



