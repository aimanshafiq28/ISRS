<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Analog Clock</title>
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap");

        *,
        *:after,
        *:before {
            box-sizing: border-box;
        }

        body,
        html {
            background: #000;
            margin: 0;
            height: 100vh;
            color: #fff;
            font-family: "Comfortaa", cursive;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative; /* Ensure body is relative for absolute positioning */
        }

        .clock {
            --clock-size: 360px;
            width: var(--clock-size);
            height: var(--clock-size);
            border-radius: 50%;
            position: relative;
            margin-bottom: 40px;
        }

        .spike {
            position: absolute;
            width: 8px;
            height: 1px;
            background: #fff9;
            line-height: 20px;
            transform-origin: 50%;
            z-index: 5;
            inset: 0;
            margin: auto;
            font-style: normal;
            transform: rotate(var(--rotate)) translateX(var(--dail-size));
        }

        .spike:nth-child(5n+1) {
            box-shadow: -7px 0 #FFBE00;
        }

        .spike:nth-child(5n+1):after {
            content: attr(data-i);
            position: absolute;
            right: 22px;
            top: -10px;
            transition: 1s linear;
            transform: rotate(calc(var(--dRotate) - var(--rotate)));
        }

        .seconds {
            --dRotate: 0deg;
            --dail-size: calc((var(--clock-size)/ 2) - 8px);
            font-weight: 800;
            font-size: 18px;
            transform: rotate(calc(-1 * var(--dRotate)));
            position: absolute;
            inset: 0;
            margin: auto;
            transition: 1s linear;
        }

        .minutes {
            --dail-size: calc((var(--clock-size)/ 2) - 65px);
            font-size: 16px;
            transform: rotate(calc(-1 * var(--dRotate)));
            position: absolute;
            inset: 0;
            margin: auto;
            transition: 1s linear;
        }

        .stop-anim {
            transition: 0s linear;
        }

        .stop-anim .spike:after {
            transition: 0s linear !important;
        }

        .hour {
            font-size: 70px;
            font-weight: 900;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .minute {
            font-size: 36px;
            font-weight: 900;
            position: absolute;
            background: #000;
            z-index: 10;
            right: calc(var(--clock-size)/ 4.5);
            top: 50%;
            transform: translateY(-50%);
        }

        .minute:after {
            content: "";
            position: absolute;
            border: 2px solid #fff;
            border-right: none;
            height: 50px;
            left: -10px;
            top: 50%;
            border-radius: 40px 0 0 40px;
            width: calc(var(--clock-size)/ 2.75);
            transform: translateY(-50%);
        }

        .form-container {
            background-color: #181818;
            border-radius: 10px;
            padding: 20px 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
            text-align: center;
            margin-top: 20px;
            width: 300px;
        }

        .form-container input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            background-color: #282828;
            color: #fff;
            font-size: 1rem;
            outline: none;
        }

        .form-container input[type="text"]::placeholder {
            color: #aaa;
        }

        .form-container button[type="submit"] {
            width: 48%;
            padding: 10px 0;
            margin: 5px 1%;
            background-color: #FFBE00;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .form-container button[type="submit"]:hover {
            background-color: #FFA500;
        }

        .logo {
            position: absolute;
            top: 50px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 3;
            width: 250px;
            height: auto;
        }

        .profile-icon {
            position: absolute;
            top: 50px;
            left: 900px;
            z-index: 3;
            color: #fff;
            font-size: 50px;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px 0;
            text-align: left;
        }

        footer p {
            margin: 0;
            color: #fff;
            font-size: 10px;
        }
    </style>
</head>

<body>
    <!-- Profile Picture Icon -->
    <div class="profile-icon">
    <a href="<?= base_url('loginadmin') ?>">
        <i class="fas fa-user" style="color: #FFD43B;"></i>
        <span style="display: block; font-size: 14px; margin-top: 5px;" style="color: #FFD43B;">Admin</span>
    </a>
</div>


    <img src="images/USM.png" alt="USM Logo" class="logo">
    <div class="clock">
        <div class="seconds"></div>
        <div class="minutes"></div>
        <div class="minute">44</div>
        <div class="hour"></div>
    </div>

    <div class="form-container">
        <form action="<?= base_url('handle-clock') ?>" method="post">
            <input type="text" name="ic_number" placeholder="Nombor IC">
            <button type="submit" name="action" value="masuk">Masuk</button>
            <button type="submit" name="action" value="keluar">Keluar</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 USM KK | PPKT . Latihan Industri 2024.</p>
    </footer>

    <script>
        const seconds = document.querySelector('.seconds');
        const minutes = document.querySelector('.minutes');
        const minute = document.querySelector('.minute');
        const hour = document.querySelector('.hour');

        for (let s = 0; s < 60; s++) {
            let mSpikeEl = document.createElement('i');
            let sSpikeEl = document.createElement('i');
            mSpikeEl.className = 'spike';
            sSpikeEl.className = 'spike';
            mSpikeEl.style = `--rotate:${6 * s}deg`;
            sSpikeEl.style = `--rotate:${6 * s}deg`;
            mSpikeEl.setAttribute('data-i', s);
            sSpikeEl.setAttribute('data-i', s);

            seconds.append(sSpikeEl);
            minutes.append(mSpikeEl);
        }

        function getTime() {
            let date = new Date(),
                s = date.getSeconds(),
                m = date.getMinutes();

            hour.textContent = date.getHours();
            minute.textContent = m;

            minutes.style = `--dRotate:${6 * m}deg`;

            if (s == 0) {
                seconds.classList.add('stop-anim');
            } else {
                seconds.classList.remove('stop-anim');
            }
            if (m == 0) {
                minutes.classList.add('stop-anim');
            } else {
                minutes.classList.remove('stop-anim');
            }

            seconds.style = `--dRotate:${6 * s}deg`;
        }

        setInterval(getTime, 1000);
        getTime();
    </script>
</body>

</html>
