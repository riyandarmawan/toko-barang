async function barangs() {
    const headersList = {
        "Accept": "application/json",
    }

    const response = await fetch("http://127.0.0.1:8000/api/barangs", {
        method: "GET",
        headers: headersList,
    });

    const data = await response.json();
}

async function getBarang(idBarang) {
    const headersList = {
        "Accept": "application/json",
    }

    const response = await fetch(`http://127.0.0.1:8000/api/barangs/get/${idBarang}`, {
        method: "GET",
        headers: headersList,
    });

    let data = await response.json();

    data = data.data;

    id_barang.value = data.id_barang;
    nama_barang.value = data.nama_barang;
    harga.value = data.harga;
    stok.value = data.stok;

    document.getElementById('tambah').disabled = true;
    document.getElementById('ubah').disabled = false;
    document.getElementById('hapus').disabled = false;
    document.getElementById('bersihkan').disabled = false;
}

async function updateBarang(idBarang) {
    const headersList = {
        "Accept": "application/json",
        "Content-Type": "application/json"
    }

    const bodyContent = JSON.stringify({
        "nama_barang": nama_barang.value,
        "harga": harga.value,
        "stok": stok.value,
    });

    const response = await fetch(`http://127.0.0.1:8000/api/barangs/update/${idBarang}`, {
        method: "POST",
        headers: headersList,
        body: bodyContent
    });

    let data = await response.json();

    data = data.data;

    location.reload();
}

async function deleteBarang(idBarang) {
    const headersList = {
        "Accept": "application/json",
    }

    const response = await fetch(`http://127.0.0.1:8000/api/barangs/delete/${idBarang}`, {
        method: "GET",
        headers: headersList,
    });

    let data = await response.json();

    data = data.data;

    location.reload();
}