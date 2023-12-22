<!DOCTYPE html>
<html lang="en";>
    <head>
        <title>Permohonan Kenaikan Jumlah Pembiayaan Pendidikan PTPTN</title>
        <link rel="stylesheet" type="text/css" href="style.css">

        <script>
            //Javascript codes
            // Function to display an alert with a specific message and success/error status
            function showAlert(message, isSuccess) {
                var alertType = isSuccess ? 'success' : 'error';
                alert(alertType.toUpperCase() + ': ' + message);
            }
            // Function to perform basic client-side validation
            function validateForm() {
                var namaPemohon = document.getElementById('namaPemohon').value;
                var noKP = document.getElementById('noKP').value;
                var emel = document.getElementById('emel').value;
                var fonBimbit = document.getElementById('fonBimbit').value;
                var fonRumah = document.getElementById('fonRumah').value;
                var alamat = document.getElementById('alamat').value.trim();
                var poskod = document.getElementById('poskod').value.trim();
                var bandar = document.getElementById('bandar').value.trim();
                var negeri = document.getElementById('negeri').value.trim();

                var namaIPT = document.getElementById('namaIPT').value;
                var namaKursus = document.getElementById('namaKursus').value;
                var jumTawaran = document.getElementById('jumTawaran').value;

                var namaBapa = document.getElementById('namaBapa').value;
                var kerjaBapa = document.getElementById('kerjaBapa').value;
                var gajiBapa = document.getElementById('gajiBapa').value;
                var namaIbu = document.getElementById('namaIbu').value;
                var kerjaIbu = document.getElementById('kerjaIbu').value;
                var gajiIbu = document.getElementById('gajiIbu').value;

                var nama = document.getElementById('nama').value;
                var tandatangan = document.getElementById('tandatangan').value;
                var tarikh = document.getElementById('tarikh').value;

                var fail = '';

                // Validation logic for required fields
                if (namaPemohon === '') {
                    alert('NAMA PEMOHON diperlukan');
                    return false;
                }
                if (fonBimbit === '') {
                    alert('NO. TELEFON BIMBIT diperlukan');
                    return false;
                }
                if (alamat === '' || poskod === '' || bandar === '' || negeri === '') {
                    alert('ALAMAT LENGKAP diperlukan');
                    return false; // Prevents form submission if any of the fields are empty
                }
                var phonePattern = /^\+60\d{9,10}$/;
                if ((!fonBimbit.match(phonePattern) ) || (!fonRumah.match(phonePattern) )) {
                    alert('NO. TELEFON tidak sah');
                    return false;
                }
                var myKadPattern = /^\d{6}-\d{2}-\d{4}$/;
                if (!noKP.match(myKadPattern)) {
                    alert('NO. KAD PENGENALAN tidak sah');
                    return false;
                }
                if (namaIPT === '') {
                    alert('NAMA IPT diperlukan');
                    return false;
                }
                if (namaKursus === '') {
                    alert('NAMA KURSUS diperlukan');
                    return false;
                }
                if (jumTawaran === '') {
                    alert('JUMLAH YANG DITAWARKAN diperlukan');
                    return false;
                }
                if (namaBapa === '' || kerjaBapa === '' || gajiBapa === '') {
                    alert('Sila lengkapkan Maklumat Bapa/Penjaga.');
                    return false;
                }

                // Validate fields for Ibu/Penjaga
                if (namaIbu === '' || kerjaIbu === '' || gajiIbu === '') {
                    alert('Sila lengkapkan Maklumat Ibu/Penjaga.');
                    return false;
                }
                if (nama === '') {
                    alert('NAMA diperlukan');
                    return false;
                }
                if (tandatangan === '') {
                    alert('TANDATANGAN diperlukan');
                    return false;
                }
                if (tarikh === '') {
                    alert('TARIKH diperlukan');
                    return false;
                }
                return true;
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

            <form id="borangPemohonan" method="post" action="semakanPemohonan.php" onsubmit="return validateForm();">

                <!--BAHAGIAN 1 - MAKLUMAT PEMOHON -->
                <section>
                    <section id="headsec">
                        <h3>BAHAGIAN 1 - MAKLUMAT PEMOHON</h3>
                    </section><br><br>
                    Nama :  <input type="text" name="namaPemohon" id="namaPemohon"><span class="error"> *</span>
                    No. Kad Pengenalan :  <input type="text" name="noKP" id="noKP" ><span class="error"> *</span>
                    Alamat Emel : <input type="email" name="emel" id="emel"><span class="error"> *</span><br><br>
                    No. Telefon Bimbit : <input type="tel" name="fonBimbit" id="fonBimbit" ><span class="error"> *</span>
                    No. Telefon Rumah : <input type="tel" name="fonRumah"  id="fonRumah"><br><br>
                
                    <!-- Alamat Surat Menyurat -->
                    Alamat Surat Menyurat: <span class="error">*</span><br>
                    <textarea id="alamat" rows="4" cols="50" name="alamat" id="alamat"></textarea>
                    Poskod: <input type="number" name="poskod" id="poskod"><span class="error">*</span>
                    Bandar: <input type="text" name="bandar" id="bandar"><span class="error">*</span>
                    Negeri: <input type="text" name="negeri" id="negeri"><span class="error">*</span><br><br>

                    <!-- Checkbox for auto-filling Alamat Tetap -->
                    <input type="checkbox" id="copyAddressCheckbox">
                    <label for="copyAddressCheckbox">Alamat Tetap Sama Seperti Alamat Surat Menyurat</label><br><br>

                    <!-- Alamat Tetap -->
                    Alamat Tetap: <br><textarea id="alamat2" rows="4" cols="50" name="alamat2" id="alamat2"></textarea>
                    Poskod: <input type="number" name="poskod2" id="poskod2">
                    Bandar: <input type="text" name="bandar2" id="bandar2">
                    Negeri: <input type="text" name="negeri2" id="negeri2"><br><br>

                    <script>
                        // Function to auto-fill Alamat Tetap if it matches Alamat Surat Menyurat
                        function copyAddress() {
                            var alamatSurat = document.getElementById('alamat').value;
                            var poskodSurat = document.getElementById('poskod').value;
                            var bandarSurat = document.getElementById('bandar').value;
                            var negeriSurat = document.getElementById('negeri').value;

                            document.getElementById('alamat2').value = alamatSurat;
                            document.getElementById('poskod2').value = poskodSurat;
                            document.getElementById('bandar2').value = bandarSurat;
                            document.getElementById('negeri2').value = negeriSurat;
                        }

                        // Add event listener to the checkbox to trigger copyAddress function
                        document.getElementById('copyAddressCheckbox').addEventListener('change', function() {
                            if (this.checked) {
                                copyAddress();
                            } else {
                                // Clear Alamat Tetap fields if checkbox is unchecked
                                document.getElementById('alamat2').value = '';
                                document.getElementById('poskod2').value = '';
                                document.getElementById('bandar2').value = '';
                                document.getElementById('negeri2').value = '';
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
                    
                    Nama IPTA/IPTS/Politeknik :  <input type="text" name="namaIPT" id="namaIPT"><span class="error"> *</span><br><br>
                    Name Kursus/Program :  <input type="text" name="namaKursus" id="namaKursus"><span class="error"> *</span><br><br>
                    Jumlah Pembiayaan yang Ditawarkan : <input type="number" step="0.01" name="jumTawaran" id="jumTawaran"><span class="error"> *</span><br><br>
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
                        <td><input type="text" name="namaBapa" id="namaBapa"></td>
                        <td><input type="text" name="kerjaBapa" id="kerjaBapa"></td>
                        <td><input type="text" name="gajiBapa" id="gajiBapa"></td>
                    </tr>

                    <tr>
                        <td>Ibu/Penjaga</td>
                        <td><input type="text" name="namaIbu" id="namaIbu"></td>
                        <td><input type="text" name="kerjaIbu" id="kerjaIbu"></td>
                        <td><input type="text" name="gajiIbu" id="gajiIbu"></td>
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
                        <tr><td><input type="checkbox" name="lainLain" id="lainLain" value="lainLain"> Lain - Lain</td></tr>
                    </table>
                    <div id="lainLainReason" style="display: none;">
                        Sebab lain: <input type="text" name="lainLainReason" id="lainLainReasonInput">
                    </div>
                    <script>
                        // Add an event listener to the "Lain - Lain" checkbox
                        var lainLainCheckbox = document.querySelector('input[name="lainLain"]');
                        var lainLainReasonDiv = document.getElementById('lainLainReason');

                        lainLainCheckbox.addEventListener('change', function() {
                            if (this.checked) {
                                lainLainReasonDiv.style.display = 'block'; // Show the input field if checkbox is checked
                            } else {
                                lainLainReasonDiv.style.display = 'none'; // Hide the input field if checkbox is unchecked
                            }
                        });
                    </script>
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

                    <canvas id="signatureCanvas" width="400" height="200"></canvas><br>
                    <button onclick="resetSignature()">Reset</button>
                    <input type="hidden" name="signatureData" id="signatureData" />
                    <input type="submit" value="Submit Signature">
                    

                    <label for="tarikh">Tarikh:</label>
                    <input type="date" id="tarikh" name="tarikh">

                    <div id="signatureDisplay"></div>

                    <script>
                        let canvas = document.getElementById('signatureCanvas');
                        let ctx = canvas.getContext('2d');
                        let isDrawing = false;

                        canvas.addEventListener('mousedown', (e) => {
                        isDrawing = true;
                        ctx.beginPath();
                        ctx.moveTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);
                        });

                        canvas.addEventListener('mousemove', (e) => {
                        if (isDrawing) {
                            ctx.lineTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);
                            ctx.stroke();
                        }
                        });

                        canvas.addEventListener('mouseup', () => {
                        isDrawing = false;
                        updateSignatureData();
                        });

                        function resetSignature() {
                        ctx.clearRect(0, 0, canvas.width, canvas.height);
                        updateSignatureData();
                        }

                        function updateSignatureData() {
                        let signatureData = canvas.toDataURL();
                        document.getElementById('signatureData').value = signatureData;

                        // Display signature on the page
                        document.getElementById('signatureDisplay').innerHTML = '<img src="' + signatureData + '" alt="User Signature">';
                        }
                    </script>

                </section><br><br>

                <button type="submit">Submit</button>

            </form>

            <!--footer-->
            <footer>
                <p>© 2023 Qistina Rosdi. All Rights Reserved</p>
            </footer>
        </body>
    </div>
</html>