<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Http\UploadedFile;

return function (App $app) {
$container = $app->getContainer();

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~UTS SILK~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

//Nama  : Andreas Widya Mahendra
//Nim   : 72180195

//Get Pasien
/*$app->get("/api/pasien", function (Request $request, Response $response){
    $sql = "SELECT * FROM pasien_uts";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $response->withJson(["status" => "success", "data" => $result], 200);
});

//Create Pasien
$app->post("/api/pasien/", function (Request $request, Response $response){

    $pasien = $request->getParsedBody();

    $sql = "INSERT INTO pasien_uts (nama,tipe_pasien,alamat) 
            VALUE (:nama,:tipe_pasien,:alamat)";
    $stmt = $this->db->prepare($sql);

    $data = [
        ":nama" => $pasien["nama"],
        ":tipe_pasien" => $pasien["tipe_pasien"],
        ":alamat" => $pasien["alamat"],
    ]; 

    if($stmt->execute($data))
        return $response->withJson(["status" => "Pasien created successfully.", "data" => "1"], 200);
    
    return $response->withJson(["status" => "failed", "data" => "0"], 200);
});

//Update Pasien
$app->post("/api/pasien/1", function (Request $request, Response $response){

    $pasien = $request->getParsedBody();
    $sql = "UPDATE pasien_uts SET no_rm=:no_rm, nama=:nama, tipe_pasien=:tipe_pasien, alamat=:alamat";
    $stmt = $this->db->prepare($sql);

    $data = [
        ":no_rm" => $pasien["no_rm"],
        ":nama" => $pasien["nama"],
        ":tipe_pasien" => $pasien["tipe_pasien"],
        ":alamat" => $pasien["alamat"],
    ];

    if($stmt->execute($data))
        return $response->withJson(["status" => "Pasien updated successfully."], 200);
    
    return $response->withJson(["status" => "failed"], 200);
});

//Delete Pasien
$app->post("/api/pasien/delete/1", function (Request $request, Response $response){

    $pasien = $request->getParsedBody();

    $sql = "DELETE FROM pasien_uts WHERE no_rm=:no_rm";
    $stmt = $this->db->prepare($sql);

    $data = [
        ":no_rm" => $pasien["no_rm"],
    ];

    if($stmt->execute($data))
        return $response->withJson(["status" => "Pasien deleted successfully"], 200);
    
    return $response->withJson(["status" => "failed"], 200);
});

//Get Dokter
$app->get("/api/dokter", function (Request $request, Response $response){
    $sql = "SELECT * FROM dokter_uts";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $response->withJson(["status" => "success", "data" => $result], 200);
});

//Create Dokter
$app->post("/api/dokter/", function (Request $request, Response $response){

    $dokter = $request->getParsedBody();

    $sql = "INSERT INTO dokter_uts (nama,spesialis,alamat) 
            VALUE (:nama,:spesialis,:alamat)";
    $stmt = $this->db->prepare($sql);

    $data = [
        ":nama" => $dokter["nama"],
        ":spesialis" => $dokter["spesialis"],
        ":alamat" => $dokter["alamat"],
    ]; 

    if($stmt->execute($data))
        return $response->withJson(["status" => "Dokter created successfully.", "data" => "1"], 200);
    
    return $response->withJson(["status" => "failed", "data" => "0"], 200);
});

//Update Dokter
$app->post("/api/dokter/1", function (Request $request, Response $response){

    $dokter = $request->getParsedBody();
    $sql = "UPDATE dokter_uts SET id_dokter=:id_dokter, nama=:nama, spesialis=:spesialis, alamat=:alamat";
    $stmt = $this->db->prepare($sql);

    $data = [
        ":id_dokter" => $dokter["id_dokter"],
        ":nama" => $dokter["nama"],
        ":spesialis" => $dokter["spesialis"],
        ":alamat" => $dokter["alamat"],
    ];

    if($stmt->execute($data))
        return $response->withJson(["status" => "Dokter updated successfully."], 200);
    
    return $response->withJson(["status" => "failed"], 200);
});

//Delete Dokter
$app->post("/api/dokter/delete/1", function (Request $request, Response $response){

    $dokter = $request->getParsedBody();

    $sql = "DELETE FROM dokter_uts WHERE id_dokter=:id_dokter";
    $stmt = $this->db->prepare($sql);

    $data = [
        ":id_dokter" => $dokter["id_dokter"],
    ];

    if($stmt->execute($data))
        return $response->withJson(["status" => "Dokter deleted successfully"], 200);
    
    return $response->withJson(["status" => "failed"], 200);
});*/

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Selesai UTS~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~




//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~SILK2021~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
$app->post("/pasien/", function (Request $request, Response $response){

    $pasien = $request->getParsedBody();

    $sql = "INSERT INTO pasien (nik,nama_lengkap,tgl_lahir,jns_kelamin,
            alamat,kelurahan,kabupaten,provinsi,warga_negara,status_nikah,no_telp,tgl_daftar) 
            VALUE (:nik,:nama_lengkap,:tgl_lahir,:jns_kelamin,
            :alamat,:kelurahan,:kabupaten,:provinsi,:warga_negara,:status_nikah,:no_telp,:tgl_daftar)";
    $stmt = $this->db->prepare($sql);

    $data = [
        ":nik" => $pasien["nik"],
        ":nama_lengkap" => $pasien["nama_lengkap"],
        ":tgl_lahir" => $pasien["tgl_lahir"],
        ":jns_kelamin" => $pasien["jns_kelamin"],
        ":alamat" => $pasien["alamat"],
        ":kelurahan" => $pasien["kelurahan"],
        ":kabupaten" => $pasien["kabupaten"],
        ":provinsi" => $pasien["provinsi"],
        ":warga_negara" => $pasien["warga_negara"],
        ":status_nikah" => $pasien["status_nikah"],
        ":no_telp" => $pasien["no_telp"],
        ":tgl_daftar" => date("Y-m-d"),
    ]; 

    if($stmt->execute($data))
        return $response->withJson(["status" => "success", "data" => "1"], 200);
    
    return $response->withJson(["status" => "failed", "data" => "0"], 200);
});

