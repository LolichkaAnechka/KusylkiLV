@extends('layouts.blog')

@section('blog-posts')
<div class="blog-posts">

<div class="title">
	<span> <b> Блог </b> </span>
	<div class="line">

	</div>
</div>

<div class="big-posts">

@for ($i = 0; $i < 2; $i++)
@if (isset($posts[$i]))
<div class="big-post">
		<a href="post/{{implode('_', explode(' ', $posts[$i]->post_name))}}">
			<img src="{{asset($posts[$i]->post_img)}}" alt="">
		</a>
</div>
@endif
@endfor
</div>

<div class="mini-posts">
	@for ($j = 2; $j < count($posts); $j+=2)
	<div class="mini-post-line">
		@for ($i = 0; $i < 2; $i++)
		@if (isset($posts[$i + $j]))
			
		<div class="mini-post">
			<a href="post/{{implode('_', explode(' ', $posts[$i + $j]->post_name))}}">
				<img src="{{asset($posts[$i + $j]->post_img)}}" alt="">
			</a>

			<a href="post/{{implode('_', explode(' ', $posts[$i + $j]->post_name))}}">
				<h2>
				{{strip_tags(mb_substr($posts[$i + $j]->post_name, 0, 70).'...', $allowed_tags = null)}}
				</h2>
				<span class="full-text">
				{{strip_tags(mb_substr($posts[$i + $j]->post_text, 0, 130).'...', $allowed_tags = null)}}

				</span>

				<span class="less-text">
				{{strip_tags(mb_substr($posts[$i + $j]->post_text, 0, 130).'...', $allowed_tags = null)}}

				</span>

				<span class="even-less-text">
				{{strip_tags(mb_substr($posts[$i + $j]->post_text, 0, 130).'...', $allowed_tags = null)}}

				</span>
			</a>
		</div>
		@endif

		@endfor

	</div>
	@endfor
</div>

<div class="posts">
@for ($j = 0; $j < count($posts); $j+=2)
	<div class="post-line">
		@for ($i = 0; $i < 2; $i++)
		@if (isset($posts[$i + $j]))
		<div class="average-post">
			<a href="post/{{implode('_', explode(' ', $posts[$i + $j]->post_name))}}">
				<img src="{{asset($posts[$i + $j]->post_img)}}" alt="">
			</a>

			<a href="">
				<h2>
				{{strip_tags(mb_substr($posts[$i + $j]->post_name, 0, 70).'...', $allowed_tags = null)}}
				</h2>
				<span class="full-text">
					{{strip_tags(mb_substr($posts[$i + $j]->post_text, 0, 130).'...', $allowed_tags = null)}}
				</span>

				<span class="less-text">
				{{strip_tags(mb_substr($posts[$i + $j]->post_text, 0, 130).'...', $allowed_tags = null)}}
				</span>

				<span class="even-less-text">
				{{strip_tags(mb_substr($posts[$i + $j]->post_text, 0, 130).'...', $allowed_tags = null)}}
				</span>
			</a>
		</div>
		@endif
		@endfor
	</div>
@endfor
</div>
@endsection
























