<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Répondre aux questions</legend>

    
    <form action="./controllers/Generator.php">

    <p class ="text-paraph">Question 1</p>
    <div class = "checkbox-group">
    <label for="option1">Option 1</label>
    <input type="checkbox" name = "checkbox1" >
    <label for="option2">Option 2</label>
    <input type="checkbox" name = "checkbox2" >
    <label for="option1">Option 3</label>
    <input type="checkbox" name = "checkbox3" >
</div>
<p class ="text-paraph">Question 2</p>
    <label for="selection"></label>
    <select name="selection" required >
    <option value="">--Choisir une option dans la liste--</option>
    <option value="select1">select1</option>
    <option value="select2">select2</option>
    <option value="select3">select3</option>
    <option value="select4">select4</option>
    </select>
    <p class ="text-paraph">Question 3</p>
    
    <textarea name="text" id="" cols="30" rows="10" required></textarea>
    <p class ="text-paraph">Question 4</p>
    <div>
    <input type="radio" name="radio" id = "radio1"value="radio-option1"
             checked required>
      <label for="radio1">Radio1</label>
    </div>

    <div>
      <input type="radio" name="radio" id = "radio2" value="radio-option2" required>
      <label for="radio2">Radio2</label>
    </div>

    <div>
      <input type="radio" name="radio" id = "radio3" value="radio-option3" required>
      <label for="radio3">Radio3</label>
    </div>

    <input type="submit">


    </form>
</fieldset>
</body>
</html>