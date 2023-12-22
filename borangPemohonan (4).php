<!DOCTYPE html>
<html lang="eng";>
    <head>
        <title>Permohonan Kenaikan Jumlah Pembiayaan Pendidikan PTPTN</title>
        <link rel="stylesheet" type="text/css" href="CSS/profil.css">

        <?php
        // define variables and set to empty values
        $namaPemohon = $emel = $noKP = $fonBimbit = $fonRumah = "";
        $alamat = $poskod = $bandar = $negeri = "";
        $alamat2 = $poskod2 = $bandar2 = $negeri2 = "";

        $namaIPT = $namaKursus = $jumTawaran = "";

        $namaBapa = $kerjaBapa = $gajiBapa = $namaIbu = $kerjaIbu = $gajiIbu = "";

        $name = $tandatangan = $tarikh = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $namaPemohon = test_input($_POST["namaPemohon"]);
            $noKP = test_input($_POST["noKP"]);
            $emel = test_input($_POST["emel"]);
            $fonBimbit = test_input($_POST["fonBimbit"]);
            $fonRumah = test_input($_POST["fonRumah"]);

            $alamat = test_input($_POST["alamat"]);
            $poskod = test_input($_POST["poskod"]);
            $bandar = test_input($_POST["bandar"]);
            $negeri = test_input($_POST["negeri"]);

            $alamat2 = test_input($_POST["alamat2"]);
            $poskod2 = test_input($_POST["poskod2"]);
            $bandar2 = test_input($_POST["bandar2"]);
            $negeri2 = test_input($_POST["negeri2"]);

            $namaIPT = test_input($_POST["namaIPT"]);
            $namaKursus = test_input($_POST["namaKursus"]);
            $jumTawaran = test_input($_POST["jumTawaran"]);

            $namaBapa = test_input($_POST["namaBapa"]);
            $kerjaBapa = test_input($_POST["kerjaBapa"]);
            $gajiBapa = test_input($_POST["gajiBapa"]);
            $namaIbu = test_input($_POST["namaIbu"]);
            $kerjaIbu = test_input($_POST["kerjaIbu"]);
            $gajiIbu = test_input($_POST["gajiIbu"]);

            $name = test_input($_POST["name"]);
            $tandatangan = test_input($_POST["tandatangan"]);
            $tarikh = test_input($_POST["tarikh"]);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <!--Validation -->
    <script>
        function validate(form) {
            var fail = "";
            fail += validateNamaPemohon(form.namaPemohon.value);
            fail += validateNoKP(form.noKP.value);
            fail += validateEmel(form.emel.value);
            fail += validateFonBimbit(form.fonBimbit.value);
            fail += validateFonRUmah(form.fonRumah.value);
            fail += validateAlamat(form.alamat.value);
            fail += validatePoskod(form.poskod.value);
            fail += validateBandar(form.bandar.value);
            fail += validateNegeri(form.negeri.value);

            //validate2
            fail += validateNamaIPT(form.namaIPT.value);
            fail += validateNamaKursus(form.namaKursus.value);
            fail += validateJumTawaran(form.jumTawaran.value);

            //validate3
            fail += validateNamaBapa(form.namaBapa.value);
            fail += validateKerjaBapa(form.kerjaBapa.value);
            fail += validateGajiBapa(form.gajiBapa.value);
            fail += validateNamaIbu(form.namaIbu.value);
            fail += validateKerjaIbu(form.kerjaIbu.value);
            fail += validateGajiIbu(form.gajiIbu.value);

            //validate4
            //fail += validateSebab(form.sebab.value);

            //validate6
            fail += validateNama(form.nama.value);
            fail += validateTandatangan(form.tandatangan.value);
            fail += validateTarikh(form.tarikh.value);


            if (fail === "") {
                document.getElementById('disp').innerHTML = ""; 
                return true;
            } else {
                document.getElementById('disp').innerHTML = fail;
                return false;
            }
        }


        //bahagian1
        function validateName(field) {
            return (field== "") ? "Nama diperlukan.<br>" : "";
        }

        function validateNoKP(field) {
            if (field == "") {
                return "No. Kad Pengenalan is diperlukan.<br>";
            } else {
                var myKadPattern = /^\d{6}-\d{2}-\d{4}$/;

                if (!myKadPattern.test(field)) {
                    return "Invalid format for No. Kad Pengenalan. Please enter a valid identification number.<br>";
                }
            }
            return "";
        }

        function validateEmel(emel) {
            if (emel == "") {
                return "No emel was entered.\n<br>";
            } else {
                var emelPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (!emelPattern.test(emel)) {
                    return "The emel address is invalid. Please enter a valid emel.\n<br>";
                }
            }
            return "";
        }

        function validateTelefonBimbit(telefon) {
            if (telefon== "") {
                return "No telefon bimbit was entered.\n<br>";
            } else {
                // Malaysian telephone number
                var telefonPattern = /^\+60\d{9,10}$/;

                if (!telefonPattern.test(telefon)) {
                    return "Invalid telefon bimbit format. Please enter a valid Malaysian phone number.\n<br>";
                }
            }
            return ""; 
        }

        function validateAlamatSuratMenyurat(field) {
            return (field== "") ? "Alamat Surat Menyurat diperlukan.<br>" : "";
        }

        function validatePoskod(poskod) {
            if (poskod == "") {
                return "Poskod diperlukan.\n<br>";
            } else {
                //  Malaysian postcode
                var postcodePattern = /^\d{5}$/;

                if (!postcodePattern.test(poskod)) {
                    return "Invalid postcode format. Please enter a 5-digit postcode.\n<br>";
                }
            }
            return ""; 
        }

        function validateBandar(field) {
            return (field == "") ? "Bandar diperlukan.<br>" : "";
        }

        function validateNegeri(field) {
            return (field== "") ? "Negeri diperlukan.<br>" : "";
        }

        //bahagian2
        function validateNamaIPT(namaIPT) {
            return (namaIPT== "") ? "Nama IPTA/IPTS/Politeknik diperlukan.\n<br>" : "";
        }

        function validateNamaKursus(namaKursus) {
            return (namaKursus== "") ? "Nama Kursus/Program diperlukan.\n<br>" : "";
        }

        function validateJumTawaran(jumTawaran) {
            var rmPattern = /^RM\s\d+(\.\d{2})?$/;

            if (jumTawaran== "") {
                return "Jumlah Pembiayaan yang Ditawarkan diperlukan.\n<br>";
            } else if (!rmPattern.test(jumTawaran)) {
                return "Please enter a valid RM currency format for Jumlah Pembiayaan yang Ditawarkan (e.g., RM 100.00).\n<br>";
            }

            return "";
        }

        //bahagian3
        function validateNamaBapa(namaBapa) {
            return (namaBapa== "") ? "Nama Bapa/Penjaga diperlukan.\n<br>" : "";
        }

        function validateKerjaBapa(kerjaBapa) {
            return (kerjaBapa== "") ? "Pekerjaan Bapa/Penjaga diperlukan.\n<br>" : "";
        }

        function validateGajiBapa(gajiBapa) {
            return (gajiBapa== "") ? "Pendapatan Bapa/Penjaga diperlukan.\n<br>" : "";
        }

        function validateNamaIbu(namaIbu) {
            return (namaIbu== "") ? "Nama Ibu/Penjaga diperlukan.\n<br>" : "";
        }

        function validateKerjaIbu(kerjaIbu) {
            return (kerjaIbu== "") ? "Pekerjaan Ibu/Penjaga diperlukan.\n<br>" : "";
        }

        function validateGajiIbu(gajiIbu) {
            return (gajiIbu== "") ? "Pendapatan Ibu/Penjaga diperlukan.\n<br>" : "";
        }

        //bahagian6
        function validateNama(nama) {
            return (nama== "") ? "Nama diperlukan.\n<br>" : "";
        }

        function validateTandatangan(tandatangan) {
            return (tandatangan== "") ? "Tandatangan diperlukan.\n<br>" : "";
        }

        function validateTarikh(tarikh) {
            return (tarikh== "") ? "Tarikh diperlukan.\n<br>": "";
        }
    </script>
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
            <h1>Permohonan Kenaikan Jumlah Pembiayaan Pendidikan PTPTN</h1>

            <form id="borangPemohonan" method="post" action="semakanPemohonan.php" onsubmit="return validate(this);">

                <!--BAHAGIAN 1 - MAKLUMAT PEMOHON -->
                <section>
                    <section id="headsec">
                        <h3>BAHAGIAN 1 - MAKLUMAT PEMOHON</h3>
                    </section><br><br>
                    Nama :  <input type="text" name="namaPemohon" required><span class="error"> *</span>
                    No. Kad Pengenalan :  <input type="text" name="noKP" required><span class="error"> *</span>
                    Alamat Emel : <input type="email" name="emel" required><span class="error"> *</span><br><br>
                    No. Telefon Bimbit : <input type="tel" name="fonBimbit" ><span class="error"> *</span>
                    No. Telefon Rumah : <input type="tel" name="fonRumah" ><br><br>
                
                    <!-- Alamat Surat Menyurat -->
                    Alamat Surat Menyurat: <span class="error">*</span><br>
                    <textarea id="alamat" rows="4" cols="50" name="alamat" required></textarea>
                    Poskod: <input type="number" name="poskod" required><span class="error">*</span>
                    Bandar: <input type="text" name="bandar" required><span class="error">*</span>
                    Negeri: <input type="text" name="negeri" required><span class="error">*</span><br><br>

                    <!-- Checkbox for auto-filling Alamat Tetap -->
                    <input type="checkbox" id="copyAddressCheckbox">
                    <label for="copyAddressCheckbox">Alamat Tetap Sama Seperti Alamat Surat Menyurat</label><br><br>

                    <!-- Alamat Tetap -->
                    Alamat Tetap: <br><textarea id="alamat2" rows="4" cols="50" name="alamat2"></textarea>
                    Poskod: <input type="number" name="poskod2">
                    Bandar: <input type="text" name="bandar2">
                    Negeri: <input type="text" name="negeri2"><br><br>

                    <script>
                        // Function to auto-fill Alamat Tetap if it matches Alamat Surat Menyurat
                        function copyAddress() {
                            var alamatSurat = document.getElementById('alamat').value;
                            var poskodSurat = document.getElementsByName('poskod')[0].value;
                            var bandarSurat = document.getElementsByName('bandar')[0].value;
                            var negeriSurat = document.getElementsByName('negeri')[0].value;

                            document.getElementById('alamat2').value = alamatSurat;
                            document.getElementsByName('poskod2')[0].value = poskodSurat;
                            document.getElementsByName('bandar2')[0].value = bandarSurat;
                            document.getElementsByName('negeri2')[0].value = negeriSurat;
                        }

                        // Add event listener to the checkbox to trigger copyAddress function
                        document.getElementById('copyAddressCheckbox').addEventListener('change', function() {
                            if (this.checked) {
                                copyAddress();
                            } else {
                                // Clear Alamat Tetap fields if checkbox is unchecked
                                document.getElementById('alamat2').value = '';
                                document.getElementsByName('poskod2')[0].value = '';
                                document.getElementsByName('bandar2')[0].value = '';
                                document.getElementsByName('negeri2')[0].value = '';
                            }
                        });

                        // Get all inputs in Alamat Surat Menyurat section
                        var inputsSurat = document.querySelectorAll('#alamat, [name="poskod"], [name="bandar"], [name="negeri"]');
                        
                        // Add event listeners to trigger copyAddress function on input change in Alamat Surat Menyurat
                        inputsSurat.forEach(function (input) {
                            input.addEventListener('input', function() {
                                // If the checkbox is checked, trigger auto-fill
                                if (document.getElementById('copyAddressCheckbox').checked) {
                                    copyAddress();
                                }
                            });
                        });
                    </script>

                </section><br><br>  

                
                <!--BAHAGIAN 2 - MAKLUMAT PEMBIAYAAN PTPTN -->
                <section>
                    <section id="headsec">
                        <h3>BAHAGIAN 2 - MAKLUMAT PEMBIAYAAN PTPTN</h3>
                    </section><br><br>
                    
                    Nama IPTA/IPTS/Politeknik :  <input type="text" name="namaIPT" required><span class="error"> *</span><br><br>
                    Name Kursus/Program :  <input type="text" name="namaKursus" required><span class="error"> *</span><br><br>
                    Jumlah Pembiayaan yang Ditawarkan : <input type="number" step="0.01" name="jumTawaran"><span class="error"> *</span><br><br>
                </section><br><br>


                <!--BAHAGIAN 3 - MAKLUMAT IBU/BAPA/PENJAGA -->
                <section>
                    <section id="headsec">
                        <h3>BAHAGIAN 3 - MAKLUMAT IBU/BAPA/PENJAGA</h3>
                    </section><br><br>
                    <table>
                    <tr>
                        <th> </th>
                        <th>NAMA</th>
                        <th>PEKERJAAN </th>
                        <th>PENDAPATAN BERSIH (RM)</th>
                    </tr>

                    <tr>
                        <td>Bapa/Penjaga</td>
                        <td><input type="text" name="namaBapa" required></td>
                        <td><input type="text" name="kerjaBapa" required></td>
                        <td><input type="text" name="gajiBapa" required></td>
                    </tr>

                    <tr>
                        <td>Ibu/Penjaga</td>
                        <td><input type="text" name="namaIbu" required></td>
                        <td><input type="text" name="kerjaIbu" required></td>
                        <td><input type="text" name="gajiIbu" required></td>
                    </tr>

                    </table>
                </section><br><br>
                

                <!--BAHAGIAN 4 - SEBAB-SEBAB PEMOHONAN KENAIKAN JUMLAH PEMBIAYAAN (sila tandakan /) -->
                <!--boleh tick lebih -->
                <section>
                    <section id="headsec">
                        <h3>BAHAGIAN 4 - SEBAB-SEBAB PEMOHONAN KENAIKAN JUMLAH PEMBIAYAAN </h3><p>(sila tandakan /)</p>
                    </section><br><br>
                    
                    <table>
                        <tr><td><input type="checkbox" name="tanggunganRamai" value="tanggunganRamai"> Tanggungan Ramai</td></tr>
                        <tr><td><input type="checkbox" name="pencen" value="pencen"> Pencen</td></tr>
                        <tr><td><input type="checkbox" name="sakit" value="sakit"> Sakit</td></tr>
                        <tr><td><input type="checkbox" name="cerai" value="cerai"> Ibu Tunggal/Bercerai</td></tr>
                        <tr><td><input type="checkbox" name="meninggal" value="meninggal"> Bapa/Penjaga Meninggal Dunia</td></tr>
                        <tr><td><input type="checkbox" name="cacat" value="cacat"> Bapa/Penjaga Cacat</td></tr>
                        <tr><td><input type="checkbox" name="berhenti" value="berhenti"> Bapa/Penjaga Diberhentikan Kerja</td></tr>
                        <tr><td><input type="checkbox" name="silap" value="silap"> Kesilapan Mengisi Maklumat Pendapatan</td></tr>
                        <tr><td><input type="checkbox" name="lainLain" value="lainLain"> Lain - Lain</td></tr>
                    </table>
                </section><br><br>
            
                    
                <!--BAHAGIAN 5 – SENARAI TANGGUNGAN (Termasuk Ibu Pemohon) -->
                <!--boleh add2 -->
                <section>
                    <section id="headsec">
                        <h3>BAHAGIAN 5 - SENARAI TANGGUNGAN </h3><p>(Termasuk Ibu Pemohon)</p>
                    </section><br><br>
                        <table>
                            <tr>
                                <th>BIL</th>
                                <th>NAMA</th>
                                <th>HUBUNGAN</th>
                                <th>UMUR</th>
                                <th>NAMA SEKOLAH/IPT</th>
                            </tr>

                            <tr>
                                <td>1.</td>
                                <td><input type="text" name="nama1"></td>
                                <td>
                                    <select name="hubungan1">
                                        <option value="">Pilih Hubungan</option>
                                        <option value="Ibu">Ibu</option>
                                        <option value="Isteri">Isteri</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Abang">Abang</option>
                                        <option value="Kakak">Kakak</option>
                                        <option value="Adik">Adik</option>
                                    </select>
                                </td>
                                <td><input type="number" name="umur1"></td>
                                <td><input type="text" name="nama_sekolah_ipt1"></td>
                            </tr>

                            <tr>
                                <td>2.</td>
                                <td><input type="text" name="nama2"></td>
                                <td>
                                    <select name="hubungan2">
                                        <option value="">Pilih Hubungan</option>
                                        <option value="Ibu">Ibu</option>
                                        <option value="Isteri">Isteri</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Abang">Abang</option>
                                        <option value="Kakak">Kakak</option>
                                        <option value="Adik">Adik</option>
                                    </select>
                                </td>
                                <td><input type="number" name="umur2"></td>
                                <td><input type="text" name="nama_sekolah_ipt2"></td>
                            </tr>

                            <tr>
                                <td>3.</td>
                                <td><input type="text" name="nama3"></td>
                                <td>
                                    <select name="hubungan3">
                                        <option value="">Pilih Hubungan</option>
                                        <option value="Ibu">Ibu</option>
                                        <option value="Isteri">Isteri</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Abang">Abang</option>
                                        <option value="Kakak">Kakak</option>
                                        <option value="Adik">Adik</option>
                                    </select>
                                </td>
                                <td><input type="number" name="umur3"></td>
                                <td><input type="text" name="nama_sekolah_ipt3"></td>
                            </tr>

                            <tr>
                                <td>4.</td>
                                <td><input type="text" name="nama4"></td>
                                <td>
                                    <select name="hubungan4">
                                        <option value="">Pilih Hubungan</option>
                                        <option value="Ibu">Ibu</option>
                                        <option value="Isteri">Isteri</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Abang">Abang</option>
                                        <option value="Kakak">Kakak</option>
                                        <option value="Adik">Adik</option>
                                    </select>
                                </td>
                                <td><input type="number" name="umur4"></td>
                                <td><input type="text" name="nama_sekolah_ipt4"></td>
                            </tr>

                            <tr>
                                <td>5.</td>
                                <td><input type="text" name="nama5"></td>
                                <td>
                                    <select name="hubungan5">
                                        <option value="">Pilih Hubungan</option>
                                        <option value="Ibu">Ibu</option>
                                        <option value="Isteri">Isteri</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Abang">Abang</option>
                                        <option value="Kakak">Kakak</option>
                                        <option value="Adik">Adik</option>
                                    </select>
                                </td>
                                <td><input type="number" name="umur5"></td>
                                <td><input type="text" name="nama_sekolah_ipt5"></td>
                            </tr>

                            <tr>
                                <td>6.</td>
                                <td><input type="text" name="nama6"></td>
                                <td>
                                    <select name="hubungan6">
                                        <option value="">Pilih Hubungan</option>
                                        <option value="Ibu">Ibu</option>
                                        <option value="Isteri">Isteri</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Abang">Abang</option>
                                        <option value="Kakak">Kakak</option>
                                        <option value="Adik">Adik</option>
                                    </select>
                                </td>
                                <td><input type="number" name="umur6"></td>
                                <td><input type="text" name="nama_sekolah_ipt6"></td>
                            </tr>

                            <tr>
                                <td>7.</td>
                                <td><input type="text" name="nama7"></td>
                                <td>
                                    <select name="hubungan7">
                                        <option value="">Pilih Hubungan</option>
                                        <option value="Ibu">Ibu</option>
                                        <option value="Isteri">Isteri</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Abang">Abang</option>
                                        <option value="Kakak">Kakak</option>
                                        <option value="Adik">Adik</option>
                                    </select>
                                </td>
                                <td><input type="number" name="umur7"></td>
                                <td><input type="text" name="nama_sekolah_ipt7"></td>
                            </tr>

                            <tr>
                                <td>8.</td>
                                <td><input type="text" name="nama8"></td>
                                <td>
                                    <select name="hubungan8">
                                        <option value="">Pilih Hubungan</option>
                                        <option value="Ibu">Ibu</option>
                                        <option value="Isteri">Isteri</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Abang">Abang</option>
                                        <option value="Kakak">Kakak</option>
                                        <option value="Adik">Adik</option>
                                    </select>
                                </td>
                                <td><input type="number" name="umur8"></td>
                                <td><input type="text" name="nama_sekolah_ipt8"></td>
                            </tr>

                            <tr>
                                <td>9.</td>
                                <td><input type="text" name="nama9"></td>
                                <td>
                                    <select name="hubungan9">
                                        <option value="">Pilih Hubungan</option>
                                        <option value="Ibu">Ibu</option>
                                        <option value="Isteri">Isteri</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Abang">Abang</option>
                                        <option value="Kakak">Kakak</option>
                                        <option value="Adik">Adik</option>
                                    </select>
                                </td>
                                <td><input type="number" name="umur9"></td>
                                <td><input type="text" name="nama_sekolah_ipt9"></td>
                            </tr>

                            <tr>
                                <td>10.</td>
                                <td><input type="text" name="nama10"></td>
                                <td>
                                    <select name="hubungan10">
                                        <option value="">Pilih Hubungan</option>
                                        <option value="Ibu">Ibu</option>
                                        <option value="Isteri">Isteri</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Abang">Abang</option>
                                        <option value="Kakak">Kakak</option>
                                        <option value="Adik">Adik</option>
                                    </select>
                                </td>
                                <td><input type="number" name="umur10"></td>
                                <td><input type="text" name="nama_sekolah_ipt10"></td>
                            </tr>

                    </table>
                </section><br><br>

                

                <!--BAHAGIAN 6 – PENGAKUAN PEMOHON -->
                <!--tandatangan-->
                <section>
                <section id="headsec">
                        <h3>BAHAGIAN 6 – PENGAKUAN PEMOHON</h3>
                    </section><br><br>
                    <p>Saya,
                        <input type="text" id="nama" name="nama" placeholder="Nama seperti di dalam Kad Pengenalan">
                        , mengaku bahawa semua maklumat di atas adalah benar dan faham bahawa tindakan boleh diambil terhadap saya termasuk membatalkan pembiayaan sekiranya terdapat maklumat yang tidak benar termasuk membatalkan kelulusan permohonan ini.
                    </p>
                    <input type="text" id="tandatangan" name="tandatangan" placeholder="Tandatangan">,
                    <label for="tarikh">Tarikh:</label>
                    <input type="date" id="tarikh" name="tarikh">
                </section><br><br>

                <button type="submit">Submit</button>

            </form>

            <!--footer-->
            <footer>
                <p>© 2023 Qistina Rosdi. All Rights Reserved</p>
            </footer>
        <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
    </div>
</html>