<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mudar a cor do Plano de Fundo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="color-form">
        <h2>Mude a cor do Plano de fundo</h2>
        <form action="index.php" method="POST">
            <input type="color" name="bg_color">
            <button type="submit">Mudar a Cor</button>
        </form>
    </div>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (isset($_POST['bg_color'])) {
            
            $bg_color = $_POST['bg_color'];
            $css_content = file_get_contents("style.css");
      
            if (strpos($css_content, 'body { background-color:') !== false) {                
                $new_css_content = preg_replace('/body\s*{\s*background-color:\s*#[0-9a-fA-F]{3,6}\s*;\s*}/', "body { background-color: $bg_color; }", $css_content);
            } else {
                $new_css_content = $css_content . "\nbody { background-color: $bg_color; }";
            }

            file_put_contents("style.css", $new_css_content);
        }
    }
?>