//Obat Create
$app->post("/obat/", function (Request $request, Response $response){

    $obat = $request->getParsedBody();

    $sql = "INSERT INTO obat (kode_obat,nama_obat,jenis_obat,satuan,stok,harga) 
            VALUE (:kode_obat,:nama_obat,:jenis_obat,:satuan,:stok,:harga)";
    $stmt = $this->db->prepare($sql);

    $data = [
        ":kode_obat" => $obat["kode_obat"],
        ":nama_obat" => $obat["nama_obat"],
        ":jenis_obat" => $obat["jenis_obat"],
        ":satuan" => $obat["satuan"],
        ":stok" => $obat["stok"],
        ":harga" => $obat["harga"],
    ]; 

    if($stmt->execute($data))
        return $response->withJson(["status" => "success", "data" => "1"], 200);
    
    return $response->withJson(["status" => "failed", "data" => "0"], 200);
});


//Obat Read
$app->get("/obat/", function (Request $request, Response $response){
    $sql = "SELECT * FROM obat";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $response->withJson(["status" => "success", "data" => $result], 200);
});

//Obat Update
$app->put("/obat/update/{id}", function (Request $request, Response $response, $args){
    $obat = $args["id"];
    $obat = $request->getParsedBody();
    $sql = "UPDATE obat SET kode_obat=:kode_obat, nama_obat=:nama_obat, jenis_obat=:jenis_obat, satuan=:satuan, stok=:stok,
            harga=:harga WHERE kode_obat=:kode_obat";
    $stmt = $this->db->prepare($sql);
    
    $data = [
        ":kode_obat" => $obat["kode_obat"],
        ":nama_obat" => $obat["nama_obat"],
        ":jenis_obat" => $obat["jenis_obat"],
        ":satuan" => $obat["satuan"],
        ":stok" => $obat["stok"],
        ":harga" => $obat["harga"],
    ];

    if($stmt->execute($data))
        return $response->withJson(["status" => "success", "data" => "1"], 200);
    
    return $response->withJson(["status" => "failed", "data" => "0"], 200);
});

//Obat Delete
$app->delete("/obat/delete/{id}", function (Request $request, Response $response, $args){
    $id = $args["id"];
    $sql = "DELETE FROM obat WHERE kode_obat=:kode_obat";
    $stmt = $this->db->prepare($sql);
    
    $data = [
        ":kode_obat" => $id
    ];

    if($stmt->execute($data))
        return $response->withJson(["status" => "success", "data" => "1"], 200);
    
    return $response->withJson(["status" => "failed", "data" => "0"], 200);
});

//Resep Create
$app->post("/resep/", function (Request $request, Response $response){

    $resep = $request->getParsedBody();

    $sql = "INSERT INTO resep (id_dokter,no_rm,tgl_transaksi,total_harga) 
            VALUE (:id_dokter,:no_rm,:tgl_transaksi,:total_harga)";
    $stmt = $this->db->prepare($sql);

    $data = [
        ":id_dokter" => $resep["id_dokter"],
        ":no_rm" => $resep["no_rm"],
        ":tgl_transaksi" => date("Y-m-d"),
        ":total_harga" => $resep["total_harga"],
    ]; 

    if($stmt->execute($data))
        return $response->withJson(["status" => "success", "data" => "1"], 200);
    
    return $response->withJson(["status" => "failed", "data" => "0"], 200);
});

//Resep Read
$app->get("/resep/", function (Request $request, Response $response){
    $sql = "SELECT * FROM resep";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $response->withJson(["status" => "success", "data" => $result], 200);
});

//Resep Update
$app->put("/resep/update/{id}", function (Request $request, Response $response, $args){
    $resep = $args["id"];
    $resep = $request->getParsedBody();
    $sql = "UPDATE resep SET id_resep=:id_resep, id_dokter=:id_dokter, no_rm=:no_rm, tgl_transaksi=:tgl_transaksi, total_harga=:total_harga
            WHERE id_resep=:id_resep";
    $stmt = $this->db->prepare($sql);
    
    $data = [
        ":id_resep" => $resep["id_resep"],
        ":id_dokter" => $resep["id_dokter"],
        ":no_rm" => $resep["no_rm"],
        ":tgl_transaksi" => date("Y-m-d"),
        ":total_harga" => $resep["total_harga"],
    ];

    if($stmt->execute($data))
        return $response->withJson(["status" => "success", "data" => "1"], 200);
    
    return $response->withJson(["status" => "failed", "data" => "0"], 200);
});

//Resep Delete
$app->delete("/resep/delete/{id}", function (Request $request, Response $response, $args){
    $id = $args["id"];
    $sql = "DELETE FROM resep WHERE id_resep=:id_resep";
    $stmt = $this->db->prepare($sql);
    
    $data = [
        ":id_resep" => $id
    ];

    if($stmt->execute($data))
        return $response->withJson(["status" => "success", "data" => "1"], 200);
    
    return $response->withJson(["status" => "failed", "data" => "0"], 200);
});

