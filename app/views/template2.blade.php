<!DOCTYPE html>
<html>
<head>
	<title></title>

        <meta charset="UTF-8">
        <title>Director | Simple Tables</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="description" content="Developed By M Abdur Rokib Promy">
        <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
        <!-- bootstrap 3.0.2 -->
        
        {{ HTML::style("css/bootstrap.min.css") }}
        {{ HTML::style("css/style.css") }}
        {{ HTML::style("css/font-awesome.min.css") }}
        {{ HTML::style("css/ionicons.min.css") }}
        {{ HTML::style('http://fonts.googleapis.com/css?family=Lato') }}

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- google font -->
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <!-- Theme style -->
        <link href="css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

</head>
<body>

<div class="row">
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		<div class="jumbotron">
			<div class="container">
				<p>
					<ul>
                        <li> {{ HTML::link('participante2/index', 'lista de Eventos') }} </li>
						<li> {{ HTML::link('evento/index', 'main') }} </li>
					</ul>
				</p>
			</div>
		</div>
	</div>
	<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
		<div class="jumbotron">
			<div class="container">
				<p>
					@yield('content')
				</p>
			</div>
		</div>
	</div>
</div>

</body>
</html>