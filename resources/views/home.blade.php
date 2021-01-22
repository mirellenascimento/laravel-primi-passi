@extends('layouts.template')

@section('main')
<main>


<!-- SECTION - 01-->
<section id="logos">
  <div class="container text-center">
    <div class="text-uppercase">
      <h4>Innovative businesses trust DigitalOcean</h4>
    </div>
    <ul class="list-inline">
      <li><img src="img/logo-1.png" alt="logo 1"></li>
      <li><img src="img/logo-2.png" alt="logo 2"></li>
      <li><img src="img/logo-3.png" alt="logo 3"></li>
      <li><img src="img/logo-4.png" alt="logo 4"></li>
      <li><img src="img/logo-5.svg" alt="logo 5"></li>
      <li><img src="img/logo-6.svg" alt="logo 6"></li>
    </div>
    <div>
      <p>See business solutions<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></p>
    </div>
  </div>
</section>
<!-- SECTION - 02-->
<section id="deploy-scale">
  <div class="container">
    <div class="text-center">
      <h1>Deploy and scale seamlessly</h1>
      <p class="lead-2">Our optimized configuration process saves your team time when running and<br>scaling distributed applications, AI & machine learning workloads, hosted services,<br> client websites, or CI/CD environments.</p>
    </div>
    <div class="row text-center">
      <div class="hidden-xs hidden-sm col-md-3 col-lg-3">
        <ul class="lg-vertical">
          <li>Deploy</li><li>Scale</li><li>Store</li><li>Secure</li><li>Monitor</li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-12 hidden-md hidden-lg">
        <ul class="mobile-horizontal list-inline">
          <li>Deploy</li><li>Scale</li><li>Store</li><li>Secure</li><li>Monitor</li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <img src="img/kublogoicon.svg" alt="Kubernetes">
            <h3>Kubernetes in minutes</h3>
            <p>Spin up a managed Kubernetes cluster in just a few clicks. Simply specify the size and location of your worker nodes.</p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <img src="img/dropletinboxicon.svg" alt="Flexible">
            <h3>Flexible compute types</h3>
            <p>With Basic, General Purpose, CPU-Optimized or Memory-Optimized Droplets, you can choose the right infrastructure for your workload.</p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <img src="img/featured-AP-icon.svg" alt="App">
            <h3>App Platform</h3>
            <p>Build, deploy, and scale apps quickly using a simple, fully managed solution. We’ll handle the infrastructure, app runtimes, and dependencies, so that you can push code to production in just a few clicks.</p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <img src="img/stacksplusicon.svg" alt="Marketplace">
            <h3>1-Click App Marketplace</h3>
            <p>Quickly deploy projects using one of our preconfigured 1-Click Apps, like LAMP, Docker, and WordPress.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- SECTION - 03-->
<section id="designer-for">
  <div class="container">
    <div class="text-center">
      <h1>Designed for developers</h1>
      <p class="lead-2">Build more and spend less time managing your infrastructure with our easy-to-use control panel and API.</p>
    </div>
    <div class="row">
      <div class="col-xs-2">
        <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
      </div>
      <div class="col-xs-8">
        <img src="img/screen.png" alt="screen">
      </div>
      <div class="col-xs-2">
        <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
      </div>
    </div>
    <div>
      <p class="lead-3 text-center">Build, deploy and scale apps quicly using APP Platform, We'll manage the infrastructure, app runtimes, and dependencies, so that you can push code to production in just few clicks.</p>
    </div>
    <div>
      <ul class="list-inline text-center">
        <li> <div class="closed-ball"></div> </li>
        <li> <div class="open-ball"></div> </li>
        <li> <div class="open-ball"></div> </li>
        <li> <div class="open-ball"></div> </li>
        <li> <div class="open-ball"></div> </li>
        <li> <div class="open-ball"></div> </li>
      </ul>
    </div>
  </div>
</section>
@endsection