//Create Detil Resep
$app->post("/detil_resep/", function (Request $request, Response $response){

    $detil_resep = $request->getParsedBody();

    $sql = "INSERT INTO detil_resep (id_resep,kode_obat,harga,jumlah_beli) 
            VALUE (:id_resep,:kode_obat,:harga,:jumlah_beli)";
    $stmt = $this->db->prepare($sql);

    $data = [
        ":id_resep" => $detil_resep["id_resep"],
        ":kode_obat" => $detil_resep["kode_obat"],
        ":harga" => $detil_resep["harga"],
        ":jumlah_beli" => $detil_resep["jumlah_beli"],
    ]; 

    if($stmt->execute($data))
        return $response->withJson(["status" => "success", "data" => "1"], 200);
    
    return $response->withJson(["status" => "failed", "data" => "0"], 200);
});

//Read Detil Resep
$app->get("/detil_resep/", function (Request $request, Response $response){
    $sql = "SELECT * FROM detil_resep";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $response->withJson(["status" => "success", "data" => $result], 200);
});

//Update Detil Resep
$app->put("/detil_resep/update/{id}", function (Request $request, Response $response, $args){
    $detil_resep = $args["id"];
    $detil_resep = $request->getParsedBody();
    $sql = "UPDATE resep SET id_detil_resep=:id_detil_resep, id_resep=:id_resep, kode_obat=:kode_obat, harga=:harga,jumlah_beli=:jumlah_beli
            WHERE id_detil_resep=:id_detil_resep";
    $stmt = $this->db->prepare($sql);
    
    $data = [
        ":id_detil_resep" => $detil_resep["id_detil_resep"],
        ":id_resep" => $detil_resep["id_resep"],
        ":kode_obat" => $detil_resep["kode_obat"],
        ":harga" => $detil_resep["harga"],
        ":jumlah_beli" => $detil_resep["jumlah_beli"],
    ];

    if($stmt->execute($data))
        return $response->withJson(["status" => "success", "data" => "1"], 200);
    
    return $response->withJson(["status" => "failed", "data" => "0"], 200);
});

//Delete Detil Resep

$app->delete("/detil_resep/delete/{id}", function (Request $request, Response $response, $args){
    $id = $args["id"];
    $sql = "DELETE FROM detil_resep WHERE id_detil_resep=:id_detil_resep";
    $stmt = $this->db->prepare($sql);
    
    $data = [
        ":id_detil_resep" => $id
    ];

    if($stmt->execute($data))
        return $response->withJson(["status" => "success", "data" => "1"], 200);
    
    return $response->withJson(["status" => "failed", "data" => "0"], 200);
});

//
$app->put("/obat/{id}", function (Request $request, Response $response, $args){
    $kode_obat = $args["id"];
    $obat = $request->getParsedBody();
    $sql = "UPDATE obat SET kode_obat=:kode_obat, nama_obat=:nama_obat, jenis_obat=:jenis_obat, 
            satuan=:satuan, stok=:stok, harga=:harga 
            WHERE kode_obat=:kode_obat";
    $stmt = $this->db->prepare($sql);
    
    $data = [
        ":kode_obat" => $obat["kode_obat"],
        ":nama_obat" => $obat["nama_obat"],
        ":jenis_obat" => $obat["jenis_obat"],
        ":satuan" => $obat["satuan"],
        ":stok" => $obat["stok"],
        ":harga" => $obat["harga"],
    ];

    if($stmt->execute($data))
        return $response->withJson(["status" => "success", "data" => "1"], 200);
    
    return $response->withJson(["status" => "failed", "data" => "0"], 200);
});


$app->put("/resep/{id}", function (Request $request, Response $response, $args){
    $id_resep = $args["id"];
    $resep = $request->getParsedBody();
    $sql = "UPDATE resep SET kode_obat=:kode_obat, nama_obat=:nama_obat, jenis_obat=:jenis_obat, 
            satuan=:satuan, stok=:stok, harga=:harga 
            WHERE kode_obat=:kode_obat";
    $stmt = $this->db->prepare($sql);
    
    $data = [
        ":kode_obat" => $obat["kode_obat"],
        ":nama_obat" => $obat["nama_obat"],
        ":jenis_obat" => $obat["jenis_obat"],
        ":satuan" => $obat["satuan"],
        ":stok" => $obat["stok"],
        ":harga" => $obat["harga"],
    ];

    if($stmt->execute($data))
        return $response->withJson(["status" => "success", "data" => "1"], 200);
    
    return $response->withJson(["status" => "failed", "data" => "0"], 200);
});

// $app->post("/obat/delete", function (Request $request, Response $response){

//         $obat = $request->getParsedBody();
    
//         $sql = "DELETE FROM obat WHERE kode_obat = :kode_obat";
//         $stmt = $this->db->prepare($sql);
    
//         $data = [
//             ":v" => $obat["kode_obat"]
//         ];
    
//         if($stmt->execute($data))
//             return $response->withJson(["status" => "success"], 200);
        
//         return $response->withJson(["status" => "failed"], 200);
//     });

// $app->delete("/obat/delete", function (Request $request, Response $response, $args){
//     //$obat = $args["kode_obat"];
//     $sql = "DELETE FROM obat WHERE kode_obat=:kode_obat";
//     $stmt = $this->db->prepare($sql);
    
//     $data = [
//         ":kode_obat" => $kode_obat
//     ];

//     if($stmt->execute($data))
//         return $response->withJson(["status" => "success", "data" => "1"], 200);
    
//     return $response->withJson(["status" => "failed", "data" => "0"], 200);
// });


//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~END SILK2021~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// $app->get('/[{name}]', function (Request $request, Response $response, array $args) use ($container) {
//     // Sample log message
//     $container->get('logger')->info("Slim-Skeleton '/' route");

//     // Render index view 
//     return $container->get('renderer')->render($response, 'index.phtml', $args);
// });

// $app->get('/about/', function (Request $request, Response $response, array $args) {
//     // kirim pesan ke log
//     $this->logger->info("ada orang yang mengakses '/about/'");

