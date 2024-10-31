async function getPelanggan(idPelanggan) {
    try {
        let pelanggan = await fetch(`http://127.0.0.1:8000/api/pelanggan/get/${idPelanggan}`);

        if (!pelanggan.ok) {
            throw new Error("Terjadi kesalahan saat mengambil data");
        }

        pelanggan = await pelanggan.json();

        id_pelanggan.value = pelanggan.id_pelanggan;
        nama_pelanggan.value = pelanggan.nama_pelanggan;
        alamat.value = pelanggan.alamat;
        telepon.value = pelanggan.telepon;
    } catch (error) {
        console.error(error);
    }
}

async function deletePelanggan(idPelanggan) {
    try {
        let pelanggan = await fetch(`http://127.0.0.1:8000/api/pelanggan/delete/${idPelanggan}`);

        if (!pelanggan.ok) {
            throw new Error("Terjadi kesalahan saat mengambil data");
        }

        pelanggan = await pelanggan.json();

        location.reload();
    } catch (error) {
        console.error(error);
    }
}

async function updatePelanggan(idPelanggan) {
    try {
        let pelanggan = await fetch(`http://127.0.0.1:8000/api/pelanggan/update/${idPelanggan}`, {
            body: JSON.stringify({
                
            })
        });

        if (!pelanggan.ok) {
            throw new Error("Terjadi kesalahan saat mengambil data");
        }

        pelanggan = await pelanggan.json();

        location.reload();
    } catch (error) {
        console.error(error);
    }
}