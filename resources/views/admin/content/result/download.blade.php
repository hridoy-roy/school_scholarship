<!doctype html>
<html lang="en" style="break-before: always;">

<head>

</head>

<body>
    @foreach ($exam['students'] ?? [] as $student)
    <section style="margin: 50px;">
        <p style="color: #000;">
            @if ($student['marks'] == null)
            Not Set
            @elseif ($student['marks'] >= $exam['first_grade'])
            {{ $student['marks'] }}
            @elseif ($student['marks'] >= $exam['second_grade'])
            {{ $student['marks'] }}
            @else
            {{ $student['marks'] }}
            @endif
        </p>
        {{ $student['registration_no'] }}
    </section>
    @endforeach
</body>

</html>