//     // tampilkan pesan
//     echo "ini adalah halaman about!";
    
// });

// $app->get("/buah/", function (Request $request, Response $response){
//     $sql = "SELECT * FROM products";
//     $stmt = $this->db->prepare($sql);
//     $stmt->execute();
//     $result = $stmt->fetchAll();
//     return $response->withJson(["status" => "success", "data" => $result], 200);
// });

// $app->get("/buah/{id}", function (Request $request, Response $response, $args){
//     $product_id = $args["id"];
//     $sql = "SELECT * FROM products WHERE product_id=:product_id";
//     $stmt = $this->db->prepare($sql);
//     $stmt->execute([":product_id" => $product_id]);
//     $result = $stmt->fetch();
//     return $response->withJson(["status" => "success", "data" => $result], 200);
// });

// $app->get("/buah/search/", function (Request $request, Response $response, $args){
//     $keyword = $request->getQueryParam("keyword");
//     $sql = "SELECT * FROM products WHERE name LIKE '%$keyword%'";
//     $stmt = $this->db->prepare($sql);
//     $stmt->execute();
//     $result = $stmt->fetchAll();
//     return $response->withJson(["status" => "success", "data" => $result], 200);
// });

// $app->post("/buah/", function (Request $request, Response $response){

//     $new_buah = $request->getParsedBody();

//     $sql = "INSERT INTO products (product_id, name, price, image, description) VALUE (:product_id, :name, :price, :image, :description)";
//     $stmt = $this->db->prepare($sql);

//     $data = [
//         ":product_id" => uniqid(),
//         ":name" => $new_buah["name"],
//         ":price" => $new_buah["price"],
//         ":image" => $new_buah["image"],
//         ":description" => $new_buah["description"]
//     ];

//     if($stmt->execute($data))
//         return $response->withJson(["status" => "success", "data" => "1"], 200);
    
//     return $response->withJson(["status" => "failed", "data" => "0"], 200);
// });


// $app->put("/buah/{id}", function (Request $request, Response $response, $args){
//     $product_id = $args["id"];
//     $new_buah = $request->getParsedBody();
//     $sql = "UPDATE products SET name=:name, price=:price, image=:image, description=:description WHERE product_id=:product_id";
//     $stmt = $this->db->prepare($sql);
    
//     $data = [
//         ":product_id" => $product_id,
//         ":name" => $new_buah["name"],
//         ":price" => $new_buah["price"],
//         ":image" => $new_buah["image"],
//         ":description" => $new_buah["description"]
//     ];

//     if($stmt->execute($data))
//         return $response->withJson(["status" => "success", "data" => "1"], 200);
    
//     return $response->withJson(["status" => "failed", "data" => "0"], 200);
// });


// $app->delete("/buah/{id}", function (Request $request, Response $response, $args){
//     $id = $args["id"];
//     $sql = "DELETE FROM products WHERE product_id=:product_id";
//     $stmt = $this->db->prepare($sql);
    
//     $data = [
//         ":product_id" => $id
//     ];

//     if($stmt->execute($data))
//         return $response->withJson(["status" => "success", "data" => "1"], 200);
    
//     return $response->withJson(["status" => "failed", "data" => "0"], 200);
// });

// $app->get("/api/progmob/mhs/{nim_progmob}", function (Request $request, Response $response, $args){
//     $nim_progmob = $args["nim_progmob"];
//     $sql = "SELECT id,nama,nim,alamat,email,foto FROM progmob_mhs WHERE nim_progmob = :nim_progmob";
//     $stmt = $this->db->prepare($sql);
//     $stmt->execute([":nim_progmob" => $nim_progmob]);
//     $result = $stmt->fetchAll();
//     return $response->withJson($result, 200);
// });

// $app->get("/api/progmob/mhs/{nim_progmob}/{nim_krs}", function (Request $request, Response $response, $args){
//     $nim_progmob = $args["nim_progmob"];
//     $nim_krs = $args["nim_krs"];
//     $sql = "SELECT id,nama,nim,alamat,email,foto FROM progmob_mhs WHERE nim_progmob = :nim_progmob AND nim = :nim_krs";
//     $stmt = $this->db->prepare($sql);
//     $stmt->execute([":nim_progmob" => $nim_progmob, "nim" => $nim_krs]);
//     $result = $stmt->fetchAll();
//     return $response->withJson($result, 200);
// });

// $app->post("/api/progmob/mhs/create", function (Request $request, Response $response){

//     $new_mhs = $request->getParsedBody();

//     $sql = "INSERT INTO progmob_mhs (nama,nim,alamat,email,foto,nim_progmob) VALUES (:nama, :nim, :alamat, :email, :foto, :nim_progmob)";
//     $stmt = $this->db->prepare($sql);

//     $data = [
//         ":nama" => $new_mhs["nama"],
//         ":nim" => $new_mhs["nim"],
//         ":alamat" => $new_mhs["alamat"],
//         ":email" => $new_mhs["email"],
//         ":foto" => "https://images.unsplash.com/photo-1508138221679-760a23a2285b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80",
//         ":nim_progmob" => $new_mhs["nim_progmob"],
//     ];

//     if($stmt->execute($data))
//         return $response->withJson(["status" => "success"], 200);
    
//     return $response->withJson(["status" => "failed"], 200);
// });

// $app->post("/api/progmob/mhs/createwithfoto", function (Request $request, Response $response){

//     $new_mhs = $request->getParsedBody();

//     $uploadedFiles = $request->getUploadedFiles();
//     $uploadedFile = $uploadedFiles['foto'];

//     if ($uploadedFile->getError() === UPLOAD_ERR_OK) {
    
