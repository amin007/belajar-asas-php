<form method="POST" action="borang_proses.php">
<table><tr><td>
		0	1	0	0		3		0		1		2		0			0	8												0	1			0			0			1
</td></tr>
<tr><td>
		NG		DB					BP						TK																NOIR			NOAIR
</td></tr>
<tr><td>
	Bahagian A (Butir-butir Ahli Isi Rumah)
	<table width="100%"><tr><td width="50%">
	<br>A1.	Nama :		{nama}:
	<br>A2.	No Kad Pengenalan :
	<br>A3.	No telefon:
	<br>A4.	Umur :	[][][]	015 - 200
	<br>A5.	Jantina :
		<ul>
		<li><input id="a5-1" type="radio" name="table[a5]" value="1">
			<label for="a5-1">1	Lelaki</label></li>
		<li><input id="a5-2" type="radio" name="table[a5]" value="2">
			<label for="a5-2">2	Perempuan</label></li>
		</ul>
	</td width="50%">
	<td>
	<ul>
	<li>A6.	Kumpulan etnik</li>
	<li><input id="a6-1" type="radio" name="table[a6]" value="1">
		<label for="a6-1">1	Bumiputera</label></li>
	<li><input id="a6-2" type="radio" name="table[a6]" value="2">
		<label for="a6-2">2 	Cina</label></li>
	<li><input id="a6-3" type="radio" name="table[a6]" value="3">
		<label for="a6-3">3	India</label></li>
	<li><input id="a6-4" type="radio" name="table[a6]" value="4">
		<label for="a6-4">4	Lain-Lain</label></li>
	<li><input id="a6-5" type="radio" name="table[a6]" value="5">
		<label for="a6-5">5	Bukan Warganegara</label></li>
	</ul>

	<ul>
	<li>A7.	Taraf Pendidikan :</li>
	<li><input id="a7-1" type="radio" name="table[a7]" value="1">
		<label for="a7-1">1	Rendah</label></li>
	<li><input id="a7-2" type="radio" name="table[a7]" value="1">
		<label for="a7-2">2	Menengah</label></li>
	<li><input id="a7-3" type="radio" name="table[a7]" value="1">
		<label for="a7-3">3	Tertiari</label></li>
	<li><input id="a7-4" type="radio" name="table[a7]" value="1">
		<label for="a7-4">4	Tiada pendidikan rasmi</label></li>
	</ul>
	</td></tr>
	<table>
</td></tr>
<tr><td>
	Bahagian B (Pekerjaan Semasa) - PERLU DIISI OLEH AHLI YANG BERUMUR 15 TAHUN KEATAS
