<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <script>
        const body =document.querySelector('body')
        const div = document.createElement("div")
        body.appendChild(div)
        div.style.height = '100vh'
        // div.style.background = 'blue'
        
        let warzat = prompt('Ecris :')
        if (warzat === 'ntm') {
            document.createElement("h1")
            document.write('Ntm gros fdp')
        }else{
            document.write('Ntm Ta GRAAAAND mere')
        }

    </script>
</body>
</html>