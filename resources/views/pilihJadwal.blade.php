<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Explore The Milky Way</title>
    <link rel="stylesheet" href="/public/css/output.css" />
    <link rel="icon" type="DLOR" href="/public/assets/favicon.ico" />
  </head>
  <body class="bg-dark-space bg-black bg-cover cursor-space-ship">
    <div class="container">
      <!-- <div class="fixed left-0 right-0 pt-14 flex justify-center">
        <div class="bg-green-400 succsess fixed text-green-800 text-center font-pixel rounded-md px-2 py-1">Jadwal Sukses Dipilih!</div>
      </div> -->

      <div class="fixed left-0 right-0 pt-14 flex justify-center">
        <div class="bg-red-500 failed fixed text-red-800 text-center font-pixel rounded-md px-2 py-1">Jadwal Tidak Bisa Dipilih!</div>
      </div>

      <div class="flex flex-col justify-around items-center h-3/5">
        <div class="pt-28">
          <h1 class="font-arcade text-white text-center text-3xl md:text-5xl">PILIH JADWAL REKRUTMEN</h1>
          <p class="font-pixel text-white text-center text-lg md:text-xl">Jadwal tidak bisa diganti ketika sudah diplih.</p>
          <p class="font-pixel text-white text-center text-lg md:text-xl">Pastikan yakin dengan jadwal yang dipilih.</p>
        </div>

        <div class="flex justify-center font-arcade tracking-wide pt-12">
          <table class="table-auto shadow-semi-sm shadow-white">
            <thead>
              <tr class="bg-dark-sky text-white">
                <th class="border border-dark-sky px-2">NO</th>
                <th class="border border-dark-sky px-2">Shift</th>
                <th class="border border-dark-sky px-2">Tanggal</th>
                <th class="border border-dark-sky px-2">Waktu</th>
                <th class="border border-dark-sky px-2">Kuota</th>
                <th class="border border-dark-sky px-2">Opsi</th>
              </tr>
            </thead>

            <tbody>
              <tr class="bg-white text-black table-auto">
                <th class="border border-dark-sky px-2">1</th>
                <th class="border border-dark-sky px-2">Shift 1</th>
                <th class="border border-dark-sky px-2">30 Desember</th>
                <th class="border border-dark-sky px-2">14:30 - 6:30</th>
                <th class="border border-dark-sky px-2 text-green-800">5</th>
                <th class="border border-dark-sky px-2">
                  <button class="bg-dark-sky hover:bg-green-400 rounded-md text-white hover:text-green-800 px-2 border border-gray-500 m-1">Pilih</button>
                </th>
              </tr>
              <tr class="bg-white text-black table-auto">
                <th class="border border-dark-sky px-2">2</th>
                <th class="border border-dark-sky px-2">Shift 2</th>
                <th class="border border-dark-sky px-2">31 Desember</th>
                <th class="border border-dark-sky px-2">14:30 - 6:30</th>
                <th class="border border-dark-sky px-2 text-red-800">Penuh</th>
                <th class="border border-dark-sky px-2">
                  <button class="bg-dark-sky hover:bg-red-400 rounded-md text-white hover:text-red-800 px-2 border border-gray-500 m-1">Pilih</button>
                </th>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div>
      <div class="fixed bottom-0 left-0 right-0 font-pixel text-center text-white mt-12 mb-2">
        <p>OFFICIAL DASKOM RECRUITMENT 2023</p>
      </div>
    </div>
  </body>
</html>