//         $extension = pathinfo($uploadedFile->getClientFilename(), PATHINFO_EXTENSION);
        
//         // ubah nama file dengan id unik
//         $filename = md5(uniqid().mt_rand()).".".$extension;
        
//         $directory = $this->get('settings')['upload_directory'];
//         $uploadedFile->moveTo($directory . DIRECTORY_SEPARATOR . $filename);

//         // simpan nama file ke database
//         $sql = "INSERT INTO progmob_mhs (nama,nim,alamat,email,foto,nim_progmob) VALUES (:nama, :nim, :alamat, :email, :foto, :nim_progmob)";
//         $stmt = $this->db->prepare($sql);
    
//         $data = [
//             ":nama" => $new_mhs["nama"],
//             ":nim" => $new_mhs["nim"],
//             ":alamat" => $new_mhs["alamat"],
//             ":email" => $new_mhs["email"],
//             ":foto" => $request->getUri()->getBaseUrl()."/uploads/".$filename,
//             ":nim_progmob" => $new_mhs["nim_progmob"],
//         ];

//         if($stmt->execute($data))
//             return $response->withJson(["status" => "success"], 200);
//         else
//             return $response->withJson(["status" => "failed"], 200);
//     }
// });

// $app->post("/api/progmob/mhs/update", function (Request $request, Response $response){

//     $new_mhs = $request->getParsedBody();

//     $sql = "UPDATE progmob_mhs SET nama = :nama, nim = :nim, alamat = :alamat, email = :email, foto = :foto
//             WHERE nim = :nim_cari AND nim_progmob = :nim_progmob";
//     $stmt = $this->db->prepare($sql);

//     $data = [
//         ":nama" => $new_mhs["nama"],
//         ":nim" => $new_mhs["nim"],
//         ":alamat" => $new_mhs["alamat"],
//         ":email" => $new_mhs["email"],
//         ":foto" => "https://images.unsplash.com/photo-1508138221679-760a23a2285b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80",
//         ":nim_progmob" => $new_mhs["nim_progmob"],
//         ":nim_cari" => $new_mhs["nim_cari"]
//     ];

//     if($stmt->execute($data))
//         return $response->withJson(["status" => "success"], 200);
    
//     return $response->withJson(["status" => "failed"], 200);
// });

// $app->post("/api/progmob/mhs/updatewithfoto", function (Request $request, Response $response){

//     $new_mhs = $request->getParsedBody();

//     //cek kalau tidak upload foto
//     if($new_mhs["is_foto_update"] == '0'){
//         // simpan nama file ke database
//         $new_mhs = $request->getParsedBody();
    
//         $sql = "UPDATE progmob_mhs SET nama = :nama, nim = :nim, alamat = :alamat, email = :email
//                 WHERE nim = :nim_cari AND nim_progmob = :nim_progmob";
//         $stmt = $this->db->prepare($sql);
    
//         $data = [
//             ":nama" => $new_mhs["nama"],
//             ":nim" => $new_mhs["nim"],
//             ":alamat" => $new_mhs["alamat"],
//             ":email" => $new_mhs["email"],
//             ":nim_progmob" => $new_mhs["nim_progmob"],
//             ":nim_cari" => $new_mhs["nim_cari"]
//         ];

//         if($stmt->execute($data))
//             return $response->withJson(["status" => "success"], 200);
//         else
//             return $response->withJson(["status" => "failed"], 200);
//     }else{
//         $uploadedFiles = $request->getUploadedFiles();
//         $uploadedFile = $uploadedFiles['foto'];

//         if ($uploadedFile->getError() === UPLOAD_ERR_OK) {
        
//             $extension = pathinfo($uploadedFile->getClientFilename(), PATHINFO_EXTENSION);
            
//             // ubah nama file dengan id unik
//             $filename = md5(uniqid().mt_rand()).".".$extension;
            
//             $directory = $this->get('settings')['upload_directory'];
//             $uploadedFile->moveTo($directory . DIRECTORY_SEPARATOR . $filename);
    
//             // simpan nama file ke database
//             $new_mhs = $request->getParsedBody();
    
//             $sql = "UPDATE progmob_mhs SET nama = :nama, nim = :nim, alamat = :alamat, email = :email, foto = :foto
//                     WHERE nim = :nim_cari AND nim_progmob = :nim_progmob";
//             $stmt = $this->db->prepare($sql);
        
//             $data = [
//                 ":nama" => $new_mhs["nama"],
//                 ":nim" => $new_mhs["nim"],
//                 ":alamat" => $new_mhs["alamat"],
//                 ":email" => $new_mhs["email"],
//                 ":foto" => $request->getUri()->getBaseUrl()."/uploads/".$filename,
//                 ":nim_progmob" => $new_mhs["nim_progmob"],
//                 ":nim_cari" => $new_mhs["nim_cari"]
//             ];

//             if($stmt->execute($data))
//                 return $response->withJson(["status" => "success"], 200);
//             else
//                 return $response->withJson(["status" => "failed"], 200);
//         }
//     }
// });

// $app->post("/api/progmob/mhs/delete", function (Request $request, Response $response){

//     $new_mhs = $request->getParsedBody();

//     $sql = "DELETE FROM progmob_mhs WHERE nim = :nim AND nim_progmob = :nim_progmob";
//     $stmt = $this->db->prepare($sql);

//     $data = [
//         ":nim" => $new_mhs["nim"],
//         ":nim_progmob" => $new_mhs["nim_progmob"]
//     ];

//     if($stmt->execute($data))
//         return $response->withJson(["status" => "success"], 200);
    
//     return $response->withJson(["status" => "failed"], 200);
// });

// $app->post("/api/progmob/login", function (Request $request, Response $response, $args){
//     $data = $request->getParsedBody();
//     $nimnik = $data["nimnik"];
//     $password = $data["password"];
    
