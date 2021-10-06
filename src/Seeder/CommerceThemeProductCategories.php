<?php

namespace Database\Seeders\Badaso\Commerce\Theme;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Models\Menu;
use Uasoft\Badaso\Models\MenuItem;

class CommerceThemeProductCategories extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @throws Exception
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();

        try {
            DB::table('badaso_product_categories')->delete();

            DB::table('badaso_product_categories')->insert(array(
                0 =>
                array(
                    'id' => 1,
                    'parent_id' => NULL,
                    'name' => 'Elektronik',
                    'slug' => 'elektronik',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/02577b74fe168f6dabd57eab9c2f8f21_tn.png',
                    'created_at' => '2021-09-13 09:16:50',
                    'updated_at' => '2021-09-13 09:16:50',
                    'deleted_at' => NULL,
                ),
                1 =>
                array(
                    'id' => 2,
                    'parent_id' => NULL,
                    'name' => 'Makanan & Minuman',
                    'slug' => 'makanan-minuman',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/b912e9726dc8cb5e9447a7738a68479c_tn.png',
                    'created_at' => '2021-09-13 09:17:30',
                    'updated_at' => '2021-09-13 09:17:30',
                    'deleted_at' => NULL,
                ),
                2 =>
                array(
                    'id' => 3,
                    'parent_id' => NULL,
                    'name' => 'Komputer & Aksesoris',
                    'slug' => 'komputer-aksesoris',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/1c2d1181b1f5306ce2c41803617e7446_tn.png',
                    'created_at' => '2021-09-13 09:17:40',
                    'updated_at' => '2021-09-13 09:17:40',
                    'deleted_at' => NULL,
                ),
                3 =>
                array(
                    'id' => 4,
                    'parent_id' => NULL,
                    'name' => 'Perawatan & Kecantikan',
                    'slug' => 'perawatan-kecantikan',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/fd68904a717156196d809cab264a4f4e_tn.png',
                    'created_at' => '2021-09-13 09:17:54',
                    'updated_at' => '2021-09-13 09:17:54',
                    'deleted_at' => NULL,
                ),
                4 =>
                array(
                    'id' => 5,
                    'parent_id' => NULL,
                    'name' => 'Handphone & Aksesoris',
                    'slug' => 'handphone-aksesoris',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/5bbc23650006cd766b8838f55d53aac7_tn.png',
                    'created_at' => '2021-09-13 09:18:03',
                    'updated_at' => '2021-09-13 09:18:03',
                    'deleted_at' => NULL,
                ),
                5 =>
                array(
                    'id' => 6,
                    'parent_id' => NULL,
                    'name' => 'Perlengkapan Rumah',
                    'slug' => 'perlengkapan-rumah',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/962e5544f481d1032bd1dfd3137c4355_tn.png',
                    'created_at' => '2021-09-13 09:18:10',
                    'updated_at' => '2021-09-13 09:18:10',
                    'deleted_at' => NULL,
                ),
                6 =>
                array(
                    'id' => 7,
                    'parent_id' => NULL,
                    'name' => 'Pakaian Pria',
                    'slug' => 'pakaian-pria',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/04dba508f1ad19629518defb94999ef9_tn.png',
                    'created_at' => '2021-09-13 09:18:20',
                    'updated_at' => '2021-09-13 09:18:20',
                    'deleted_at' => NULL,
                ),
                7 =>
                array(
                    'id' => 8,
                    'parent_id' => NULL,
                    'name' => 'Pakaian Wanita',
                    'slug' => 'pakaian-wanita',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/23918f8dacba18c938fe42d13aa31b57_tn.png',
                    'created_at' => '2021-09-13 09:18:28',
                    'updated_at' => '2021-09-13 09:18:28',
                    'deleted_at' => NULL,
                ),
                8 =>
                array(
                    'id' => 9,
                    'parent_id' => NULL,
                    'name' => 'Sepatu Pria',
                    'slug' => 'sepatu-pria',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/8465b33b83d571b2dbac57481622002e_tn.png',
                    'created_at' => '2021-09-13 09:18:36',
                    'updated_at' => '2021-09-13 09:18:36',
                    'deleted_at' => NULL,
                ),
                9 =>
                array(
                    'id' => 10,
                    'parent_id' => NULL,
                    'name' => 'Fashion Muslim',
                    'slug' => 'fashion-muslim',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/b98756cdb31eabe3d7664599e24ccc29_tn.png',
                    'created_at' => '2021-09-13 09:18:48',
                    'updated_at' => '2021-09-13 09:18:48',
                    'deleted_at' => NULL,
                ),
                10 =>
                array(
                    'id' => 11,
                    'parent_id' => NULL,
                    'name' => 'Tas Pria',
                    'slug' => 'tas-pria',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/7dea4bb643bfb14ac71e46cd4e5740ad_tn.png',
                    'created_at' => '2021-09-13 09:18:58',
                    'updated_at' => '2021-09-13 09:18:58',
                    'deleted_at' => NULL,
                ),
                11 =>
                array(
                    'id' => 12,
                    'parent_id' => NULL,
                    'name' => 'Fashion Bayi & Anak',
                    'slug' => 'fashion-bayi-anak',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/9251edd6d6dd98855ff5a99497835d9c_tn.png',
                    'created_at' => '2021-09-13 09:19:08',
                    'updated_at' => '2021-09-13 09:19:08',
                    'deleted_at' => NULL,
                ),
                12 =>
                array(
                    'id' => 13,
                    'parent_id' => NULL,
                    'name' => 'Aksesoris Fashion',
                    'slug' => 'aksesoris-fashion',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/1f18bdfe73df39c66e7326b0a3e08e87_tn.png',
                    'created_at' => '2021-09-13 09:19:19',
                    'updated_at' => '2021-09-13 09:19:19',
                    'deleted_at' => NULL,
                ),
                13 =>
                array(
                    'id' => 14,
                    'parent_id' => NULL,
                    'name' => 'Ibu & Bayi',
                    'slug' => 'ibu-bayi',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/c808f51e19db257047e506cecab648f3_tn.png',
                    'created_at' => '2021-09-13 09:19:28',
                    'updated_at' => '2021-09-13 09:19:28',
                    'deleted_at' => NULL,
                ),
                14 =>
                array(
                    'id' => 15,
                    'parent_id' => NULL,
                    'name' => 'Jam Tangan',
                    'slug' => 'jam-tangan',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/ba92815c4339198b836bff5224d48911_tn.png',
                    'created_at' => '2021-09-13 09:19:36',
                    'updated_at' => '2021-09-13 09:19:36',
                    'deleted_at' => NULL,
                ),
                15 =>
                array(
                    'id' => 16,
                    'parent_id' => NULL,
                    'name' => 'Sepatu Wanita',
                    'slug' => 'sepatu-wanita',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/3e5c1658eb48c7bad36b8a431d8af827_tn.png',
                    'created_at' => '2021-09-13 09:20:07',
                    'updated_at' => '2021-09-13 09:20:07',
                    'deleted_at' => NULL,
                ),
                16 =>
                array(
                    'id' => 17,
                    'parent_id' => NULL,
                    'name' => 'Kesehatan',
                    'slug' => 'kesehatan',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/f9490654e54dc56e308cda4f6d86e840_tn.png',
                    'created_at' => '2021-09-13 09:20:14',
                    'updated_at' => '2021-09-13 09:20:14',
                    'deleted_at' => NULL,
                ),
                17 =>
                array(
                    'id' => 18,
                    'parent_id' => NULL,
                    'name' => 'Tas Wanita',
                    'slug' => 'tas-wanita',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/e670ee2864a44227fb48a4c8c571d169_tn.png',
                    'created_at' => '2021-09-13 09:20:20',
                    'updated_at' => '2021-09-13 09:20:20',
                    'deleted_at' => NULL,
                ),
                18 =>
                array(
                    'id' => 19,
                    'parent_id' => NULL,
                    'name' => 'Hobi & Koleksi',
                    'slug' => 'hobi-koleksi',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/61a7b80e42a3d272d170954c76ab84a7_tn.png',
                    'created_at' => '2021-09-13 09:20:41',
                    'updated_at' => '2021-09-13 09:20:41',
                    'deleted_at' => NULL,
                ),
                19 =>
                array(
                    'id' => 20,
                    'parent_id' => NULL,
                    'name' => 'Otomotif',
                    'slug' => 'otomotif',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/27838b968afb76ca59dd8e8f57ece91f_tn.png',
                    'created_at' => '2021-09-13 09:20:47',
                    'updated_at' => '2021-09-13 09:20:47',
                    'deleted_at' => NULL,
                ),
                20 =>
                array(
                    'id' => 21,
                    'parent_id' => NULL,
                    'name' => 'Olahraga & Outdoor',
                    'slug' => 'olahraga-outdoor',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/e6c238608ce9278d644ec46dde529aa5_tn.png',
                    'created_at' => '2021-09-13 09:20:56',
                    'updated_at' => '2021-09-13 09:20:56',
                    'deleted_at' => NULL,
                ),
                21 =>
                array(
                    'id' => 22,
                    'parent_id' => NULL,
                    'name' => 'Souvenir & Pesta',
                    'slug' => 'souvenir-pesta',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/5bc9fd14235a391a392f353e436cf6a2_tn.png',
                    'created_at' => '2021-09-13 09:21:21',
                    'updated_at' => '2021-09-13 09:21:21',
                    'deleted_at' => NULL,
                ),
                22 =>
                array(
                    'id' => 23,
                    'parent_id' => NULL,
                    'name' => 'Buku & Alat Tulis',
                    'slug' => 'buku-alat-tulis',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/998c7682fd5e7a3563b2ad00aaa4e6f3_tn.png',
                    'created_at' => '2021-09-13 09:21:29',
                    'updated_at' => '2021-09-13 09:21:29',
                    'deleted_at' => NULL,
                ),
                23 =>
                array(
                    'id' => 24,
                    'parent_id' => NULL,
                    'name' => 'Fotografi',
                    'slug' => 'fotografi',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/9abe95c0c755968c5114f084ee11b8cb_tn.png',
                    'created_at' => '2021-09-13 09:21:37',
                    'updated_at' => '2021-09-13 09:21:37',
                    'deleted_at' => NULL,
                ),
                24 =>
                array(
                    'id' => 25,
                    'parent_id' => NULL,
                    'name' => 'Voucher',
                    'slug' => 'voucher',
                    'desc' => NULL,
                    'SKU' => NULL,
                    'image' => 'files/shares/6e47e2193202b93490bc430ce6732c79_tn.png',
                    'created_at' => '2021-09-13 09:21:42',
                    'updated_at' => '2021-09-13 09:21:42',
                    'deleted_at' => NULL,
                ),
            ));

        } catch (Exception $e) {
            throw new Exception('Exception occur ' . $e);
            DB::rollBack();
        }

        DB::commit();
    }
}
