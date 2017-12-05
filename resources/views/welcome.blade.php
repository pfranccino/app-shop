@extends('layouts.app')
@section('body-class','landing-page')
@section('title','Bienvenido a App-shop')
@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
    <div class="container">
        <div class="row">
  <div class="col-md-6">
    <h1 class="title">App-shop</h1>
              <h4>La mejor aplicacion del mundo mundial</h4>
              <br />
              <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger btn-raised btn-lg">
      <i class="fa fa-play"></i> ¿ Como comprar ?
    </a>
  </div>
        </div>
    </div>
</div>

<div class="main main-raised">
<div class="container">
  <div class="section text-center section-landing">
          <div class="row">
              <div class="col-md-8 col-md-offset-2">
                  <h2 class="title">App-shop</h2>
                  <h5 class="description">App-shop asdsjdlasjkdasldjaklsdjaskldjalskdjaslkdjaklsjdlaksdjalskdjaslkdjasdkkljasdlaksdj</h5>
              </div>
          </div>

  <div class="features">
    <div class="row">
                <div class="col-md-4">
        <div class="info">
          <div class="icon icon-primary">
            <i class="material-icons">chat</i>
          </div>
          <h4 class="info-title">Primer paso</h4>
          <p>Seleccionar productos que deseas comprar en esta hermosa tienda</p>
        </div>
                </div>
                <div class="col-md-4">
        <div class="info">
          <div class="icon icon-success">
            <i class="material-icons">verified_user</i>
          </div>
          <h4 class="info-title">Segundo paso</h4>
          <p>Solo tu sabras que productos vas comprar</p>
        </div>
                </div>
                <div class="col-md-4">
        <div class="info">
          <div class="icon icon-danger">
            <i class="material-icons">fingerprint</i>
          </div>
          <h4 class="info-title">Tercer paso</h4>
          <p>la peor tienda del mundo</p>
        </div>
                </div>
            </div>
  </div>
      </div>

    <div class="section text-center">
          <h2 class="title">Nuestros Productos</h2>

  <div class="team">
    <div class="row">
         @foreach ($products as $product)
      <div class="col-md-4">
                  <div class="team-player">
                      <img src="{{$product->images()->first()->image}}" alt="Thumbnail Image" class="img-raised img-circle">
                      <h4 class="title">{{$product->name}}<br/>
            <small class="text-muted">{{$product->category->name}}</small>
          </h4>
          <p class="description">{{$product->description}}</p>
          <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
          <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
          <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
                  </div>
              </div>
         @endforeach
    </div>
  </div>

      </div>


    <div class="section landing-section">
          <div class="row">
              <div class="col-md-8 col-md-offset-2">
                  <h2 class="text-center title">Contactanos</h2>
      <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.</h4>
                  <form class="contact-form">
                      <div class="row">
                          <div class="col-md-6">
            <div class="form-group label-floating">
              <label class="control-label">Your Name</label>
              <input type="email" class="form-control">
            </div>
                          </div>
                          <div class="col-md-6">
            <div class="form-group label-floating">
              <label class="control-label">Your Email</label>
              <input type="email" class="form-control">
            </div>
                          </div>
                      </div>

        <div class="form-group label-floating">
          <label class="control-label">Your Messge</label>
          <textarea class="form-control" rows="4"></textarea>
        </div>

                      <div class="row">
                          <div class="col-md-4 col-md-offset-4 text-center">
                              <button class="btn btn-primary btn-raised">
              Contactanos
            </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>

      </div>
  </div>

@endsection
