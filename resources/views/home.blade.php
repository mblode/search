<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/app.css">
  <title>Search with Laravel Scout and Vue.js!</title>
</head>
<body>
  <div id="app">
    <section class="search--bg">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="input-group mb-3 mt-3">
              <input type="text" placeholder="Search&hellip;" class="form-control" v-model="query" @keyup.enter="search()">

              <span class="input-group-btn">
                <button class="btn btn-primary" type="button" v-on:click="search()" v-if="!loading">Search</button>
                <button class="btn btn-primary btn-disabled" type="button" disabled="disabled" v-if="loading">Search</button>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="mt-3 alert alert-danger" role="alert" v-if="error">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            ${ error }
          </div>
        </div>
      </div>

      <div id="products" class="row">
        <div class="col-12">
          <ul class="list-group mt-3 mb-3">
            <li class="list-group-item" v-for="product in products">
              <div class="d-flex w-100 justify-content-between">
                <h4>${ product.name }</h4>
              </div>
              <p class="mb-1">${ product.username } &middot; ${ product.email }</p>
              <p class="mb-1">${ product.description } &middot; ${ product.age }</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <script src="https://unpkg.com/vue"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.2.1/vue-resource.min.js"></script>
  <script src="/js/app.js"></script>
</body>
</html>