//     $sql = "SELECT * FROM progmob_users WHERE nimnik = :nimnik AND password = :password";
//     $stmt = $this->db->prepare($sql);
//     $stmt->execute([":nimnik" => $nimnik, "password" => $password]);
//     $result = $stmt->fetchAll();

//     return $response->withJson($result, 200);
// });

// $app->get("/api/progmob/dosen/{nim_progmob}", function (Request $request, Response $response, $args){
//     $nim_progmob = $args["nim_progmob"];
//     $sql = "SELECT id,nama,nidn,alamat,email,gelar,foto FROM progmob_dosens WHERE nim_progmob = :nim_progmob";
//     $stmt = $this->db->prepare($sql);
//     $stmt->execute([":nim_progmob" => $nim_progmob]);
//     $result = $stmt->fetchAll();
//     return $response->withJson($result, 200);
// });

// $app->get("/api/progmob/dosen/{nim_progmob}/{nidn}", function (Request $request, Response $response, $args){
//     $nim_progmob = $args["nim_progmob"];
//     $nidn = $args["nidn"];
//     $sql = "SELECT id,nama,nidn,alamat,email,gelar,foto FROM progmob_dosens WHERE nim_progmob = :nim_progmob AND nidn = :nidn";
//     $stmt = $this->db->prepare($sql);
//     $stmt->execute([":nim_progmob" => $nim_progmob, "nidn" => $nidn]);
//     $result = $stmt->fetchAll();
//     return $response->withJson($result, 200);
// });

// $app->post("/api/progmob/dosen/create", function (Request $request, Response $response){

//     $new_dosen = $request->getParsedBody();

//     $sql = "INSERT INTO progmob_dosens (nama,nidn,alamat,email,gelar,foto,nim_progmob) VALUES (:nama, :nidn, :alamat, :email, :gelar, :foto, :nim_progmob)";
//     $stmt = $this->db->prepare($sql);

//     $data = [
//         ":nama" => $new_dosen["nama"],
//         ":nidn" => $new_dosen["nidn"],
//         ":alamat" => $new_dosen["alamat"],
//         ":email" => $new_dosen["email"],
//         ":gelar" => $new_dosen["gelar"],
//         ":foto" => "https://images.unsplash.com/photo-1508138221679-760a23a2285b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80",
//         ":nim_progmob" => $new_dosen["nim_progmob"],
//     ];

//     if($stmt->execute($data))
//         return $response->withJson(["status" => "success"], 200);
    
//     return $response->withJson(["status" => "failed"], 200);
// });

// $app->post("/api/progmob/dosen/update", function (Request $request, Response $response){

//     $new_dosen = $request->getParsedBody();

//     $sql = "UPDATE progmob_dosens SET nama = :nama, nidn = :nidn, alamat = :alamat, email = :email, gelar = :gelar, foto = :foto
//             WHERE nidn = :nidn_cari AND nim_progmob = :nim_progmob";
//     $stmt = $this->db->prepare($sql);

//     $data = [
//         ":nama" => $new_dosen["nama"],
//         ":nidn" => $new_dosen["nidn"],
//         ":alamat" => $new_dosen["alamat"],
//         ":email" => $new_dosen["email"],
//         ":gelar" => $new_dosen["gelar"],
//         ":foto" => "https://images.unsplash.com/photo-1508138221679-760a23a2285b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80",
//         ":nim_progmob" => $new_dosen["nim_progmob"],
//         ":nidn_cari" => $new_dosen["nidn_cari"],
//     ];

//     if($stmt->execute($data))
//         return $response->withJson(["status" => "success"], 200);
    
//     return $response->withJson(["status" => "failed"], 200);
// });

// $app->post("/api/progmob/dosen/createwithfoto", function (Request $request, Response $response){

//     $new_dosen = $request->getParsedBody();
//     $uploadedFiles = $request->getUploadedFiles();
//     $uploadedFile = $uploadedFiles['foto'];

//     if ($uploadedFile->getError() === UPLOAD_ERR_OK) {
    
//         $extension = pathinfo($uploadedFile->getClientFilename(), PATHINFO_EXTENSION);
        
//         // ubah nama file dengan id unik
//         $filename = md5(uniqid().mt_rand()).".".$extension;
        
//         $directory = $this->get('settings')['upload_directory'];
//         $uploadedFile->moveTo($directory . DIRECTORY_SEPARATOR . $filename);

//         // simpan nama file ke database
//         $sql = "INSERT INTO progmob_dosens (nama,nidn,alamat,email,gelar,foto,nim_progmob) VALUES (:nama, :nidn, :alamat, :email, :gelar, :foto, :nim_progmob)";
//         $stmt = $this->db->prepare($sql);
    
//         $data = [
//             ":nama" => $new_dosen["nama"],
//             ":nidn" => $new_dosen["nidn"],
//             ":alamat" => $new_dosen["alamat"],
//             ":email" => $new_dosen["email"],
//             ":gelar" => $new_dosen["gelar"],
//             ":foto" => $request->getUri()->getBaseUrl()."/uploads/".$filename,
//             ":nim_progmob" => $new_dosen["nim_progmob"],
//         ];

//         if($stmt->execute($data))
//             return $response->withJson(["status" => "success"], 200);
//         else
//             return $response->withJson(["status" => "failed"], 200);
//     }
// });

// $app->post("/api/progmob/dosen/updatewithfoto", function (Request $request, Response $response){
//     $new_dosen = $request->getParsedBody();
//     if($new_dosen["is_foto_update"] == '0'){
//         // simpan nama file ke database
//         $sql = "UPDATE progmob_dosens SET nama = :nama, nidn = :nidn, alamat = :alamat, email = :email, gelar = :gelar
//         WHERE nidn = :nidn_cari AND nim_progmob = :nim_progmob";
        
