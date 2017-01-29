<?php

use Illuminate\Database\Seeder;
use App\Sector;
class SectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('sectors')->truncate();
		$gasabo=array("Bumbogo", "Gatsata", "Jali", "Gikomero", "Gisozi", "Jabana", "Kinyinya", "Ndera", "Nduba", "Rusororo", "Rutunga"," Kacyiru", "Kimihurura", "Kimironko","Remera");
		foreach ($gasabo as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>1]);
		}

		$kicukiro=array("Gahanga", "Gatenga", "Gikondo", "Kagarama", "Kanombe", "Kicukiro", "Kigarama", "Masaka", "Niboye","Nyarugunga");
		foreach ($kicukiro as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>2]);
		}
		$nyarugenge=array("Gitega", "Kanyinya", "Kigali", "Kimisagara", "Mageragere", "Muhima", "Nyakabanda", "Nyamirambo", "Nyarugenge" ,"Rwezamenyo");
		foreach ($nyarugenge as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>3]);
		}

		$burera=array("Bungwe", "Butaro", "Cyanika", "Cyeru", "Gahunga", "Gatebe", "Gitovu", "Kagogo", "Kinoni", "Kinyababa", "Kivuye", "Nemba", "Rugarama", "Rugendabari", "Ruhunde", "Rusarabuge","Rwerere");
		foreach ($burera as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>4]);
		}
		$gicumbi=array(" Bukure", "Bwisige", "Byumba", "Cyumba", "Giti", "Kaniga", "Manyagiro", "Miyove", "Kageyo"," Mukarange"," Muko", "Mutete", "Nyamiyaga", "Nyankenke II", "Rubaya", "Rukomo", "Rushaki", "Rutare", "Ruvune", "Rwamiko","Shangasha");
		foreach ($gicumbi as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>5]);
		}
		$gakenke=array("Busengo", "Coko"," Cyabingo", "Gakenke", "Gashenyi", "Mugunga", "Janja", "Kamubuga", "Karambo", "Kivuruga", "Mataba", "Minazi", "Muhondo", "Muyongwe"," Muzo"," Nemba"," Ruli", "Rusasa","Rushashi");
		foreach ($gakenke as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>6]);
		} 
		$musanze=array("Busogo", "Cyuve", "Gacaca", "Gashaki", "Gataraga", "Kimonyi", "Kinigi"," Muhoza"," Muko", "Musanze", "Nkotsi", "Nyange"," Remera", "Rwaza","Shingiro");
		foreach ($musanze as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>7]);
		} 
		$rulindo=array("Base", "Burega"," Bushoki", "Buyoga", "Cyinzuzi", "Cyungo"," Kinihira", "Kisaro"," Masoro"," Mbogo", "Murambi", "Ngoma"," Ntarabana", "Rukozo", "Rusiga", "Shyorongi","Tumba");
		foreach ($rulindo as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>8]);
		}
		$gisagara=array("Gikonko", "Gishubi", "Kansi"," Kibilizi", "Kigembe"," Mamba", "Muganza", "Mugombwa"," Mukindo"," Musha", "Ndora", "Nyanza","Save"); 
		foreach ($gisagara as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>9]);
		}
		$huye=array("Gishamvu"," Karama", "Kigoma"," Kinazi"," Maraba"," Mbazi", "Mukura", "Ngoma", "Ruhashya"," Huye"," Rusatira", "Rwaniro"," Simbi","Tumba");
		foreach ($huye as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>10]);
		}
		$kamonyi=array("Gacurabwenge"," Karama", "Kayenzi"," Kayumbu", "Mugina", "Musambira", "Ngamba", "Nyamiyaga", "Nyarubaka", "Rugalika"," Rukoma","Runda");
		foreach ($kamonyi as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>11]);
		}
		$muhanga=array( "Muhanga", "Cyeza"," Kibangu", "Kiyumba", "Mushishiro"," Kabacuzi"," Nyabinoni"," Nyamabuye"," Nyarusange"," Rongi"," Rugendabari","Shyogwe");
		foreach ($muhanga as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>12]);
		}
		$nyamagabe=array(" Buruhukiro", "Cyanika", "Gatare", "Kaduha", "Kamegeli", "Kibirizi", "Kibumbwe", "Kitabi"," Mbazi"," Mugano", "Musange", "Musebeya"," Mushubi"," Nkomane", "Gasaka", "Tare","Uwinkingi");
		foreach ($nyamagabe as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>13]);
		}
		$nyanza=array( "Busasamana", "Busoro"," Cyabakamyi", "Kibirizi", "Kigoma", "Mukingo"," Muyira"," Ntyazo", "Nyagisozi","Rwabicuma");
		foreach ($nyanza as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>14]);
		}
		$nyaruguru=array("Cyahinda"," Busanze", "Kibeho", "Mata"," Munini", "Kivu", "Ngera"," Ngoma"," Nyabimata"," Nyagisozi", "Muganza"," Ruheru"," Ruramba","Rusenge");
		foreach ($nyaruguru as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>15]);
		}
		$ruhango=array("Kinazi" , "Byimana", "Bweramana"," Mbuye"," Ruhango"," Mwendo", "Kinihira"," Ntongwe" ,"Kabagari");
		foreach ($ruhango as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>16]);
		}
		$bugesera=array("Gashora", "Juru"," Kamabuye"," Ntarama"," Mareba"," Mayange"," Musenyi"," Mwogo"," Ngeruka"," Nyamata"," Nyarugenge", "Rilima"," Ruhuha"," Rweru","Shyara");
		foreach ($bugesera as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>17]);
		}
		$gatsibo=array("Gasange", "Gatsibo", "Gitoki", "Kabarore"," Kageyo"," Kiramuruzi"," Kiziguro"," Muhura"," Murambi"," Ngarama"," Nyagihanga"," Remera", "Rugarama","Rwimbogo");
		foreach ($gatsibo as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>18]);
		}
		$kayonza=array("Gahini", "Kabare", "Kabarondo", "Mukarange", "Murama"," Murundi"," Mwiri"," Ndego", "Nyamirama", "Rukara", "Ruramira","Rwinkwavu");
		foreach ($kayonza as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>19]);
		}
		$kirehe=array("Gahara", "Gatore"," Kigarama", "Kigina"," Kirehe", "Mahama", "Mpanga", "Musaza", "Mushikiri"," Nasho"," Nyamugari", "Nyarubuye");
		foreach ($kirehe as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>20]);
		}
		$ngoma=array("Gashanda", "Jarama", "Karembo", "Kazo", "Kibungo"," Mugesera"," Murama", "Mutenderi"," Remera"," Rukira", "Rukumberi"," Rurenge", "Sake ","Zaza");
		foreach ($ngoma as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>21]);
		}
		$nyagatare=array("Rwimiyaga","Karangazi","Nyagatare","Katabagemu","Rukomo","Tabagwe","Musheli","Gatunda","Mimuli","Karama","Matimba","Mukama","Rwempasha","Kiyombe");
		foreach ($nyagatare as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>22]);
		}
		$rwamagana=array("Fumbwe", "Gahengeri", "Gishari", "Karenge"," Kigabiro", "Muhazi"," Munyaga"," Munyiginya"," Musha", "Muyumbu"," Mwulire", "Nyakariro"," Nzige","Rubona");
		foreach ($rwamagana as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>23]);
		}
		$karongi=array();
		foreach ($karongi as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>24]);
		}
		$ngororero=array("Bwira", "Gatumba", "Hindiro", "Kabaya"," Kageyo"," Kavumu"," Matyazo"," Muhanda"," Muhororo", "Ndaro", "Ngororero"," Nyange","Sovu");
		foreach ($ngororero as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>25]);
		}
		$nyabihu=array("Bigogwe", "Jenda", "Jomba", "Kabatwa"," Karago", "Kintobo"," Mukamira"," Muringa"," Rambura", "Rugera"," Rurembo","Shyira");
		foreach ($nyabihu as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>26]);
		}
		$nyamasheke=array("Ruharambuga", "Bushekeri", "Bushenge", "Cyato", "Gihombo"," Kagano"," Kanjongo", "Karambi", "Karengera", "Kirimbi"," Macuba", "Nyabitekeri"," Mahembe", "Rangiro", "Shangi");
		foreach ($nyamasheke as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>27]);
		}
		$rubavu=array("Bugeshi", "Busasamana", "Cyanzarwe", "Gisenyi"," Kanama", "Kanzenze", "Mudende", "Nyakiliba"," Nyamyumba"," Nyundo"," Rubavu","Rugerero");
		foreach ($rubavu as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>28]);
		}
		$rustiro=array("Boneza", "Gihango", "Kigeyo"," Kivumu", "Manihira"," Mukura"," Murunda"," Musasa", "Mushonyi"," Mushubati"," Nyabirasi"," Ruhango" ,"Rusebeya");
		foreach ($rustiro as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>29]);
		}
		$rusizi=array("Bugarama", "Butare", "Bweyeye"," Gikundamvura", "Gashonga", "Giheke", "Gihundwe", "Gitambi", "Kamembe"," Muganza", "Mururu", "Nkanka", "Nkombo"," Nkungu", "Nyakabuye"," Nyakarenzo"," Nzahaha", "Rwimbogo");
		foreach ($rusizi as $value) {
		Sector::create(['sector_name'=>$value,'district_id'=>30]);
		}
    }
}
