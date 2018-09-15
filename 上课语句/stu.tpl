<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>
</head>

<body>
    <strip>
    <div class="container">
    <h1>学生信息表</h1>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <td>学号</td>
                <td>姓名</td>
                <td>专业</td>
                <td>班级</td>
            </tr>
        </thead>
        <tbody>
        
             {section name=outter loop=$data}
            <tr>
                <td class="text-primary">{$data[outter]["stu_rollno"]}</td>
                <td class="text-dark">{$data[outter]["stu_name"]}</td>
                <td class="text-danger">{$data[outter]["stu_major"]}</td>
                <td class="text-muted">{$data[outter]["stu_class"]}</td>
           
            {sectionelse} 
            
            没有信息
             </tr>
         {/section} 
        </tbody>
    </table>
</div> 
</strip>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>