//         $stmt = $this->db->prepare($sql);
//         $data = [
//             ":nama" => $new_dosen["nama"],
//             ":nidn" => $new_dosen["nidn"],
//             ":alamat" => $new_dosen["alamat"],
//             ":email" => $new_dosen["email"],
//             ":gelar" => $new_dosen["gelar"],
//             ":nim_progmob" => $new_dosen["nim_progmob"],
//             ":nidn_cari" => $new_dosen["nidn_cari"],
//         ];

//         if($stmt->execute($data))
//             return $response->withJson(["status" => "success"], 200);
//         else
//             return $response->withJson(["status" => "failed"], 200);
//     }else{
//         $uploadedFiles = $request->getUploadedFiles();
//         $uploadedFile = $uploadedFiles['foto'];
        
//         if ($uploadedFile->getError() === UPLOAD_ERR_OK) {
    
//             $extension = pathinfo($uploadedFile->getClientFilename(), PATHINFO_EXTENSION);
            
//             // ubah nama file dengan id unik
//             $filename = md5(uniqid().mt_rand()).".".$extension;
            
//             $directory = $this->get('settings')['upload_directory'];
//             $uploadedFile->moveTo($directory . DIRECTORY_SEPARATOR . $filename);
    
//             // simpan nama file ke database
//             $sql = "UPDATE progmob_dosens SET nama = :nama, nidn = :nidn, alamat = :alamat, email = :email, gelar = :gelar, foto = :foto
//                 WHERE nidn = :nidn_cari AND nim_progmob = :nim_progmob";
//             $stmt = $this->db->prepare($sql);
        
//             $data = [
//                 ":nama" => $new_dosen["nama"],
//                 ":nidn" => $new_dosen["nidn"],
//                 ":alamat" => $new_dosen["alamat"],
//                 ":email" => $new_dosen["email"],
//                 ":gelar" => $new_dosen["gelar"],
//                 ":foto" => $request->getUri()->getBaseUrl()."/uploads/".$filename,
//                 ":nim_progmob" => $new_dosen["nim_progmob"],
//                 ":nidn_cari" => $new_dosen["nidn_cari"],
//             ];

//             if($stmt->execute($data))
//                 return $response->withJson(["status" => "success"], 200);
//             else
//                 return $response->withJson(["status" => "failed"], 200);
//         }
//     }
// });

// $app->post("/api/progmob/dosen/delete", function (Request $request, Response $response){

//     $new_dosen = $request->getParsedBody();

//     $sql = "DELETE FROM progmob_dosens WHERE nidn = :nidn AND nim_progmob = :nim_progmob";
//     $stmt = $this->db->prepare($sql);

//     $data = [
//         ":nidn" => $new_dosen["nidn"],
//         ":nim_progmob" => $new_dosen["nim_progmob"]
//     ];

//     if($stmt->execute($data))
//         return $response->withJson(["status" => "success"], 200);
    
//     return $response->withJson(["status" => "failed"], 200);
// });

// //===============================mata kuliah================================
// $app->get("/api/progmob/matkul/{nim_progmob}", function (Request $request, Response $response, $args){
//     $nim_progmob = $args["nim_progmob"];
//     $sql = "SELECT id,kode,nama,hari,sesi,sks FROM progmob_matkuls WHERE nim_progmob = :nim_progmob";
//     $stmt = $this->db->prepare($sql);
//     $stmt->execute([":nim_progmob" => $nim_progmob]);
//     $result = $stmt->fetchAll();
//     return $response->withJson($result, 200);
// });

// $app->get("/api/progmob/matkul/{nim_progmob}/{kode}", function (Request $request, Response $response, $args){
//     $nim_progmob = $args["nim_progmob"];
//     $kode = $args["kode"];
//     $sql = "SELECT id,kode,nama,hari,sesi,sks FROM progmob_matkuls WHERE nim_progmob = :nim_progmob AND kode = :kode";
//     $stmt = $this->db->prepare($sql);
//     $stmt->execute([":nim_progmob" => $nim_progmob, "kode" => $kode]);
//     $result = $stmt->fetchAll();
//     return $response->withJson($result, 200);
// });

// $app->post("/api/progmob/matkul/create", function (Request $request, Response $response){

//     $new_dosen = $request->getParsedBody();

//     $sql = "INSERT INTO progmob_matkuls (kode,nama,hari,sesi,sks,nim_progmob) VALUES (:kode, :nama, :hari, :sesi, :sks, :nim_progmob)";
//     $stmt = $this->db->prepare($sql);

//     $data = [
//         ":kode" => $new_dosen["kode"],
//         ":nama" => $new_dosen["nama"],
//         ":hari" => $new_dosen["hari"],
//         ":sesi" => $new_dosen["sesi"],
//         ":sks" => $new_dosen["sks"],
//         ":nim_progmob" => $new_dosen["nim_progmob"],
//     ];

//     if($stmt->execute($data))
//         return $response->withJson(["status" => "success"], 200);
    
//     return $response->withJson(["status" => "failed"], 200);
// });

// $app->post("/api/progmob/matkul/update", function (Request $request, Response $response){

//     $new_dosen = $request->getParsedBody();

//     $sql = "UPDATE progmob_matkuls SET kode = :kode, nama = :nama, hari = :hari, sesi = :sesi, sks = :sks
//             WHERE kode = :kode_cari AND nim_progmob = :nim_progmob";
//     $stmt = $this->db->prepare($sql);