<!-- 
INSERT INTO `posts`(`post_name`, `post_text`, `post_img`) VALUES ('Інтервью з CEO організації про заснування клубу та подальші плани', 'Андрій “alwayswannaplay” Бондаренко розповів про труднощі при заснуванні організації, її можливе майбутнє в інших дисциплінах та процесс пошук найкращих гравців', 'css/img-src/posts/BigPost1.png');
INSERT INTO `posts`(`post_name`, `post_text`, `post_img`) VALUES ('IEM KATOWICE 2021/22 проти Akuma', 'Майбутній поєдинок стане першим для оновленого складу команди Кісульки. Нагадаємо, що раніше в нього увійшов Laise, який замінив GeneRaL, а стендином замість ALOHADANCE було заявлено swedenstrong. Склад Akuma у свою чергу змін не зазнав. Колектив виступатиме у плей-офф другого туру тією ж п'ятіркою, яка була і у першому турі Dota Pro Circuit 2021/2022.Приєднуйтесь до старту прямої трансляції поєдинку та підтримайте гравців Кісульки! Упевнені, що хлопці зроблять все можливе, щоб досягти переможного результату.','css/img-src/posts/BigPost2.png');
INSERT INTO `posts`(`post_name`, `post_text`, `post_img`) VALUES ('Кисульки оголошують про партнерство з Red Bull', 'Мы объявляем о партнёрстве с криптовалютной биржей Bitget. Если для сингапурской биржи партнёрство с большим спортом не в новинку (компания уже является партнёром футбольного клуба Ювентус), то для Kusylki это первое соприкосновение с миром криптовалют. Никита Cheshir Чукалин, CEO Kusylki: “Мы рады, что нашими партнерами становятся самые прогрессивные компании. Bitget, несомненно, компания, которое устремлена в будущее, что максимально соответствуем нашим ценностям. Киберспорт и криптовалюта - и то и другое ещё не так давно казалось чем-то нереальным, а сегодня это неотъемлемая часть жизни. Мы в Kusylki с нетерпением ждем будущих совместных проектов с Bitget!“', 'css/img-src/posts/BigPost3.png');
INSERT INTO `posts`(`post_name`, `post_text`, `post_img`) VALUES ('Финал BLAST Premier: Spring Finals 2022', 'В битве за чемпионство на BLAST Premier: Spring Finals 2022 сойдутся NAVI и Team Vitality. Последний игровой день турнира начнётся в 17:30 с шоу-матча между Portugal и BLAST Dream Team — в этом bo1-поединке сразятся игроки, представляющие Португалию, и игроки, которые выбыли ранее из соревнований за команду мечты BLAST. Выступление Team Vitality на турнире началось с поражения в матче против G2 Esports на трёх картах. В матче на вылет удалось одолеть paiN Gaming со счётом 2 : 1. В четвертьфинале коллектив сенсационно выиграл у ENCE (16 : 10 — Overpass, 19 : 17 — Nuke). В полуфинале же взял реванш у G2 Esports. Три последних месяца соперник лучше всего играет на Dust2 (7 побед, 4 поражения), а хуже — на Inferno (3 победы и 5 поражений). Ancient — карта, которую постоянно банят игроки Team Vitality. Последние 7 встреч с этой командой закончились в пользу Рождённых Побеждать. Верим, что NAVI смогут продолжить свой винстрик и поднимут первый кубок в этом году! #ObsessedWe', 'css/img-src/posts/BigPost2.png');
INSERT INTO `posts`(`post_name`, `post_text`, `post_img`) VALUES (' ', ' ', 'css/img-src/posts/BigPost1.png'); -->


<!-- INSERT INTO `pick_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/Heroes/d2_hero_bane_vert.jpg', 4);
INSERT INTO `pick_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/Heroes/d2_hero_puck_vert.jpg', 4);
INSERT INTO `pick_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/Heroes/d2_hero_shadow_shaman_vert.jpg', 4);
INSERT INTO `pick_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/Heroes/d2_hero_pangolier_vert.jpg', 4);
INSERT INTO `pick_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/Heroes/d2_hero_invoker_vert.jpg', 4);
INSERT INTO `pick_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/Heroes/d2_hero_beastmaster_vert.jpg', 4);
INSERT INTO `pick_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/Heroes/d2_hero_faceless_void_vert.jpg', 4);
INSERT INTO `pick_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/Heroes/d2_hero_rattletrap_vert.jpg', 4);
INSERT INTO `pick_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/Heroes/d2_hero_tiny_vert.jpg', 4);
INSERT INTO `pick_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/Heroes/d2_hero_snapfire_vert.jpg', 4); -->


<!-- INSERT INTO `ban_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/hero-bans/d2_hero_antimage_sq.jpg', 2);
INSERT INTO `ban_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/hero-bans/d2_hero_chaos_knight_sq.jpg', 2);
INSERT INTO `ban_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/hero-bans/d2_hero_grimstroke_sq.jpg', 2);
INSERT INTO `ban_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/hero-bans/d2_hero_furion_sq.jpg', 2);
INSERT INTO `ban_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/hero-bans/d2_hero_ember_spirit_sq.jpg', 2);
INSERT INTO `ban_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/hero-bans/d2_hero_keeper_of_the_light_sq.jpg', 2);
INSERT INTO `ban_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/hero-bans/d2_hero_wisp_sq.jpg', 2);

INSERT INTO `ban_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/hero-bans/d2_hero_antimage_sq.jpg', 2);
INSERT INTO `ban_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/hero-bans/d2_hero_chaos_knight_sq.jpg', 2);
INSERT INTO `ban_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/hero-bans/d2_hero_grimstroke_sq.jpg', 2);
INSERT INTO `ban_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/hero-bans/d2_hero_furion_sq.jpg', 2);
INSERT INTO `ban_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/hero-bans/d2_hero_ember_spirit_sq.jpg', 2);
INSERT INTO `ban_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/hero-bans/d2_hero_keeper_of_the_light_sq.jpg', 2);
INSERT INTO `ban_hero_imgs`(`path`, `post_id`) VALUES ('css/img-src/hero-bans/d2_hero_wisp_sq.jpg', 2); -->