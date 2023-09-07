<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Student Info</title>

		<style>
			body {
				display: table;
				width: 100%;
				background-image: linear-gradient(to left bottom,
						#051937,
						#05162f,
						#051327,
						#040f1f,
						#010a18);
				background-size: 800%;
				animation: animateClr 1s infinite cubic-bezier(0.62, 0.28, 0.23, 0.99);
				text-align: center;
			}

			* {
				-webkit-box-sizing: border-box;
				/* Safari/Chrome, other WebKit */
				-moz-box-sizing: border-box;
				/* Firefox, other Gecko */
				box-sizing: border-box;
				/* Opera/IE 8+ */
			}

			.aa_h2 {
				font: 100 3.5rem/0 Roboto;
				text-transform: uppercase;
				color: #000;
			}

			table {
				background: #fff;
			}

			table,
			thead,
			tbody,
			tfoot,
			tr,
			td,
			th {
				text-align: left;
				margin: auto;
				border: 1px groove #000;
				padding: 6px 0 6px 15px;
				font-size: 25px;
				border-collapse: collapse;
				border-radius: 2%
			}

			.table {
				display: table;
				border-radius: 10px;
			}

			.tr {
				display: table-row;
			}

			.thead {
				display: table-header-group;
			}

			.tbody {
				display: table-row-group;
			}

			.tfoot {
				display: table-footer-group;
			}

			.col {
				display: table-column;
			}

			.colgroup {
				display: table-column-group;
			}

			.td,
			.th {
				display: table-cell;
				width: 25%;
			}

			.caption {
				display: table-caption;
			}

			.table,
			.thead,
			.tbody,
			.tfoot,
			.tr,
			.td,
			.th {
				text-align: center;
				margin: auto;
				padding: 1rem;
			}

			.table {
				background: #fff;
				margin: auto;
				border: none;
				padding: 0;
				margin-bottom: 5rem;
			}

			.th {
				font-weight: 700;
				border: 1px solid #dedede;
			}

			.th:nth-child(odd) {
				border-right: none;
			}

			.td {
				font-weight: 300;
				border: 1px solid #dedede;
				border-top: none;
			}

			.td:nth-child(odd) {
				border-right: none;
			}

			td {
				border-left: none;
			}

			th {
				border-right: none;
			}

			.aa_htmlTable {
				background-image: linear-gradient(to left bottom,
						#051937,
						#05162f,
						#051327,
						#040f1f,
						#010a18);
				background-size: 800%;
				animation: animateClr 1s infinite cubic-bezier(0.62, 0.28, 0.23, 0.99);
				display: table;
				width: 100%;
				height: 100vh;
				vertical-align: middle;
			}

			.ahmadawais {
				display: table;
				width: 100%;
				font: 100 1.2rem/2 Roboto;
				margin: 5rem auto;
			}

			/* Pic */
			.wrapper {}

			.image--cover {
				width: 200px;
				height: 200px;
				border-radius: 50%;
				margin: 20px;
				object-fit: cover;
				object-position: center right;
			}

			/* Rayen Button */
			@import url(https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600);

			@font-face {
				font-weight: normal;
				font-style: normal;
				font-family: 'codropsicons';
				src: url("../fonts/codropsicons/codropsicons.eot");
				src: url("../fonts/codropsicons/codropsicons.eot?#iefix") format("embedded-opentype"), url("../fonts/codropsicons/codropsicons.woff") format("woff"), url("../fonts/codropsicons/codropsicons.ttf") format("truetype"), url("../fonts/codropsicons/codropsicons.svg#codropsicons") format("svg");
			}

			*,
			*:after,
			*:before {
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
			}

			.cf:before,
			.cf:after {
				content: '';
				display: table;
			}

			.cf:after {
				clear: both;
			}

			body {
				color: #37474f;
				font-weight: 400;
				font-size: 1em;
				font-family: 'Raleway', Arial, sans-serif;
			}

			.support {
				font-weight: bold;
				padding: 2em 0 0 0;
				font-size: 1.4em;
				color: #ee2563;
				display: none;
			}

			a {
				color: #7986cb;
				text-decoration: none;
				outline: none;
			}

			a:hover,
			a:focus {
				color: #3f51b5;
			}

			.hidden {
				position: absolute;
				width: 0;
				height: 0;
				overflow: hidden;
				pointer-events: none;
			}

			.container {
				margin: 0 auto;
				text-align: center;
				overflow: hidden;
			}

			.content {
				/* padding: 2em 1em 5em; */
				z-index: 1;
				max-width: 1000px;
				margin: 0 auto;
			}

			.content h2 {
				margin: 0 0 2em;
			}

			.content p {
				margin: 1em 0;
				padding: 0 0 2em;
				font-size: 0.85em;
			}

			.box {
				padding: 0 0 4.5em 0;
				display: -webkit-flex;
				display: -ms-flexbox;
				display: flex;
				-webkit-flex-wrap: wrap;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				-webkit-justify-content: center;
				justify-content: center;
			}

			/* Header */
			.codrops-header {
				padding: 3em 190px 4em;
				letter-spacing: -1px;
			}

			.codrops-header h1 {
				font-weight: 200;
				font-size: 4em;
				line-height: 1;
				margin-bottom: 0;
			}

			.codrops-header h1 span {
				display: block;
				font-size: 40%;
				letter-spacing: 0;
				padding: 0.5em 0 1em 0;
				color: #A8B3B8;
			}

			/* Top Navigation Style */
			.codrops-links {
				position: relative;
				display: inline-block;
				white-space: nowrap;
				font-size: 1.25em;
				text-align: center;
			}

			.codrops-links::after {
				position: absolute;
				top: 0;
				left: 50%;
				width: 1px;
				height: 100%;
				background: #BFCACF;
				content: '';
				-webkit-transform: rotate3d(0, 0, 1, 22.5deg);
				transform: rotate3d(0, 0, 1, 22.5deg);
			}

			.codrops-icon {
				display: inline-block;
				margin: 0.5em;
				padding: 0em 0;
				width: 1.5em;
				text-decoration: none;
			}

			.codrops-icon:before {
				margin: 0 5px;
				text-transform: none;
				font-weight: normal;
				font-style: normal;
				font-variant: normal;
				font-family: 'codropsicons';
				line-height: 1;
				speak: none;
				-webkit-font-smoothing: antialiased;
			}

			.codrops-icon span {
				display: none;
			}

			.codrops-icon--drop:before {
				content: "\e001";
			}

			.codrops-icon--prev:before {
				content: "\e004";
			}

			/* Related demos */
			.content--related {
				text-align: center;
				font-weight: 600;
			}

			.media-item {
				display: inline-block;
				padding: 1em;
				margin: 1em 0 0 0;
				vertical-align: top;
				-webkit-transition: color 0.3s;
				transition: color 0.3s;
			}

			.media-item__img {
				opacity: 0.8;
				max-width: 100%;
				-webkit-transition: opacity 0.3s;
				transition: opacity 0.3s;
			}

			.media-item:hover .media-item__img,
			.media-item:focus .media-item__img {
				opacity: 1;
			}

			.media-item__title {
				font-size: 0.85em;
				margin: 0;
				padding: 0.5em;
			}

			@media screen and (max-width:50em) {
				.codrops-header {
					padding: 3em 10% 4em;
				}
			}

			@media screen and (max-width:40em) {
				.codrops-header h1 {
					font-size: 2.8em;
				}
			}

			/* Box colors */
			.bg-2 {
				color: #ECEFF1;
			}

			/* Common button styles */
			.button {
				float: left;
				min-width: 150px;
				max-width: 260px;
				display: block;
				margin: 1em;
				padding: 1em 2em;
				border: none;
				background: none;
				color: inherit;
				vertical-align: middle;
				position: relative;
				z-index: 1;
				-webkit-backface-visibility: hidden;
				-moz-osx-font-smoothing: grayscale;
			}

			.button:focus {
				outline: none;
			}

			.button>span {
				vertical-align: middle;
			}

			/* Text color adjustments (we could stick to the "inherit" but that does not work well in Safari) */
			.bg-2 .button {
				color: #ECEFF1;
				border-color: #ECEFF1;
			}

			/* Sizes */
			.button--size-s {
				font-size: 14px;
			}

			.button--size-m {
				font-size: 16px;
			}

			.button--size-l {
				font-size: 18px;
			}

			/* Typography and Roundedness */
			.button--text-upper {
				letter-spacing: 2px;
				text-transform: uppercase;
			}

			.button--text-thin {
				font-weight: 300;
			}

			.button--text-medium {
				font-weight: 500;
			}

			.button--text-thick {
				font-weight: 600;
			}

			.button--round-s {
				border-radius: 5px;
			}

			.button--round-m {
				border-radius: 15px;
			}

			.button--round-l {
				border-radius: 40px;
			}

			/* Borders */
			.button--border-thin {
				border: 1px solid;
			}

			.button--border-medium {
				border: 2px solid;
			}

			.button--border-thick {
				border: 3px solid;
			}

			.button--rayen {
				overflow: hidden;
				padding: 0;
				width: 260px;
			}

			.button--rayen.button--inverted1 {
				color: #33ff57;
				font-weight: bold;
			}

			.button--rayen.button--inverted2 {
				color: #C70039;
			}

			.button--rayen.button--inverted3 {
				color: #33aaff;
			}

			.button--rayen::before {
				content: attr(data-text);
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				background: #7986cb;
				-webkit-transform: translate3d(-100%, 0, 0);
				transform: translate3d(-100%, 0, 0);
			}

			/* .button--rayen.button--inverted::before {
												background: red;
												color: #37474f;
								} */
			.button--rayen.button--inverted_one::before {
				background: #33ff57;
				color: #fff;
			}

			.button--rayen.button--inverted_two::before {
				background: #C70039;
				color: #fff;
			}

			.button--rayen.button--inverted_three::before {
				background: #33aaff;
				color: #fff;
			}

			.button--rayen>span {
				display: block;
			}

			.button--rayen::before,
			.button--rayen>span {
				padding: 1em 2em;
				-webkit-transition: -webkit-transform 0.3s;
				transition: transform 0.3s;
				-webkit-transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1);
				transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1);
			}

			.button--rayen:hover::before {
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0);
			}

			.button--rayen:hover>span {
				-webkit-transform: translate3d(0, 100%, 0);
				transform: translate3d(0, 100%, 0);
			}
		</style>
	</head>

	<body>
		<div class="aa_htmlTable">

			<div class="wrapper">

			</div>
			<table>
				{{-- <thead>
                <tr>
                    <th>Title</th>
                    <th>Data</th>
                    <th>Title</th>
                    <th>Date</th>
                </tr>
            </thead> --}}
				<tbody>
					<tr>
						<th colspan="3">
							<h2 class="aa_h2">Name Bn: {{ $student['name_bn'] }}</h2>
							<h2 class="aa_h2">Name En: {{ $student['name_en'] }}</h2>
						</th>
						<th style="text-align: center"><img src="{{ asset('upload/profile/' . $student['image']) }}"
								alt="{{ $student['name_bn'] }}" class="image--cover" /></th>
					</tr>
					<tr style="">
						<th>Name</th>
						<td>: {{ $student['name_en'] }}</td>
						<th>Father Name</th>
						<td>: {{ $student['father_name_en'] }}</td>
					</tr>
					<tr>
						<th>School Name</th>
						<td>: {{ $student['institute_name'] }}</td>
						<th>Profession</th>
						<td>: {{ $student['father_occupation'] }}</td>
					</tr>
					<tr>
						<th>Class Name</th>
						<td>: {{ $student['student_class_name'] }}</td>
						<th>Mother Name</th>
						<td>: {{ $student['mother_name_en'] }}</td>
					</tr>
					<tr>
						<th>Class Roll</th>
						<td>: {{ $student['class_roll'] }}</td>
						<th>Profession</th>
						<td>: {{ $student['mother_occupation'] }}</td>
					</tr>
					<tr>
						<th>Subject</th>
						<td>: {{ $student['class_division'] }}</td>
						<th>Present Adress</th>
						<td>: {{ $student['present_address'] }}</td>
					</tr>
					<tr>
						<th>Present Address Village</th>
						<td>: {{ $student['present_address_village'] }}</td>
						<th>Present Address Post</th>
						<td>: {{ $student['present_address_post_office'] }}</td>
					</tr>
					<tr>
						<th>Present Adress Thana</th>
						<td>: {{ $student['present_address_thana'] }}</td>
						<th>Present Address District</th>
						<td>: {{ $student['present_address_district'] }}</td>
					</tr>
					<tr>
						<th>Section</th>
						<td>: {{ $student['class_section'] }}</td>
						<th>Division Name</th>
						<td>: {{ $student['permanent_address_district'] }}</td>
					</tr>
					<tr>
						<th>Institute Type</th>
						<td>: {{ $student['school_madrasa'] }}</td>
						<th>Village Name</th>
						<td>: {{ $student['permanent_address_village'] }}</td>
					</tr>
					<tr>
						<th>Student Type</th>
						<td>: {{ $student['student_type'] }}</td>
						<th>Select Thana</th>
						<td>: {{ $student['permanent_address_thana'] }}</td>
					</tr>
					<tr>
						<th>Area</th>
						<td>: {{ $student['area_name'] }}</td>
						<th>Postal Code</th>
						<td>: {{ $student['permanent_address_post_office'] }}</td>
					</tr>
					<tr>
						<th>Date of Birth</th>
						<td>: {{ $student['dob'] }}</td>
						<th>Permanent House Adress</th>
						<td>: {{ $student['permanent_address'] }}</td>
					</tr>
					<tr>
						<th>Blood Group</th>
						<td>: {{ $student['blood_group'] }}</td>
						<th>Name of guardian</th>
						<td>: {{ $student['absent_of_parent_name'] }}</td>
					</tr>
					<tr>
						<th>Mobile Number</th>
						<td>: {{ $student['mobile'] }}</td>
						<th>Relationship with guardian</th>
						<td>: {{ $student['absent_of_parent_relation'] }}</td>
					</tr>
					<tr>
						<th>Email</th>
						<td>: {{ $student['email'] }}</td>
						<th>Occupation of Guardian</th>
						<td>: {{ $student['absent_of_parent_occupation'] }}</td>
					</tr>
					<tr>
						<th>Previous Scholarship Organization</th>
						<td>: {{ $student['previous_scholarship_name_group'] }}</td>
						<th>Income of Guardian</th>
						<td>: {{ $student['absent_of_parent_annual_earning'] }}</td>
					</tr>
				</tbody>
			</table>
			<section class="content">
				<div class="box bg-2">
					<a href="{{ route('students.edit.session') }}"
						class="button button--rayen button--border-medium button--text-thin button--size-l button--inverted3 button--inverted_three"
						data-text="Click For Edit"><span>Click For Edit</span></a>
					<a href="{{ route('students.confirm.registration') }}"
						class="button button--rayen button--border-medium button--text-thin button--size-l button--inverted1 button--inverted_one"
						data-text="Confirm Registration"><span>Confirm Registration</span></a>
					<a href="{{ route('students.cancel.registration') }}"
						class="button button--rayen button--border-medium button--text-thin button--size-l button--inverted2 button--inverted_two"
						data-text="Cancel Registration"><span>Cancel Registration</span></a>
				</div>
			</section>
		</div>

	</body>

</html>