//     $data = [
//         ":kode" => $new_dosen["kode"],
//         ":nama" => $new_dosen["nama"],
//         ":hari" => $new_dosen["hari"],
//         ":sesi" => $new_dosen["sesi"],
//         ":sks" => $new_dosen["sks"],
//         ":nim_progmob" => $new_dosen["nim_progmob"],
//         ":kode_cari" => $new_dosen["kode_cari"],
//     ];

//     if($stmt->execute($data))
//         return $response->withJson(["status" => "success"], 200);
    
//     return $response->withJson(["status" => "failed"], 200);
// });

// $app->post("/api/progmob/matkul/delete", function (Request $request, Response $response){

//     $new_dosen = $request->getParsedBody();

//     $sql = "DELETE FROM progmob_matkuls WHERE kode = :kode AND nim_progmob = :nim_progmob";
//     $stmt = $this->db->prepare($sql);

//     $data = [
//         ":kode" => $new_dosen["kode"],
//         ":nim_progmob" => $new_dosen["nim_progmob"]
//     ];

//     if($stmt->execute($data))
//         return $response->withJson(["status" => "success"], 200);
    
//     return $response->withJson(["status" => "failed"], 200);
// });

// //-----------------------------------------jadwal----------------------------------------------------
// $app->get("/api/progmob/jadwal/{nim_progmob}", function (Request $request, Response $response, $args){
//     $nim_progmob = $args["nim_progmob"];
//     $sql = "SELECT progmob_jadwals.id, m.nama as matkul, d.nama as dosen, d.nidn,m.hari,m.sesi,
//         m.sks FROM progmob_matkuls m join progmob_jadwals on progmob_jadwals.id_matkul = m.id
//         join progmob_dosens d on progmob_jadwals.id_dosen = d.id
//         WHERE progmob_jadwals.nim_progmob = :nim_progmob";
//     $stmt = $this->db->prepare($sql);
//     $stmt->execute([":nim_progmob" => $nim_progmob]);
//     $result = $stmt->fetchAll();
//     return $response->withJson($result, 200);
// });

// $app->post("/api/progmob/jadwal/create", function (Request $request, Response $response){
//     $jadwal = $request->getParsedBody();
//     $sql = "INSERT INTO progmob_jadwals (id_matkul,id_dosen,nim_progmob) VALUES (:id_matkul, :id_dosen, :nim_progmob)";
//     $stmt = $this->db->prepare($sql);
//     $data = [
//         ":id_matkul" => $jadwal["id_matkul"],
//         ":id_dosen" => $jadwal["id_dosen"],
//         ":nim_progmob" => $jadwal["nim_progmob"]
//     ];
//     if($stmt->execute($data))
//         return $response->withJson(["status" => "success"], 200);
    
//     return $response->withJson(["status" => "failed"], 200);
// });

// $app->post("/api/progmob/jadwal/update", function (Request $request, Response $response){
//     $jadwal = $request->getParsedBody();
//     $sql = "UPDATE progmob_jadwals SET id_dosen = :id_dosen, id_matkul = :id_matkul
//             WHERE id = :id";
//     $stmt = $this->db->prepare($sql);

//     $data = [
//         ":id" => $jadwal["id"],
//         ":id_dosen" => $jadwal["id_dosen"],
//         ":id_matkul" => $jadwal["id_matkul"]
//     ];

//     if($stmt->execute($data))
//         return $response->withJson(["status" => "success"], 200);
    
//     return $response->withJson(["status" => "failed"], 200);
// });

// $app->post("/api/progmob/jadwal/delete", function (Request $request, Response $response){
//     $jadwal = $request->getParsedBody();

//     $sql = "DELETE FROM progmob_jadwals WHERE id = :id";
//     $stmt = $this->db->prepare($sql);

//     $data = [
//         ":id" => $jadwal["id"]
//     ];

//     if($stmt->execute($data))
//         return $response->withJson(["status" => "success"], 200);
    
//     return $response->withJson(["status" => "failed"], 200);
// });

// //-----------------------------untuk dashboard----------------------------
// $app->get("/api/progmob/dashboard/{nim_progmob}", function (Request $request, Response $response, $args){
//     $nim_progmob = $args["nim_progmob"];

//     //get mhs
//     $sql = "SELECT count(id) as jml_mhs FROM progmob_mhs WHERE nim_progmob = :nim_progmob";
//     $stmt = $this->db->prepare($sql);
//     $stmt->execute([":nim_progmob" => $nim_progmob]);
//     $result_mhs = $stmt->fetchAll();

//     //get dosen
//     $sql = "SELECT count(id) as jml_dosen FROM progmob_dosens WHERE nim_progmob = :nim_progmob";
//     $stmt = $this->db->prepare($sql);
//     $stmt->execute([":nim_progmob" => $nim_progmob]);
//     $result_dosen = $stmt->fetchAll();

//     //get mk
//     $sql = "SELECT count(id) as jml_mk FROM progmob_matkuls WHERE nim_progmob = :nim_progmob";
//     $stmt = $this->db->prepare($sql);
//     $stmt->execute([":nim_progmob" => $nim_progmob]);
//     $result_mk = $stmt->fetchAll();

//     //get dosen
//     $sql = "SELECT count(id) as jml_jadwal FROM progmob_jadwals WHERE nim_progmob = :nim_progmob";
//     $stmt = $this->db->prepare($sql);
//     $stmt->execute([":nim_progmob" => $nim_progmob]);
//     $result_jadwal = $stmt->fetchAll();

//     $result = array(
//         'mahasiswa' => $result_mhs[0]['jml_mhs'],
//         'dosen' => $result_dosen[0]['jml_dosen'],
//         'matakuliah' => $result_mk[0]['jml_mk'],
//         'jadwal' => $result_jadwal[0]['jml_jadwal'],
//     );

//     return $response->withJson($result, 200);
// });

};
