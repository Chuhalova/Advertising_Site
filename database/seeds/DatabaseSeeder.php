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

        $adv = new \App\Advertisement();
        $adv -> id = 1;
        $adv -> title = 'Джинси';
        $adv -> description = 'Джинси на дівчинку 10 років';
        $adv -> price = '200';
        $adv -> status = 'active';
        $adv -> condition = 'б/у';
        $adv -> category_id = 2;
        $adv -> created_at = '2018-05-06 14:10:38';
        $adv -> user_id = 2;
        $adv -> save();

        $advImg1 = new \App\AdvImage();
        $advImg1 -> id = 1;
        $advImg1 -> image = 'public/images/vHGsMaDyqLrfwYGQR7A0xeX4fnXE7U9VXb3iV6jx.jpeg';
        $advImg1 -> advertisement_id = 1;
        $advImg1 -> save();

        $advImg91 = new \App\AdvImage();
        $advImg91 -> id = 91;
        $advImg91 -> image = 'public/images/rT4sSmxRfV1oeompIv35yP10argYBW7UDN5ivY4v.jpeg';
        $advImg91 -> advertisement_id = 1;
        $advImg91 -> save();

        $adv2 = new \App\Advertisement();
        $adv2 -> id = 2;
        $adv2 -> title = 'Гольфик';
        $adv2 -> description = 'Гарний гольфик на хлопчика 2 роки. Голубого кольору.';
        $adv2 -> price = '100';
        $adv2 -> status = 'active';
        $adv2 -> condition = 'б/у';
        $adv2 -> category_id = 2;
        $adv2 -> created_at = '2018-05-06 14:10:38';
        $adv2 -> user_id = 2;
        $adv2 -> save();

        $advImg12 = new \App\AdvImage();
        $advImg12 -> id = 2;
        $advImg12 -> image = 'public/images/L7lFdY33pyJhZed2YyZco3sBZOuZhM5l4VHYmH3D.jpeg';
        $advImg12 -> advertisement_id = 2;
        $advImg12 -> save();

        $adv3 = new \App\Advertisement();
        $adv3 -> id = 3;
        $adv3 -> title = 'Meizu M3 Note ';
        $adv3 -> description = 'Новий  телефон, купувався в березні.';
        $adv3 -> price = '1666';
        $adv3 -> status = 'active';
        $adv3 -> condition = 'б/у';
        $adv3 -> category_id = 47;
        $adv3 -> created_at = '2018-05-06 14:10:38';
        $adv3 -> user_id = 2;
        $adv3 -> save();

        $adv4 = new \App\Advertisement();
        $adv4 -> id = 4;
        $adv4 -> title = 'Apple Iphone 5';
        $adv4 -> description = 'Старий, але в гарному стані.';
        $adv4 -> price = '2000';
        $adv4 -> status = 'active';
        $adv4 -> condition = 'б/у';
        $adv4 -> category_id = 47;
        $adv4 -> created_at = '2018-05-06 14:10:38';
        $adv4 -> user_id = 2;
        $adv4 -> save();

        $advImg14 = new \App\AdvImage();
        $advImg14 -> id = 4;
        $advImg14 -> image = 'public/images/dOSdt2juU0SBHhyXordPK74t8sFR1vH8ZXv2Anai.jpeg';
        $advImg14 -> advertisement_id = 4;
        $advImg14 -> save();

        $adv5 = new \App\Advertisement();
        $adv5 -> id = 5;
        $adv5 -> title = 'Автобус вольцваген';
        $adv5 -> description = 'Автобус у гарному стані';
        $adv5 -> price = '700000';
        $adv5 -> status = 'active';
        $adv5 -> condition = 'б/у';
        $adv5 -> category_id = 19;
        $adv5 -> created_at = '2018-05-06 14:10:38';
        $adv5 -> user_id = 2;
        $adv5 -> save();

        $advImg15 = new \App\AdvImage();
        $advImg15 -> id = 5;
        $advImg15 -> image = 'public/images/U2tDyB2gksDJ7eiAAV7yrEd18dILlJHlANqRrdx8.jpeg';
        $advImg15 -> advertisement_id = 5;
        $advImg15 -> save();

        $advImg95 = new \App\AdvImage();
        $advImg95 -> id = 95;
        $advImg95 -> image = 'public/images/xNdXa3eD3AaLuZN2pHO1acDm8ivrhfUhtLg5aRkf.jpeg';
        $advImg95 -> advertisement_id = 5;
        $advImg95 -> save();

        $advImg55 = new \App\AdvImage();
        $advImg55 -> id = 55;
        $advImg55 -> image = 'public/images/fPYr0ablpjhj9baAGv1StouNlgQZ8xxD8G1K31PJ.jpeg';
        $advImg55 -> advertisement_id = 5;
        $advImg55 -> save();

        $adv6 = new \App\Advertisement();
        $adv6 -> id = 6;
        $adv6 -> title = 'Кімната в гуртожитку';
        $adv6 -> description = 'Кімната в гуртожитку.В блоці дівчат. Тільки для однієї дівчини.';
        $adv6 -> price = '1000';
        $adv6 -> status = 'active';
        $adv6 -> condition = 'новий';
        $adv6 -> category_id = 10;
        $adv6 -> created_at = '2018-05-06 14:10:38';
        $adv6 -> user_id = 2;
        $adv6 -> save();

        $advImg16 = new \App\AdvImage();
        $advImg16 -> id = 6;
        $advImg16 -> image = 'public/images/c4OCvpkugwlo3l1l8HGHAmJiBgo0CM7fDiitYoAN.jpeg';
        $advImg16 -> advertisement_id = 6;
        $advImg16 -> save();

        $adv7 = new \App\Advertisement();
        $adv7 -> id = 7;
        $adv7 -> title = 'Ділянка в Бучі';
        $adv7 -> description = 'Земельна діянка під забудівлю будиночка . Площа 50 квадратних метрів';
        $adv7 -> price = '500000';
        $adv7 -> status = 'active';
        $adv7 -> condition = 'новий';
        $adv7 -> category_id = 15;
        $adv7 -> created_at = '2018-05-06 14:10:38';
        $adv7 -> user_id = 2;
        $adv7 -> save();

        $adv8 = new \App\Advertisement();
        $adv8 -> id = 8;
        $adv8 -> title = 'Бальні туфельки';
        $adv8 -> description = 'Туфлі для бальних танців - 38 розміру';
        $adv8 -> price = '300';
        $adv8 -> status = 'active';
        $adv8 -> condition = 'новий';
        $adv8 -> category_id = 25;
        $adv8 -> created_at = '2018-05-06 14:10:38';
        $adv8 -> user_id = 2;
        $adv8 -> save();

        $advImg18 = new \App\AdvImage();
        $advImg18 -> id = 8;
        $advImg18 -> image = 'public/images/dkx83jwpKIKebFJkigd84v5whsWn1nVoVqqbQ8VW.jpeg';
        $advImg18 -> advertisement_id = 8;
        $advImg18 -> save();

        $adv9 = new \App\Advertisement();
        $adv9 -> id = 9;
        $adv9 -> title = 'Модель машинки';
        $adv9 -> description = 'Модель машинки';
        $adv9 -> price = '1000';
        $adv9 -> status = 'active';
        $adv9 -> condition = 'новий';
        $adv9 -> category_id = 26;
        $adv9 -> created_at = '2018-05-06 14:10:38';
        $adv9 -> user_id = 2;
        $adv9 -> save();

        $advImg19 = new \App\AdvImage();
        $advImg19 -> id = 9;
        $advImg19 -> image = 'public/images/QnpEFgsh9T0AmwCHsOx2URz3Sorf20nPnSQuV9mG.jpeg';
        $advImg19 -> advertisement_id = 9;
        $advImg19 -> save();

        $advImg98 = new \App\AdvImage();
        $advImg98 -> id = 98;
        $advImg98 -> image = 'public/images/wovvTtObjK3Qi3Q2r7CWIQO3x6tSwu84qcMI5GlU.jpeg';
        $advImg98 -> advertisement_id = 9;
        $advImg98 -> save();

        $advImg97 = new \App\AdvImage();
        $advImg97 -> id = 97;
        $advImg97 -> image = 'public/images/COXt8U6mRzL5M1YnlmZotyIWJAEfoGCpaKvsiIiv.jpeg';
        $advImg97 -> advertisement_id = 9;
        $advImg97 -> save();

        $adv10 = new \App\Advertisement();
        $adv10 -> id = 10;
        $adv10 -> title = 'Лопата для снігу';
        $adv10 -> description = 'Велика лопата для снігу. Ручка - деерво , низ - пластик.';
        $adv10 -> price = '100';
        $adv10 -> status = 'active';
        $adv10 -> condition = 'новий';
        $adv10 -> category_id = 39;
        $adv10 -> created_at = '2018-05-06 14:10:38';
        $adv10 -> user_id = 2;
        $adv10 -> save();

        $advImg10 = new \App\AdvImage();
        $advImg10 -> id = 10;
        $advImg10 -> image = 'public/images/5vUvCMtvvmzSdhqvin2bOdQ3NHSGW44fy5TqWFo7.jpeg';
        $advImg10 -> advertisement_id = 10;
        $advImg10 -> save();

        $advImg99 = new \App\AdvImage();
        $advImg99 -> id = 99;
        $advImg99 -> image = 'public/images/dfiMIgveGWXaLfe4gPGW2Y6mpeZDAmg8vXtLnjDX.jpeg';
        $advImg99 -> advertisement_id = 10;
        $advImg99 -> save();

        $adv11 = new \App\Advertisement();
        $adv11 -> id = 11;
        $adv11 -> title = 'Черпак';
        $adv11 -> description = 'Посудина для кухні - черпак металічний - великий';
        $adv11 -> price = '20';
        $adv11 -> status = 'active';
        $adv11 -> condition = 'новий';
        $adv11 -> category_id = 44;
        $adv11 -> created_at = '2018-05-06 14:10:38';
        $adv11 -> user_id = 2;
        $adv11 -> save();

        $advImg11 = new \App\AdvImage();
        $advImg11 -> id = 11;
        $advImg11 -> image = 'public/images/fFZbTY6FKyEMi3oC4JgRPgkzhW3R66WrboV8Ijsp.jpeg';
        $advImg11 -> advertisement_id = 11;
        $advImg11 -> save();

        $adv12 = new \App\Advertisement();
        $adv12 -> id = 188;
        $adv12 -> title = 'НОВИНКА!Модный купальник. Слитный купальник. Хит 2018';
        $adv12 -> description = 'Абсолютно новый купальник. Качество на высоте !Стильный молодежный купальник. Хорошо пошит, красиво сидит на Фигуре !Для Вашего удобства, у нас есть услуга ПРИМЕРКИ в г.Киев ( максимум 5 купальников за 1 раз ) Размер S M Посадка(талия)- Тип рисунка	принт Застежка	- нет Бретели-  Плавки- слип Чашка-Тип- цельный купальник';
        $adv12 -> price = '200';
        $adv12 -> status = 'inactive';
        $adv12 -> condition = 'новий';
        $adv12 -> category_id = 34;
        $adv12 -> created_at = '2018-05-06 14:10:38';
        $adv12 -> user_id = 2;
        $adv12 -> save();

        $advImg12 = new \App\AdvImage();
        $advImg12 -> id = 188;
        $advImg12 -> image = 'public/images/xdr2Q7n3UJHY1o9yHDXwdjDKqj2Ns9pSSoUMvpZo.jpeg';
        $advImg12 -> advertisement_id = 188 ;
        $advImg12 -> save();

        $advImg12a = new \App\AdvImage();
        $advImg12a -> id = 187;
        $advImg12a -> image = 'public/images/7ENQScxRChAWmg61GS4VNgGjesfHctJD3Zxl0UfD.jpeg';
        $advImg12a -> advertisement_id = 188 ;
        $advImg12a -> save();

        $adv13 = new \App\Advertisement();
        $adv13 -> id = 187;
        $adv13 -> title = 'Прополісні цукерки Прополисные конфеты леденцы';
        $adv13 -> description ='Прополісні цукерки це лікувальні льодяники зроблені дбайливими руками з любов’ю Прополіс володіє потужною протизапальною дією і підвищує імунітет.  Давайте щодня дитині до школи прополісну цукерку – імунітет буде захищеним. Щоденне вживання прополісних цукерок це не лише потужна підтримка імунітету у боротьбі з вірусними інфекційними захворюваннями, але й смаковинка.  Прополіс починає свою активну дію в роті, де бореться з інфекціями порожнини рота і глотки, не допускаючи подальшого розповсюдження інфекції, при коватанні і перетравленні триває бактерицидну дію прополісу.  Ваші діти не люблять ковтати пігулки і випльовують ліки?  Просто поставте на стіл коробочку з нашими прополісними цукерками і Ви побачите, як навіть найменші дітки самі потягнуться до них ручки і отримують від ніжної карамелі не тільки задоволення, а й захист свого здоров’я.';
        $adv13 -> price = '3';
        $adv13 -> status = 'inactive';
        $adv13 -> condition = 'новий';
        $adv13 -> created_at = '2018-05-06 14:10:38';
        $adv13 -> user_id = 2;
        $adv13 -> save();

        $advImg13a = new \App\AdvImage();
        $advImg13a -> id = 186;
        $advImg13a -> image = 'public/images/Y2s9K8YbthKBNEgQreK0exqBWfbbOOTapgwZVjH4.jpeg';
        $advImg13a -> advertisement_id = 187;
        $advImg13a -> save();

        $adv14 = new \App\Advertisement();
        $adv14 -> id = 186;
        $adv14 -> title = '- 21%Дубове ліжко Трансформер';
        $adv14 -> description ='Ліжко Трансформер від фірми Кемпас!З 13.03 по 25.05 діє акція ліжко з дуба по ціні бука!Ціна вказана за обидва спальних місця без матраців!';
        $adv14 -> price = '3460';
        $adv14 -> status = 'inactive';
        $adv14 -> condition = 'новий';
        $adv14 -> created_at = '2018-05-06 14:10:38';
        $adv14 -> user_id = 2;
        $adv14 -> category_id = 40;
        $adv14 -> save();

        $adv15 = new \App\Advertisement();
        $adv15 -> id = 185;
        $adv15 -> title = 'Кросівки бігові Asics';
        $adv15 -> description ='Бігові кросівки. Також підійдуть для залу. Чудова амортизація. Легкі. Ідеальні для тренувань.';
        $adv15 -> price = '750';
        $adv15 -> status = 'inactive';
        $adv15 -> condition = 'новий';
        $adv15 -> created_at = '2018-05-06 14:10:38';
        $adv15 -> user_id = 2;
        $adv15 -> category_id = 36;
        $adv15 -> save();

        $adv16 = new \App\Advertisement();
        $adv16 -> id = 184;
        $adv16 -> title = 'ЗНАХІДКА Manhattan супер стійкі блиски для губ';
        $adv16 -> description ='Manhattan Lip2Last це яскравий колір та суперова стійкість на цілий день! Багато оглядів та відгуків в Інтернеті ! Ви забудете на весь день про підкрашування губ! ';
        $adv16 -> price = '100';
        $adv16 -> status = 'inactive';
        $adv16 -> condition = 'новий';
        $adv16 -> created_at = '2018-05-06 14:10:38';
        $adv16 -> user_id = 2;
        $adv16 -> save();

        $adv19 = new \App\Advertisement();
        $adv19 -> id = 183;
        $adv19 -> title = 'Кукла пупс' ;
        $adv19 -> description ='Каждая, уважающая себя, маленькая мама должна иметь свою собственную дочку, которую можно кормить, укладывать спать и просто весело играть.на ходит на горшок и писает в подгузник.А еще она кушает кашку и пьет из бутылочки, которую ей предложит любимая мамочка. Ручки и лицо куколки изготовлены из мягкого винила. В наборе малышка найдет кроме Валюши бутылочку, мисочку для кашки, соску, ложку и питание. Еще в комплекте есть ванночка, мочалку для купания и горшок. Кукла-пупс Валюша понравится девочкам от 3 лет.';
        $adv19 -> price = '550';
        $adv19 -> status = 'inactive';
        $adv19 -> condition = 'новий';
        $adv19 -> created_at = '2018-05-06 14:10:38';
        $adv19 -> user_id = 2;
        $adv19 -> category_id = 5;
        $adv19 -> save();


        $adv18 = new \App\Advertisement();
        $adv18 -> id = 182;
        $adv18 -> title = 'Кубик - Рубика';
        $adv18 -> description ='Кубик Рубика стандартный';
        $adv18 -> price = '50';
        $adv18 -> status = 'inactive';
        $adv18 -> condition = 'новий';
        $adv18 -> created_at = '2018-05-06 14:10:38';
        $adv18 -> user_id = 2;
        $adv18 -> category_id = 5;
        $adv18 -> save();

        $adv17 = new \App\Advertisement();
        $adv17 -> id = 181;
        $adv17 -> title = 'Туфлі Лодочки "Classic" Турція';
        $adv17 -> description ='Матеріал ЕкоЗамша Каблук 10,5 Колір чорний Брала собі невгадала з розміром=(  Дуже класні Підійдуть на 39 розмір';
        $adv17 -> price = '340';
        $adv17 -> status = 'inactive';
        $adv17 -> condition = 'новий';
        $adv17 -> created_at = '2018-05-06 14:10:38';
        $adv17 -> user_id = 2;
        $adv17 -> category_id = 36;
        $adv17 -> save();

        $advImg17a = new \App\AdvImage();
        $advImg17a -> id = 181;
        $advImg17a -> image = 'public/images/xUdtuezjvIPTKfg3yeC2uANpWEd5rRm8TqqfLOr6.jpeg';
        $advImg17a -> advertisement_id = 181;
        $advImg17a -> save();

        $advImg17 = new \App\AdvImage();
        $advImg17 -> id = 180;
        $advImg17 -> image = 'public/images/jTC7pvty5gWJ7s3k4oSLEFFM2zKUjWOWCEm07O7G.jpeg';
        $advImg17 -> advertisement_id = 181;
        $advImg17 -> save();

        $advImg18 = new \App\AdvImage();
        $advImg18 -> id = 179;
        $advImg18 -> image = 'public/images/T2hjGZbmGGdFMyTu79LXDGYlBI8eA0n32QJL9fXv.jpeg';
        $advImg18 -> advertisement_id = 182;
        $advImg18 -> save();

        $advImg19 = new \App\AdvImage();
        $advImg19 -> id = 178;
        $advImg19 -> image = 'public/images/YmQ3NDSUmdiU0bCLwdBlqIOpUaZlhny1lbzftR8n.jpeg';
        $advImg19 -> advertisement_id = 183;
        $advImg19 -> save();


        $advImg120 = new \App\AdvImage();
        $advImg120-> id = 177;
        $advImg120 -> image = 'public/images/nGfjkZGJCX4NuMqQXYqzXPV74j7vZjEuwXpq3ZSJ.jpeg';
        $advImg120 -> advertisement_id = 184;
        $advImg120 -> save();

        $advImg121 = new \App\AdvImage();
        $advImg121 -> id = 176;
        $advImg121 -> image = 'public/images/jkGB0aDdulMp2CB7a74JkiXmybh1Vd2rSVb6mSqx.jpeg';
        $advImg121 -> advertisement_id = 185;
        $advImg121 -> save();

        $advImg121a = new \App\AdvImage();
        $advImg121a -> id = 175;
        $advImg121a -> image = 'public/images/9RE8JSL2IbmtEJqC9C8mNRq797E1mGXIBrk038ir.jpeg';
        $advImg121a -> advertisement_id = 185;
        $advImg121a -> save();

        $advImg122 = new \App\AdvImage();
        $advImg122 -> id = 174;
        $advImg122 -> image = 'public/images/Tx1i3YFTvcNwoTK8XVDbFa5NUDQjKY4JP9rebM9o.jpeg';
        $advImg122 -> advertisement_id = 186;
        $advImg122 -> save();


    }
}