</td></tr>
<tr><td width="50%">
	S1.	Adakah anda bekerja sekurang-kurangnya<br>
		SEJAM (Minggu Rujukan) kerana upah atau<br>
		keuntungan keluarga? (Termasuk yang bekerja sendiri).
		<ul>
		<li><input id="s1-1" type="radio" name="table[s1]" value="1">
			<label for="s1-1">1	Ya</label> => Terus ke S3 dan seterusnya</li>
		<li><input id="s1-2" type="radio" name="table[s1]" value="2">
			<label for="s1-2">2 Tidak</label></li>
		</ul>
	S2.	Walaupun anda tidak bekerja pada minggu rujukan,<br>
		adakah anda mempunyai apa-apa pekerjaan, kerja ladang,<br>
		perusahaan atau perusahaan-perusahaan keluarga lain<br>
		yang anda akan kerjakan kembali?
		<ul>
		<li><input id="s2-1" type="radio" name="table[s2]" value="1">
			<label for="s2-1">1	Ya</label> => Terus ke S6 dan seterusnya</li>
		<li><input id="s2-2" type="radio" name="table[s2]" value="2">
			<label for="s2-2">2 Tidak</label>Terus ke S7 dan seterusnya</li>
		</ul>

	S3.	Berapa jam anda bekerja pada minggu rujukan<br>
		(termasuk kerja-kerja tambahan, pekerjaan kedua, pekerjaan<br>
		ketiga dan lain-lain)?<br>
		[][][]Jika 30 jam atau lebih, terus ke S14<br><br>

	S4.	Mengapa anda bekerja kurang dari 30 jam	pada minggu rujukan?<br>
		<ul>
		<li>1	Kerja tidak mencukupi</li>
		<li>2	Memang keadaan kerja begitu</li>
		<li>3	Bersara</li>
		<li>4	Lanjut usia</li>
		<li>5	Kerja rumah/tanggungjawab keluarga/komuniti</li>
		<li>6	Cuti</li>
		<li>7	Sakit/cedera</li>
		<li>8	Keadaan cuaca</li>
		<li>9	Perintah Kawalan Pergerakan (PKP) 2.0</li>
		</ul>

	S5.	Jika bekerja kurang dari 30 jam pada minggu rujukan,<br>
		adakah anda BOLEH dan SANGGUP menerima tambahan<br>
		bilangan jam bekerja?<br>
		<ul>
		<li><input id="s5-1" type="radio" name="table[s5]" value="1">
			<label for="s5-1">1	Ya</label></li>
		<li><input id="s5-2" type="radio" name="table[s5]" value="2">
			<label for="s5-2">2 Tidak</label></li>
		<li>=> Terus ke S14 dan seterusnya</li>
		</ul>

	S6.	Mengapa anda tidak bekerja pada minggu rujukan?<br>
		<ul>
		<li>1	Sakit/cedera</li>
		<li>2	Keadaan cuaca</li>
		<li>3	Cuti</li>
		<li>4	Henti kerja sementara (pekerja bergaji)</li>
		<li>5	Bukan musim/luar musim/memang keadaan kerja begitu</li>
		<li>6	Perintah Kawalan Pergerakan (PKP) 2.0</li>
		<li>7	Henti kerja sementara (pekerja tidak bergaji)</li>
		<li>8	Kehilangan Pekerjaan ( PKP 2.0)</li>
		</ul>

		S12.	Berapa lamakah anda sudah mencari kerja?
		<ul>
		<li>1	Kurang dari 3 bulan</li>
		<li>2	3 bulan–kurang dari 6 bulan</li>
		<li>3	6 bulan–kurang dari 1 tahun</li>
		<li>4	1–3 tahun</li>
		<li>5	Lebih daripada 3 tahun</li>
		</ul>

	</td>
	<td width="50%">
		S7.	Adakah anda mencari kerja pada minggu rujukan?
		<ul>
		<li><input id="s7-1" type="radio" name="table[s7]" value="1">
			<label for="s7-1">1	Ya</label> => Terus ke S11 dan seterusnya</li>
		<li><input id="s7-2" type="radio" name="table[s7]" value="2">
			<label for="s7-2">2	Tidak</label></li>
		</ul>

		S7a. Adakah anda mencari kerja dalam masa 3 bulan yang lepas?
		<ul>
		<li><input id="s7a-1" type="radio" name="table[s7a]" value="1">
			<label for="s7a-1">1	Ya</label></li>
		<li><input id="s7a-2" type="radio" name="table[s7a]" value="2">
			<label for="s7a-2">2	Tidak</label></li>
		</ul>

		S8.	Kenapa anda tidak mencari kerja pada minggu rujukan?</li>
		<ul>
		<li>01	Bersekolah/masih belajar/program latihan</li>
		<li>02	Kerja rumah/tanggungjawab keluarga/komuniti</li>
		<li>03	Percaya tiada kerja/tiada kerja yang sesuai</li>
		<li>04	Keadaan cuaca</li>
		<li>05	Sakit/bersalin atau keguguran</li>
		<li>06	Akan memulai menjawat kerja baru</li>
		<li>07	Akan melanjutkan pelajaran</li>
		<li>08	Hilang upaya/keilatan</li>
		<li>09	Tiada minat/baru tamat belajar</li>
		<li>10	Menunggu keputusan permohonan pekerjaan/
			telah mencari kerja terdahulu dari minggu lalu</li>
		<li>11	Tiada kelayakan/kurang kemahiran</li>
		<li>12	Bersara</li>
		<li>13	Lanjut usia</li>
		</ul>

		S9.	Adakah anda ingin bekerja jika peluang pekerjaan<br>
			atau perniagaan tersedia?
		<ul>
		<li><input id="s9-1" type="radio" name="table[s9]" value="1">
			<label for="s9-1">1	Ya</label></li>
		<li><input id="s9-2" type="radio" name="table[s9]" value="2">
			<label for="s9-2">2	Tidak</label></li>
		</ul>

		S10.	Jika peluang pekerjaan atau perniagaan tersedia,<br>
			adakah anda...
		<ul>
		<li><input id="s10-1" type="radio" name="table[s10]" value="1">
			<label for="s10-1">1	Boleh mula bekerja dalam tempoh 7 hari yang lalu</label></li>
		<li><input id="s10-2" type="radio" name="table[s10]" value="2">
			<label for="s10-2">2	Boleh mula bekerja dalam tempoh dua minggu akan datang</label></li>
		<li><input id="s10-3" type="radio" name="table[s10]" value="3">
			<label for="s10-3">3	Belum bersedia untuk bekerja</label></li>
		</ul>

		S11.	Apakah langkah-langkah yang telah anda ambil untuk<br>
			mendapatkan kerja pada minggu rujukan?<br>
		<ul>
		<li>1	Jabatan Tenaga Kerja/Agensi Pekerjaan</li>
		<li>2	Menjawab iklan/mengiklan</li>
		<li>3	Menghantar surat/emel permohonan</li>
		<li>4	Beritahu sahabat/saudara mara</li>
		<li>5	Menghadiri karnival kerjaya/keusahawanan</li>
		</ul>

		S13.	Apakah anda buat pada minggu rujukan?
		<ul>
		<li>1	Masih belajar</li>
		<li>2	Baru berhenti sekolah</li>
		<li>3	Kerja rumah/tanggungjawab keluarga/komuniti</li>
		<li>4	Hilang upaya/keilatan</li>
		<li>5	Bukan musim/luar musim</li>
		<li>6	Henti kerja sementara</li>
		<li>7	Bersara</li>
		<li>8	Lanjut usia</li>
		</ul>
	</td>
