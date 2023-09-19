<?php

class Buku extends DB
{
    function getBuku()
    {
        $query = "SELECT * FROM buku";
        return $this->execute($query);
    }

    function add($data)
    {
        $judul = $data['tjudul'];
        $penerbit = $data['tpenerbit'];
        $deskripsi = $data['tdeskripsi'];
        $author = $data['tauthor'];
        $status = '-';

        $query = "insert into buku values ('', '$judul', '$penerbit', '$deskripsi', '-', $author)";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "delete FROM buku WHERE id_buku = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function statusAuthor($id)
    {

        $status = "Senior";
        $query = "update buku set status = 'Best Seller' where id_buku = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}


?>