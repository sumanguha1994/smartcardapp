<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
      integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?= base_url('asset/css/style.css') ?>" />
    <title>Document</title>
  </head>
  <body>
    <section class="fixed-top" style="background:#ffc107; padding: 0.5em;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-6">
                <a href="<?= base_url('/')?>" class="navbar-brand text-dark">Smart card</a>
              </div>
              <div class="col-6">
                <select name="classes" id="class" class="form-control">
                  <option value="null" selected desabled>Select Category</option>
                  <?php for($i = 0;$i < count($cats);$i++): ?>
                    <option value="<?= $cats[$i]['id']?>"><?= $cats[$i]['cat_name']?></option>
                  <?php endfor; ?>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="tabs">
      <div class="container">
        <div class="row">
          <div class="col-6 text-center">
            <a href="<?= base_url('/')?>"><i class="fas fa-home"></i></a>
          </div>
          <div class="col-6 text-center">
            <a href="<?= base_url('/login')?>"><i class="fas fa-user"></i></a>
          </div>
        </div>
      </div>
    </section>
      <section id="main">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="input-group">
                <input type="text" name="" id="" class="form-control" placeholder="Enter Pincode">
                <div class="input-group-append">
                  <div class="input-group-text" style="background: #ffc107;">
                    <a href="" style="text-decoration: none; color: #000;"><i class="fas fa-search"></i></a> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <?php for($j = 0;$j < count($shops);$j++): ?>
              <a href="<?= base_url('/shop-detail?id='.$shops[$j]['id'])?>">
                <div class="box">
                  <div class="row">
                    <div class="col-2">
                      <i class="fa fa-<?= $shops[$j]['cat_icon']?>" style="margin: -0.25em 0 0 0.5em;" class="img-fluid"></i>
                    </div>
                    <div class="col-8">
                      <p><?= $shops[$j]['shname']?></p>
                    </div>
                    <div class="col-2">
                      <i class="fas fa-caret-right"></i>
                    </div>
                  </div>
                </div>
              </a>
              <?php endfor; ?>
            </div>
          </div>
        </div>
      </section>
    </div>

    <script
      src="http://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script>
      $('#year').text(new date().getFullYear());
    </script>
  </body>
</html>
