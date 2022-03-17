<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = array(
            array('id' => '2','code' => '007','name' => 'ALPHAPRESS 1MG TAB 10X10S','brand' => 'ALPHAPRESS','team' => 'IMG'),
            array('id' => '3','code' => '008','name' => 'ALPHAPRESS 2MG TAB 10X10S','brand' => 'ALPHAPRESS','team' => 'IMG'),
            array('id' => '16','code' => '037','name' => 'BIGMET FC 500MG TAB 10X10S','brand' => 'BIGMET','team' => 'IMG'),
            array('id' => '17','code' => '038','name' => 'BIGMET FC 850MG TAB 10X10S','brand' => 'BIGMET','team' => 'IMG'),
            array('id' => '19','code' => '040','name' => 'CARDIPIN 5MG TAB 50S','brand' => 'CARDIPIN','team' => 'IMG'),
            array('id' => '71','code' => '161','name' => 'TAVEN 10MG FC TAB 30S','brand' => 'TAVEN','team' => 'IMG'),
            array('id' => '72','code' => '162','name' => 'TAVEN 20MG FC TAB 30S','brand' => 'TAVEN','team' => 'IMG'),
            array('id' => '74','code' => '175','name' => 'GLICRON CR 30MG CAP 3X10S','brand' => 'GLICRON','team' => 'IMG'),
            array('id' => '75','code' => '176','name' => 'GLICRON 80MG TAB 3X10S','brand' => 'GLICRON','team' => 'IMG'),
            array('id' => '80','code' => '186','name' => 'PENDORIL 2MG TAB 10\'S','brand' => 'PENDORIL','team' => 'IMG'),
            array('id' => '92','code' => '223','name' => 'VALZIDE FC TAB 80+12.5MG','brand' => 'VALZIDE','team' => 'IMG'),
            array('id' => '93','code' => '224','name' => 'VALZIDE FC TAB 160+12.5MG','brand' => 'VALZIDE','team' => 'IMG'),
            array('id' => '106','code' => '247','name' => 'OSTAN FC 25MG TAB 3X10S','brand' => 'OSTAN','team' => 'IMG'),
            array('id' => '112','code' => '260','name' => 'CARDIPIN PLUS 5MG TAB 5X10S','brand' => 'CARDIPIN','team' => 'IMG'),
            array('id' => '154','code' => '625','name' => 'TAVEN 40MG FC TAB 30\'S','brand' => 'TAVEN','team' => 'IMG'),
            array('id' => '172','code' => '831','name' => 'URITONE 20MG TAB 3X10S','brand' => 'URITONE','team' => 'IMG'),
            array('id' => '174','code' => '833','name' => 'URITONE 40MG TAB 3X10S','brand' => 'URITONE','team' => 'IMG'),
            array('id' => '184','code' => '850','name' => 'FENOBATE 200 MG CAB5 6S','brand' => 'FENOBATE','team' => 'IMG'),
            array('id' => '196','code' => '889','name' => 'PENDORIL PLUS 2MG TAB 2X10S','brand' => 'PENDORIL','team' => 'IMG'),
            array('id' => '197','code' => '890','name' => 'PENDORIL PLUS 4MG TAB 2X10S','brand' => 'PENDORIL','team' => 'IMG'),
            array('id' => '198','code' => '891','name' => 'PENDORIL 2MG TAB 2X10S','brand' => 'PENDORIL','team' => 'IMG'),
            array('id' => '199','code' => '892','name' => 'PENDORIL 4MG TAB 2X10S','brand' => 'PENDORIL','team' => 'IMG'),
            array('id' => '200','code' => '893','name' => 'PLAGRIN 75MG TAB 2X10S','brand' => 'PLAGRIN','team' => 'IMG'),
            array('id' => '225','code' => '943','name' => 'OSTAN PLUS 50MG TAB 3X10S','brand' => 'OSTAN','team' => 'IMG'),
            array('id' => '226','code' => '944','name' => 'OSTAN PLUS 100MG TAB 3X10S','brand' => 'OSTAN','team' => 'IMG'),
            array('id' => '247','code' => '983','name' => 'BISOREN 2.5MG TAB 3X10S','brand' => 'BISOREN','team' => 'IMG'),
            array('id' => '248','code' => '984','name' => 'BISOREN 5MG TAB 3X10S','brand' => 'BISOREN','team' => 'IMG'),
            array('id' => '257','code' => 'C08','name' => 'BISOREN PLUS FC 5MG TAB 3X10S','brand' => 'BISOREN','team' => 'IMG'),
            array('id' => '258','code' => 'C09','name' => 'BISOREN PLUS FC 2.5MG TAB 3X10S','brand' => 'BISOREN','team' => 'IMG'),
            array('id' => '263','code' => 'C15','name' => 'ROLIP 5MG TAB 3X10S','brand' => 'ROLIP','team' => 'IMG'),
            array('id' => '331','code' => 'N07','name' => 'ROLIP 10MG TAB 3X10S','brand' => 'ROLIP','team' => 'IMG'),
            array('id' => '336','code' => 'N13','name' => 'PLAGRIN 75MG TAB 3X10S','brand' => 'PLAGRIN','team' => 'IMG'),
            array('id' => '337','code' => 'N14','name' => 'PLAGRIN PLUS TAB 3X10S','brand' => 'PLAGRIN','team' => 'IMG'),
            array('id' => '340','code' => 'N20','name' => 'SITAMET FC 500MG TAB 1X10S','brand' => 'SITAMET','team' => 'IMG'),
            array('id' => '354','code' => 'N41','name' => 'CARDIPIN 5MG TAB 6X10S','brand' => 'CARDIPIN','team' => 'IMG'),
            array('id' => '355','code' => 'N42','name' => 'CARDIPIN PLUS 5MG TAB 6X10S','brand' => 'CARDIPIN','team' => 'IMG'),
            array('id' => '356','code' => 'N43','name' => 'OSTAN FC 50MG TAB 5X10S','brand' => 'OSTAN','team' => 'IMG'),
            array('id' => '371','code' => 'N66','name' => 'VALDIPIN FC 80MG TAB 3X10S','brand' => 'VALDIPIN','team' => 'IMG'),
            array('id' => '372','code' => 'N67','name' => 'VALDIPIN FC 160MG TAB 3X10S','brand' => 'VALDIPIN','team' => 'IMG'),
            array('id' => '383','code' => 'N89','name' => 'AZISAN 40MG TAB 1X10S','brand' => 'AZISAN','team' => 'IMG'),
            array('id' => '384','code' => 'N90','name' => 'AZISAN 80MG TAB 1X10S','brand' => 'AZISAN','team' => 'IMG'),
            array('id' => '385','code' => '039','name' => 'BIGMET XR 500MG','brand' => 'BIGMET','team' => 'IMG'),
            array('id' => '386','code' => 'C66','name' => 'Azisan Plus 40/12.5 mg','brand' => 'AZISAN PLUS','team' => 'IMG'),
            array('id' => '387','code' => '387','name' => 'ANTOGIN ER 500mg','brand' => 'Ranolazine','team' => 'ALL'),
            array('id' => NULL,'code' => '264','name' => 'FUROCEF FC 500MG TAB ','brand' => '','team' => 'SPLIT'),
            array('id' => NULL,'code' => '927','name' => 'FUROCEF FC 250MG TAB ','brand' => '','team' => 'SPLIT'),
            array('id' => NULL,'code' => '102','name' => 'FUROCEF FC SUSPENSION 70ML','brand' => '','team' => 'SPLIT'),
            array('id' => NULL,'code' => '103','name' => 'FUROCEF 750MG IM/IV INJ','brand' => '','team' => 'SPLIT'),
            array('id' => NULL,'code' => '973','name' => 'FUROCEF FC IM/IV INJ 1GM','brand' => '','team' => 'SPLIT'),
            array('id' => NULL,'code' => '104','name' => 'FUROCEF FC IM/IV INJ 1.5GM','brand' => '','team' => 'SPLIT'),
            array('id' => NULL,'code' => '099','name' => 'FUROCEF FC 125MG TAB ','brand' => '','team' => 'SPLIT'),
            array('id' => NULL,'code' => '200','name' => 'FUROCEF FC IM/IV INJ 250MG','brand' => '','team' => 'SPLIT'),
            array('id' => '1','code' => '000','name' => 'None','brand' => 'None','team' => 'None'),
            array('id' => NULL,'code' => 'C63','name' => 'ERPEN IM/IV 1G INJ ','brand' => '','team' => 'ALL'),
            array('id' => '405','code' => 'C74','name' => 'Glinta FC 5mg Tab','brand' => 'Glinta','team' => NULL),
            array('id' => '400','code' => '400','name' => 'Gaba-p','brand' => 'Gaba-p','team' => 'IMG'),
            array('id' => '401','code' => '401','name' => 'ALPHAPRESS XR','brand' => 'ALPHAPRESS XR','team' => 'All'),
            array('id' => '402','code' => 'C83','name' => 'Stark 10mg','brand' => 'Stark','team' => 'All'),
            array('id' => '403','code' => '403','name' => 'Trizedon MR TAB 35mg','brand' => 'Trizedon MR','team' => 'All')
          );

          Product::insert($product);
    }
}
