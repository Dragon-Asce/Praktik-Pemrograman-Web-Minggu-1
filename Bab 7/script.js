function prosesData(event) {
    event.preventDefault();

    document.getElementById('resKode').innerText = document.getElementById('kodeBarang').value;
    document.getElementById('resNama').innerText = document.getElementById('namaBarang').value;
    document.getElementById('resHarga').innerText = document.getElementById('hargaBarang').value;
    document.getElementById('resMetode').innerText = document.getElementById('metodeBayar').value;

    let radios = document.getElementsByName('jumlahBarang');
    for (let i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            document.getElementById('resJumlah').innerText = radios[i].value;
            break;
        }
    }

    // Menampilkan area hasil di bawah form
    document.getElementById('areaHasil').style.display = 'block';
}