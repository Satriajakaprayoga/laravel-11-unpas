<?php

namespace App\Models;


class UserStatic
{
    private static $data_user = [
        [
            "nama" => "Sumanto kisno ambasador",
            "email" => "sumanto@gmail.com",
            "nomor" => "085784372637",
            
        ],
        [
            "nama" => "Paijo mangan sate",
            "email" => "paijo@gmail.com",
            "nomor" => "08578404923487",
            
        ],
        [
            "nama" => "Sukija mangan warung",
            "email" => "sukija@gmail.com",
            "nomor" => "08578283423472",
            
        ]
    ];

    public static function all() 
    {
        return self::$data_user;
    }
    public static function find($email)
    {
        $datas = self::$data_user;
        $data = [];
        foreach($datas as $d) {
            if($d["email"] === $email) {
                // Jika email cocok, simpan data tersebut dan hentikan loop
                $data = $d;
                break;
            }
        }
        // Jika tidak ada yang cocok, kembalikan seluruh data
        if (empty($data)) {
            $data = $datas;
        }
        return $data;
    }
};
