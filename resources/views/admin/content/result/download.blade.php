<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            padding: 25px;
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
    <div class="container">
        <h2>The Student Welfare Association Savar</h2>
        <h4>List of Student for Stipend of SSC Examination 2023</h4>
        <table>
            <thead>
                <tr>
                    <th>Scholar Status</th>
                    <th>REG_NO</th>
                    <th>Roll_No.</th>
                    <th>NAME</th>
                    <th>Father's name</th>
                    <th>SCHOOL</th>
                    <th>MARKS</th>
                <tr>
            </thead>
            <tbody>
                @foreach ($exam['students'] ?? [] as $student)
                @if ($student['scholar_status'] == 'talent_full')
                <tr>
                    <td>Talent Full</td>
                    <td>{{ $student['registration_no'] }}</td>
                    <td>{{ $student['roll_no'] }}</td>
                    <td>{{ $student['name_en'] }}</td>
                    <td>{{ $student['father_name_en'] }}</td>
                    <td>{{ $student['institute']['name'] }}</td>
                    <td>{{ $student['marks'] }}</td>
                </tr>

                @elseif ($student['scholar_status'] >= 'general')
                <tr>
                    <td>General</td>
                    <td>{{ $student['registration_no'] }}</td>
                    <td>{{ $student['roll_no'] }}</td>
                    <td>{{ $student['name_en'] }}</td>
                    <td>{{ $student['father_name_en'] }}</td>
                    <td>{{ $student['institute']['name'] }}</td>
                    <td>{{ $student['marks'] }}</td>
                </tr>
                @else
                <tr>
                    <td>Other</td>
                    <td>{{ $student['registration_no'] }}</td>
                    <td>{{ $student['roll_no'] }}</td>
                    <td>{{ $student['name_en'] }}</td>
                    <td>{{ $student['father_name_en'] }}</td>
                    <td>{{ $student['institute']['name'] }}</td>
                    <td>{{ $student['marks'] }}</td>
                </tr>

                @endif
                @endforeach

            </tbody>

        </table>
    </div>


</body>

</html>
