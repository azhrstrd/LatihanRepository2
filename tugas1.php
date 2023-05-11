<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist\css\bootstrap.css">
    <title>Hello, world!</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row justify-content-md-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Form Pendaftaran</h1>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <!-- Ini akan berisi halaman form-->
                            <!-- nama -->
                            <div class="form-floating mb-1">
                                <input type="text" name="nama" class="form-control" id="fiNama"
                                    placeholder="name@example.com">
                                <label for="fiNama">Nama</label>
                            </div>
                            <!-- email -->
                            <div class="form-floating mb-1">
                                <input type="email" name="email" class="form-control" id="fiEmail"
                                    placeholder="name@example.com">
                                <label for="fiEmail">Email</label>
                            </div>
                            <!-- alamat -->
                            <div class="form-floating">
                                <textarea name="alamat" class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Alamat</label>
                            </div>
                            <!-- program pelatihan -->
                            <div class="form-floating mt-2">
                                <select name="programPelatihan" class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option selected disabled>Pilih</option>
                                    <option value="jwd">Junior Web Developer</option>
                                    <option value="dm">Digital Marketing</option>
                                    <option value="cc">Content Creator</option>
                                    <option value="dmm">Desainer Multimedia Muda</option>
                                </select>
                                <label for="floatingSelect">Program Pelatihan</label>
                            </div>
                            <!-- tahun daftar -->
                            <div class="form-floating mt-2">
                                <select name="tahunDaftar" class="form-select" id="fsTahun"
                                    aria-label="Floating label select example">
                                    <option selected disabled>Pilih Tahun</option>
                                    <?php for($a=2000;$a<=2023;$a++):?>
                                        <option value="<?= $a;?>">
                                            <?= $a;?>
                                        </option>
                                    <?php endfor;?>
                                </select>
                                <label for="fsTahun">Tahun Daftar</label>
                            </div>

                            <input type="submit" name="submit" class="btn btn-success mt-3 col-12" value="Daftar">
                    </div>
                    </form>
                    <div class="card-footer text-center">
                        <!-- <?php if (isset($_POST['submit'])): ?>
                            <div class="table-responsive"> -->
                                <table class="table table-hover table striped">
                                    <thead class="table-light">
                                        <tr>
                                        <th>NAMA</th>
                                        <th>EMAIL</th>
                                        <th>ALAMAT</th>
                                        <th>PROGRAM</th>
                                        <th>TAHUN</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?>
                        <h5>copyright @2023</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="bootstrap-5.3.0-alpha3-dist/js/jquery-3.6.4.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>