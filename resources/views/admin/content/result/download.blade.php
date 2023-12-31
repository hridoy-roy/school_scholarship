<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
            integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
    <style>
        body {
            width: 8in;
            margin: 0 auto;
        }

        table {
            border: 2px solid black;
            border-collapse: collapse;
            width: 100%;
        }

        .container h2,
        h4 {
            text-align: center;
            margin-top: 2px;
            color: coral;
        }

        table {
            margin: 0 auto;
        }

        th,
        td {
            border: 2px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container" id="downloadContent">
        <h2>The Student Welfare Association Savar</h2>
        <h4>List of Student for Stipend of {{$exam['name']}}</h4>
        <table>
            <thead>
                <tr>
                    <th>Scholar Status</th>
                    <th>REG_NO</th>
                    <th>Roll_No.</th>
                    <th>NAME</th>
                    <th>SCHOOL</th>
                    <th>MARKS</th>
                <tr>
            </thead>
            <tbody>
                @foreach ($exam['students'] ?? [] as $student)
                @if ($student['scholar_status'] == 'talent_full')
                <tr>
                    <td style="color: #de4882"><strong>Talent Full</strong></td>
                    <td>{{ $student['registration_no'] }}</td>
                    <td>{{ $student['roll_no'] }}</td>
                    <td>{{ $student['name_en'] }}</td>
                    <td>{{ $student['institute']['name'] }}</td>
                    <td>{{ $student['marks'] }}</td>
                </tr>

                @elseif ($student['scholar_status'] >= 'general')
                <tr>
                    <td style="color: #20c997"><strong>General</strong></td>
                    <td>{{ $student['registration_no'] }}</td>
                    <td>{{ $student['roll_no'] }}</td>
                    <td>{{ $student['name_en'] }}</td>
                    <td>{{ $student['institute']['name'] }}</td>
                    <td>{{ $student['marks'] }}</td>
                </tr>
                @else
                <tr>
                    <td>Other</td>
                    <td>{{ $student['registration_no'] }}</td>
                    <td>{{ $student['roll_no'] }}</td>
                    <td>{{ $student['name_en'] }}</td>
                    <td>{{ $student['institute']['name'] }}</td>
                    <td>{{ $student['marks'] }}</td>
                </tr>

                @endif
                @endforeach

            </tbody>

        </table>
    </div>

    <script>
        window.onload = async  function () {
            const downloadContent = this.document.getElementById('downloadContent');
            await html2pdf().from(downloadContent).save('student_murk_info');
            // window.history.go(-1);
        }
    </script>
</body>

</html>
