async function pelanggans() {
    const headersList = {
        "Accept": "application/json",
    }

    const response = await fetch("http://127.0.0.1:8000/api/pelanggans", {
        method: "GET",
        headers: headersList,
    });

    const data = await response.json();
}

async function getPelanggan(idPelanggan) {
    const headersList = {
        "Accept": "application/json",
    }

    const response = await fetch(`http://127.0.0.1:8000/api/pelanggans/get/${idPelanggan}`, {
        method: "GET",
        headers: headersList,
    });

    let data = await response.json();

    data = data.data;

    id_pelanggan.value = data.id_pelanggan;
    nama_pelanggan.value = data.nama_pelanggan;
    alamat.value = data.alamat;
    telepon.value = data.telepon;

    document.getElementById('tambah').disabled = true;
    document.getElementById('ubah').disabled = false;
    document.getElementById('hapus').disabled = false;
    document.getElementById('bersihkan').disabled = false;
}

async function updatePelanggan(idPelanggan) {
    const headersList = {
        "Accept": "application/json",
        "Content-Type": "application/json"
    }

    const bodyContent = JSON.stringify({
        "nama_pelanggan": nama_pelanggan.value,
        "alamat": alamat.value,
        "telepon": telepon.value,
    });

    const response = await fetch(`http://127.0.0.1:8000/api/pelanggans/update/${idPelanggan}`, {
        method: "POST",
        headers: headersList,
        body: bodyContent
    });

    let data = await response.json();

    data = data.data;

    location.reload();
}

async function deletePelanggan(idPelanggan) {
    const headersList = {
        "Accept": "application/json",
    }

    const response = await fetch(`http://127.0.0.1:8000/api/pelanggans/delete/${idPelanggan}`, {
        method: "GET",
        headers: headersList,
    });

    let data = await response.json();

    data = data.data;

    location.reload();
}