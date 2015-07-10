<?php

/*
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2015 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\TextFormatter\Plugins\Emoji;
use s9e\TextFormatter\Plugins\ParserBase;
class Parser extends ParserBase
{
	protected static $map = ['#⃣'=>'23-20e3','0⃣'=>'30-20e3','1⃣'=>'31-20e3','2⃣'=>'32-20e3','3⃣'=>'33-20e3','4⃣'=>'34-20e3','5⃣'=>'35-20e3','6⃣'=>'36-20e3','7⃣'=>'37-20e3','8⃣'=>'38-20e3','9⃣'=>'39-20e3',':+1:'=>'1f44d',':-1:'=>'1f44e',':100:'=>'1f4af',':1234:'=>'1f522',':8ball:'=>'1f3b1',':a:'=>'1f170',':ab:'=>'1f18e',':abc:'=>'1f524',':abcd:'=>'1f521',':accept:'=>'1f251',':aerial_tramway:'=>'1f6a1',':airplane:'=>'2708',':alarm_clock:'=>'23f0',':alien:'=>'1f47d',':ambulance:'=>'1f691',':anchor:'=>'2693',':angel:'=>'1f47c',':anger:'=>'1f4a2',':angry:'=>'1f620',':anguished:'=>'1f627',':ant:'=>'1f41c',':apple:'=>'1f34e',':aquarius:'=>'2652',':aries:'=>'2648',':arrow_backward:'=>'25c0',':arrow_double_down:'=>'23ec',':arrow_double_up:'=>'23eb',':arrow_down:'=>'2b07',':arrow_down_small:'=>'1f53d',':arrow_forward:'=>'25b6',':arrow_heading_down:'=>'2935',':arrow_heading_up:'=>'2934',':arrow_left:'=>'2b05',':arrow_lower_left:'=>'2199',':arrow_lower_right:'=>'2198',':arrow_right:'=>'27a1',':arrow_right_hook:'=>'21aa',':arrow_up:'=>'2b06',':arrow_up_down:'=>'2195',':arrow_up_small:'=>'1f53c',':arrow_upper_left:'=>'2196',':arrow_upper_right:'=>'2197',':arrows_clockwise:'=>'1f503',':arrows_counterclockwise:'=>'1f504',':art:'=>'1f3a8',':articulated_lorry:'=>'1f69b',':astonished:'=>'1f632',':athletic_shoe:'=>'1f45f',':atm:'=>'1f3e7',':b:'=>'1f171',':baby:'=>'1f476',':baby_bottle:'=>'1f37c',':baby_chick:'=>'1f424',':baby_symbol:'=>'1f6bc',':back:'=>'1f519',':baggage_claim:'=>'1f6c4',':balloon:'=>'1f388',':ballot_box_with_check:'=>'2611',':bamboo:'=>'1f38d',':banana:'=>'1f34c',':bangbang:'=>'203c',':bank:'=>'1f3e6',':bar_chart:'=>'1f4ca',':barber:'=>'1f488',':baseball:'=>'26be',':basketball:'=>'1f3c0',':bath:'=>'1f6c0',':bathtub:'=>'1f6c1',':battery:'=>'1f50b',':bear:'=>'1f43b',':bee:'=>'1f41d',':beer:'=>'1f37a',':beers:'=>'1f37b',':beetle:'=>'1f41e',':beginner:'=>'1f530',':bell:'=>'1f514',':bento:'=>'1f371',':bicyclist:'=>'1f6b4',':bike:'=>'1f6b2',':bikini:'=>'1f459',':bird:'=>'1f426',':birthday:'=>'1f382',':black_circle:'=>'26ab',':black_joker:'=>'1f0cf',':black_large_square:'=>'2b1b',':black_medium_small_square:'=>'25fe',':black_medium_square:'=>'25fc',':black_nib:'=>'2712',':black_small_square:'=>'25aa',':black_square_button:'=>'1f532',':blossom:'=>'1f33c',':blowfish:'=>'1f421',':blue_book:'=>'1f4d8',':blue_car:'=>'1f699',':blue_heart:'=>'1f499',':blush:'=>'1f60a',':boar:'=>'1f417',':boat:'=>'26f5',':bomb:'=>'1f4a3',':book:'=>'1f4d6',':bookmark:'=>'1f516',':bookmark_tabs:'=>'1f4d1',':books:'=>'1f4da',':boom:'=>'1f4a5',':boot:'=>'1f462',':bouquet:'=>'1f490',':bow:'=>'1f647',':bowling:'=>'1f3b3',':boy:'=>'1f466',':bread:'=>'1f35e',':bride_with_veil:'=>'1f470',':bridge_at_night:'=>'1f309',':briefcase:'=>'1f4bc',':broken_heart:'=>'1f494',':bug:'=>'1f41b',':bulb:'=>'1f4a1',':bullettrain_front:'=>'1f685',':bullettrain_side:'=>'1f684',':bus:'=>'1f68c',':busstop:'=>'1f68f',':bust_in_silhouette:'=>'1f464',':busts_in_silhouette:'=>'1f465',':cactus:'=>'1f335',':cake:'=>'1f370',':calendar:'=>'1f4c6',':calling:'=>'1f4f2',':camel:'=>'1f42b',':camera:'=>'1f4f7',':cancer:'=>'264b',':candy:'=>'1f36c',':capital_abcd:'=>'1f520',':capricorn:'=>'2651',':car:'=>'1f697',':card_index:'=>'1f4c7',':carousel_horse:'=>'1f3a0',':cat2:'=>'1f408',':cat:'=>'1f431',':cd:'=>'1f4bf',':chart:'=>'1f4b9',':chart_with_downwards_trend:'=>'1f4c9',':chart_with_upwards_trend:'=>'1f4c8',':checkered_flag:'=>'1f3c1',':cherries:'=>'1f352',':cherry_blossom:'=>'1f338',':chestnut:'=>'1f330',':chicken:'=>'1f414',':children_crossing:'=>'1f6b8',':chocolate_bar:'=>'1f36b',':christmas_tree:'=>'1f384',':church:'=>'26ea',':cinema:'=>'1f3a6',':circus_tent:'=>'1f3aa',':city_sunrise:'=>'1f307',':city_sunset:'=>'1f306',':cl:'=>'1f191',':clap:'=>'1f44f',':clapper:'=>'1f3ac',':clipboard:'=>'1f4cb',':clock1030:'=>'1f565',':clock10:'=>'1f559',':clock1130:'=>'1f566',':clock11:'=>'1f55a',':clock1230:'=>'1f567',':clock12:'=>'1f55b',':clock130:'=>'1f55c',':clock1:'=>'1f550',':clock230:'=>'1f55d',':clock2:'=>'1f551',':clock330:'=>'1f55e',':clock3:'=>'1f552',':clock430:'=>'1f55f',':clock4:'=>'1f553',':clock530:'=>'1f560',':clock5:'=>'1f554',':clock630:'=>'1f561',':clock6:'=>'1f555',':clock730:'=>'1f562',':clock7:'=>'1f556',':clock830:'=>'1f563',':clock8:'=>'1f557',':clock930:'=>'1f564',':clock9:'=>'1f558',':closed_book:'=>'1f4d5',':closed_lock_with_key:'=>'1f510',':closed_umbrella:'=>'1f302',':cloud:'=>'2601',':clubs:'=>'2663',':cn:'=>'1f1e8-1f1f3',':cocktail:'=>'1f378',':coffee:'=>'2615',':cold_sweat:'=>'1f630',':collision:'=>'1f4a5',':computer:'=>'1f4bb',':confetti_ball:'=>'1f38a',':confounded:'=>'1f616',':confused:'=>'1f615',':congratulations:'=>'3297',':construction:'=>'1f6a7',':construction_worker:'=>'1f477',':convenience_store:'=>'1f3ea',':cookie:'=>'1f36a',':cool:'=>'1f192',':cop:'=>'1f46e',':copyright:'=>'a9',':corn:'=>'1f33d',':couple:'=>'1f46b',':couple_with_heart:'=>'1f491',':couplekiss:'=>'1f48f',':cow2:'=>'1f404',':cow:'=>'1f42e',':credit_card:'=>'1f4b3',':crescent_moon:'=>'1f319',':crocodile:'=>'1f40a',':crossed_flags:'=>'1f38c',':crown:'=>'1f451',':cry:'=>'1f622',':crying_cat_face:'=>'1f63f',':crystal_ball:'=>'1f52e',':cupid:'=>'1f498',':curly_loop:'=>'27b0',':currency_exchange:'=>'1f4b1',':curry:'=>'1f35b',':custard:'=>'1f36e',':customs:'=>'1f6c3',':cyclone:'=>'1f300',':dancer:'=>'1f483',':dancers:'=>'1f46f',':dango:'=>'1f361',':dart:'=>'1f3af',':dash:'=>'1f4a8',':date:'=>'1f4c5',':de:'=>'1f1e9-1f1ea',':deciduous_tree:'=>'1f333',':department_store:'=>'1f3ec',':diamond_shape_with_a_dot_inside:'=>'1f4a0',':diamonds:'=>'2666',':disappointed:'=>'1f61e',':disappointed_relieved:'=>'1f625',':dizzy:'=>'1f4ab',':dizzy_face:'=>'1f635',':do_not_litter:'=>'1f6af',':dog2:'=>'1f415',':dog:'=>'1f436',':dollar:'=>'1f4b5',':dolls:'=>'1f38e',':dolphin:'=>'1f42c',':door:'=>'1f6aa',':doughnut:'=>'1f369',':dragon:'=>'1f409',':dragon_face:'=>'1f432',':dress:'=>'1f457',':dromedary_camel:'=>'1f42a',':droplet:'=>'1f4a7',':dvd:'=>'1f4c0',':e-mail:'=>'1f4e7',':ear:'=>'1f442',':ear_of_rice:'=>'1f33e',':earth_africa:'=>'1f30d',':earth_americas:'=>'1f30e',':earth_asia:'=>'1f30f',':egg:'=>'1f373',':eggplant:'=>'1f346',':eight:'=>'38-20e3',':eight_pointed_black_star:'=>'2734',':eight_spoked_asterisk:'=>'2733',':electric_plug:'=>'1f50c',':elephant:'=>'1f418',':email:'=>'2709',':end:'=>'1f51a',':envelope:'=>'2709',':envelope_with_arrow:'=>'1f4e9',':es:'=>'1f1ea-1f1f8',':euro:'=>'1f4b6',':european_castle:'=>'1f3f0',':european_post_office:'=>'1f3e4',':evergreen_tree:'=>'1f332',':exclamation:'=>'2757',':expressionless:'=>'1f611',':eyeglasses:'=>'1f453',':eyes:'=>'1f440',':facepunch:'=>'1f44a',':factory:'=>'1f3ed',':fallen_leaf:'=>'1f342',':family:'=>'1f46a',':fast_forward:'=>'23e9',':fax:'=>'1f4e0',':fearful:'=>'1f628',':feet:'=>'1f43e',':ferris_wheel:'=>'1f3a1',':file_folder:'=>'1f4c1',':fire:'=>'1f525',':fire_engine:'=>'1f692',':fireworks:'=>'1f386',':first_quarter_moon:'=>'1f313',':first_quarter_moon_with_face:'=>'1f31b',':fish:'=>'1f41f',':fish_cake:'=>'1f365',':fishing_pole_and_fish:'=>'1f3a3',':fist:'=>'270a',':five:'=>'35-20e3',':flags:'=>'1f38f',':flashlight:'=>'1f526',':flipper:'=>'1f42c',':floppy_disk:'=>'1f4be',':flower_playing_cards:'=>'1f3b4',':flushed:'=>'1f633',':foggy:'=>'1f301',':football:'=>'1f3c8',':footprints:'=>'1f463',':fork_and_knife:'=>'1f374',':fountain:'=>'26f2',':four:'=>'34-20e3',':four_leaf_clover:'=>'1f340',':fr:'=>'1f1eb-1f1f7',':free:'=>'1f193',':fried_shrimp:'=>'1f364',':fries:'=>'1f35f',':frog:'=>'1f438',':frowning:'=>'1f626',':fuelpump:'=>'26fd',':full_moon:'=>'1f315',':full_moon_with_face:'=>'1f31d',':game_die:'=>'1f3b2',':gb:'=>'1f1ec-1f1e7',':gem:'=>'1f48e',':gemini:'=>'264a',':ghost:'=>'1f47b',':gift:'=>'1f381',':gift_heart:'=>'1f49d',':girl:'=>'1f467',':globe_with_meridians:'=>'1f310',':goat:'=>'1f410',':golf:'=>'26f3',':grapes:'=>'1f347',':green_apple:'=>'1f34f',':green_book:'=>'1f4d7',':green_heart:'=>'1f49a',':grey_exclamation:'=>'2755',':grey_question:'=>'2754',':grimacing:'=>'1f62c',':grin:'=>'1f601',':grinning:'=>'1f600',':guardsman:'=>'1f482',':guitar:'=>'1f3b8',':gun:'=>'1f52b',':haircut:'=>'1f487',':hamburger:'=>'1f354',':hammer:'=>'1f528',':hamster:'=>'1f439',':hand:'=>'270b',':handbag:'=>'1f45c',':hankey:'=>'1f4a9',':hash:'=>'23-20e3',':hatched_chick:'=>'1f425',':hatching_chick:'=>'1f423',':headphones:'=>'1f3a7',':hear_no_evil:'=>'1f649',':heart:'=>'2764',':heart_decoration:'=>'1f49f',':heart_eyes:'=>'1f60d',':heart_eyes_cat:'=>'1f63b',':heartbeat:'=>'1f493',':heartpulse:'=>'1f497',':hearts:'=>'2665',':heavy_check_mark:'=>'2714',':heavy_division_sign:'=>'2797',':heavy_dollar_sign:'=>'1f4b2',':heavy_exclamation_mark:'=>'2757',':heavy_minus_sign:'=>'2796',':heavy_multiplication_x:'=>'2716',':heavy_plus_sign:'=>'2795',':helicopter:'=>'1f681',':herb:'=>'1f33f',':hibiscus:'=>'1f33a',':high_brightness:'=>'1f506',':high_heel:'=>'1f460',':hocho:'=>'1f52a',':honey_pot:'=>'1f36f',':honeybee:'=>'1f41d',':horse:'=>'1f434',':horse_racing:'=>'1f3c7',':hospital:'=>'1f3e5',':hotel:'=>'1f3e8',':hotsprings:'=>'2668',':hourglass:'=>'231b',':hourglass_flowing_sand:'=>'23f3',':house:'=>'1f3e0',':house_with_garden:'=>'1f3e1',':hushed:'=>'1f62f',':ice_cream:'=>'1f368',':icecream:'=>'1f366',':id:'=>'1f194',':ideograph_advantage:'=>'1f250',':imp:'=>'1f47f',':inbox_tray:'=>'1f4e5',':incoming_envelope:'=>'1f4e8',':information_desk_person:'=>'1f481',':information_source:'=>'2139',':innocent:'=>'1f607',':interrobang:'=>'2049',':iphone:'=>'1f4f1',':it:'=>'1f1ee-1f1f9',':izakaya_lantern:'=>'1f3ee',':jack_o_lantern:'=>'1f383',':japan:'=>'1f5fe',':japanese_castle:'=>'1f3ef',':japanese_goblin:'=>'1f47a',':japanese_ogre:'=>'1f479',':jeans:'=>'1f456',':joy:'=>'1f602',':joy_cat:'=>'1f639',':jp:'=>'1f1ef-1f1f5',':key:'=>'1f511',':keycap_ten:'=>'1f51f',':kimono:'=>'1f458',':kiss:'=>'1f48b',':kissing:'=>'1f617',':kissing_cat:'=>'1f63d',':kissing_closed_eyes:'=>'1f61a',':kissing_heart:'=>'1f618',':kissing_smiling_eyes:'=>'1f619',':knife:'=>'1f52a',':koala:'=>'1f428',':koko:'=>'1f201',':kr:'=>'1f1f0-1f1f7',':lantern:'=>'1f3ee',':large_blue_circle:'=>'1f535',':large_blue_diamond:'=>'1f537',':large_orange_diamond:'=>'1f536',':last_quarter_moon:'=>'1f317',':last_quarter_moon_with_face:'=>'1f31c',':laughing:'=>'1f606',':leaves:'=>'1f343',':ledger:'=>'1f4d2',':left_luggage:'=>'1f6c5',':left_right_arrow:'=>'2194',':leftwards_arrow_with_hook:'=>'21a9',':lemon:'=>'1f34b',':leo:'=>'264c',':leopard:'=>'1f406',':libra:'=>'264e',':light_rail:'=>'1f688',':link:'=>'1f517',':lips:'=>'1f444',':lipstick:'=>'1f484',':lock:'=>'1f512',':lock_with_ink_pen:'=>'1f50f',':lollipop:'=>'1f36d',':loop:'=>'27bf',':loud_sound:'=>'1f50a',':loudspeaker:'=>'1f4e2',':love_hotel:'=>'1f3e9',':love_letter:'=>'1f48c',':low_brightness:'=>'1f505',':m:'=>'24c2',':mag:'=>'1f50d',':mag_right:'=>'1f50e',':mahjong:'=>'1f004',':mailbox:'=>'1f4eb',':mailbox_closed:'=>'1f4ea',':mailbox_with_mail:'=>'1f4ec',':mailbox_with_no_mail:'=>'1f4ed',':man:'=>'1f468',':man_with_gua_pi_mao:'=>'1f472',':man_with_turban:'=>'1f473',':mans_shoe:'=>'1f45e',':maple_leaf:'=>'1f341',':mask:'=>'1f637',':massage:'=>'1f486',':meat_on_bone:'=>'1f356',':mega:'=>'1f4e3',':melon:'=>'1f348',':memo:'=>'1f4dd',':mens:'=>'1f6b9',':metro:'=>'1f687',':microphone:'=>'1f3a4',':microscope:'=>'1f52c',':milky_way:'=>'1f30c',':minibus:'=>'1f690',':minidisc:'=>'1f4bd',':mobile_phone_off:'=>'1f4f4',':money_with_wings:'=>'1f4b8',':moneybag:'=>'1f4b0',':monkey:'=>'1f412',':monkey_face:'=>'1f435',':monorail:'=>'1f69d',':moon:'=>'1f314',':mortar_board:'=>'1f393',':mount_fuji:'=>'1f5fb',':mountain_bicyclist:'=>'1f6b5',':mountain_cableway:'=>'1f6a0',':mountain_railway:'=>'1f69e',':mouse2:'=>'1f401',':mouse:'=>'1f42d',':movie_camera:'=>'1f3a5',':moyai:'=>'1f5ff',':muscle:'=>'1f4aa',':mushroom:'=>'1f344',':musical_keyboard:'=>'1f3b9',':musical_note:'=>'1f3b5',':musical_score:'=>'1f3bc',':mute:'=>'1f507',':nail_care:'=>'1f485',':name_badge:'=>'1f4db',':necktie:'=>'1f454',':negative_squared_cross_mark:'=>'274e',':neutral_face:'=>'1f610',':new:'=>'1f195',':new_moon:'=>'1f311',':new_moon_with_face:'=>'1f31a',':newspaper:'=>'1f4f0',':ng:'=>'1f196',':night_with_stars:'=>'1f303',':nine:'=>'39-20e3',':no_bell:'=>'1f515',':no_bicycles:'=>'1f6b3',':no_entry:'=>'26d4',':no_entry_sign:'=>'1f6ab',':no_good:'=>'1f645',':no_mobile_phones:'=>'1f4f5',':no_mouth:'=>'1f636',':no_pedestrians:'=>'1f6b7',':no_smoking:'=>'1f6ad',':non-potable_water:'=>'1f6b1',':nose:'=>'1f443',':notebook:'=>'1f4d3',':notebook_with_decorative_cover:'=>'1f4d4',':notes:'=>'1f3b6',':nut_and_bolt:'=>'1f529',':o2:'=>'1f17e',':o:'=>'2b55',':ocean:'=>'1f30a',':octopus:'=>'1f419',':oden:'=>'1f362',':office:'=>'1f3e2',':ok:'=>'1f197',':ok_hand:'=>'1f44c',':ok_woman:'=>'1f646',':older_man:'=>'1f474',':older_woman:'=>'1f475',':on:'=>'1f51b',':oncoming_automobile:'=>'1f698',':oncoming_bus:'=>'1f68d',':oncoming_police_car:'=>'1f694',':oncoming_taxi:'=>'1f696',':one:'=>'31-20e3',':open_book:'=>'1f4d6',':open_file_folder:'=>'1f4c2',':open_hands:'=>'1f450',':open_mouth:'=>'1f62e',':ophiuchus:'=>'26ce',':orange_book:'=>'1f4d9',':outbox_tray:'=>'1f4e4',':ox:'=>'1f402',':package:'=>'1f4e6',':page_facing_up:'=>'1f4c4',':page_with_curl:'=>'1f4c3',':pager:'=>'1f4df',':palm_tree:'=>'1f334',':panda_face:'=>'1f43c',':paperclip:'=>'1f4ce',':parking:'=>'1f17f',':part_alternation_mark:'=>'303d',':partly_sunny:'=>'26c5',':passport_control:'=>'1f6c2',':paw_prints:'=>'1f43e',':peach:'=>'1f351',':pear:'=>'1f350',':pencil2:'=>'270f',':pencil:'=>'1f4dd',':penguin:'=>'1f427',':pensive:'=>'1f614',':performing_arts:'=>'1f3ad',':persevere:'=>'1f623',':person_frowning:'=>'1f64d',':person_with_blond_hair:'=>'1f471',':person_with_pouting_face:'=>'1f64e',':phone:'=>'260e',':pig2:'=>'1f416',':pig:'=>'1f437',':pig_nose:'=>'1f43d',':pill:'=>'1f48a',':pineapple:'=>'1f34d',':pisces:'=>'2653',':pizza:'=>'1f355',':point_down:'=>'1f447',':point_left:'=>'1f448',':point_right:'=>'1f449',':point_up:'=>'261d',':point_up_2:'=>'1f446',':police_car:'=>'1f693',':poodle:'=>'1f429',':poop:'=>'1f4a9',':post_office:'=>'1f3e3',':postal_horn:'=>'1f4ef',':postbox:'=>'1f4ee',':potable_water:'=>'1f6b0',':pouch:'=>'1f45d',':poultry_leg:'=>'1f357',':pound:'=>'1f4b7',':pouting_cat:'=>'1f63e',':pray:'=>'1f64f',':princess:'=>'1f478',':punch:'=>'1f44a',':purple_heart:'=>'1f49c',':purse:'=>'1f45b',':pushpin:'=>'1f4cc',':put_litter_in_its_place:'=>'1f6ae',':question:'=>'2753',':rabbit2:'=>'1f407',':rabbit:'=>'1f430',':racehorse:'=>'1f40e',':radio:'=>'1f4fb',':radio_button:'=>'1f518',':rage:'=>'1f621',':railway_car:'=>'1f683',':rainbow:'=>'1f308',':raised_hand:'=>'270b',':raised_hands:'=>'1f64c',':raising_hand:'=>'1f64b',':ram:'=>'1f40f',':ramen:'=>'1f35c',':rat:'=>'1f400',':recycle:'=>'267b',':red_car:'=>'1f697',':red_circle:'=>'1f534',':registered:'=>'ae',':relaxed:'=>'263a',':relieved:'=>'1f60c',':repeat:'=>'1f501',':repeat_one:'=>'1f502',':restroom:'=>'1f6bb',':revolving_hearts:'=>'1f49e',':rewind:'=>'23ea',':ribbon:'=>'1f380',':rice:'=>'1f35a',':rice_ball:'=>'1f359',':rice_cracker:'=>'1f358',':rice_scene:'=>'1f391',':ring:'=>'1f48d',':rocket:'=>'1f680',':roller_coaster:'=>'1f3a2',':rooster:'=>'1f413',':rose:'=>'1f339',':rotating_light:'=>'1f6a8',':round_pushpin:'=>'1f4cd',':rowboat:'=>'1f6a3',':ru:'=>'1f1f7-1f1fa',':rugby_football:'=>'1f3c9',':runner:'=>'1f3c3',':running:'=>'1f3c3',':running_shirt_with_sash:'=>'1f3bd',':sa:'=>'1f202',':sagittarius:'=>'2650',':sailboat:'=>'26f5',':sake:'=>'1f376',':sandal:'=>'1f461',':santa:'=>'1f385',':satellite:'=>'1f4e1',':satisfied:'=>'1f606',':saxophone:'=>'1f3b7',':school:'=>'1f3eb',':school_satchel:'=>'1f392',':scissors:'=>'2702',':scorpius:'=>'264f',':scream:'=>'1f631',':scream_cat:'=>'1f640',':scroll:'=>'1f4dc',':seat:'=>'1f4ba',':secret:'=>'3299',':see_no_evil:'=>'1f648',':seedling:'=>'1f331',':seven:'=>'37-20e3',':shaved_ice:'=>'1f367',':sheep:'=>'1f411',':shell:'=>'1f41a',':ship:'=>'1f6a2',':shirt:'=>'1f455',':shit:'=>'1f4a9',':shoe:'=>'1f45e',':shower:'=>'1f6bf',':signal_strength:'=>'1f4f6',':six:'=>'36-20e3',':six_pointed_star:'=>'1f52f',':ski:'=>'1f3bf',':skull:'=>'1f480',':sleeping:'=>'1f634',':sleepy:'=>'1f62a',':slot_machine:'=>'1f3b0',':small_blue_diamond:'=>'1f539',':small_orange_diamond:'=>'1f538',':small_red_triangle:'=>'1f53a',':small_red_triangle_down:'=>'1f53b',':smile:'=>'1f604',':smile_cat:'=>'1f638',':smiley:'=>'1f603',':smiley_cat:'=>'1f63a',':smiling_imp:'=>'1f608',':smirk:'=>'1f60f',':smirk_cat:'=>'1f63c',':smoking:'=>'1f6ac',':snail:'=>'1f40c',':snake:'=>'1f40d',':snowboarder:'=>'1f3c2',':snowflake:'=>'2744',':snowman:'=>'26c4',':sob:'=>'1f62d',':soccer:'=>'26bd',':soon:'=>'1f51c',':sos:'=>'1f198',':sound:'=>'1f509',':space_invader:'=>'1f47e',':spades:'=>'2660',':spaghetti:'=>'1f35d',':sparkle:'=>'2747',':sparkler:'=>'1f387',':sparkles:'=>'2728',':sparkling_heart:'=>'1f496',':speak_no_evil:'=>'1f64a',':speaker:'=>'1f508',':speech_balloon:'=>'1f4ac',':speedboat:'=>'1f6a4',':star2:'=>'1f31f',':star:'=>'2b50',':stars:'=>'1f320',':station:'=>'1f689',':statue_of_liberty:'=>'1f5fd',':steam_locomotive:'=>'1f682',':stew:'=>'1f372',':straight_ruler:'=>'1f4cf',':strawberry:'=>'1f353',':stuck_out_tongue:'=>'1f61b',':stuck_out_tongue_closed_eyes:'=>'1f61d',':stuck_out_tongue_winking_eye:'=>'1f61c',':sun_with_face:'=>'1f31e',':sunflower:'=>'1f33b',':sunglasses:'=>'1f60e',':sunny:'=>'2600',':sunrise:'=>'1f305',':sunrise_over_mountains:'=>'1f304',':surfer:'=>'1f3c4',':sushi:'=>'1f363',':suspension_railway:'=>'1f69f',':sweat:'=>'1f613',':sweat_drops:'=>'1f4a6',':sweat_smile:'=>'1f605',':sweet_potato:'=>'1f360',':swimmer:'=>'1f3ca',':symbols:'=>'1f523',':syringe:'=>'1f489',':tada:'=>'1f389',':tanabata_tree:'=>'1f38b',':tangerine:'=>'1f34a',':taurus:'=>'2649',':taxi:'=>'1f695',':tea:'=>'1f375',':telephone:'=>'260e',':telephone_receiver:'=>'1f4de',':telescope:'=>'1f52d',':tennis:'=>'1f3be',':tent:'=>'26fa',':thought_balloon:'=>'1f4ad',':three:'=>'33-20e3',':thumbsdown:'=>'1f44e',':thumbsup:'=>'1f44d',':ticket:'=>'1f3ab',':tiger2:'=>'1f405',':tiger:'=>'1f42f',':tired_face:'=>'1f62b',':tm:'=>'2122',':toilet:'=>'1f6bd',':tokyo_tower:'=>'1f5fc',':tomato:'=>'1f345',':tongue:'=>'1f445',':top:'=>'1f51d',':tophat:'=>'1f3a9',':tractor:'=>'1f69c',':traffic_light:'=>'1f6a5',':train2:'=>'1f686',':train:'=>'1f68b',':tram:'=>'1f68a',':triangular_flag_on_post:'=>'1f6a9',':triangular_ruler:'=>'1f4d0',':trident:'=>'1f531',':triumph:'=>'1f624',':trolleybus:'=>'1f68e',':trophy:'=>'1f3c6',':tropical_drink:'=>'1f379',':tropical_fish:'=>'1f420',':truck:'=>'1f69a',':trumpet:'=>'1f3ba',':tshirt:'=>'1f455',':tulip:'=>'1f337',':turtle:'=>'1f422',':tv:'=>'1f4fa',':twisted_rightwards_arrows:'=>'1f500',':two:'=>'32-20e3',':two_hearts:'=>'1f495',':two_men_holding_hands:'=>'1f46c',':two_women_holding_hands:'=>'1f46d',':u5272:'=>'1f239',':u5408:'=>'1f234',':u55b6:'=>'1f23a',':u6307:'=>'1f22f',':u6708:'=>'1f237',':u6709:'=>'1f236',':u6e80:'=>'1f235',':u7121:'=>'1f21a',':u7533:'=>'1f238',':u7981:'=>'1f232',':u7a7a:'=>'1f233',':uk:'=>'1f1ec-1f1e7',':umbrella:'=>'2614',':unamused:'=>'1f612',':underage:'=>'1f51e',':unlock:'=>'1f513',':up:'=>'1f199',':us:'=>'1f1fa-1f1f8',':v:'=>'270c',':vertical_traffic_light:'=>'1f6a6',':vhs:'=>'1f4fc',':vibration_mode:'=>'1f4f3',':video_camera:'=>'1f4f9',':video_game:'=>'1f3ae',':violin:'=>'1f3bb',':virgo:'=>'264d',':volcano:'=>'1f30b',':vs:'=>'1f19a',':walking:'=>'1f6b6',':waning_crescent_moon:'=>'1f318',':waning_gibbous_moon:'=>'1f316',':warning:'=>'26a0',':watch:'=>'231a',':water_buffalo:'=>'1f403',':watermelon:'=>'1f349',':wave:'=>'1f44b',':wavy_dash:'=>'3030',':waxing_crescent_moon:'=>'1f312',':waxing_gibbous_moon:'=>'1f314',':wc:'=>'1f6be',':weary:'=>'1f629',':wedding:'=>'1f492',':whale2:'=>'1f40b',':whale:'=>'1f433',':wheelchair:'=>'267f',':white_check_mark:'=>'2705',':white_circle:'=>'26aa',':white_flower:'=>'1f4ae',':white_large_square:'=>'2b1c',':white_medium_small_square:'=>'25fd',':white_medium_square:'=>'25fb',':white_small_square:'=>'25ab',':white_square_button:'=>'1f533',':wind_chime:'=>'1f390',':wine_glass:'=>'1f377',':wink:'=>'1f609',':wolf:'=>'1f43a',':woman:'=>'1f469',':womans_clothes:'=>'1f45a',':womans_hat:'=>'1f452',':womens:'=>'1f6ba',':worried:'=>'1f61f',':wrench:'=>'1f527',':x:'=>'274c',':yellow_heart:'=>'1f49b',':yen:'=>'1f4b4',':yum:'=>'1f60b',':zap:'=>'26a1',':zero:'=>'30-20e3',':zzz:'=>'1f4a4','©'=>'a9','®'=>'ae','‼'=>'203c','⁉'=>'2049','™'=>'2122','ℹ'=>'2139','↔'=>'2194','↕'=>'2195','↖'=>'2196','↗'=>'2197','↘'=>'2198','↙'=>'2199','↩'=>'21a9','↪'=>'21aa','⌚'=>'231a','⌛'=>'231b','⏩'=>'23e9','⏪'=>'23ea','⏫'=>'23eb','⏬'=>'23ec','⏰'=>'23f0','⏳'=>'23f3','Ⓜ'=>'24c2','▪'=>'25aa','▫'=>'25ab','▶'=>'25b6','◀'=>'25c0','◻'=>'25fb','◼'=>'25fc','◽'=>'25fd','◾'=>'25fe','☀'=>'2600','☁'=>'2601','☎'=>'260e','☑'=>'2611','☔'=>'2614','☕'=>'2615','☝'=>'261d','☺'=>'263a','♈'=>'2648','♉'=>'2649','♊'=>'264a','♋'=>'264b','♌'=>'264c','♍'=>'264d','♎'=>'264e','♏'=>'264f','♐'=>'2650','♑'=>'2651','♒'=>'2652','♓'=>'2653','♠'=>'2660','♣'=>'2663','♥'=>'2665','♦'=>'2666','♨'=>'2668','♻'=>'267b','♿'=>'267f','⚓'=>'2693','⚠'=>'26a0','⚡'=>'26a1','⚪'=>'26aa','⚫'=>'26ab','⚽'=>'26bd','⚾'=>'26be','⛄'=>'26c4','⛅'=>'26c5','⛎'=>'26ce','⛔'=>'26d4','⛪'=>'26ea','⛲'=>'26f2','⛳'=>'26f3','⛵'=>'26f5','⛺'=>'26fa','⛽'=>'26fd','✂'=>'2702','✅'=>'2705','✈'=>'2708','✉'=>'2709','✊'=>'270a','✋'=>'270b','✌'=>'270c','✏'=>'270f','✒'=>'2712','✔'=>'2714','✖'=>'2716','✨'=>'2728','✳'=>'2733','✴'=>'2734','❄'=>'2744','❇'=>'2747','❌'=>'274c','❎'=>'274e','❓'=>'2753','❔'=>'2754','❕'=>'2755','❗'=>'2757','❤'=>'2764','➕'=>'2795','➖'=>'2796','➗'=>'2797','➡'=>'27a1','➰'=>'27b0','➿'=>'27bf','⤴'=>'2934','⤵'=>'2935','⬅'=>'2b05','⬆'=>'2b06','⬇'=>'2b07','⬛'=>'2b1b','⬜'=>'2b1c','⭐'=>'2b50','⭕'=>'2b55','〰'=>'3030','〽'=>'303d','㊗'=>'3297','㊙'=>'3299','🀄'=>'1f004','🃏'=>'1f0cf','🅰'=>'1f170','🅱'=>'1f171','🅾'=>'1f17e','🅿'=>'1f17f','🆎'=>'1f18e','🆑'=>'1f191','🆒'=>'1f192','🆓'=>'1f193','🆔'=>'1f194','🆕'=>'1f195','🆖'=>'1f196','🆗'=>'1f197','🆘'=>'1f198','🆙'=>'1f199','🆚'=>'1f19a','🇨🇳'=>'1f1e8-1f1f3','🇩🇪'=>'1f1e9-1f1ea','🇪🇸'=>'1f1ea-1f1f8','🇫🇷'=>'1f1eb-1f1f7','🇬🇧'=>'1f1ec-1f1e7','🇮🇹'=>'1f1ee-1f1f9','🇯🇵'=>'1f1ef-1f1f5','🇰🇷'=>'1f1f0-1f1f7','🇷🇺'=>'1f1f7-1f1fa','🇺🇸'=>'1f1fa-1f1f8','🈁'=>'1f201','🈂'=>'1f202','🈚'=>'1f21a','🈯'=>'1f22f','🈲'=>'1f232','🈳'=>'1f233','🈴'=>'1f234','🈵'=>'1f235','🈶'=>'1f236','🈷'=>'1f237','🈸'=>'1f238','🈹'=>'1f239','🈺'=>'1f23a','🉐'=>'1f250','🉑'=>'1f251','🌀'=>'1f300','🌁'=>'1f301','🌂'=>'1f302','🌃'=>'1f303','🌄'=>'1f304','🌅'=>'1f305','🌆'=>'1f306','🌇'=>'1f307','🌈'=>'1f308','🌉'=>'1f309','🌊'=>'1f30a','🌋'=>'1f30b','🌌'=>'1f30c','🌍'=>'1f30d','🌎'=>'1f30e','🌏'=>'1f30f','🌐'=>'1f310','🌑'=>'1f311','🌒'=>'1f312','🌓'=>'1f313','🌔'=>'1f314','🌕'=>'1f315','🌖'=>'1f316','🌗'=>'1f317','🌘'=>'1f318','🌙'=>'1f319','🌚'=>'1f31a','🌛'=>'1f31b','🌜'=>'1f31c','🌝'=>'1f31d','🌞'=>'1f31e','🌟'=>'1f31f','🌠'=>'1f320','🌰'=>'1f330','🌱'=>'1f331','🌲'=>'1f332','🌳'=>'1f333','🌴'=>'1f334','🌵'=>'1f335','🌷'=>'1f337','🌸'=>'1f338','🌹'=>'1f339','🌺'=>'1f33a','🌻'=>'1f33b','🌼'=>'1f33c','🌽'=>'1f33d','🌾'=>'1f33e','🌿'=>'1f33f','🍀'=>'1f340','🍁'=>'1f341','🍂'=>'1f342','🍃'=>'1f343','🍄'=>'1f344','🍅'=>'1f345','🍆'=>'1f346','🍇'=>'1f347','🍈'=>'1f348','🍉'=>'1f349','🍊'=>'1f34a','🍋'=>'1f34b','🍌'=>'1f34c','🍍'=>'1f34d','🍎'=>'1f34e','🍏'=>'1f34f','🍐'=>'1f350','🍑'=>'1f351','🍒'=>'1f352','🍓'=>'1f353','🍔'=>'1f354','🍕'=>'1f355','🍖'=>'1f356','🍗'=>'1f357','🍘'=>'1f358','🍙'=>'1f359','🍚'=>'1f35a','🍛'=>'1f35b','🍜'=>'1f35c','🍝'=>'1f35d','🍞'=>'1f35e','🍟'=>'1f35f','🍠'=>'1f360','🍡'=>'1f361','🍢'=>'1f362','🍣'=>'1f363','🍤'=>'1f364','🍥'=>'1f365','🍦'=>'1f366','🍧'=>'1f367','🍨'=>'1f368','🍩'=>'1f369','🍪'=>'1f36a','🍫'=>'1f36b','🍬'=>'1f36c','🍭'=>'1f36d','🍮'=>'1f36e','🍯'=>'1f36f','🍰'=>'1f370','🍱'=>'1f371','🍲'=>'1f372','🍳'=>'1f373','🍴'=>'1f374','🍵'=>'1f375','🍶'=>'1f376','🍷'=>'1f377','🍸'=>'1f378','🍹'=>'1f379','🍺'=>'1f37a','🍻'=>'1f37b','🍼'=>'1f37c','🎀'=>'1f380','🎁'=>'1f381','🎂'=>'1f382','🎃'=>'1f383','🎄'=>'1f384','🎅'=>'1f385','🎆'=>'1f386','🎇'=>'1f387','🎈'=>'1f388','🎉'=>'1f389','🎊'=>'1f38a','🎋'=>'1f38b','🎌'=>'1f38c','🎍'=>'1f38d','🎎'=>'1f38e','🎏'=>'1f38f','🎐'=>'1f390','🎑'=>'1f391','🎒'=>'1f392','🎓'=>'1f393','🎠'=>'1f3a0','🎡'=>'1f3a1','🎢'=>'1f3a2','🎣'=>'1f3a3','🎤'=>'1f3a4','🎥'=>'1f3a5','🎦'=>'1f3a6','🎧'=>'1f3a7','🎨'=>'1f3a8','🎩'=>'1f3a9','🎪'=>'1f3aa','🎫'=>'1f3ab','🎬'=>'1f3ac','🎭'=>'1f3ad','🎮'=>'1f3ae','🎯'=>'1f3af','🎰'=>'1f3b0','🎱'=>'1f3b1','🎲'=>'1f3b2','🎳'=>'1f3b3','🎴'=>'1f3b4','🎵'=>'1f3b5','🎶'=>'1f3b6','🎷'=>'1f3b7','🎸'=>'1f3b8','🎹'=>'1f3b9','🎺'=>'1f3ba','🎻'=>'1f3bb','🎼'=>'1f3bc','🎽'=>'1f3bd','🎾'=>'1f3be','🎿'=>'1f3bf','🏀'=>'1f3c0','🏁'=>'1f3c1','🏂'=>'1f3c2','🏃'=>'1f3c3','🏄'=>'1f3c4','🏆'=>'1f3c6','🏇'=>'1f3c7','🏈'=>'1f3c8','🏉'=>'1f3c9','🏊'=>'1f3ca','🏠'=>'1f3e0','🏡'=>'1f3e1','🏢'=>'1f3e2','🏣'=>'1f3e3','🏤'=>'1f3e4','🏥'=>'1f3e5','🏦'=>'1f3e6','🏧'=>'1f3e7','🏨'=>'1f3e8','🏩'=>'1f3e9','🏪'=>'1f3ea','🏫'=>'1f3eb','🏬'=>'1f3ec','🏭'=>'1f3ed','🏮'=>'1f3ee','🏯'=>'1f3ef','🏰'=>'1f3f0','🐀'=>'1f400','🐁'=>'1f401','🐂'=>'1f402','🐃'=>'1f403','🐄'=>'1f404','🐅'=>'1f405','🐆'=>'1f406','🐇'=>'1f407','🐈'=>'1f408','🐉'=>'1f409','🐊'=>'1f40a','🐋'=>'1f40b','🐌'=>'1f40c','🐍'=>'1f40d','🐎'=>'1f40e','🐏'=>'1f40f','🐐'=>'1f410','🐑'=>'1f411','🐒'=>'1f412','🐓'=>'1f413','🐔'=>'1f414','🐕'=>'1f415','🐖'=>'1f416','🐗'=>'1f417','🐘'=>'1f418','🐙'=>'1f419','🐚'=>'1f41a','🐛'=>'1f41b','🐜'=>'1f41c','🐝'=>'1f41d','🐞'=>'1f41e','🐟'=>'1f41f','🐠'=>'1f420','🐡'=>'1f421','🐢'=>'1f422','🐣'=>'1f423','🐤'=>'1f424','🐥'=>'1f425','🐦'=>'1f426','🐧'=>'1f427','🐨'=>'1f428','🐩'=>'1f429','🐪'=>'1f42a','🐫'=>'1f42b','🐬'=>'1f42c','🐭'=>'1f42d','🐮'=>'1f42e','🐯'=>'1f42f','🐰'=>'1f430','🐱'=>'1f431','🐲'=>'1f432','🐳'=>'1f433','🐴'=>'1f434','🐵'=>'1f435','🐶'=>'1f436','🐷'=>'1f437','🐸'=>'1f438','🐹'=>'1f439','🐺'=>'1f43a','🐻'=>'1f43b','🐼'=>'1f43c','🐽'=>'1f43d','🐾'=>'1f43e','👀'=>'1f440','👂'=>'1f442','👃'=>'1f443','👄'=>'1f444','👅'=>'1f445','👆'=>'1f446','👇'=>'1f447','👈'=>'1f448','👉'=>'1f449','👊'=>'1f44a','👋'=>'1f44b','👌'=>'1f44c','👍'=>'1f44d','👎'=>'1f44e','👏'=>'1f44f','👐'=>'1f450','👑'=>'1f451','👒'=>'1f452','👓'=>'1f453','👔'=>'1f454','👕'=>'1f455','👖'=>'1f456','👗'=>'1f457','👘'=>'1f458','👙'=>'1f459','👚'=>'1f45a','👛'=>'1f45b','👜'=>'1f45c','👝'=>'1f45d','👞'=>'1f45e','👟'=>'1f45f','👠'=>'1f460','👡'=>'1f461','👢'=>'1f462','👣'=>'1f463','👤'=>'1f464','👥'=>'1f465','👦'=>'1f466','👧'=>'1f467','👨'=>'1f468','👩'=>'1f469','👪'=>'1f46a','👫'=>'1f46b','👬'=>'1f46c','👭'=>'1f46d','👮'=>'1f46e','👯'=>'1f46f','👰'=>'1f470','👱'=>'1f471','👲'=>'1f472','👳'=>'1f473','👴'=>'1f474','👵'=>'1f475','👶'=>'1f476','👷'=>'1f477','👸'=>'1f478','👹'=>'1f479','👺'=>'1f47a','👻'=>'1f47b','👼'=>'1f47c','👽'=>'1f47d','👾'=>'1f47e','👿'=>'1f47f','💀'=>'1f480','💁'=>'1f481','💂'=>'1f482','💃'=>'1f483','💄'=>'1f484','💅'=>'1f485','💆'=>'1f486','💇'=>'1f487','💈'=>'1f488','💉'=>'1f489','💊'=>'1f48a','💋'=>'1f48b','💌'=>'1f48c','💍'=>'1f48d','💎'=>'1f48e','💏'=>'1f48f','💐'=>'1f490','💑'=>'1f491','💒'=>'1f492','💓'=>'1f493','💔'=>'1f494','💕'=>'1f495','💖'=>'1f496','💗'=>'1f497','💘'=>'1f498','💙'=>'1f499','💚'=>'1f49a','💛'=>'1f49b','💜'=>'1f49c','💝'=>'1f49d','💞'=>'1f49e','💟'=>'1f49f','💠'=>'1f4a0','💡'=>'1f4a1','💢'=>'1f4a2','💣'=>'1f4a3','💤'=>'1f4a4','💥'=>'1f4a5','💦'=>'1f4a6','💧'=>'1f4a7','💨'=>'1f4a8','💩'=>'1f4a9','💪'=>'1f4aa','💫'=>'1f4ab','💬'=>'1f4ac','💭'=>'1f4ad','💮'=>'1f4ae','💯'=>'1f4af','💰'=>'1f4b0','💱'=>'1f4b1','💲'=>'1f4b2','💳'=>'1f4b3','💴'=>'1f4b4','💵'=>'1f4b5','💶'=>'1f4b6','💷'=>'1f4b7','💸'=>'1f4b8','💹'=>'1f4b9','💺'=>'1f4ba','💻'=>'1f4bb','💼'=>'1f4bc','💽'=>'1f4bd','💾'=>'1f4be','💿'=>'1f4bf','📀'=>'1f4c0','📁'=>'1f4c1','📂'=>'1f4c2','📃'=>'1f4c3','📄'=>'1f4c4','📅'=>'1f4c5','📆'=>'1f4c6','📇'=>'1f4c7','📈'=>'1f4c8','📉'=>'1f4c9','📊'=>'1f4ca','📋'=>'1f4cb','📌'=>'1f4cc','📍'=>'1f4cd','📎'=>'1f4ce','📏'=>'1f4cf','📐'=>'1f4d0','📑'=>'1f4d1','📒'=>'1f4d2','📓'=>'1f4d3','📔'=>'1f4d4','📕'=>'1f4d5','📖'=>'1f4d6','📗'=>'1f4d7','📘'=>'1f4d8','📙'=>'1f4d9','📚'=>'1f4da','📛'=>'1f4db','📜'=>'1f4dc','📝'=>'1f4dd','📞'=>'1f4de','📟'=>'1f4df','📠'=>'1f4e0','📡'=>'1f4e1','📢'=>'1f4e2','📣'=>'1f4e3','📤'=>'1f4e4','📥'=>'1f4e5','📦'=>'1f4e6','📧'=>'1f4e7','📨'=>'1f4e8','📩'=>'1f4e9','📪'=>'1f4ea','📫'=>'1f4eb','📬'=>'1f4ec','📭'=>'1f4ed','📮'=>'1f4ee','📯'=>'1f4ef','📰'=>'1f4f0','📱'=>'1f4f1','📲'=>'1f4f2','📳'=>'1f4f3','📴'=>'1f4f4','📵'=>'1f4f5','📶'=>'1f4f6','📷'=>'1f4f7','📹'=>'1f4f9','📺'=>'1f4fa','📻'=>'1f4fb','📼'=>'1f4fc','🔀'=>'1f500','🔁'=>'1f501','🔂'=>'1f502','🔃'=>'1f503','🔄'=>'1f504','🔅'=>'1f505','🔆'=>'1f506','🔇'=>'1f507','🔈'=>'1f508','🔉'=>'1f509','🔊'=>'1f50a','🔋'=>'1f50b','🔌'=>'1f50c','🔍'=>'1f50d','🔎'=>'1f50e','🔏'=>'1f50f','🔐'=>'1f510','🔑'=>'1f511','🔒'=>'1f512','🔓'=>'1f513','🔔'=>'1f514','🔕'=>'1f515','🔖'=>'1f516','🔗'=>'1f517','🔘'=>'1f518','🔙'=>'1f519','🔚'=>'1f51a','🔛'=>'1f51b','🔜'=>'1f51c','🔝'=>'1f51d','🔞'=>'1f51e','🔟'=>'1f51f','🔠'=>'1f520','🔡'=>'1f521','🔢'=>'1f522','🔣'=>'1f523','🔤'=>'1f524','🔥'=>'1f525','🔦'=>'1f526','🔧'=>'1f527','🔨'=>'1f528','🔩'=>'1f529','🔪'=>'1f52a','🔫'=>'1f52b','🔬'=>'1f52c','🔭'=>'1f52d','🔮'=>'1f52e','🔯'=>'1f52f','🔰'=>'1f530','🔱'=>'1f531','🔲'=>'1f532','🔳'=>'1f533','🔴'=>'1f534','🔵'=>'1f535','🔶'=>'1f536','🔷'=>'1f537','🔸'=>'1f538','🔹'=>'1f539','🔺'=>'1f53a','🔻'=>'1f53b','🔼'=>'1f53c','🔽'=>'1f53d','🕐'=>'1f550','🕑'=>'1f551','🕒'=>'1f552','🕓'=>'1f553','🕔'=>'1f554','🕕'=>'1f555','🕖'=>'1f556','🕗'=>'1f557','🕘'=>'1f558','🕙'=>'1f559','🕚'=>'1f55a','🕛'=>'1f55b','🕜'=>'1f55c','🕝'=>'1f55d','🕞'=>'1f55e','🕟'=>'1f55f','🕠'=>'1f560','🕡'=>'1f561','🕢'=>'1f562','🕣'=>'1f563','🕤'=>'1f564','🕥'=>'1f565','🕦'=>'1f566','🕧'=>'1f567','🗻'=>'1f5fb','🗼'=>'1f5fc','🗽'=>'1f5fd','🗾'=>'1f5fe','🗿'=>'1f5ff','😀'=>'1f600','😁'=>'1f601','😂'=>'1f602','😃'=>'1f603','😄'=>'1f604','😅'=>'1f605','😆'=>'1f606','😇'=>'1f607','😈'=>'1f608','😉'=>'1f609','😊'=>'1f60a','😋'=>'1f60b','😌'=>'1f60c','😍'=>'1f60d','😎'=>'1f60e','😏'=>'1f60f','😐'=>'1f610','😑'=>'1f611','😒'=>'1f612','😓'=>'1f613','😔'=>'1f614','😕'=>'1f615','😖'=>'1f616','😗'=>'1f617','😘'=>'1f618','😙'=>'1f619','😚'=>'1f61a','😛'=>'1f61b','😜'=>'1f61c','😝'=>'1f61d','😞'=>'1f61e','😟'=>'1f61f','😠'=>'1f620','😡'=>'1f621','😢'=>'1f622','😣'=>'1f623','😤'=>'1f624','😥'=>'1f625','😦'=>'1f626','😧'=>'1f627','😨'=>'1f628','😩'=>'1f629','😪'=>'1f62a','😫'=>'1f62b','😬'=>'1f62c','😭'=>'1f62d','😮'=>'1f62e','😯'=>'1f62f','😰'=>'1f630','😱'=>'1f631','😲'=>'1f632','😳'=>'1f633','😴'=>'1f634','😵'=>'1f635','😶'=>'1f636','😷'=>'1f637','😸'=>'1f638','😹'=>'1f639','😺'=>'1f63a','😻'=>'1f63b','😼'=>'1f63c','😽'=>'1f63d','😾'=>'1f63e','😿'=>'1f63f','🙀'=>'1f640','🙅'=>'1f645','🙆'=>'1f646','🙇'=>'1f647','🙈'=>'1f648','🙉'=>'1f649','🙊'=>'1f64a','🙋'=>'1f64b','🙌'=>'1f64c','🙍'=>'1f64d','🙎'=>'1f64e','🙏'=>'1f64f','🚀'=>'1f680','🚁'=>'1f681','🚂'=>'1f682','🚃'=>'1f683','🚄'=>'1f684','🚅'=>'1f685','🚆'=>'1f686','🚇'=>'1f687','🚈'=>'1f688','🚉'=>'1f689','🚊'=>'1f68a','🚋'=>'1f68b','🚌'=>'1f68c','🚍'=>'1f68d','🚎'=>'1f68e','🚏'=>'1f68f','🚐'=>'1f690','🚑'=>'1f691','🚒'=>'1f692','🚓'=>'1f693','🚔'=>'1f694','🚕'=>'1f695','🚖'=>'1f696','🚗'=>'1f697','🚘'=>'1f698','🚙'=>'1f699','🚚'=>'1f69a','🚛'=>'1f69b','🚜'=>'1f69c','🚝'=>'1f69d','🚞'=>'1f69e','🚟'=>'1f69f','🚠'=>'1f6a0','🚡'=>'1f6a1','🚢'=>'1f6a2','🚣'=>'1f6a3','🚤'=>'1f6a4','🚥'=>'1f6a5','🚦'=>'1f6a6','🚧'=>'1f6a7','🚨'=>'1f6a8','🚩'=>'1f6a9','🚪'=>'1f6aa','🚫'=>'1f6ab','🚬'=>'1f6ac','🚭'=>'1f6ad','🚮'=>'1f6ae','🚯'=>'1f6af','🚰'=>'1f6b0','🚱'=>'1f6b1','🚲'=>'1f6b2','🚳'=>'1f6b3','🚴'=>'1f6b4','🚵'=>'1f6b5','🚶'=>'1f6b6','🚷'=>'1f6b7','🚸'=>'1f6b8','🚹'=>'1f6b9','🚺'=>'1f6ba','🚻'=>'1f6bb','🚼'=>'1f6bc','🚽'=>'1f6bd','🚾'=>'1f6be','🚿'=>'1f6bf','🛀'=>'1f6c0','🛁'=>'1f6c1','🛂'=>'1f6c2','🛃'=>'1f6c3','🛄'=>'1f6c4','🛅'=>'1f6c5'];
	public function parse($text, array $matches)
	{
		foreach ($matches as $m)
		{
			if ($m[0][0][0] === ':')
			{
				$key    = $m[0][0] . ':';
				$tagLen = \strlen($key);
			}
			else
			{
				$key    = \str_replace("\xEF\xB8\x8F", '', $m[0][0]);
				$tagLen = \strlen($m[0][0]);
			}
			if (!isset(self::$map[$key]))
				continue;
			$this->parser->addSelfClosingTag($this->config['tagName'], $m[0][1], $tagLen)
			             ->setAttribute($this->config['attrName'], self::$map[$key]);
		}
	}
}