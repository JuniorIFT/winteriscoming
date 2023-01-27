<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/favicon.png" />
    <title>Winter Is Coming</title>
    <video id="myVideo" autoplay loop muted>
        <source src="/videos/inverno.mp4" type="video/mp4">
    </video>
    <style>
        #myVideo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        h1 {
            font-size: 37px;
            text-align: center;
            position: absolute;
            top: 9%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-image: linear-gradient(to bottom, rgba(163, 163, 163, 0.795), rgb(255, 255, 255, 0.795), rgba(209, 209, 209, 0.795));
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-text-stroke-width: 1px;
            color: black;
        }

        button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 2px 2px 2px #ccc;
            transition: all 0.3s ease-in-out;
        }

        button:hover {
            transform: scale(1.1);
            box-shadow: 2px 2px 10px #ccc;
        }

        #btns {
            text-align: center;
            margin-top: 500px;
        }
    </style>
</head>

<body>
    <h1>WINTER IS COMING ?</h1>

    <div id="btns">
        <button style="background-color: #ff0000;  margin: 30px;" onclick="votar('sim')">SIM</button>
        <button style="background-color: #00a2ff;  margin: 30px;" onclick="votar('nao')">NÃO</button>
    </div>
</body>

</html>
