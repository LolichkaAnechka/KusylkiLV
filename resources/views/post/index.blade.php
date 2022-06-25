@extends('layouts.post')

@section('title')
<title class="page-title">
	{{strtoupper($post_content->post_name)}}
</title>
@endsection

@section('post_content')
				<div class="title">
					<span> <b> {{$post_content->post_name}} </b> </span>
					<div class="line">

					</div>
				</div>
				

				<div class="post-main-content">
					<img src="{{asset($post_content->post_img)}}" alt="">


					<span>
						<p>
						<b>
							{!!$post_content->post_text!!} 
						</b>
						</p>
						
					</span>
				</div>

@if (count($post_content->pick_hero_imgs) > 0)
				<div class="title">
					<span> <b> Деталі зустрічі </b> </span>
					<div class="line">

					</div>
				</div>

				<div class="match-details">

					<div class="teams-n-score">
						<img src="{{asset($post_content->team_logos[0]->path)}}" alt="">
						<div class="score">
							<span>
								<b>{{$post_content->scores->score_text}}</b>
							</span>
						</div>
						<img src="{{ asset($post_content->team_logos[1]->path) }}" alt="">
					</div>

					<div class="matches">
						<div class="match">
							<h1>
								picks
							</h1>

							<div class="hero-line">
								<div class="pick-heroes">
									@for ($i = 0; $i<5; $i++)
									<img src={{asset($post_content->pick_hero_imgs[$i]->path)}} alt="">
									@endfor
								</div>

								<h1>w/l</h1>

								<div class="pick-heroes">
								@for ($i = 5; $i<10; $i++)
									<img src={{asset($post_content->pick_hero_imgs[$i]->path)}} alt="">
								@endfor
								</div>
							</div>

							<div class="ban-line">
								<div class="ban-heroes">
									@for ($i = 0; $i<7; $i++)
									<img src={{asset($post_content->ban_hero_imgs[$i]->path)}} alt="">
									@endfor
								</div>


								<h2>bans</h2>

								<div class="ban-heroes">
								@for ($i = 7; $i<14; $i++)
									<img src={{ asset($post_content->ban_hero_imgs[$i]->path) }} alt="">
									@endfor
								</div>
							</div>
						</div>
						<div class="matches-line"></div>
						<div class="match">
							<h1>
								picks
							</h1>

							<div class="hero-line">
								<div class="pick-heroes">
									@for ($i = 10; $i<15; $i++)
									<img src={{asset($post_content->pick_hero_imgs[$i]->path)}} alt="">
									@endfor
								</div>

								<h1>w/l</h1>

								<div class="pick-heroes">
								@for ($i = 15; $i<20; $i++)
									<img src={{asset($post_content->pick_hero_imgs[$i]->path)}} alt="">
								@endfor
								</div>
							</div>

							<div class="ban-line">
								<div class="ban-heroes">
									@for ($i = 14; $i<21; $i++)
									<img src={{asset($post_content->ban_hero_imgs[$i]->path)}} alt="">
									@endfor
								</div>


								<h2>bans</h2>

								<div class="ban-heroes">
								@for ($i = 21; $i<28; $i++)
									<img src={{ asset($post_content->ban_hero_imgs[$i]->path) }} alt="">
									@endfor
								</div>
							</div>
						</div>

					</div>

					


				</div>

				<div class="details-buttons">
					<a href="">
					<div class="detail-button">
						<span>
							<b>Дивитись запис гри</b>
						</span>
					</div>
				</a>
				<a href="">
					<div class="detail-button">
						<span>
							<b>Детальна статистика</b>
						</span>
					</div>
				</a>
				</div>
			</div>
			@endif
@endsection


@section('comments')
@if (isset($_SESSION['user']))
						<form action="post_comment" method="post">
						@csrf
							<input type="hidden" name="user_id" value="{{$_SESSION['user']->id}}"/>
							<input type="hidden" name="post_id" value="{{$post_content->id}}"/>
							<input type="text" name="comment_text" placeholder="Your comment...">
							<button type="submit">Comment</button>
						</form>
					@else
					<div class="no-comment">
						<h3>Ви зможете писати коментарі після <a href="/reg">реєстрації</a> або <a href="/auth">входу</a> в аккаунт</h3>
					</div>
					@endif

						@foreach ($post_content->comments as $comment)
							<div class="comment">
								<h3 class="username">
									{{$comment->user->login}}
								</h3>

								<p class="comment_text">
									{{$comment->comment_text}}
								</p>
							</div>
							@endforeach
@endsection
