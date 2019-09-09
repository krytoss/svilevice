@extends('layout')

@section('title', 'Domov')

@section('content')

<section id="intro" class="top-curve">
	<div class="container">
		
		<div class="row">
			
			<div class="col col-3 text-center">
				<div class="circle">
					<i class="fas fa-hands"></i>
				</div>
				<h3>Služba včasnej intervencie</h3>
				<p>
					je bezplatná služba poskytovaná rodine, terénnou formou v jej prirodzenom prostredí, môže byť doplnená o ambulantnú v našich priestoroch
				</p>
				<p>
					je určená pre každú rodinu ktorej vývin dieťaťa je rizikový alebo má zdravotné znevýhodnenie od narodenia do 7 rokov maloletého dieťaťa
				</p>
			</div>

			<div class="col col-3 text-center">
				<div class="circle">
					<i class="fas fa-users"></i>
				</div>
				<h3>Naša vízia</h3>
				<div class="spacer"></div>
				<p>
					podporiť rodinu s dieťaťom včas, čo možno najskôr od identifikovania rizika vo vývine dieťaťa
				</p>
			</div>

			<div class="col col-3 text-center">
				<div class="circle">
					<i class="fas fa-hand-holding-heart"></i>
				</div>
				<h3>Naše poslanie</h3>
				<div class="spacer"></div>
				<p>
					zvyšovať kvalitu života, podporovať a pomáhať rodinám so zdravotne znevýhodneným dieťaťom
				</p>
				<p>
					posilňovať vlastné zdroje rodiny a dieťaťa tak, aby boli schopní zvládnuť situáciu v ktorej sa nachádzajú aj po skončení sprevádzania
				</p>
			</div>

			<div class="col col-3 text-center">
				<div class="circle">
					<i class="fas fa-hand-holding-heart"></i>
				</div>
				<h3>Naše princípy</h3>
				<div class="spacer"></div>
				<p>
					rešpektovanie a individuálny prístup ku každej rodine
				</p>
				<p>
					služba je poskytovaná dobrovoľne - rodina ju prijíma z vlastného rozhodnutia a môže ju kedykoľvek odmietnuť
				</p>
				<p>
					partnerstvo medzi rodičmi dieťaťa a pracovníkmi služby včasnej intervencie
				</p>
			</div>

			<div class="spacer"></div>

			<div class="col col-12 text-center">
				<h3>Pracovníci SVI</h3>
				<div class="spacer"></div>
				<div class="row">
					<div class="col col-4 text-center">
						Mgr. Eliška Kollárová
					</div>
					<div class="col col-4 text-center">
						Mgr. Elena Šinková
					</div>
					<div class="col col-4 text-center">
						Mgr. Lucia Klinčoková
					</div>
				</div>
			</div>

		</div>

	</div>
</section>

<section id="job" class="bottom-curve">
	<div class="section-title">
		<h2 class="white-bg">Naša práca</h2>
	</div>
	<div class="section-body top-curve push-curve">
		<div class="container">
			<div class="row">
				<div class="col col-8 offset-2">
					<h2 class="title white orange-bg text-center">Podporujeme rodinu včas</h2>
					<p>
						Narodenie dieťaťa so zdravotným postihnutím prináša so sebou veľkú záťaž nie len pre rodičov, ale aj celú rodinu. Často ide o úplnú zmenu v živote rodiny spojenú s viacerými psychickými, ekonomickými a sociálnymi problémami sprevádzanými šokom, obviňovaním a pocitmi viny. Pre správne fungovanie rodiny je dôležité, aby vedeli, ako do svojho života zapojiť všetkých, ktorí by mohli byť pre nich zdrojom podpory a pomoci.
					</p>
					<ul class="job-list">
						<li>
							Navštevujeme rodiny v ich prirodzenom prostredí
						</li>
						<li>
							Sprevádzame rodinu v období nepriaznivej situácie
						</li>
						<li>
							Podporujeme rodinu v čase keď sa dozvedá nové a neočakávané informácie o svojom dieťati
						</li>
						<li>
							POdporujeme vývin dieťaťa, aby dokázalo čo najviac využiť svoje možnosti a schopnosti
						</li>
						<li>
							Pomáhame rodine posilniť vlastné schopnosti pri prekonávaní každodenných problémov
						</li>
						<li>
							Pomáhame rodine pri sociálnej integrácii rodiny do bežného života
						</li>
						<li>
							Pomáhame rodine zorientovať sa v možnostiach podpory v oblasti zdravotníctva, sociálnych vecí a vzdelávania
						</li>
						<li>
							Zapožičiavame hračky a stimulačné pomôcky
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="help" class="bottom-curve">
	<div class="section-title">
		<h2>Hľadáte pomoc
		<br>a podporu?</h2>
	</div>
	<div class="section-body top-curve push-curve">
		<div class="container">
			<div class="row">
				<div class="col col-8 offset-2">
					<form method="post" action="sendContact">
						{{ csrf_field() }}
						<input class="form-control" type="text" name="name" placeholder="Meno">
						<div class="spacer"></div>
						<input class="form-control" type="text" name="email" placeholder="E-Mail">
						<div class="spacer"></div>
						Vaša správa:
						<textarea class="form-control" rows="5"></textarea>
						<div class="spacer"></div>
						<button type="submit" class="btn btn-primary"> Odoslať </button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="contact">
	<div id="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2658.2385380916708!2d18.6209300157541!3d48.22128117923026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476adcf60ea264c7%3A0x9378419eda1c7b03!2sDru%C5%BEstevn%C3%ADcka%202744%2F22%2C%20934%2001%20Levice!5e0!3m2!1ssk!2ssk!4v1566773221269!5m2!1ssk!2ssk" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</div>
</section>

@endsection