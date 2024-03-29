<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand = array(
            array('id' => '1','name' => '5X'),
            array('id' => '2','name' => 'Ab Kit'),
            array('id' => '3','name' => 'Algin'),
            array('id' => '4','name' => 'ALPHAPRESS'),
            array('id' => '5','name' => 'ANDROCAP'),
            array('id' => '6','name' => 'ARBECIN'),
            array('id' => '7','name' => 'AZISAN'),
            array('id' => '8','name' => 'Bactamox'),
            array('id' => '9','name' => 'Beconex'),
            array('id' => '10','name' => 'Beconex Zi'),
            array('id' => '11','name' => 'Becosules'),
            array('id' => '12','name' => 'BIGMET'),
            array('id' => '13','name' => 'BISOREN'),
            array('id' => '14','name' => 'Bredicon'),
            array('id' => '15','name' => 'Buviren'),
            array('id' => '16','name' => 'CABOLIN'),
            array('id' => '17','name' => 'Calciferol'),
            array('id' => '18','name' => 'CALCIN'),
            array('id' => '19','name' => 'CARDIPIN'),
            array('id' => '20','name' => 'CARTILAGE'),
            array('id' => '21','name' => 'CATGUT'),
            array('id' => '22','name' => 'CEBUTEN'),
            array('id' => '23','name' => 'CECLOFEN '),
            array('id' => '24','name' => 'CEFAZID'),
            array('id' => '25','name' => 'CEFOTAX'),
            array('id' => '26','name' => 'CEFTIPIME'),
            array('id' => '27','name' => 'CEFTIZONE'),
            array('id' => '28','name' => 'CLINISORB'),
            array('id' => '29','name' => 'CONASYD'),
            array('id' => '30','name' => 'COVAN'),
            array('id' => '31','name' => 'CRIPTINE'),
            array('id' => '32','name' => 'DANZOL'),
            array('id' => '33','name' => 'DELENTIN '),
            array('id' => '34','name' => 'DELTASONE'),
            array('id' => '35','name' => 'DENIXIL'),
            array('id' => '36','name' => 'DESOLON'),
            array('id' => '37','name' => 'DETUS'),
            array('id' => '38','name' => 'DEXA'),
            array('id' => '39','name' => 'DOMIREN'),
            array('id' => '40','name' => 'DONATO'),
            array('id' => '41','name' => 'DOXICAP'),
            array('id' => '42','name' => 'DYSMEN'),
            array('id' => '43','name' => 'E-GEL'),
            array('id' => '44','name' => 'EMCON'),
            array('id' => '45','name' => 'EMEREN '),
            array('id' => '46','name' => 'ENTECA'),
            array('id' => '47','name' => 'EPIDRON'),
            array('id' => '48','name' => 'ERECTA'),
            array('id' => '49','name' => 'ERLOREN'),
            array('id' => '50','name' => 'ERYTHROX'),
            array('id' => '51','name' => 'ESTRACON'),
            array('id' => '52','name' => 'FEBUREN'),
            array('id' => '53','name' => 'FENADIN'),
            array('id' => '54','name' => 'FENOBATE'),
            array('id' => '55','name' => 'FENTANYL'),
            array('id' => '56','name' => 'FERISTAR'),
            array('id' => '57','name' => 'FERIX'),
            array('id' => '58','name' => 'FLONTIN'),
            array('id' => '59','name' => 'FLUSTAR'),
            array('id' => '60','name' => 'FUROCEF'),
            array('id' => '61','name' => 'FUROCLAV'),
            array('id' => '62','name' => 'GABA'),
            array('id' => '63','name' => 'Gaba-p'),
            array('id' => '64','name' => 'GESTRENOL'),
            array('id' => '65','name' => 'GIANE'),
            array('id' => '66','name' => 'GLICRON'),
            array('id' => '67','name' => 'GOODGUT'),
            array('id' => '68','name' => 'GYNOVA'),
            array('id' => '69','name' => 'HASHI'),
            array('id' => '70','name' => 'HICON'),
            array('id' => '71','name' => 'HINCRYL'),
            array('id' => '72','name' => 'HINGLACT'),
            array('id' => '73','name' => 'HISIL'),
            array('id' => '74','name' => 'HONYCOL'),
            array('id' => '75','name' => 'INDULA'),
            array('id' => '76','name' => 'IROPEN'),
            array('id' => '77','name' => 'IVANA'),
            array('id' => '78','name' => 'KAIN'),
            array('id' => '79','name' => 'KETOROLAC'),
            array('id' => '80','name' => 'KIDDI'),
            array('id' => '81','name' => 'KOMFEE '),
            array('id' => '82','name' => 'KOMFEE-P'),
            array('id' => '83','name' => 'KOMFEE-S'),
            array('id' => '84','name' => 'LETROL'),
            array('id' => '85','name' => 'LEVOKING'),
            array('id' => '86','name' => 'LUCAN-R'),
            array('id' => '87','name' => 'LUCENT'),
            array('id' => '88','name' => 'MALE LATEX'),
            array('id' => '89','name' => 'MAXOLAX'),
            array('id' => '90','name' => 'MAXPRO'),
            array('id' => '91','name' => 'MAZIC'),
            array('id' => '92','name' => 'MEDIGARD'),
            array('id' => '93','name' => 'MEDROGEST'),
            array('id' => '94','name' => 'MEF-Q'),
            array('id' => '95','name' => 'MENOREST'),
            array('id' => '96','name' => 'MENVEO'),
            array('id' => '97','name' => 'MERCAZOLE'),
            array('id' => '98','name' => 'MEROPEN'),
            array('id' => '99','name' => 'METORAX'),
            array('id' => '100','name' => 'MEZ'),
            array('id' => '101','name' => 'MICROGEST'),
            array('id' => '102','name' => 'MIDZO'),
            array('id' => '103','name' => 'MIF'),
            array('id' => '104','name' => 'MIFEPRISTONE'),
            array('id' => '105','name' => 'MISOPROSTOL'),
            array('id' => '106','name' => 'MOODS'),
            array('id' => '107','name' => 'NANDRON'),
            array('id' => '108','name' => 'NEOGEST'),
            array('id' => '109','name' => 'NEOS-R'),
            array('id' => '110','name' => 'NEUROBEST'),
            array('id' => '111','name' => 'NORMA-H'),
            array('id' => '112','name' => 'NORMANAL'),
            array('id' => '113','name' => 'NORMENS'),
            array('id' => '114','name' => 'NORRY'),
            array('id' => '115','name' => 'NOVELON'),
            array('id' => '116','name' => 'ODMON'),
            array('id' => '117','name' => 'ORAL REHYDRATION'),
            array('id' => '118','name' => 'ORCEF'),
            array('id' => '119','name' => 'OSTAN'),
            array('id' => '120','name' => 'OVULET'),
            array('id' => '121','name' => 'OXYTON'),
            array('id' => '122','name' => 'PENDORIL'),
            array('id' => '123','name' => 'PHENOCEPT'),
            array('id' => '124','name' => 'PLAGRIN'),
            array('id' => '125','name' => 'POLYCEF'),
            array('id' => '126','name' => 'PRAZOLE'),
            array('id' => '127','name' => 'PREROID '),
            array('id' => '128','name' => 'PROFAST'),
            array('id' => '129','name' => 'PROLIN-R'),
            array('id' => '130','name' => 'PRONAPEN'),
            array('id' => '131','name' => 'PROSCAN'),
            array('id' => '132','name' => 'PROTEMIN'),
            array('id' => '133','name' => 'PROTONIL'),
            array('id' => '134','name' => 'PUSHTIKONA'),
            array('id' => '135','name' => 'PYRA PLUS'),
            array('id' => '136','name' => 'PYRALGIN'),
            array('id' => '137','name' => 'QCIN'),
            array('id' => '138','name' => 'RABIPUR'),
            array('id' => '139','name' => 'RECOF'),
            array('id' => '140','name' => 'RECOX'),
            array('id' => '141','name' => 'REGUMEN'),
            array('id' => '142','name' => 'RENACRYL'),
            array('id' => '143','name' => 'RENAMYCIN'),
            array('id' => '144','name' => 'RENXIT'),
            array('id' => '145','name' => 'RM'),
            array('id' => '146','name' => 'ROLAC'),
            array('id' => '147','name' => 'ROLIP'),
            array('id' => '148','name' => 'Saline(ORS)'),
            array('id' => '149','name' => 'SHARE'),
            array('id' => '150','name' => 'SILK-R'),
            array('id' => '151','name' => 'SITAMET'),
            array('id' => '152','name' => 'SIVICAINE'),
            array('id' => '153','name' => 'SOFENIB'),
            array('id' => '154','name' => 'SPRINKLES'),
            array('id' => '155','name' => 'TAVEN'),
            array('id' => '156','name' => 'TAZOPEN'),
            array('id' => '157','name' => 'THYROX'),
            array('id' => '158','name' => 'TIGOVER'),
            array('id' => '159','name' => 'TOLTER'),
            array('id' => '160','name' => 'TOPLON'),
            array('id' => '161','name' => 'TOPMATE'),
            array('id' => '162','name' => 'TOTIFEN'),
            array('id' => '163','name' => 'TRAMADOL'),
            array('id' => '164','name' => 'TRITIN'),
            array('id' => '165','name' => 'TRUCEF'),
            array('id' => '166','name' => 'TRULAX'),
            array('id' => '167','name' => 'TYROKIN'),
            array('id' => '168','name' => 'URITONE'),
            array('id' => '169','name' => 'VALDIPIN'),
            array('id' => '170','name' => 'VALZIDE'),
            array('id' => '171','name' => 'VCAP'),
            array('id' => '172','name' => 'VITAMIN'),
            array('id' => '173','name' => 'XAMIC'),
            array('id' => '174','name' => 'XANITA'),
            array('id' => '175','name' => 'XENAPRO'),
            array('id' => '176','name' => 'ZITHRIN'),
            array('id' => '177','name' => 'AZISAN PLUS'),
            array('id' => '179','name' => 'ERPEN'),
            array('id' => '180','name' => 'ALPHAPRESS XR'),
            array('id' => '181','name' => 'Stark')
          );

          Brand::insert($brand);
    }
}
