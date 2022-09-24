<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="page"></h1>

    <script>
        let item = document.querySelector('.page');
        
        let chart = new Chart(item, { 
            type: 'bar',
            labels : ['FIRST', 'LAST', 'DESC', 'DESCEND'],
            datasets: [ {
                label: 'clean',
                data: [
                    74, 8, 82, 99
                ]
            }]
        })
            

    </script>

</body>
</html>