<?php 
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
</head>
<body>

    <?php 
        if($id == "kettle"){
    ?>
        <h1>Kettle Bell Class</h1>
    <?php
        }
    ?>
    
    <?php 
        if($id == "hiit"){
    ?>
        <h1>HIIT Class</h1>
    <?php
        }
    ?>

    <?php 
        if($id == "yoga"){
    ?>
        <h1>Yoga Class</h1>
    <?php
        }
    ?>
    <input id="date1" type="date" format="MM/DD/YYYY" placeholder="MM/DD/YYYY" />
    <input type="time" name="time" id="time" disabled/>
    <p id="warning" style="color:red;"></p>

<script type="text/javascript">
    var php_var = "<?php echo $id; ?>";
    const picker = document.getElementById('date1');
    if(php_var == "kettle"){
        picker.addEventListener('input', function(e){
        var day = new Date(this.value).getUTCDay();
        if([0,2,4,6].includes(day)){
            e.preventDefault();
            this.value = '';
            document.getElementById("warning").innerHTML = "Monday, Wendesday and Friday Only";
        }
        else{
            document.getElementById("warning").innerHTML = "";
        }
        if(day == 1){
            document.getElementById("time").value = "07:00";
        }
        else if(day == 3){
            document.getElementById("time").value = "09:00";
        }
        else if(day == 5){
            document.getElementById("time").value = "07:00";
        }
        });
    }
 
    else if(php_var == "hiit"){
        picker.addEventListener('input', function(e){
            var day = new Date(this.value).getUTCDay();
            if([0,5].includes(day)){
                e.preventDefault();
                this.value = '';
                document.getElementById("warning").innerHTML = "Monday, Tuesday, Wendesday, Thursday and Saturday Only";
            }
            else{
            document.getElementById("warning").innerHTML = "";
            }
            if(day == 1){
                document.getElementById("time").value = "09:00";
            }
            else if(day == 2){
                document.getElementById("time").value = "19:00";
            }
            else if(day == 3){
                document.getElementById("time").value = "07:00";
            }
            else if(day == 4){
                document.getElementById("time").value = "19:00";
            }
            else if(day == 6){
                document.getElementById("time").value = "10:00";
            }
        });
    }

    else if(php_var == "yoga"){
        picker.addEventListener('input', function(e){
            var day = new Date(this.value).getUTCDay();
            if([0,1,2,4,6].includes(day)){
                e.preventDefault();
                this.value = '';
                document.getElementById("warning").innerHTML = "Wendesday and Friday Only";
            }
            else{
                document.getElementById("warning").innerHTML = "";
            }
            if(day == 3){
                document.getElementById("time").value = "19:00";
            }
            else if(day == 5){
                document.getElementById("time").value = "09:00";
            }
        });
    }

</script>
</body>
</html>
