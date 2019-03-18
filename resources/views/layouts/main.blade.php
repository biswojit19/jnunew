<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <noscript>
        <META HTTP-EQUIV="Refresh" CONTENT="0;URL=/jnurecRC57/index.php/site/noscriptpage" >   
        </noscript>
        <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="RjVzdjd1YlAfckAZeBYYBz5MCRQaPCckEGcgRnMgVgN/YhBCQTIpGg==">
        <title>Login</title>
        <link href="/css/bootstrap.css" rel="stylesheet">

<link href="/css/site.css" rel="stylesheet">		
		<style>
		.header-blue{
  background:linear-gradient(135deg, #172a74, #21a9af);
  background-color:#184e8e;
  font-family:'Source Sans Pro', sans-serif;
}	

body{
  background:linear-gradient(135deg, #172a74, #21a9af);
  background-color:#184e8e;
  font-family:'Source Sans Pro', sans-serif;
 
}
		</style>
    </head>
    <body>
                <div class="header-blue">
			<nav class="navbar navbar-default navigation-clean-search" style="margin-bottom:0; padding:1em 0 0 0; margin-left:5%; margin-right:5%">
                <div class="container">
                    <div class="navbar-header" ><a style="margin-bottom:0; padding:0 0 0 0" class="navbar-brand navbar-link" href="#"><div class="col-md-2 col-sm-2 col-xs-2"><img style="height:50px" src=" http://recruitment.jnu.ac.in/upload57/jnu-logo-205x205.jpg"/></div><div class="col-md-10 col-sm-10 " >जवाहरलाल नेहरू विश्वविद्यालय <br>JAWAHARLAL NEHRU UNIVERSITY</div></a>
                        <button  class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse"  id="navcol-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/form/eligibilitylist" style="font-weight:bold;">JOB PORTAL</a></li>
                                                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Help <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                        <li><a href="/jnurecRC57/index.php/site/about">How to fill form</a> </li>
                                        <li><a href="/jnurecRC57/index.php/site/faq">FAQ</a></li>
                                </ul>
                            </li>
							<li>
                                @if (!Auth::guest())
                                     
                                      <div class="pull-right">
                                        <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                @else
                                  
                                @endif


                               
                            </li>
                                              </ul>
                    </div>
                </div>
            </nav>

    @yield('content')
	
 <footer class="footer" style="margin-bottom:0px">
            <div class="container-fluid" style="color: white; font-weight:bold" align="center">
                <p class="pull-left">&copy;2019.<a href="#" target="_blank"> </a>Jawaharlal Nehru University. New Mehrauli Road, New Delhi 110067. All rights reserved.</p>
                <p class="pull-right">Developed By Communication & Information Services</p>
            </div>
        </footer>
        </div>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.js"></script>
         <script src="/js/form.js"></script>

   </body>
</html>
