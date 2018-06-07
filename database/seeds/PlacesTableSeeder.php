<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = $this->getValues();

        foreach ($values as $name => $zips) {
            foreach ($zips as $zip) {
                DB::table('places')->insert([
                    'name' => $name,
                    'zip' => $zip,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]);
            }
        }

    }

    private function getValues() {
        return [
            "Allermöhe" => [21035,21037,22113],
            "Alsterdorf" => [20251,22297,22335,22337],
            "Altengamme" => [21029,21039],
            "Altenwerder" => [21129],
            "Altona-Altstadt" => [20357,20359,22765,22767,22769],
            "Altona-Nord" => [20257,20357,22765,22769],
            "Bahrenfeld" => [22525,22547,22549,22605,22607,22761,22769],
            "Barmbek-Nord" => [22297,22303,22305,22307,22309],
            "Barmbek-Süd" => [22081,22083,22085,22305],
            "Bergedorf" => [21029,21031,21033,21035,21039],
            "Bergstedt" => [22359,22395],
            "Billbrook" => [22111,22113],
            "Billstedt" => [22111,22113,22115,22117,22119],
            "Billwerder" => [21033,21035,22113],
            "Blankenese" => [22587,22589],
            "Borgfelde" => [20535,20537],
            "Bramfeld" => [22047,22159,22175,22177,22179,22309,22391,22393],
            "Cranz" => [21129],
            "Curslack" => [21029,21037,21039],
            "Dulsberg" => [22049],
            "Duvenstedt" => [22397],
            "Eidelstedt" => [22457,22523,22525,22527,22547],
            "Eilbek" => [22087,22089],
            "Eimsbüttel" => [20144,20253,20255,20257,20259,20357,22525,22527,22769],
            "Eißendorf" => [21073,21075,21077],
            "Eppendorf" => [20249,20251,22529],
            "Farmsen-Berne" => [22145,22159],
            "Finkenwerder" => [21129],
            "Francop" => [21129],
            "Fuhlsbüttel" => [22335,22339,22415,22453],
            "Groß Borstel" => [22297,22335,22453,22529],
            "Groß Flottbek" => [22605,22607,22609],
            "Gut Moor" => [21079],
            "Hamburg-Altstadt" => [20095,20099,20457,20459],
            "Hamm-Mitte" => [20537],
            "Hamm-Nord" => [20535,22087,22089],
            "Hamm-Süd" => [20537],
            "Hammerbrook" => [20097,20537],
            "Harburg" => [21073,21075,21079],
            "Harvestehude" => [20144,20146,20148,20149,20249,20253],
            "Hausbruch" => [21075,21079,21147,21149],
            "Heimfeld" => [21073,21075,21079],
            "Hoheluft-Ost" => [20144,20249,20251,20253],
            "Hoheluft-West" => [20253,20255,22529],
            "Hohenfelde" => [22087,22089],
            "Horn" => [22111,22113,22119],
            "Hummelsbüttel" => [22339,22391,22399,22415,22417],
            "Iserbrook" => [22589],
            "Jenfeld" => [22043,22045],
            "Kirchwerder" => [21037],
            "Kleiner Grasbrook" => [20457,20539],
            "Klostertor" => [20095,20097,20457],
            "Langenbek" => [21077,21079],
            "Langenhorn" => [22415,22417,22419],
            "Lemsahl-Mellingstedt" => [22397,22399],
            "Lohbrügge" => [21031,21033,22113,22115],
            "Lokstedt" => [20253,20255,22527,22529],
            "Lurup" => [22525,22547,22549],
            "Marienthal" => [22041,22043,22089],
            "Marmstorf" => [21077],
            "Moorburg" => [21079,21129],
            "Moorfleet" => [22113],
            "Neuenfelde" => [21129],
            "Neuengamme" => [21037,21039],
            "Neugraben-Fischbek" => [21147,21149],
            "Neuland" => [21079],
            "Neustadt" => [20354,20355,20359,20457,20459],
            "Niendorf" => [22453,22455,22457,22459,22529],
            "Nienstedten" => [22587,22607,22609],
            "Ochsenwerder" => [21037],
            "Ohlsdorf" => [22309,22335,22337,22391],
            "Osdorf" => [22547,22549,22587,22589,22609],
            "Othmarschen" => [22605,22607,22609,22763],
            "Ottensen" => [22763,22765,22767],
            "Poppenbüttel" => [22391,22393,22395,22399],
            "Rahlstedt" => [22143,22145,22147,22149,22359],
            "Reitbrook" => [21037],
            "Rissen" => [22559,22587],
            "Rothenburgsort" => [20539],
            "Rotherbaum" => [20144,20146,20148,20149,20354,20357],
            "Rönneburg" => [21077,21079],
            "Sankt Georg" => [20095,20097,20099],
            "Sankt Pauli" => [20354,20355,20357,20359,20459,22767,22769],
            "Sasel" => [22159,22391,22393,22395],
            "Schnelsen" => [22455,22457,22459],
            "Sinstorf" => [21077,21079],
            "Spadenland" => [21037],
            "Steilshoop" => [22177,22309],
            "Steinwerder" => [20457,21107],
            "Stellingen" => [20255,22525,22527,22529,22769],
            "Sülldorf" => [22587,22589],
            "Tatenberg" => [21037],
            "Tonndorf" => [22041,22043,22045,22047,22149,22159],
            "Uhlenhorst" => [22081,22085,22087],
            "Veddel" => [20539,21109],
            "Volksdorf" => [22359],
            "Waltershof" => [21129],
            "Wandsbek" => [22041,22047,22049,22089],
            "Wellingsbüttel" => [22391,22393],
            "Wilhelmsburg" => [20539,21107,21109],
            "Wilstorf" => [21073,21077,21079],
            "Winterhude" => [20249,22297,22299,22301,22303,22305],
        ];
    }
}
