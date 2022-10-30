<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews') -> insert([
            [
                'nama_barang' => 'Kecap ABC',
                'harga' => "7000",
                'nama_perusahaan' => 'PT Heinz ABC Indonesia',
                'netto' =>'150',
                'stok' =>'120',
                'deskripsi' =>'Kecap manis ABC dibuat dengan kedelai, gandum dan gula merah pilihan sehingga menghasilkan kecap manis dengan citarasa mantap, hitam dan kental. KOMPOSISI : Gula, air, garam, kedelai, biji gandum, pengawet natrium benzoat.',
                'gambar'=>'kecapabc.jpg',
            ],

            [
                'nama_barang' => 'Lifebuoy',
                'harga' => "3000",
                'nama_perusahaan' => 'PT. Unilever Indonesia',
                'netto' =>'3',
                'stok' =>'500',
                'deskripsi' =>'Lifebuoy adalah merek sabun yang dipasarkan oleh Unilever. Lifebuoy awalnya, dan untuk sebagian besar sejarahnya, sabun karbol mengandung fenol (asam karbol, senyawa yang diekstraksi dari tar batubara). Sabun yang diproduksi hari ini dengan merek Lifebuoy tidak mengandung fenol. Saat ini, ada banyak varian Lifebuoy.',
                'gambar'=>'lifeboy.jpg',
            ],

            [
                'nama_barang' => 'Dove',
                'harga' => "10000",
                'nama_perusahaan' => 'PT. Unilever Indonesia',
                'netto' =>'2',
                'stok' =>'1000',
                'deskripsi' =>'Tahukah kamu bahwa varian sampo Dove tak hanya membersihkan rambut dan kulit kepala, tapi juga menutrisinya? Dove ingin kamu memilih shampoo terbaik yang bisa memberikan perawatan sesuai dengan masalah rambutmu',
                'gambar'=>'dove.jpg',
            ],
        ]);
    }
}
