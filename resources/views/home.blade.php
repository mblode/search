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
    <div class="container" id="app">
      <div class="row">
        <div class="col-12">
          <div class="input-group mb-2 mt-2">
            <input type="text" placeholder="Search&hellip;" class="form-control" v-model="query" @keyup.enter="search()">

            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button" v-on:click="search()" v-if="!loading">Search</button>
              <button class="btn btn-secondary" type="button" disabled="disabled" v-if="loading">Search</button>
            </span>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="alert alert-danger" role="alert" v-if="error">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            ${ error }
          </div>
        </div>
      </div>

      <div id="products" class="row">
        <div class="col-12">
          <ul class="list-group mb-2">
            <li class="list-group-item" v-for="product in products">
              <div class="d-flex w-100 justify-content-between">
                <h4>${ product.name }</h4>
              </div>
              <p class="mb-1">${ product.username } &middot; ${ product.email }</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <script src="https://unpkg.com/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.2.1/vue-resource.min.js"></script>
    <script src="/js/app.js"></script>
  </body>
</html>