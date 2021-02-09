<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelurahans')->insert([
            ['kode_kelurahan' => 1101, 'id_kecamatan' => 1, 'nama_kelurahan' => "ALUS ALUS"],
            ['kode_kelurahan' => 1102, 'id_kecamatan' => 1, 'nama_kelurahan' => "ANA AO"],
            ['kode_kelurahan' => 1103, 'id_kecamatan' => 1, 'nama_kelurahan' => "BADEGONG"],
            ['kode_kelurahan' => 1104, 'id_kecamatan' => 1, 'nama_kelurahan' => "BATU RALANG"],
            ['kode_kelurahan' => 1105, 'id_kecamatan' => 1, 'nama_kelurahan' => "BLANG SEBEL"],
            ['kode_kelurahan' => 1106, 'id_kecamatan' => 1, 'nama_kelurahan' => "KEBUN BARU"],
            ['kode_kelurahan' => 1107, 'id_kecamatan' => 1, 'nama_kelurahan' => "LABUHAN BAJAU"],
            ['kode_kelurahan' => 1108, 'id_kecamatan' => 1, 'nama_kelurahan' => "LABUHAN BAKTI"],
            ['kode_kelurahan' => 1109, 'id_kecamatan' => 1, 'nama_kelurahan' => "LABUHAN JAYA"],
            ['kode_kelurahan' => 1110, 'id_kecamatan' => 1, 'nama_kelurahan' => "LATALING"],
            ['kode_kelurahan' => 1111, 'id_kecamatan' => 1, 'nama_kelurahan' => "LATIUNG"],
            ['kode_kelurahan' => 1112, 'id_kecamatan' => 1, 'nama_kelurahan' => "PASIR TINGGI"],
            ['kode_kelurahan' => 1113, 'id_kecamatan' => 1, 'nama_kelurahan' => "PULAU BENGKALAK"],
            ['kode_kelurahan' => 1114, 'id_kecamatan' => 1, 'nama_kelurahan' => "SEUNEUBOK"],
            ['kode_kelurahan' => 1115, 'id_kecamatan' => 1, 'nama_kelurahan' => "SUAK LAMATAN"],
            ['kode_kelurahan' => 1116, 'id_kecamatan' => 1, 'nama_kelurahan' => "ULUL MAYANG"],
            ['kode_kelurahan' => 1117, 'id_kecamatan' => 1, 'nama_kelurahan' => "TRANS JERNGE"],
            ['kode_kelurahan' => 1118, 'id_kecamatan' => 1, 'nama_kelurahan' => "TRANS MERANTI"],
            ['kode_kelurahan' => 1119, 'id_kecamatan' => 1, 'nama_kelurahan' => "TRANS BARU"],
            ['kode_kelurahan' => 1120, 'id_kecamatan' => 2, 'nama_kelurahan' => "AIR DINGIN"],
            ['kode_kelurahan' => 1121, 'id_kecamatan' => 2, 'nama_kelurahan' => "AIR PINANG"],
            ['kode_kelurahan' => 1122, 'id_kecamatan' => 2, 'nama_kelurahan' => "AMAITENG MULIA"],
            ['kode_kelurahan' => 1123, 'id_kecamatan' => 2, 'nama_kelurahan' => "AMERIA BAHAGIA"],
            ['kode_kelurahan' => 1124, 'id_kecamatan' => 2, 'nama_kelurahan' => "GANTING"],
            ['kode_kelurahan' => 1125, 'id_kecamatan' => 2, 'nama_kelurahan' => "KOTA BATU"],
            ['kode_kelurahan' => 1126, 'id_kecamatan' => 2, 'nama_kelurahan' => "KUALA MAKMUR"],
            ['kode_kelurahan' => 1127, 'id_kecamatan' => 2, 'nama_kelurahan' => "LINGGI"],
            ['kode_kelurahan' => 1128, 'id_kecamatan' => 2, 'nama_kelurahan' => "LUGU"],
            ['kode_kelurahan' => 1129, 'id_kecamatan' => 2, 'nama_kelurahan' => "PULAU SIUMAT"],
            ['kode_kelurahan' => 1130, 'id_kecamatan' => 2, 'nama_kelurahan' => "SEFOYAN"],
            ['kode_kelurahan' => 1131, 'id_kecamatan' => 2, 'nama_kelurahan' => "SINABANG"],
            ['kode_kelurahan' => 1132, 'id_kecamatan' => 2, 'nama_kelurahan' => "SUAK BULUH"],
            ['kode_kelurahan' => 1133, 'id_kecamatan' => 2, 'nama_kelurahan' => "SUKA JAYA"],
            ['kode_kelurahan' => 1134, 'id_kecamatan' => 2, 'nama_kelurahan' => "SUKA KARYA"],
            ['kode_kelurahan' => 1135, 'id_kecamatan' => 2, 'nama_kelurahan' => "SUKA MAJU"],
            ['kode_kelurahan' => 1136, 'id_kecamatan' => 2, 'nama_kelurahan' => "UJUNG TINGGI"],
            ['kode_kelurahan' => 1137, 'id_kecamatan' => 3, 'nama_kelurahan' => "ANGKEO"],
            ['kode_kelurahan' => 1138, 'id_kecamatan' => 3, 'nama_kelurahan' => "AWE KECIL"],
            ['kode_kelurahan' => 1139, 'id_kecamatan' => 3, 'nama_kelurahan' => "AWE SEUBAL"],
            ['kode_kelurahan' => 1140, 'id_kecamatan' => 3, 'nama_kelurahan' => "BUNON"],
            ['kode_kelurahan' => 1141, 'id_kecamatan' => 3, 'nama_kelurahan' => "INOR"],
            ['kode_kelurahan' => 1142, 'id_kecamatan' => 3, 'nama_kelurahan' => "LAAYON"],
            ['kode_kelurahan' => 1143, 'id_kecamatan' => 3, 'nama_kelurahan' => "LANTIK"],
            ['kode_kelurahan' => 1144, 'id_kecamatan' => 3, 'nama_kelurahan' => "LEUBANG"],
            ['kode_kelurahan' => 1145, 'id_kecamatan' => 3, 'nama_kelurahan' => "LEUBANG HULU"],
            ['kode_kelurahan' => 1146, 'id_kecamatan' => 3, 'nama_kelurahan' => "MAUDIL"],
            ['kode_kelurahan' => 1147, 'id_kecamatan' => 3, 'nama_kelurahan' => "NAIBOS"],
            ['kode_kelurahan' => 1148, 'id_kecamatan' => 3, 'nama_kelurahan' => "NANCALA"],
            ['kode_kelurahan' => 1149, 'id_kecamatan' => 3, 'nama_kelurahan' => "PULAU TEUPAH"],
            ['kode_kelurahan' => 1150, 'id_kecamatan' => 3, 'nama_kelurahan' => "SALUR"],
            ['kode_kelurahan' => 1151, 'id_kecamatan' => 3, 'nama_kelurahan' => "SALUR LASENGALU"],
            ['kode_kelurahan' => 1152, 'id_kecamatan' => 3, 'nama_kelurahan' => "SALUR LATUN"],
            ['kode_kelurahan' => 1153, 'id_kecamatan' => 3, 'nama_kelurahan' => "SILENGAS"],
            ['kode_kelurahan' => 1154, 'id_kecamatan' => 3, 'nama_kelurahan' => "SITAL"],
            ['kode_kelurahan' => 1155, 'id_kecamatan' => 4, 'nama_kelurahan' => "LABUAH"],
            ['kode_kelurahan' => 1156, 'id_kecamatan' => 4, 'nama_kelurahan' => "NANCAWA"],
            ['kode_kelurahan' => 1157, 'id_kecamatan' => 4, 'nama_kelurahan' => "ABAIL"],
            ['kode_kelurahan' => 1158, 'id_kecamatan' => 4, 'nama_kelurahan' => "SIMPANG ABAIL"],
            ['kode_kelurahan' => 1159, 'id_kecamatan' => 4, 'nama_kelurahan' => "LIANTING"],
            ['kode_kelurahan' => 1160, 'id_kecamatan' => 4, 'nama_kelurahan' => "BUSUNG INDAH"],
            ['kode_kelurahan' => 1161, 'id_kecamatan' => 4, 'nama_kelurahan' => "KAHAD"],
            ['kode_kelurahan' => 1162, 'id_kecamatan' => 4, 'nama_kelurahan' => "MATANURUNG"],
            ['kode_kelurahan' => 1163, 'id_kecamatan' => 4, 'nama_kelurahan' => "LASIKIN"],
            ['kode_kelurahan' => 1164, 'id_kecamatan' => 4, 'nama_kelurahan' => "SUA-SUA"],
            ['kode_kelurahan' => 1165, 'id_kecamatan' => 4, 'nama_kelurahan' => "BATU-BATU"],
            ['kode_kelurahan' => 1166, 'id_kecamatan' => 4, 'nama_kelurahan' => "SITUBUK"],
            ['kode_kelurahan' => 1167, 'id_kecamatan' => 5, 'nama_kelurahan' => "DIHIT"],
            ['kode_kelurahan' => 1168, 'id_kecamatan' => 5, 'nama_kelurahan' => "KAMPUNG AIE"],
            ['kode_kelurahan' => 1169, 'id_kecamatan' => 5, 'nama_kelurahan' => "KUTA BARU"],
            ['kode_kelurahan' => 1170, 'id_kecamatan' => 5, 'nama_kelurahan' => "LAKUBANG"],
            ['kode_kelurahan' => 1171, 'id_kecamatan' => 5, 'nama_kelurahan' => "LAMAYANG"],
            ['kode_kelurahan' => 1172, 'id_kecamatan' => 5, 'nama_kelurahan' => "LAMBAYA"],
            ['kode_kelurahan' => 1173, 'id_kecamatan' => 5, 'nama_kelurahan' => "LATITIK"],
            ['kode_kelurahan' => 1174, 'id_kecamatan' => 5, 'nama_kelurahan' => "LAUKE"],
            ['kode_kelurahan' => 1175, 'id_kecamatan' => 5, 'nama_kelurahan' => "LAUREE"],
            ['kode_kelurahan' => 1176, 'id_kecamatan' => 5, 'nama_kelurahan' => "LAUN SORIP"],
            ['kode_kelurahan' => 1177, 'id_kecamatan' => 5, 'nama_kelurahan' => "PUTRA JAYA"],
            ['kode_kelurahan' => 1178, 'id_kecamatan' => 5, 'nama_kelurahan' => "SEBBE"],
            ['kode_kelurahan' => 1179, 'id_kecamatan' => 5, 'nama_kelurahan' => "SITUFA JAYA"],
            ['kode_kelurahan' => 1180, 'id_kecamatan' => 5, 'nama_kelurahan' => "SUAK BARU"],
            ['kode_kelurahan' => 1181, 'id_kecamatan' => 5, 'nama_kelurahan' => "WEL LANGKUM"],
            ['kode_kelurahan' => 1182, 'id_kecamatan' => 5, 'nama_kelurahan' => "WEL WEL"],
            ['kode_kelurahan' => 1183, 'id_kecamatan' => 6, 'nama_kelurahan' => "BABUSSALAM"],
            ['kode_kelurahan' => 1184, 'id_kecamatan' => 6, 'nama_kelurahan' => "BULU HADIK"],
            ['kode_kelurahan' => 1185, 'id_kecamatan' => 6, 'nama_kelurahan' => "GUNUNG PUTIH"],
            ['kode_kelurahan' => 1186, 'id_kecamatan' => 6, 'nama_kelurahan' => "KUALA BAKTI"],
            ['kode_kelurahan' => 1187, 'id_kecamatan' => 6, 'nama_kelurahan' => "KUALA BARU"],
            ['kode_kelurahan' => 1188, 'id_kecamatan' => 6, 'nama_kelurahan' => "LUAN BALU"],
            ['kode_kelurahan' => 1189, 'id_kecamatan' => 6, 'nama_kelurahan' => "LUGU SEBAHAK"],
            ['kode_kelurahan' => 1190, 'id_kecamatan' => 6, 'nama_kelurahan' => "MUARA AMAN"],
            ['kode_kelurahan' => 1191, 'id_kecamatan' => 6, 'nama_kelurahan' => "SAMBAY"],
            ['kode_kelurahan' => 1192, 'id_kecamatan' => 6, 'nama_kelurahan' => "TANJUNG RAYA"],
            ['kode_kelurahan' => 1193, 'id_kecamatan' => 6, 'nama_kelurahan' => ""],
            // Babussalam
            // Bulu Hadik
            // Gunung Putih
            // Kuala Bakti
            // Kuala Baru
            // Luan Balu
            // Lugu Sebahak
            // Muara Aman
            // Sambay
            // Tanjung Raya
        ]);
    }
}
