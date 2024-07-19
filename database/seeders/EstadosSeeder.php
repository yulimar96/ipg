<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Estados;

class EstadosSeeder extends Seeder
{

    public function run()
    {
        Estados::create(['nombre' => 'Amazonas','color'=>'#6A0304']);
        Estados::create(['nombre' => 'Anzoategui','color'=>'#035c6a']);
        Estados::create(['nombre' => 'Apure','color'=>'#81143a']);
        Estados::create(['nombre' => 'Aragua','color'=>'#67536c']);
        Estados::create(['nombre' => 'Barinas','color'=>'#72a6d2']);
        Estados::create(['nombre' => 'Bolivar','color'=>'#65682f']);
        Estados::create(['nombre' => 'Carabobo','color'=>'#816a54']);
        Estados::create(['nombre' => 'Cojedes','color'=>'#3f51b5']);
        Estados::create(['nombre' => 'Delta Amacuro','color'=>'#2196f3']);
        Estados::create(['nombre' => 'Distrito Capital','color'=>'#0572a3']);
        Estados::create(['nombre' => 'Falcon','color'=>'#009688']);
        Estados::create(['nombre' => 'Guarico','color'=>'#4caf50']);
        Estados::create(['nombre' => 'Lara','color'=>'#587a30']);
        Estados::create(['nombre' => 'Merida','color'=>'#383306a8']);
        Estados::create(['nombre' => 'Miranda','color'=>'#b76f04']);
        Estados::create(['nombre' => 'Monagas','color'=>'#4a3d48']);
        Estados::create(['nombre' => 'Margarita','color'=>'#795548']);
        Estados::create(['nombre' => 'Portuguesa','color'=>'#607d8b']);
        Estados::create(['nombre' => 'Sucre','color'=>'#3a0431']);
        Estados::create(['nombre' => 'Tachira','color'=>'#06233a']);
        Estados::create(['nombre' => 'Trujillo','color'=>'#153722']);
        Estados::create(['nombre' => 'La Guaira','color'=>'#297268ee']);
        Estados::create(['nombre' => 'Yaracuy','color'=>'#033806']);
        Estados::create(['nombre' => 'Zulia','color'=>'#892c2c']);
      
    }
}
