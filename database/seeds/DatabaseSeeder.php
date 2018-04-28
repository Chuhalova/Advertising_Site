<?php

use App\Category;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $role_author = new Role();
        $role_author->name = 'Moderator';
        $role_author->save();

        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->save();

        $user_moderator = new User();
        $user_moderator -> id = 1 ;
        $user_moderator -> name = 'Veronika';
        $user_moderator -> surname = 'Chuhalova';
        $user_moderator -> email = 'admin@i.ua';
        $user_moderator -> phone = '0972619178';
        $user_moderator -> password = Hash::make('veronika');
        $role_user_moderator = Role::where('name', 'Moderator')->first();
        $user_moderator->assignRole($role_user_moderator);
        $user_moderator -> save();

        $user_user = new User();
        $user_user -> id = 2;
        $user_user -> name = 'Veronika';
        $user_user -> surname = 'Chuhalova';
        $user_user -> email = 'veronika@i.ua';
        $user_user -> phone = '0972619179';
        $user_user -> password = Hash::make('veronika');
        $role_user_use = Role::where('name', 'User')->first();
        $user_user->assignRole($role_user_use);
        $user_user -> save();

        $category_kids_world = new Category();
        $category_kids_world -> id = 1;
        $category_kids_world -> category = 'Дитячий світ';
        $category_kids_world->save();

        $category_kids_world_clothing = new Category();
        $category_kids_world_clothing -> id = 2;
        $category_kids_world_clothing -> category = 'Дитячий одяг';
        $category_kids_world_clothing ->parent_id = 1;
        $category_kids_world_clothing->save();

        $category_kids_world_shoes = new Category();
        $category_kids_world_shoes -> id = 3;
        $category_kids_world_shoes -> category = 'Дитяче взуття';
        $category_kids_world_shoes ->parent_id = 1;
        $category_kids_world_shoes->save();

        $category_kids_world_carriages = new Category();
        $category_kids_world_carriages -> id = 4;
        $category_kids_world_carriages -> category = 'Дитячі коляски';
        $category_kids_world_carriages ->parent_id = 1;
        $category_kids_world_carriages -> save();

        $category_kids_world_toys = new Category();
        $category_kids_world_toys -> id = 5;
        $category_kids_world_toys -> category = 'Іграшки';
        $category_kids_world_toys ->parent_id = 1;
        $category_kids_world_toys -> save();

        $category_kids_world_furniture = new Category();
        $category_kids_world_furniture -> id = 6;
        $category_kids_world_furniture -> category = 'Дитячі меблі';
        $category_kids_world_furniture ->parent_id = 1;
        $category_kids_world_furniture -> save();

        $category_kids_world_feedingProducts = new Category();
        $category_kids_world_feedingProducts -> id = 7;
        $category_kids_world_feedingProducts -> category = 'Товари для кормління';
        $category_kids_world_feedingProducts ->parent_id = 1;
        $category_kids_world_feedingProducts -> save();

        $category_kids_world_forPupils = new Category();
        $category_kids_world_forPupils -> id = 8;
        $category_kids_world_forPupils -> category = 'Товари для школярів';
        $category_kids_world_forPupils ->parent_id = 1;
        $category_kids_world_forPupils -> save();

        $category_realty = new Category();
        $category_realty -> id = 10;
        $category_realty -> category = 'Нерухомість';
        $category_realty->save();

        $category_realty_rooms = new Category();
        $category_realty_rooms -> id = 11;
        $category_realty_rooms -> category = 'Кімнати';
        $category_realty_rooms ->parent_id = 10;
        $category_realty_rooms ->save();

        $category_realty_appart = new Category();
        $category_realty_appart -> id = 12;
        $category_realty_appart -> category = 'Квартири';
        $category_realty_appart ->parent_id = 10;
        $category_realty_appart ->save();

        $category_realty_private = new Category();
        $category_realty_private -> id = 13;
        $category_realty_private -> category = 'Будинки';
        $category_realty_private ->parent_id = 10;
        $category_realty_private ->save();

        $category_realty_parking = new Category();
        $category_realty_parking -> id = 14;
        $category_realty_parking -> category = 'Гаражі, парковки';
        $category_realty_parking ->parent_id = 10;
        $category_realty_parking ->save();

        $category_realty_place = new Category();
        $category_realty_place -> id = 15;
        $category_realty_place -> category = 'Земельні ділянки';
        $category_realty_place ->parent_id = 10;
        $category_realty_place ->save();

        $category_transport = new Category();
        $category_transport -> id = 16;
        $category_transport -> category = 'Транспорт';
        $category_transport ->save();

        $category_transport_citycar = new Category();
        $category_transport_citycar -> id = 17;
        $category_transport_citycar -> category = 'Легкові автомобілі';
        $category_transport_citycar -> parent_id = 16;
        $category_transport_citycar ->save();

        $category_transport_hardcar = new Category();
        $category_transport_hardcar -> id = 18;
        $category_transport_hardcar -> category = 'Вантажні автомобілі';
        $category_transport_hardcar -> parent_id = 16;
        $category_transport_hardcar ->save();

        $category_transport_bus = new Category();
        $category_transport_bus -> id = 19;
        $category_transport_bus -> category = 'Автобуси';
        $category_transport_bus -> parent_id = 16;
        $category_transport_bus ->save();

        $category_transport_moto = new Category();
        $category_transport_moto -> id = 20;
        $category_transport_moto -> category = 'Мотоцикли';
        $category_transport_moto -> parent_id = 16;
        $category_transport_moto ->save();

        $category_transport_water = new Category();
        $category_transport_water -> id = 21;
        $category_transport_water -> category = 'Водний транспорт';
        $category_transport_water -> parent_id = 16;
        $category_transport_water ->save();

        $category_transport_air = new Category();
        $category_transport_air -> id = 22;
        $category_transport_air -> category = 'Повітряний транспорт';
        $category_transport_air -> parent_id = 16;
        $category_transport_air ->save();

        $category_transport_aftercar = new Category();
        $category_transport_aftercar -> id = 23;
        $category_transport_aftercar -> category = 'Прицепи';
        $category_transport_aftercar -> parent_id = 16;
        $category_transport_aftercar ->save();

        $category_life = new Category();
        $category_life -> id = 25;
        $category_life -> category = 'Життя прекрасне';
        $category_life ->save();

        $category_life_coll = new Category();
        $category_life_coll -> id = 26;
        $category_life_coll -> category = 'Колекціонування';
        $category_life_coll -> parent_id = 25;
        $category_life_coll ->save();

        $category_life_music = new Category();
        $category_life_music -> id = 27;
        $category_life_music -> parent_id = 25;
        $category_life_music -> category = 'Музика';
        $category_life_music ->save();

        $category_life_sport = new Category();
        $category_life_sport -> id = 28;
        $category_life_sport -> parent_id = 25;
        $category_life_sport -> category = 'Спорт';
        $category_life_sport ->save();

        $category_life_read = new Category();
        $category_life_read -> id = 29;
        $category_life_read -> parent_id = 25;
        $category_life_read -> category = 'Читання';
        $category_life_read ->save();

        $category_life_concerts = new Category();
        $category_life_concerts -> id = 30;
        $category_life_concerts -> parent_id = 25;
        $category_life_concerts -> category = 'Концерти і т.п.';
        $category_life_concerts ->save();

        $category_life_relax = new Category();
        $category_life_relax -> id = 31;
        $category_life_relax -> parent_id = 25;
        $category_life_relax -> category = 'Відпочинок';
        $category_life_relax ->save();

        $category_fashion = new Category();
        $category_fashion -> id = 33;
        $category_fashion -> category = 'Мода';
        $category_fashion ->save();

        $category_fashion_women_clothes= new Category();
        $category_fashion_women_clothes -> id = 34;
        $category_fashion_women_clothes -> parent_id = 33;
        $category_fashion_women_clothes -> category = 'Жіночий одяг';
        $category_fashion_women_clothes ->save();

        $category_fashion_men_clothes= new Category();
        $category_fashion_men_clothes -> id = 35;
        $category_fashion_men_clothes -> parent_id = 33;
        $category_fashion_men_clothes -> category = 'Чоловічий одяг';
        $category_fashion_men_clothes ->save();

        $category_fashion_women_shoes= new Category();
        $category_fashion_women_shoes -> id =36;
        $category_fashion_women_shoes -> parent_id = 33;
        $category_fashion_women_shoes -> category = 'Жіноче взуття';
        $category_fashion_women_shoes ->save();

        $category_fashion_men_shoes= new Category();
        $category_fashion_men_shoes -> id =37;
        $category_fashion_men_shoes -> parent_id = 33;
        $category_fashion_men_shoes -> category = 'Чоловіче взуття';
        $category_fashion_men_shoes ->save();

        $category_fashion_accessories= new Category();
        $category_fashion_accessories -> id =38;
        $category_fashion_accessories -> parent_id = 33;
        $category_fashion_accessories -> category = 'Аксесуари';
        $category_fashion_accessories ->save();

        $category_housegarden = new Category();
        $category_housegarden -> id = 39;
        $category_housegarden -> category = 'Дім і сад';
        $category_housegarden ->save();

        $category_housegarden_furniture= new Category();
        $category_housegarden_furniture -> parent_id = 39;
        $category_housegarden_furniture -> id = 40;
        $category_housegarden_furniture-> category = 'Меблі';
        $category_housegarden_furniture->save();

        $category_housegarden_garden= new Category();
        $category_housegarden_garden-> parent_id = 39;
        $category_housegarden_garden -> id =41;
        $category_housegarden_garden-> category = 'Сад';
        $category_housegarden_garden->save();

        $category_housegarden_interier= new Category();
        $category_housegarden_interier-> parent_id = 39;
        $category_housegarden_interier -> id =42;
        $category_housegarden_interier-> category = 'Оформлення будинку';
        $category_housegarden_interier->save();

        $category_housegarden_buildingFixing= new Category();
        $category_housegarden_buildingFixing-> parent_id = 39;
        $category_housegarden_buildingFixing -> id =43;
        $category_housegarden_buildingFixing-> category = 'Ремонт та будівництво';
        $category_housegarden_buildingFixing->save();

        $category_housegarden_forcooking= new Category();
        $category_housegarden_forcooking-> parent_id = 39;
        $category_housegarden_forcooking -> id =44;
        $category_housegarden_forcooking-> category = 'Товари для кухні';
        $category_housegarden_forcooking->save();

        $category_housegarden_washroom= new Category();
        $category_housegarden_washroom-> parent_id = 39;
        $category_housegarden_washroom -> id =45;
        $category_housegarden_washroom-> category = 'Товари для ванної';
        $category_housegarden_washroom->save();

        $category_electro = new Category();
        $category_electro -> id = 46;
        $category_electro -> category = 'Електроніка';
        $category_electro ->save();

        $category_electro_phones = new Category();
        $category_electro_phones -> parent_id = 46;
        $category_electro_phones -> id = 47;
        $category_electro_phones -> category = 'Телефони та комплектуючі';
        $category_electro_phones ->save();

        $category_electro_comps = new Category();
        $category_electro_comps -> parent_id = 46;
        $category_electro_comps -> id = 48;
        $category_electro_comps -> category = "Комп'ютериб ноутбуки та комплектуючі";
        $category_electro_comps ->save();

        $category_electro_media = new Category();
        $category_electro_media -> parent_id = 46;
        $category_electro_media -> id = 49;
        $category_electro_media -> category = 'Відео, аудіо, фото';
        $category_electro_media ->save();

        $category_electro_tv = new Category();
        $category_electro_tv -> parent_id = 46;
        $category_electro_tv -> id = 50;
        $category_electro_tv -> category = 'Телевізори та комплектуючі';
        $category_electro_tv ->save();

        $category_electro_games = new Category();
        $category_electro_games -> parent_id = 46;
        $category_electro_games -> id = 51;
        $category_electro_games -> category = 'Ігри та комплектуючі';
        $category_electro_games ->save();

        $category_electro_minipc = new Category();
        $category_electro_minipc -> parent_id = 46;
        $category_electro_minipc -> id = 52;
        $category_electro_minipc -> category = 'Планшеті, електронні книги і т.п.';
        $category_electro_minipc ->save();

        $category_electro_home = new Category();
        $category_electro_home -> parent_id = 46;
        $category_electro_home -> id = 53;
        $category_electro_home -> category = 'Техніка для дому';
        $category_electro_home ->save();

        $category_electro_cook = new Category();
        $category_electro_cook -> parent_id = 46;
        $category_electro_cook -> id = 54;
        $category_electro_cook -> category = 'Техніка для кухні';
        $category_electro_cook ->save();

        $category_electro_individ = new Category();
        $category_electro_individ -> parent_id = 46;
        $category_electro_individ -> id = 55;
        $category_electro_individ -> category = 'Техніка для особистих потреб';
        $category_electro_individ ->save();
    }
}
