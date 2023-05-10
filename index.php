
<!-- Memanggil file index.script.php agar dapat digunakan -->
<?php include_once("index.script.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='styles.css'>
    <title>Island Media Management Developer Test Phase 1</title>
</head>

<body>
    <section class="wrapper">
        <p>Today is <span class="day-name"><?php echo $today ?></span></p>
        <div class="content">
            <!-- Menampilkan daftar nama hari secara dinamis, yang disimpan pada variabel $days dengan menggunakan perulangan foreach-->
            <ul class="days-wrapper">
                <?php foreach ($days as $day) : ?>
                    <!-- Menentukan style dengan if - else jika element yang ditampilkan merupakan hari sekarang, dan menampilkannya dengan style yang berbeda -->
                    <li class="<?php if ($day === $today) {
                                    echo "day-button day-today";
                                } else {
                                    echo "day-button";
                                } ?>">
                        <?= $day; ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        <p>Selected day is <span id="selected-day">...</span></p>
    </section>

</body>

<script>
    // Mendapatkan semua element yang memiliki class "day-button"
    const days = document.querySelectorAll(".day-button")
    
    // Menambahkan event listener, jika element di "click" maka akan mengubah style element tersebut
    for (let i = 0; i < days.length; i += 1) {
        days[i].addEventListener("click", (event) => {
            // Menghapus semua element yang memiliki class "active-button" 
            document.querySelector('.active-button')?.classList.remove('active-button')
            // Menambahkan element yang memiliki class "active-button" 
            days[i].classList.add("active-button")
            // Mengubah konten element dengan id "selected-day" sesuai dengan hari yang dipilih
            document.querySelector('#selected-day').innerHTML = days[i].textContent
        })
    }

    

</script>

</html>