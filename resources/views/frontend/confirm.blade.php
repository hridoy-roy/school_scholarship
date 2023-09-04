<!DOCTYPE html>
<html>

<head>
    <title>Registration Result</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="html, css, html tables, table">
    <meta name="Description" content="html table">

    <!-- add css link -->
    <style>
        body {
            background: #b3b2b2;
        }

        #card {
            position: relative;
            top: 110px;
            width: 320px;
            display: block;
            margin: auto;
            text-align: center;
            font-family: 'Source Sans Pro', sans-serif;
        }

        #upper-side {
            padding: 2em;
            background-color: #03aa35;
            display: block;
            color: #fff;
            border-top-right-radius: 8px;
            border-top-left-radius: 8px;
        }

        #checkmark {
            font-weight: lighter;
            fill: #fff;
            margin: -3.5em auto auto 20px;
        }

        #status {
            font-weight: lighter;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 1em;
            margin-top: -.2em;
            margin-bottom: 0;
        }

        #lower-side {
            padding: 2em 2em 5em 2em;
            background: #fff;
            display: block;
            border-bottom-right-radius: 8px;
            border-bottom-left-radius: 8px;
        }

        #message {
            margin-top: -.5em;
            color: #474747;
            letter-spacing: 1px;
        }

        #contBtn1 {
            position: relative;
            top: 1.5em;
            text-decoration: none;
            background: #04a6bb;
            color: #fff;
            margin: auto;
            padding: .8em 2em;
            border-radius: 25px;
            -webkit-transition: all .4s ease;
            -moz-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease;
        }

        #contBtn2 {
            position: relative;
            top: 1.5em;
            text-decoration: none;
            background: #0db640;
            color: #fff;
            margin: auto;
            padding: .8em 2em;
            border-radius: 25px;
            -webkit-transition: all .4s ease;
            -moz-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease;
        }

        #contBtn1:hover {
            -webkit-box-shadow: 0px 15px 30px rgba(60, 60, 60, 0.40);
            -moz-box-shadow: 0px 15px 30px rgba(60, 60, 60, 0.40);
            box-shadow: 0px 15px 30px rgba(60, 60, 60, 0.40);
            -webkit-transition: all .4s ease;
            -moz-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease;
        }

        #contBtn2:hover {
            -webkit-box-shadow: 0px 15px 30px rgba(60, 60, 60, 0.40);
            -moz-box-shadow: 0px 15px 30px rgba(60, 60, 60, 0.40);
            box-shadow: 0px 15px 30px rgba(60, 60, 60, 0.40);
            -webkit-transition: all .4s ease;
            -moz-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease;
        }


        .btn {
            display: flex;
        }

        .btn button:first-child {
            width: 50%;
        }

        .btn button:last-child {
            flex-grow: 1;
        }

        .checkmark {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: block;
            stroke-width: 3;
            stroke: white;
            stroke-miterlimit: 20;
            stroke-dashoffset: 0;
            margin: 10% auto;
        }
    </style>

</head>

<body>
<div id='card' class="animated fadeIn">
    <div id='upper-side'>
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
        </svg>
        <h3 id='status'> Success </h3>
    </div>
    <div id='lower-side'>
        <p id='message'> Congratulations, You have successfully registered! </p>
        <div class="btn">
            <a href="/" id="contBtn1">Home</a>
            <a href="{{ route('print.student.info',$student->id) }}" id="contBtn2">Download</a>
        </div>
    </div>
</div>
</body>

</html>
