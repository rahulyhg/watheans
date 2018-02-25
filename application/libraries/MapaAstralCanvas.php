<!-- EM DESENVOLVIMENTO, ABRA COM O NAVEGADOR (FORA DO CODE IGNITER/LOCALHOST) PARA RENDERIZAR O CANVAS -->

<!DOCTYPE html>
<html>
<body>

<canvas id="myCanvas" width="640" height="640">
Your browser does not support the canvas element.
</canvas>

<script>
var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");

var centroCirculo = 640 / 2;

//circulo amarelo
ctx.beginPath();
ctx.fillStyle = 'rgb(255, 179, 255)';
ctx.arc(centroCirculo, centroCirculo, 300, 0, 2 * Math.PI);
ctx.fill();
ctx.lineWidth = 2;
ctx.strokeStyle = 'rgb(178, 107, 178)';
ctx.stroke();

//area branca intermediaria
ctx.beginPath();
ctx.fillStyle = 'white';
ctx.arc(centroCirculo, centroCirculo, 260, 0, 2 * Math.PI);
ctx.fill();
ctx.stroke();

//circulo verde
ctx.beginPath();
ctx.fillStyle = 'rgb(123, 204, 192)';
ctx.arc(centroCirculo, centroCirculo, 155, 0, 2 * Math.PI);
ctx.fill();
ctx.strokeStyle = 'rgb(116, 178, 169)';
ctx.stroke();

//area branca dentro do verde
ctx.beginPath();
ctx.fillStyle = 'white';
ctx.arc(centroCirculo, centroCirculo, 135, 0, 2 * Math.PI);
ctx.fill();
ctx.stroke();

//numeros das casas
ctx.strokeStyle = 'black';
ctx.fillStyle = 'black';
ctx.font = '14px serif';
for(var i = 0; i < 12; i++){
    ctx.save();
    ctx.fillStyle = 'rgb(255, 244, 204)';
    ctx.translate(centroCirculo, centroCirculo);
    ctx.rotate((Math.PI / 180) * (-30 * i));
    ctx.translate(-centroCirculo, -centroCirculo);
    ctx.translate(centroCirculo - 140, centroCirculo + 30);
    ctx.rotate((Math.PI / 180) * (30 * i));
    ctx.translate(-(centroCirculo -140), -(centroCirculo + 30));
    ctx.fillText(i + 1, centroCirculo - 145, centroCirculo + 35, 10);
    ctx.restore();
}

//linhas com setas 
for(var i = 0; i < 12; i++){
    ctx.save();
    ctx.beginPath();
    ctx.strokeStyle = (i == 0 || i == 9 ) ? 'black' : 'gray';
    ctx.translate(centroCirculo, centroCirculo);
    ctx.rotate((Math.PI / 180) * -30 * i);
    ctx.translate(-centroCirculo, -centroCirculo);
    ctx.moveTo(centroCirculo - 135, centroCirculo);
    ctx.lineTo(centroCirculo - 260, centroCirculo);
    
    if(i == 0 || i == 9){
        ctx.lineTo(centroCirculo - 260 + 12, centroCirculo - 6);
        ctx.moveTo(centroCirculo - 260, centroCirculo);
        ctx.lineTo(centroCirculo - 260 + 12, centroCirculo + 6)
    }
    ctx.stroke();
    ctx.restore();
}
</script>

</body>
</html>
 