</tr>
<tr><td>
	Bahagian C (Kajian kesan COVID-19/ PKP 2.0) - PERLU DIISI OLEH AHLI YANG BERUMUR 15 TAHUN KEATAS
</td></tr>
<tr><td>
	<table border=="1" width="100%">
	<tr><td width="5%" valign="top" rowspan="18">P1.</td>
	<td colspan="7">
		Jika anda bekerja/ pernah bekerja, sila nyatakan maklumat pekerjaan dalam tempoh berikut :
	</td></tr>
	<tr><td>a)</td><td colspan="6">
			<table>
			<tr><td colspan="5">Tarikh terakhir pekerjaan anda? (Jika anda telah berhenti kerja)</td></tr>
			<tr><td>[][]</td><td rowspan="2">-</td><td>[][]</td><td rowspan="2">-</td><td>[][][][]</td></tr>
			<tr><td>Hari</td><td>Bulan</td><td colspan="1">Tahun</td></tr>
			</table>
		</td></tr>
		<tr>
		<td rowspan="8" valign="top">b)</td>
		<td>i) Taraf pekerjaan</td>
		<td>ii) Pekerjaan</td><td>iii) Industri</td>
		<td>iv) Taraf pekerjaan</td>
		<td>v) Pekerjaan</td><td>vi) Industri</td>
		</tr>
		<tr><td colspan="3">Sebelum PKP 2.0</td><td colspan="3">Semasa</td></tr>
		<tr><td>
				<input type="radio" id="i1" name="table[p1b(i)]" value="1">
				<label for="i1">1	Majikan</label><br>
			</td><td>&nbsp;</td><td>&nbsp;</td>
			<td>
				<input type="radio" id="iv1" name="table[p1b(iv)]" value="1">
				<label for="iv1">1	Majikan</label><br>
			</td>
			<td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td><input type="radio" id="i2" name="table[p1b(i)]" value="2">
				<label for="i2">2	Pekerja Kerajaan</label><br>
			</td><td>&nbsp;</td><td>&nbsp;</td>
			<td><input type="radio" id="iv2" name="table[p1b(iv)]" value="2">
				<label for="iv2">2	Pekerja Kerajaan</label><br>
			</td><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td><input type="radio" id="i3" name="table[p1b(i)]" value="3">
				<label for="i3">3	Pekerja Swasta</label><br>
			</td><td>&nbsp;</td><td>&nbsp;</td>
			<td><input type="radio" id="iv3" name="table[p1b(iv)]" value="3">
				<label for="iv3">3	Pekerja Swasta</label><br>
			</td><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td><input type="radio" id="i4" name="table[p1b(i)]" value="4">
				<label for="i4">4	Bekerja Sendiri</label><br>
			</td><td>&nbsp;</td><td>&nbsp;</td>
			<td><input type="radio" id="iv4" name="table[p1b(iv)]" value="4">
				<label for="iv4">4	Bekerja Sendiri</label><br>
				</td><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td><input type="radio" id="i5" name="table[p1b(i)]" value="5">
				<label for="i5">5	Pekerja Keluarga Tanpa Gaji</label><br>
			</td><td>&nbsp;</td><td>&nbsp;</td>
			<td><input type="radio" id="iv5" name="table[p1b(iv)]" value="5">
				<label for="iv5">5	Pekerja Keluarga Tanpa Gaji</label><br>
			</td><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td><input type="radio" id="i6" name="table[p1b(i)]" value="6">
				<label for="i6">6	Perantis atau Pelatih Berbayar</label><br>
			</td><td>&nbsp;</td><td>&nbsp;</td>
			<td width="250"><input type="radio" id="iv6" name="table[p1b(iv)]" value="6">&nbsp;<label
			for="iv6">6&nbsp;Perantis&nbsp;atau&nbsp;Pelatih&nbsp;Berbayar</label><br>
			</td><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td>c)</td><td>Bilangan jam bekerja sehari</td>
			<td colspan="2">(i)		0		8</td><td>&nbsp;</td>
			<td colspan="2">(ii)</td></tr>
		<tr><td>d)</td><td>Adakah pekerjaan tersebut sesuai<br>dengan siji/kemahiran yang dimiliki ?</td>
			<td colspan="2">(i)
				<input id="p1ci-1" type="radio" name="table[p1ci]" value="1">
				<label for="p1ci-1">1	Ya</label>
				<input id="p1ci-2" type="radio" name="table[p1ci]" value="2">
				<label for="p1ci-2">2 Tidak</label>
			</td><td>&nbsp;</td>
			<td colspan="2">(ii)
				<input id="p1civ-1" type="radio" name="table[p1civ]" value="1">
				<label for="p1civ-1">1	Ya</label>
				<input id="p1civ-2" type="radio" name="table[p1civ]" value="2">
				<label for="p1civ-2">2 Tidak</label>
			</td></tr>
		<tr><td>e)</td><td>Gaji/ Upah/ Faedah (RM)</td><td colspan="2">(i)	2000</td><td>&nbsp;</td><td colspan="2">(ii)</td></tr>
	<tr><td rowspan="5" valign="top">f)</td>
			<td colspan="6">Di manakah anda menjalankan pekerjaan pada minggu rujukan? (Bagi Ahli yang bekerja - Boleh pilih lebih dari satu)</td></tr>
	<tr><td colspan="3">
			<input id="p1f-1" type="checkbox" name="table[p1f1]" value="1">
			<label for="p1f-1">1	Di tempat kediaman anda (BDR)</label>
		</td>
		<td colspan="3">
			<input id="p1f-5" type="checkbox" name="table[p1f5]" value="5">
			<label for="p1f-5">5	Tapak Pembinaan</label>
		</td></tr>
	<tr><td colspan="3">
			<input id="p1f-2" type="checkbox" name="table[p1f2]" value="2">
			<label for="p1f-2">2	Ruang bekerja di tempat kediaman anda</label>
		</td><td colspan="3">
			<input id="p1f-6" type="checkbox" name="table[p1f6]" value="6">
			<label for="p1f-6">6	Pasar/ Bazar/ Gerai</label>
		</td></tr>
	<tr><td colspan="3">
			<input id="p1f-3" type="checkbox" name="table[p1f3]" value="3">
			<label for="p1f-3">3	Kilang/ Pejabat/ Bengkel/ Kiosk</label>
		</td><td colspan="3">
			<input id="p1f-7" type="checkbox" name="table[p1f7]" value="7">
			<label for="p1f-7">7	Ladang/ Kebun / Laut (yang berkaitan pertanian)</label>
		</td></tr>
	<tr><td colspan="3">
			<input id="p1f-4" type="checkbox" name="table[p1f4]" value="4">
			<label for="p1f-4">4	Tempat kediaman majikan</label>
		</td><td colspan="3">
			<input id="p1f-8" type="checkbox" name="table[p1f8]" value="8">
			<label for="p1f-8">8	Tiada tempat yang tetap/ khusus</label>
		</td></tr>
	<tr><td width="5%" valign="top" rowspan="4" colspan="2">P2.</td>
		<td colspan="6">
			Pernahkah anda menolak tawaran kerja sebelum ini?  Jika Ya, sila nyatakan sebab anda berbuat demikian.<br>
			(Boleh pilih lebih dari satu)<br>
		</td></tr>
	<tr><td colspan="3">
			<input id="p2-1" type="checkbox" name="table[p2-1]" value="1"><label for="p2-1">1&#09;Telah mendapat pekerjaan lain</label>
		</td><td colspan="3">
			<input id="p2-4" type="checkbox" name="table[p2-4]" value="4"><label for="p2-4">4&#09;Waktu kerja / Waktu Perjalanan</label>
		</td></tr>
	<tr><td colspan="3">
			<input id="p2-2" type="checkbox" name="table[p2-2]" value="2"><label for="p2-2">2&#09;Faedah yang ditawarkan rendah</label>
		</td><td colspan="3">
			<input id="p2-5" type="checkbox" name="table[p2-5]" value="5"><label for="p2-5">5&#09;Jarak ke Tempat Kerja</label>
		</td></tr>
	<tr><td colspan="3">
			<input id="p2-3" type="checkbox" name="table[p2-3]" value="3"><label for="p2-3">3&#09;Kadar gaji tidak setaraf dengan sijil yang dimiliki</label>
		</td><td colspan="3">
			<input id="p2-6" type="checkbox" name="table[p2-6]" value="6"><label for="p2-6">6&#09;Budaya dan Fleksibiliti Tempat Kerja</label>
		</td></tr>
	<tr><td width="5%" valign="top" rowspan="5" colspan="2">P3.</td>
		<td colspan="6">Apakah kesan/ impak penularan COVID-19 (PKP 2.0) kepada anda? (Boleh pilih lebih dari satu)
		</td></tr>
	<tr><td colspan="3">1	Kehilangan Pekerjaan</td><td colspan="3">5	Peningkatan Kos Perbelanjaan Kesihatan</td></tr>
	<tr><td colspan="3">2	Hilang Sumber Pendapatan</td><td colspan="3">6	Kurang Aktiviti Sukan dan Riadah</td></tr>
	<tr><td colspan="3">3	Tutup Perniagaan/ Premis</td><td colspan="3">7	Kesukaran Pergerakan Aktivi Harian</td></tr>
	<tr><td colspan="3">4	Peningkatan Kos Perbelanjaan Makanan</td><td colspan="3">8	Kurang Aktiviti Percutian/ Pelancongan</td></tr>

	<tr><td width="5%" valign="top" colspan="2">P4.</td>
		<td colspan="6">
			Adakah anda menerima sebarang insentif/ bantuan daripada kerajaan?<br>
			<input id="p4-1" type="radio" name="table[p4]" value="1">
			<label for="p4-1">1	Ya</label><br>
			<input id="p4-2" type="radio" name="table[p4]" value="2">
			<label for="p4-2">2 Tidak</label><br>
			<!-- &#10003; --><br>
		</td></tr>

	<tr><td width="5%" valign="top" rowspan="6" colspan="2">P5.</td>
		<td colspan="6">Jika Ya, sila nyatakan pilihan berikut (Boleh pilih lebih daripada satu)</td></tr>
	<tr><td colspan="3">1	Bantuan Sara Hidup (BSH)</td><td colspan="3">6	Penangguhan bayaran pinjaman PTPTN / PTPK</td></tr>
	<tr><td colspan="3">2	Bantuan Prihatin Nasional (BPN) /e-hailing/ pemandu teksi</td><td colspan="3">7	Geran Subsidi Upah</td></tr>
	<tr><td colspan="3">3	Bantuan Khas Penjawat Awam/Pesara</td><td colspan="3">8	Pengeluaran Akaun i-Sinar /i-Lestari</td></tr>
	<tr><td colspan="3">4	Bantuan Orang Kelainan Upaya (OKU)</td><td colspan="3">9	Bantuan Khas PERMAI 2021</td></tr>
	<tr><td colspan="3">5	Moratorium pinjaman</td><td colspan="3">&nbsp;</td></tr>

	<tr><td width="5%" valign="top" colspan="2">PKP 2.0:</td>
		<td colspan="6">
			<ul>
			<li>13 Januari - 4 Februari 2021 bagi seluruh negeri Pulau Pinang, Selangor, Wilayah Persekutuan (Kuala Lumpur, Putrajaya dan Labuan), Melaka, Johor dan Sabah.</li>
			<li>16 Januari - 29 Januari 2021 bagi daerah Sibu, Selangau dan Kanowit, Sarawak.</li>
			<li>16 Januari - 4 Februari 2021 bagi negeri Kelantan.</li>
			<li>19 Januari - 1 Februari 2021 bagi daerah Seremban dan Port Dickson, Negeri Sembilan.</li>
			<li>22 Januari - 4 Februari 2021 bagi seluruh negeri Perlis, Kedah, Terengganu, Perak, Pahang, Kelantan dan Negeri Sembilan.</li>
			<li>5 Februari - 18 Februari 2021 bagi seluruh negeri kecuali Sarawak.</li>
			</ul>
		</td></tr>
	</table>
</td></tr>
</table>

<input type="submit" value="hantar">
</form>