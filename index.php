<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <!-- bagian navbar-->
     <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary-navbar bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">Maula</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#paraf">Paragraf</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tabel">Table</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#galery">Galery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About Me</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <!-- bagian countain -->
    <div class="container">
        <div class="row mt-2">
            <div class="col-md-12">
                <h1>Hello, world!</h1>
            </div>
        </div>

        <div class="row" id="paraf">
            <h1>Paragraf</h1>
            <div class="col-md-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est quo amet soluta repellendus officiis exercitationem mollitia doloribus rerum similique! Dolorem eaque repellat consectetur. Eaque sapiente perferendis tenetur facilis at quibusdam. Eum illo cum nam iusto perspiciatis inventore quibusdam, commodi dolore maxime nisi natus eos molestiae veritatis suscipit, ex dolorem magnam!</p>
            </div>

            <div class="col-md-6">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id ipsam saepe sed, veritatis aliquid temporibus quam veniam quis debitis praesentium? Perspiciatis voluptas voluptates facilis recusandae neque nihil magni, quidem labore, quas, ab eum incidunt cumque porro repellat. Esse, voluptate mollitia adipisci odit sint reprehenderit, nihil cupiditate eligendi voluptatum quae quod!</p>
            </div>

            <div class="col-md-3">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur nostrum saepe pariatur, ipsam deserunt ipsum? Quibusdam quidem recusandae rem. Libero, debitis ipsum quae quas quasi velit totam animi ut, voluptate laudantium quidem quaerat nihil, ratione accusamus expedita corporis veritatis blanditiis vitae cum esse fugiat alias cupiditate. Adipisci odit aspernatur ex!</p>
            </div>
        </div>
      
        <div class="row mt-2">
          <div class="col-md-12" id="tabel">
              <h1>Contoh Tabel</h1>
              <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Maula</td>
      <td>XI PPLG 2</td>
      <td>
        <a href="#" class="btn btn-success">Edit</a>
        <a href="#" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Excel</td>
      <td>XI PPLG 2</td>
      <td>
        <a href="#" class="btn btn-success">Edit</a>
        <a href="#" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    </tr>
  </tbody>
</table>

          </div>

        </div>

        <div class="row mt-2" id="galery">
            <h1>Galery</h1>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
  <img src="img/contoh1.png" class="card-img-top" alt="maulaaa">
  <div class="card-body">
    <h5 class="card-title">si itu</h5>
    <p class="card-text">susah dijelaskan dengan kata-kata</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
  <img src="img/contoh2.png" class="card-img-top" alt="maulaaa">
  <div class="card-body">
    <h5 class="card-title">Bendera</h5>
    <p class="card-text">Merdeka</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
  <img src="img/contoh3.png" class="card-img-top" alt="maulaaa">
  <div class="card-body">
    <h5 class="card-title">Jambi</h5>
    <p class="card-text">Kota Jambi</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            </div>
      <div class="row mt-2" id="contact">
          <h1>Contact Us</h1>
          <div class="col-md-5">
            <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

          </div>
              <div class="col md-7" id="about">
              <h1>About Me</h1>
              <iframe src="iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.223780261703!2d103.64153127350286!3d-1.6199188360787014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e25888b1224749f%3A0xba13725b9daf95ba!2sSekolah%20Menengah%20Kejuruan%20Negeri%202%20Kota%20Jambi!5e0!3m2!1sid!2sid!4v1790660044465!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe></iframe>
      </div>
      
        </div>
        </div>

        <!-- end Container -->
    </div>

    <!-- bagian footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>