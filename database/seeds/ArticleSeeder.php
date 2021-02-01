<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article')->insert([
            [
                'id' => '1',
                'title_article' => 'Oppo Reno5 Meluncur 12 Januari 2021 di Indonesia',
                'description_article' => 'Oppo akhirnya resmi mengumumkan tanggal peluncuran Reno5 di Indonesia. Ponsel tersebut akan resmi masuk ke Tanah Air pada 12 Januari 2021 mendatang. Selain Reno5, Oppo juga diketahui tengah menyiapkan satu model Reno5 lainnya. 
                Model misterius itu telah terdaftar di situs sertifikasi Postel Ditjen SDPPI Kemenkominfo dengan nomor model CPH2145. 
                Soal spesifikasi, Oppo Reno5 akan mengusung layar AMOLED berbentang 6,4 inci. 
                
                Layar ini memiliki resolusi Full HD Plus (2.400 x 1.800 piksel) dengan refresh rate 90Hz. Sama seperti pendahulunya, Oppo Reno5 masih menganut desain punch hole sebagai wadah kamera depan. Rasio bodi ke layarnya diklaim mencapai 91,7 persen. 
                Layar Oppo Reno5 dilindungi oleh Corning Gorilla Glass 5. Di bagian punggung, terdapat modul kamera belakang yang susunannya sama seperti Reno4. Namun, belum diketahui konfigurasi dari masing-masing kamera tersebut. Untuk menunjang performa, Oppo Reno5 disebut akan ditenagai oleh chipset Snapdragon 765G yang dipadu RAM 8GB/12GB dan memori internal 128 GB/256 GB. 
                Baterainya akan berkapasitas 4.300 mAh dan didukung fitur pengisi daya cepat 65 watt. Ada dua varian warna Reno5 yang akan tersedia yaitu Starry Black dan Fantasy Silver. 
                
                Kendati demikian, Oppo Indonesia masih belum mengonfirmasi secara detail apakah spesifikasi Reno5 di atas akan identik dengan versi China atau tidak. Kebenarannya pun baru bisa dipastikan pada saat peluncuran Oppo Reno5 pada 12 Januari 2021 mendatang.' ,
                
                'small_desc_article' => 'Oppo akhirnya resmi mengumumkan tanggal peluncuran Reno5 di Indonesia. Ponsel tersebut akan resmi masuk ke Tanah Air pada 12 Januari 2021 mendatang.',
                'photo' => 'artikel1.jpg',
            ],

            [
                'id' => '2',
                'title_article' => 'Xiaomi Pastikan Mi 11 Hadir Tanpa Charger seperti iPhone 12',
                'description_article' => 'Xiaomi nampaknya bakal mengikuti jejak Apple dengan tidak menyertakan charger di kotak penjualan ponsel flagship Mi series berikutnya, yakni Mi 11. 
                Informasi tersebut disampaikan langsung oleh CEO Xiaomi, Lei Jun melalui media sosial Weibo.Jun juga berjanji bakal menjelaskan informasi lebih detail dalam acara peluncuran Mi 11, 
                yang bakal digelar pada 28 Desember mendatang. 
                
                Selain menyampaikan informasi tersebut, Jun turut mengunggah video dari boks penjualan Mi 11. Terlihat bahwa kotak kemasan pembelian Mi 11 memiliki ukuran yang lebih ringkas dan tipis. 
                Pada bagian depan kotak kemasan, terpampang informasi singkat berupa konfigurasi kamera beresolusi 108 MP, layar Super AMOLED beresolusi HD 10 Plus, dan audio berkualitas dari Harman Kardon. 
                Keputusan yang diambil Xiaomi ironis karena sebelumnya mereka sempat mengejek Apple karena menghilangkan charger di dalam kotak pembelian iPhone 12. Sesaat setelah peluncuran iPhone 12, Xiaomi memposting twit berisi sindiran beserta video pendek yang memperlihatkan charger di dalam kotak kemasan Mi 10T Pro. 
                "Jangan khawatir, kami tidak menghilangkan apapun dari kotak kemasan #Mi10TPro," tulis Xiaomi. 
                
                Meski tidak disertai dengan charger, namun agaknya Xiaomi juga tidak berniat untuk mengurangi tarif harga dari ponsel sendiri. Selain itu, pengguna seakan "dipaksa" untuk membeli kepala charger secara terpisah.',
                
                'small_desc_article' => 'Xiaomi nampaknya bakal mengikuti jejak Apple dengan tidak menyertakan charger di kotak penjualan ponsel flagship Mi series berikutnya, yakni Mi 11. 
                Mi 11 memiliki fitur andalan yakni kamera beresolusi 108 MP, layar Super AMOLED beresolusi HD 10 Plus, dan audio berkualitas dari Harman Kardon.',
                'photo' => 'artikel2.png',
            ],

            [
                'id' => '3',
                'title_article' => 'Samsung Galaxy S21 Ultra Dipastikan Punya Stylus S Pen',
                'description_article' => 'Setelah didahului dengan berbagai rumor serta petunjuk dari bos Samsung, keberadaan stylus S Pen di lini Galaxy S21 kini terkonfirmasi. Fitur ikonik dari seri Galaxy Note ini akan hadir di Galaxy S21 Ultra. 
                Hal ini terungkap setelah Android Authority menemukan laporan uji coba perangkat berkode SMG998B di regulator komunikasi Amerika Serikat (FCC). Kode tersebut diyakini sebagai Galaxy S21 Ultra.
                Dalam laporan pengujian FCC dijelaskan bahwa ponsel flagship Samsung itu mendukung stylus S Pen, baik dalam mode klik ataupun hover. 
                
                Mode hover sendiri memungkinkan pengguna memakai stylus S Pen tanpa harus menyentuh layar perangkat. 
                Mode tersebut memiliki berbagai fungsi, seperti melihat konten hingga memotret. "Perangkat yang sedang diuji juga dapat digunakan dengan perangkat stylus (S Pen). Perangkat beroperasi dengan S Pen dalam dua mode," tulis laporan tersebut. 
                Di dalam laporan itu juga tertulis sejumlah fitur yang akan dibawa Galaxy S21 Ultra, seperti Ultra Wideband (UWB), NFC, wireless charging, reverse charging, dan WiFi 6E. Samsung sendiri kabarnya bakal meluncurkan Galaxy S21 pada Januari 2021 mendatang.
                
                Ponsel ini diprediksi akan tersedia dalam tiga model yang terdiri dari model reguler, Plus, dan Ultra.',
                'small_desc_article' => 'Samsung kabarnya bakal meluncurkan Galaxy S21 pada Januari 2021 mendatang. Ponsel ini diprediksi akan tersedia dalam tiga model yang terdiri dari model reguler, Plus, dan Ultra.',
                'photo' => 'artikel3.jpg',
            ],

            [
                'id' => '4',
                'title_article' => 'Sony Rancang Kamera Khusus untuk Oppo Find X3?',
                'description_article' => 'Vendor smartphone asal China, Oppo dikabarkan kembali menjalin kerja sama dengan Sony untuk mengembangkan lensa khusus untuk lini ponsel flagship berikutnya. 
                Bocoran terbaru menyebutkan bahwa Oppo dan Sony sedang mengerjakan custom chip kamera bernama Sony IMX789. Sumber tersebut mengatakan, karena masalah waktu, ponsel flagship selanjutnya Oppo kemungkinan belum akan mengusung lensa IMX789 ini. Ponsel flagship selanjutnya yang dimaksud oleh sumber tersebut kemungkinan besar ialah Oppo Find X3. Mengacu pada proyeksi waktu, Oppo memang diprediksi akan meluncurkan penerus seri Find X3 itu pada paruh pertama 2021. 
                Namun, masih belum jelas ponsel Oppo mana yang akan hadir dengan lensa IMX789 baru, apakah Oppo Find X3 atau seri Reno6 yang mungkin debut pada pertengahan 2021 nanti. Jika ternyata Oppo Find X3 belum menggunakan lensa custom Sony IMX789, kemungkinan ponsel flagship ini akan menggunakan lensa IMX766, seperti Oppo Reno5 Pro Plus. Hal ini sebagaimana informasi yang diberikan pembocor ulung Evan Blass. 
                Blass mengatakan kemungkinan kamera utama Find X3 akan mengusung lensa Sony IMX766 50 megapiksel, lalu lensa Sony IMX766 lainnya untuk kamera ultra wide, lensa telefoto 14 MP dengan zoom optik 2x, serta lensa makro 3 MP dengan dukungan pembesaran 25 kali.  Sebagai informasi, Oppo baru-baru ini meluncurkan ponsel Reno5 Pro Plus 5G untuk pasar China. Salah satu nilai jual utama dari ponsel tersebut ialah kamera utama yang juga hasil kerja sama dengan Sony, yakni lensa IMX766 dengan sensor 50 megapiksel (f/1.8). Lensa Sony IMX766 tersebut menjanjikan pengalaman fotografi terbaik dalam kondisi cahaya redup karena ukuran sensornya 1/1,56 inci dan menawarkan area piksel unit 1,0μm. Dibandingkan dengan lensa Sony IMX586 48 megapiksel, IMX766 dapat menyerap cahaya 63,8 persen lebih banyak. Meskipun tidak ada informasi teknis yang tersedia terkait lensa IMX789, tampaknya lensa khusus ini akan menawarkan pengalaman yang lebih unggul daripada IMX766 dalam hal fotografi cahaya rendah',
                'small_desc_article' => 'Bocoran terbaru menyebutkan bahwa Oppo dan Sony sedang mengerjakan custom chip kamera bernama Sony IMX789.Sumber tersebut mengatakan, karena masalah waktu, ponsel flagship selanjutnya Oppo kemungkinan belum akan mengusung lensa IMX789 ini. Ponsel flagship selanjutnya yang dimaksud oleh sumber tersebut kemungkinan besar ialah Oppo Find X3.',
                'photo' => 'artikel4.jpg',
            ],

            [
                'id' => '5',
                'title_article' => 'Vivo X60 dan X60 Pro Resmi, Pakai Kamera Zeiss dan Exynos 1080',
                'description_article' => 'Vivo resmi mengumumkan dua smartphone baru, yakni X60 dan X60 Pro. Keduanya adalah smartphone pertama di dunia yang dipacu chipset buatan Samsung, Exynos 1080. Seperti Vivo X50 series, penerusnya ini juga mengunggulkan desain dan fitur kamera. Vivo berambisi menjadikan X60 series sebagai smartphone 5G teramping di dunia. Dari segi dimensi ponsel, 
                Vivo X60 memiliki ketebalan bodi 7,36 mm, lebih tipis dibanding versi "pro" yang sedikit lebih tebal yakni 7,59 mm. Selain ketebalan, jumlah kamera dan desain layar juga menjadi pembeda antara X60 dan X60 Pro. Bagaimana spesifikasi Vivo X60 dan X60 Pro? Vivo X60 memliki desain layar yang lebih datar (flat) dengan jenis layar AMOLED. Layar yang berbentang 6,56 inci itu memiliki resolusi 2376 x 1080 dan refresh rate 120 Hz. 
                Layar ini memiliki lubang kamera (punch hole) tepat di tengah sisi atas layar sebagai rumah kamera selfie. Rasio aspeknya 19.8:9 dan sudah mengantongi sertifikasi HDR10+ yang umumnya akan memberikan pengalaman visual yang lebih menjanjikan. Vivo mengatakan layar LTM Sunscreen yang dikembangkan bersama Samsung akan membantu pengguna untuk tetap bisa melihat layar dengan jelas sekalipun sedang berada di bawah terik atau cahaya yang kuat. 
                Pada sektor kamera, Vivo berkolaborasi dengan pabrikan kamera asal Jerman, Zeiss. Logo Zeiss terpatri di modul kamera belakang X60 dan X60 Pro. Vivo X60 memiliki tiga buah kamera utama. Kamera utama 48 megapiksel (f/1.79) menggunakan sensor Sony IMX598 custom sensor dan 4-axis OIS. Kamera kedua adalah telefoto beresolusi 13 MP (f/2.45) dengan kemampuan 2x optical zoom, kemudian kamera 8 MP ultra wide (f/2.2) yang mendukung foto makro',
                'small_desc_article' => 'Vivo resmi mengumumkan dua smartphone baru, yakni X60 dan X60 Pro. Keduanya adalah smartphone pertama di dunia yang dipacu chipset buatan Samsung, Exynos 1080. Bagaimana spesifikasi Vivo X60 dan X60 Pro?',
                'photo' => 'artikel5.png',
            ],

           
        ]);
    }
}
