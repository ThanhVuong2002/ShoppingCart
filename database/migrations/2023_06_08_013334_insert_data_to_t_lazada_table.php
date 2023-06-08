<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\T_lazada;

class InsertDataToTLazadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $data = [
            ['Name' => 'Thao Nguyen Shop', 'Price' => 2767.33, 'ShopOwner' => 'Thao Nguyen Shop', 'Image' => 'https://lzd-img-global.slatic.net/g/p/d4679bca2d5a64a979841c36232d1e46.jpg_400x400q80.jpg_.webp'],
            ['Name' => 'Thien Huong Food', 'Price' => 49502.77, 'ShopOwner' => 'Thien Huong Food', 'Image' => 'https://lzd-img-global.slatic.net/g/ff/kf/Sbcecc294997f4c7388157461aee082e42.jpg_400x400q80.jpg_.webp'],
            ['Name' => 'Anello', 'Price' => 65133.43, 'ShopOwner' => 'Anello', 'Image' => 'https://lzd-img-global.slatic.net/g/p/f2a0a07450e1dd6ff2b005efba136f28.jpg_400x400q80.jpg_.webp'],
            ['Name' => 'Doreall', 'Price' => 98484.72, 'ShopOwner' => 'Doreall', 'Image' => 'https://lzd-img-global.slatic.net/g/p/37659afd8b724a70462ae8b707463045.jpg_400x400q80.jpg_.webp'],
            ['Name' => 'Kymdan', 'Price' => 88567.97, 'ShopOwner' => 'Kymdan', 'Image' => 'https://lzd-img-global.slatic.net/g/p/c26b4c7ad17669fbae35b4509196da7e.jpg_400x400q80.jpg_.webp'],
            ['Name' => 'DK Haverst', 'Price' => 62819.4, 'ShopOwner' => 'Hạt Dinh Dưỡng', 'Image' => 'https://lzd-img-global.slatic.net/g/p/2910a069442227e89712101e254d2896.jpg_400x400q80.jpg_.webp'],
        ];

        foreach ($data as $item) {
            T_lazada::create($item);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Nếu cần rollback, không có hành động cần thực hiện
    }
}
