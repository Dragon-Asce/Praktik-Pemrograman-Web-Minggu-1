// 1. Logika Tombol Cari/Tebak
function cariBarang() {
    let kode = document.getElementById("kodeBarang").value.toUpperCase();
    let nama = "";
    let harga = 0;

    switch(kode) {
        case "A001":
            nama = "Televisi Samsung 50\"";
            harga = 5000000;
            break;
        case "A002":
            nama = "VCD Player Sony";
            harga = 750000;
            break;
        case "A003":
            nama = "Mini Compo";
            harga = 2300000;
            break;
        default:
            alert("Kode barang tidak ditemukan! Masukkan A001, A002, atau A003.");
            return;
    }

    document.getElementById("namaBarang").value = nama;
    document.getElementById("hargaBarang").value = harga;
}

function hitung() {
    let harga = parseFloat(document.getElementById("hargaBarang").value) || 0;
    let jumlah = parseInt(document.getElementById("jumlahBarang").value) || 0;
    
    if (harga === 0 || jumlah === 0 || jumlah < 0) {
        alert("Pastikan barang sudah dicari dan jumlah sudah diisi dengan benar!");
        return;
    }

    let totalHarga = harga * jumlah;
    
    let diskon = 0;
    if (jumlah > 10) {
        diskon = 0.12 * harga;
    }

    let totalBayar = totalHarga - diskon;

    document.getElementById("totalHarga").value = totalHarga;
    document.getElementById("diskon").value = diskon;
    document.getElementById("totalBayar").value = totalBayar;
}

// 3. Logika Tombol Cetak
function cetak() {
    window.print();
}