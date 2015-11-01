<html>
	<head>
		<title>OrderEZ</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				font-weight: bold;
				margin-bottom: 40px;
				color: goldenrod;
			}

			.quote {
				font-size: 24px;
				font-weight: bold;
				color: cornflowerblue;
			}
		</style>
	</head>
	<body>

		<div class="container">
			<div class="content">
				<div class="title">OrderEZ</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
	</body>
</html>
