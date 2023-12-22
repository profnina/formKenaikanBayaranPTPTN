<!DOCTYPE html>
<html>
<head>
    <title>Semakan Permohonan Kenaikan Jumlah Pembiayaan Pendidikan PTPTN</title>
    <link rel="stylesheet" type="text/css" href="CSS/profil.css">
</head>

<header>
        <nav>
            <ul>
                <li><a href="profil.html">Profil</a></li>
                <li><a class="active" href="borangPemohonan.php">Borang Pemohonan</a></li>
                <li><a href="semakanPemohonan.php">Semakan Pemohonan</a></li>
            </ul>
        </nav>
    </header>
<body>

<div class="container">
    <div class="centered-images">
        <img src="uitm.png" alt="UiTM Logo">
        <img src="ptptn.png" alt="PTPTN Logo">
    </div>
    <h1>Semakan Permohonan Kenaikan Jumlah Pembiayaan Pendidikan PTPTN</h1>
    <br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //bahagian 1

    echo '<section id="headsec"><h3>BAHAGIAN 1 - MAKLUMAT PEMOHON</h3></section>';echo '<br>';
    echo '<div class="form-data">';
    echo "<p><strong>Nama:</strong> " . $_POST["namaPemohon"] . "</p>";
    echo "<p><strong>No. Kad Pengenalan:</strong> " . $_POST["noKP"] . "</p>";
    echo "<p><strong>Alamat Emel:</strong> " . $_POST["emel"] . "</p>";
    echo "<p><strong>No. Telefon Bimbit:</strong> " . $_POST["fonBimbit"] . "</p>";
    echo "<p><strong>No. Telefon Rumah:</strong> " . $_POST["fonRumah"] . "</p>";
    echo "<p><strong>Alamat Surat Menyurat:</strong> " . $_POST["alamat"] . ", " . $_POST["poskod"] . ", " . $_POST["bandar"] . ", " . $_POST["negeri"] . "</p>";
    echo "<p><strong>Alamat Tetap:</strong> " . $_POST["alamat2"] . ", " . $_POST["poskod2"] . ", " . $_POST["bandar2"] . ", " . $_POST["negeri2"] . "</p>";
    echo '</div><br>';

    //bahagian 2
    echo '<section id="headsec"><h3>BAHAGIAN 2 - MAKLUMAT PEMBIAYAAN PTPTN</h3> </section>';echo '<br>';
    echo '<div class="form-data">';
    echo "<p><strong>Nama IPTA/IPTS/Politeknik:</strong> " . $_POST["namaIPT"] . "</p>";
    echo "<p><strong>Nama Kursus/Program:</strong> " . $_POST["namaKursus"] . "</p>";
    echo "<p><strong>Jumlah Pembiayaan yang Ditawarkan:</strong> " . $_POST["jumTawaran"] . "</p>";
    echo '</div><br>';

    //bahagian 3
    echo '<section id="headsec"><h3>BAHAGIAN 3 - MAKLUMAT IBU/BAPA/PENJAGA</h3> </section>';echo '<br><br>';
    echo '</section>';
    echo '<div class="form-data">';
    echo "<table>";
    echo "<tr><th></th><th>NAMA</th><th>PEKERJAAN</th><th>PENDAPATAN BERSIH (RM)</th></tr>";
    
    $totalPendapatan = 0;

    // Bapa/Penjaga
    echo "<tr><td>Bapa/Penjaga</td>";
    echo "<td>" . $_POST["namaBapa"] . "</td>";
    echo "<td>" . $_POST["kerjaBapa"] . "</td>";
    echo "<td>" . $_POST["gajiBapa"] . "</td></tr>";
    $totalPendapatan += $_POST["gajiBapa"];

    // Ibu/Penjaga
    echo "<tr><td>Ibu/Penjaga</td>";
    echo "<td>" . $_POST["namaIbu"] . "</td>";
    echo "<td>" . $_POST["kerjaIbu"] . "</td>";
    echo "<td>" . $_POST["gajiIbu"] . "</td></tr>";
    $totalPendapatan += $_POST["gajiIbu"];

    // Total Pendapatan Bersih row
    echo "<tr class='total-row'><td colspan='3'><strong>Total Pendapatan Bersih:</strong></td><td><strong>RM " . $totalPendapatan . "</strong></td></tr>";

    echo "</table>";
    echo '</div><br>';
       
   
    //bahagian 4
    echo '<section id="headsec"><h3>BAHAGIAN 4 - SEBAB-SEBAB PEMOHONAN KENAIKAN JUMLAH PEMBIAYAAN</h3></section>';
    echo '<br><br>';

    echo '<div class="form-data">';

    $selectedReasons = [];

    // Checkboxes and reasons
    $checkboxes = [
        "tanggunganRamai" => "Tanggungan Ramai",
        "pencen" => "Pencen",
        "sakit" => "Sakit",
        "cerai" => "Cerai",
        "meninggal" => "Meninggal",
        "cacat" => "Cacat",
        "berhenti" => "Berhenti",
        "silap" => "Silap",
        "lainLain" => "Lain-lain"
    ];

    // Check selected checkboxes and build the selected reasons array
    foreach ($checkboxes as $checkboxKey => $checkboxText) {
        if (isset($_POST[$checkboxKey])) {
            if ($checkboxKey === 'lainLain') {
                // If "Lain-lain" checkbox is checked, get the value from the input field
                $lainLainReason = $_POST['lainLainReason'];
                if (!empty($lainLainReason)) {
                    $selectedReasons[] = $checkboxText . ": " . $lainLainReason;
                }
            } else {
                $selectedReasons[] = $checkboxText;
            }
        }
    }

    // Display selected reasons in one line
    if (!empty($selectedReasons)) {
        echo '<p><strong>Sebab-sebab pemohonan:</strong> ' . implode(", ", $selectedReasons) . '</p><br>';
    } else {
        echo '<p><strong>Sebab-sebab pemohonan:</strong> Tiada sebab dipilih</p><br>';
    }

    ?>
    <?php
        echo '<section id="headsec"><h3>BAHAGIAN 5 - SENARAI TANGGUNGAN</h3></section>';echo '<br><br>';
        echo '<div class="form-data">';
        echo '<table>';
        echo '<tr>';
        echo '<th>BIL</th>';
        echo '<th>NAMA</th>';
        echo '<th>HUBUNGAN</th>';
        echo '<th>UMUR</th>';
        echo '<th>NAMA SEKOLAH/IPT</th>';
        echo '</tr>';

        for ($i = 1; $i <= 10; $i++) {
            $nama = isset($_POST['nama' . $i]) ? $_POST['nama' . $i] : '';
            $hubungan = isset($_POST['hubungan' . $i]) ? $_POST['hubungan' . $i] : '';
            $umur = isset($_POST['umur' . $i]) ? $_POST['umur' . $i] : '';
            $nama_sekolah_ipt = isset($_POST['nama_sekolah_ipt' . $i]) ? $_POST['nama_sekolah_ipt' . $i] : '';

            // Check if any of the fields in the row are filled in
            if ($nama !== '' || $hubungan !== '' || $umur !== '' || $nama_sekolah_ipt !== '') {
                echo '<tr>';
                echo "<td>{$i}.</td>";
                echo "<td>{$nama}</td>";
                echo "<td>{$hubungan}</td>";
                echo "<td>{$umur}</td>";
                echo "<td>{$nama_sekolah_ipt}</td>";
                echo '</tr>';
            }
        }

        echo '</table>';
        echo '</div><br>';
    ?>
        <?php 
            echo '<section id="headsec"><h3>BAHAGIAN 6 – PENGAKUAN PEMOHON</h3> </section>';echo '<br><br>';
            echo '<div class="form-data">';
        
            // Retrieve form data using isset() to handle form input data
            $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
            $signatureData = $_POST["signatureData"];
                echo '<h3>Submitted Signature:</h3>';
                echo '<img src="' . $signatureData . '" alt="User Signature">';
                
            $tarikh = isset($_POST['tarikh']) ? $_POST['tarikh'] : '';
        
            echo "<p>Saya, <b>$nama</b>, mengaku bahawa semua maklumat di atas adalah benar dan faham bahawa tindakan boleh diambil terhadap saya termasuk membatalkan pembiayaan sekiranya terdapat maklumat yang tidak benar termasuk membatalkan kelulusan permohonan ini.</p>";
            echo "<p>Tarikh: $tarikh</p>";
        
            echo '</div><br>';


    } else {
        echo "No data submitted.";
    }
?>
    </div>
</body>
</html>
